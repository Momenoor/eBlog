@extends('layouts.master')
@section('content')
<!--begin::Wrapper-->
<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
    <!--begin::Wrapper container-->
    <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">



        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  align-items-center justify-content-between py-4 py-lg-6 ">


                    <!--begin::Toolbar wrapper-->
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">


                        <!--begin::Page title-->
                        <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                            <!--begin::Title-->
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">
                                View Role Details
                            </h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->

                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">

                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">

                            <!--begin::Card-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="mb-0">{{$role->name}}</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($role->permissions as $permission)
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> {{
                                            $permission->name }}
                                        </div>

                                        @endforeach
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Card footer-->
                                <div class="card-footer pt-0">
                                    <button type="button" class="btn btn-light btn-active-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_update_role_{{ $role->id }}">Edit
                                        Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->

                            <!--begin::Modal-->

                            <!--begin::Modal - Update role-->
                            @include('role.edit')
                            <!--end::Modal - Update role-->
                            <!--end::Modal-->
                        </div>
                        <!--end::Sidebar-->

                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid ms-lg-10">
                            <!--begin::Card-->
                            <div class="card card-flush mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header pt-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="d-flex align-items-center"> Users Assigned<span
                                                class="text-gray-600 fs-6 ms-1"></span></h2>
                                    </div>
                                    <!--end::Card title-->


                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table media-library ">
                                        <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Joined Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($role->users as $user)
                                            @if($user)
                                            <tr>
                                                <td>{{$user->id}}</td>

                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a href="">
                                                            <div class="symbol-label">
                                                                @if($user->profile_photo_path == null)
                                                                <img src="{{asset('assets/media/avatars/blank.png')}}"
                                                                    alt="{{$user->name}}">
                                                                @else
                                                                <img src="{{asset($user->profile_photo_path)}}"
                                                                    alt="{{$user->name}}">
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
                                                <td> {{$user->created_at->diffForHumans()}} </td>
                                                <td class="text-center">
                                                    <div class="d-inline-flex">
                                                        <div class="dropdown">
                                                            <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                <i class="ph-list"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="{{ route('users.show',$user->id) }}"
                                                                    class="dropdown-item">
                                                                    <i class="ph-file me-2"></i>
                                                                    View User
                                                                </a>
                                                                <a type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_edit_user{{ $user->id }}"
                                                                    title="Edit User">
                                                                    <i class="ph-pencil me-2"></i>
                                                                    Edit User
                                                                </a>

                                                                <div class="dropdown-divider"></div>
                                                                <form action="{{route('user.destroy',$user)}}"
                                                                    method="POST">
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
                                            @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->

        </div>
    </div>
</div>
@endsection