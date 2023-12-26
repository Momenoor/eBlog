@extends('layouts.master')
@section('content')
<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">List Users </h4>
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                <i class="ki-duotone ki-plus fs-2"></i> Add User
            </button>
        </div>
        <table class="table media-library ">
            <thead class="">
                <tr>
                    <th>User</th>
                    <th>Role</th>
                    <th>Last login</th>
                    <th>Joined Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                <tr>
                    <td class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="">
                                <div class="symbol-label">
                                    @if($user->profile_photo_path == null)
                                    <img src="{{asset('assets/media/avatars/blank.png')}}" alt="{{$user->name}}">
                                    @else
                                    <img src="{{asset($user->profile_photo_path)}}" alt="{{$user->name}}">
                                    @endif
                                </div>
                            </a>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User details-->
                        <div class="d-flex flex-column">
                            <a href="" class="text-gray-800 text-hover-primary mb-1">
                                {{$user->name}}</a>
                            <span>{{$user->email}}</span>
                        </div>
                        <!--begin::User details-->
                    </td>

                    <td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $_user)
                        <label class="badge badge-primary">{{ $_user }}</label>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <div class="badge badge-light fw-bold">Yesterday</div>
                    </td>

                    <td> {{$user->created_at->diffForHumans()}} </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('users.show',$user->id) }}" class="dropdown-item">
                                        <i class="ph-file me-2"></i>
                                        View User
                                    </a>
                                    <a type="button" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_edit_user{{ $user->id }}" title="Edit User">
                                        <i class="ph-pencil me-2"></i>
                                        Edit User
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('user.destroy',$user)}}" method="POST">
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

                @include('users.edit')
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /media library -->

</div>
<!-- /content area -->

<!-- Content area
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">User List by Role</h5>
                </div>

                <div class="list-group list-group-borderless py-2">
                    @foreach ($roles as $role)

                    <div class="list-group-item fw-semibold">{{ $role }}</div>

                    @foreach ($users->where('roles', $role) as $user)
                    <div class="list-group-item hstack gap-3">
                        <a href="#" class="status-indicator-container">
                            @if($user->profile_photo_path == null)
                            <img src="{{asset('assets/media/avatars/blank.png')}}" alt="{{$user->name}}">
                            @else
                            <img src="{{asset($user->profile_photo_path)}}" alt="{{$user->name}}">
                            @endif <span class="status-indicator bg-{{ $user->name }}"></span>
                        </a>

                        <div class="flex-fill">
                            <div class="fw-semibold">{{ $user->email }}</div>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endforeach

                    <div class="list-group-item fw-semibold">Users without roles</div>

                    @foreach ($users as $key => $user)
                    <div class="list-group-item hstack gap-3">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="">
                                <div class="symbol-label">
                                    @if($user->profile_photo_path == null)
                                    <img src="{{asset('assets/media/avatars/blank.png')}}" alt="{{$user->name}}">
                                    @else
                                    <img src="{{asset($user->profile_photo_path)}}" alt="{{$user->name}}">
                                    @endif
                                </div>
                            </a>
                        </div>

                        <div class="flex-fill">
                            <div class="fw-semibold">{{ $user->name }}</div>
                        </div>

                        <div class="align-self-center ms-3">
                            <div class="d-inline-flex">
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Call"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#call">
                                    <i class="ph-phone"></i>
                                </a>
                                <a href="#" class="text-body mx-2" data-bs-popup="tooltip" title="Chat"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#chat">
                                    <i class="ph-chats"></i>
                                </a>
                                <a href="#" class="text-body" data-bs-popup="tooltip" title="Video"
                                    data-bs-toggle="modal" data-bs-trigger="hover" data-bs-target="#video">
                                    <i class="ph-video-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</div>
-->
@include('users.create')


@endsection