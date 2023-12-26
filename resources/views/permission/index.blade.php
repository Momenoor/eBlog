@extends('layouts.master')
@section('content')


<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">List Permissions </h4>
        </div>

        <table class="table media-library ">
            <thead class="">
                <tr>
                    <th class="">Name</th>
                    <th class="">Assigned to</th>
                    <th class=""> Date</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->roles}}</td>
                    <td>{{$permission->created_at->format('F jS, Y')}}</td>

                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('permission.edit',$permission)}}" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('permission.destroy',$permission)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item">
                                            <i class="ph-trash me-2"></i>
                                            Move to trash
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /media library -->

</div>
<!-- /content area -->

@endsection