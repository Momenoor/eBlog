@extends('layouts.master')
@section('content')


<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">List Media </h4>
        </div>

        <table class="table media-library ">
            <thead class="">
                <tr>
                    <th>
                        <input type="checkbox" class="form-check-input">
                    </th>
                    <th>Preview</th>
                    <th>Name</th>
                    <th>Article</th>
                    <th>Date</th>
                    <th>File info</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($_media as $media)
                <tr>
                    <td>
                        <input type="checkbox" class="form-check-input">
                    </td>
                    <td>
                        <a href="{{$media->path}}" data-bs-popup="lightbox">
                            <img src="{{$media->path}}" alt=""
                                class="symbol symbol-circle symbol-50px overflow-hidden me-3" width="40" height="40">
                        </a>
                    </td>
                    <td>{{$media->name}}</td>
                    <td> {{ $media?->article?->title }}</td>
                    <td> {{$media->created_at->diffForHumans()}} </td>
                    <td>
                        <ul class="list-unstyled mb-0">
                            <li><span class="fw-semibold">Size:</span> {{$media->size}}</li>
                            <li><span class="fw-semibold">Format:</span> {{$media->type}}</li>
                        </ul>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('media.edit',$media)}}" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-copy me-2"></i>
                                        Copy file
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="ph-eye-slash me-2"></i>
                                        Unpublish
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('media.destroy',$media)}}" method="POST">
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