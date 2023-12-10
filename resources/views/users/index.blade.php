@extends('layouts.app')
@section('content')
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
                                Users List
                            </h1>
                            <!--end::Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    User Management </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    Users </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">
                                    Users List </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <!--begin::Wrapper-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_user">
                                <i class="ki-duotone ki-plus fs-2"></i> Add User
                            </button>
                            <!--end::Button-->

                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">

                            <!--begin::Card toolbar to add Users-->
                            <div class="card-toolbar">
                                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header" id="kt_modal_add_user_header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add User</h2>
                                                <!--end::Modal title-->

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-kt-users-modal-action="close">
                                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{session('error')}}
                                            </div>
                                            @endif
                                            <div>
                                                @if($errors->any())
                                                <ul class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                                <!--begin::Modal body-->
                                                <div class="modal-body px-5 my-7">
                                                    <!--begin::Form-->
                                                    <form id="kt_modal_add_user_form" class="form" method="POST"
                                                        action="{{route('users.store')}}">
                                                        @csrf
                                                        <!--begin::Scroll-->
                                                        <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                            id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                            data-kt-scroll-activate="true"
                                                            data-kt-scroll-max-height="auto"
                                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                            data-kt-scroll-offset="300px">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                                <!--end::Label-->


                                                                <!--begin::Image placeholder-->
                                                                <style>
                                                                    .image-input-placeholder {
                                                                        background-image: url('/metronic8/demo28/assets/media/svg/files/blank-image.svg');
                                                                    }

                                                                    [data-bs-theme="dark"] .image-input-placeholder {
                                                                        background-image: url('/metronic8/demo28/assets/media/svg/files/blank-image-dark.svg');
                                                                    }
                                                                </style>
                                                                <!--end::Image placeholder-->
                                                                <!--begin::Image input-->
                                                                <div class="image-input image-input-outline image-input-placeholder"
                                                                    data-kt-image-input="true">
                                                                    <!--begin::Preview existing avatar-->
                                                                    <div class="image-input-wrapper w-125px h-125px"
                                                                        style="background-image: url(/metronic8/demo28/assets/media/avatars/300-6.jpg);">
                                                                    </div>
                                                                    <!--end::Preview existing avatar-->

                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="change"
                                                                        data-bs-toggle="tooltip" title="Change avatar">
                                                                        <i class="ki-duotone ki-pencil fs-7"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        <!--begin::Inputs-->
                                                                        <input type="file" name="profile_photo_path"
                                                                            accept=".png, .jpg, .jpeg" />
                                                                        <input type="hidden" name="avatar_remove" />
                                                                        <!--end::Inputs-->
                                                                    </label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Cancel-->
                                                                    <span
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="cancel"
                                                                        data-bs-toggle="tooltip" title="Cancel avatar">
                                                                        <i class="ki-duotone ki-cross fs-2"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i> </span>
                                                                    <!--end::Cancel-->

                                                                    <!--begin::Remove-->
                                                                    <span
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="remove"
                                                                        data-bs-toggle="tooltip" title="Remove avatar">
                                                                        <i class="ki-duotone ki-cross fs-2"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i> </span>
                                                                    <!--end::Remove-->
                                                                </div>
                                                                <!--end::Image input-->

                                                                <!--begin::Hint-->
                                                                <div class="form-text">Allowed file types: png, jpg,
                                                                    jpeg.
                                                                </div>
                                                                <!--end::Hint-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2">Full
                                                                    Name</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="text" name="name"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Full name" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fw-semibold fs-6 mb-2">Email</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="email" name="email"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="example@domain.com" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2">
                                                                    Password</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="password" name="password"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Password" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-semibold fs-6 mb-2">
                                                                    Password Confirmation</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <input type="password" name="password_confirmation"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Password Confirmation" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="mb-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fw-semibold fs-6 mb-5">Role</label>
                                                                <!--end::Label-->
                                                                <!--begin::Roles-->
                                                                @foreach ($roles as $role)

                                                                <div class='separator separator-dashed my-5'>
                                                                </div>
                                                                <!--begin::Input row-->
                                                                <div class="d-flex fv-row">
                                                                    <!--begin::Radio-->
                                                                    <div
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <!--begin::Input-->
                                                                        <input class="form-check-input me-3"
                                                                            name="role_id" type="radio" value="1"
                                                                            id="kt_modal_update_role_option_1" />
                                                                        <!--end::Input-->

                                                                        <!--begin::Label-->
                                                                        <label class="form-check-label"
                                                                            for="kt_modal_update_role_option_1">
                                                                            <div class="fw-bold text-gray-800">
                                                                                {{$role}}

                                                                            </div>
                                                                            <div class="text-gray-600">Best for
                                                                                {{$role}}
                                                                            </div>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Radio-->
                                                                </div>
                                                                <!--end::Input row-->
                                                                @endforeach


                                                                <!--end::Roles-->
                                                            </div>
                                                        </div>
                                                        <!--end::Scroll-->

                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-10">
                                                            <button type="reset" class="btn btn-light me-3"
                                                                data-kt-users-modal-action="cancel">
                                                                Discard
                                                            </button>

                                                            <button type="submit" class="btn btn-primary"
                                                                data-kt-users-modal-action="submit">
                                                                <span class="indicator-label">
                                                                    Submit
                                                                </span>
                                                                <span class="indicator-progress">
                                                                    Please wait... <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Add task-->
                                </div>
                                <!--end::Card toolbar To edit User-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4 border-0 pt-0">

                                @if ($message = Session::get('success'))

                                <div class="alert alert-success">

                                    <p>{{ $message }}</p>

                                </div>

                                @endif
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_table_users .form-check-input"
                                                        value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px">User</th>
                                            <th class="min-w-125px">Role</th>
                                            <th class="min-w-125px">Last login</th>
                                            <th class="min-w-125px">Joined Date</th>
                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                        @foreach ($data as $key => $user)

                                        <tr>
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
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
                                            <td>
                                                @if(!empty($user->getRoleNames()))

                                                @foreach($user->getRoleNames() as $_user)

                                                <label class="badge badge-success">{{ $_user }}</label>

                                                @endforeach

                                                @endif
                                            </td>
                                            <td>
                                                <div class="badge badge-light fw-bold">Yesterday</div>
                                            </td>

                                            <td>
                                                {{$user->created_at->diffForHumans()}} </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('users.show',$user->id) }}"
                                                            class="menu-link px-3">
                                                            View
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a type="button" class="menu-link px-3" data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_edit_user{{ $user->id }}"
                                                            title="Edit User">
                                                            Edit
                                                        </a>

                                                    </div>

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <form action="{{route('users.destroy',$user->id)}}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class=" menu-link px-3">
                                                                Delete
                                                            </button>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>

                                        <!--end::Card toolbar-->

                                        <div class="card-toolbar">
                                            <!--begin::Modal - Add task-->
                                            <div class="modal fade" id="kt_modal_edit_user{{ $user->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="kt_modal_edit_user_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bold">Edit User</h2>
                                                            <!--end::Modal title-->

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                                data-kt-users-modal-action="close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body px-5 my-7">
                                                            <!--begin::Form-->
                                                            @if(session('error'))
                                                            <div class="alert alert-danger">
                                                                {{session('error')}}
                                                            </div>
                                                            @endif
                                                            <div>
                                                                @if($errors->any())
                                                                <ul class="alert alert-danger">
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>
                                                                        {{$error}}
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                                @endif
                                                                <form id="kt_modal_edit_user_form" class="form"
                                                                    method="POST"
                                                                    action="{{route('users.update',$user->id)}}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <!--begin::Scroll-->
                                                                    <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                                        id="kt_modal_edit_user_scroll"
                                                                        data-kt-scroll="true"
                                                                        data-kt-scroll-activate="true"
                                                                        data-kt-scroll-max-height="auto"
                                                                        data-kt-scroll-dependencies="#kt_modal_edit_user_header"
                                                                        data-kt-scroll-wrappers="#kt_modal_edit_user_scroll"
                                                                        data-kt-scroll-offset="300px">
                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                                            <!--end::Label-->


                                                                            <!--begin::Image placeholder-->
                                                                            <style>
                                                                                .image-input-placeholder {
                                                                                    background-image: url('/metronic8/demo28/assets/media/svg/files/blank-image.svg');
                                                                                }

                                                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                                                    background-image: url('/metronic8/demo28/assets/media/svg/files/blank-image-dark.svg');
                                                                                }
                                                                            </style>
                                                                            <!--end::Image placeholder-->
                                                                            <!--begin::Image input-->
                                                                            <div class="image-input image-input-outline image-input-placeholder"
                                                                                data-kt-image-input="true">
                                                                                <!--begin::Preview existing avatar-->
                                                                                <div class="image-input-wrapper w-125px h-125px"
                                                                                    style="background-image: url('{{asset($user->profile_photo_path)}}')">
                                                                                </div>
                                                                                <!--end::Preview existing avatar-->

                                                                                <!--begin::Label-->
                                                                                <label
                                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                    data-kt-image-input-action="change"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Change avatar">
                                                                                    <i
                                                                                        class="ki-duotone ki-pencil fs-7"><span
                                                                                            class="path1"></span><span
                                                                                            class="path2"></span></i>
                                                                                    <!--begin::Inputs-->
                                                                                    <input type="file" name="avatar"
                                                                                        accept=".png, .jpg, .jpeg" />
                                                                                    <input type="hidden"
                                                                                        name="avatar_remove" />
                                                                                    <!--end::Inputs-->
                                                                                </label>
                                                                                <!--end::Label-->

                                                                                <!--begin::Cancel-->
                                                                                <span
                                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                    data-kt-image-input-action="cancel"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Cancel avatar">
                                                                                    <i class="ki-duotone ki-cross fs-2"><span
                                                                                            class="path1"></span><span
                                                                                            class="path2"></span></i>
                                                                                </span>
                                                                                <!--end::Cancel-->

                                                                                <!--begin::Remove-->
                                                                                <span
                                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                                    data-kt-image-input-action="remove"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Remove avatar">
                                                                                    <i class="ki-duotone ki-cross fs-2"><span
                                                                                            class="path1"></span><span
                                                                                            class="path2"></span></i>
                                                                                </span>
                                                                                <!--end::Remove-->
                                                                            </div>
                                                                            <!--end::Image input-->

                                                                            <!--begin::Hint-->
                                                                            <div class="form-text">Allowed file types:
                                                                                png,
                                                                                jpg,
                                                                                jpeg.
                                                                            </div>
                                                                            <!--end::Hint-->
                                                                        </div>
                                                                        <!--end::Input group-->

                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fw-semibold fs-6 mb-2">
                                                                            </label>
                                                                            <!--end::Label-->

                                                                            <!--begin::Input-->
                                                                            <input type="text" name="user_name"
                                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                                placeholder="Full name"
                                                                                value="{{$user->name}}" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->

                                                                        <!--begin::Input group-->
                                                                        <div class="fv-row mb-7">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fw-semibold fs-6 mb-2">Email</label>
                                                                            <!--end::Label-->

                                                                            <!--begin::Input-->
                                                                            <input type="email" name="user_email"
                                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                                placeholder="example@domain.com"
                                                                                value="{{$user->email}}" />
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Input group-->

                                                                        <!--begin::Input group-->
                                                                        <div class="mb-5">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="required fw-semibold fs-6 mb-5">Role</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Roles-->
                                                                            @foreach ($roles as $role)

                                                                            <div
                                                                                class='separator separator-dashed my-5'>
                                                                            </div>
                                                                            <!--begin::Input row-->
                                                                            <div class="d-flex fv-row">
                                                                                <!--begin::Radio-->
                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <!--begin::Input-->
                                                                                    <input class="form-check-input me-3"
                                                                                        name="role_id" type="radio"
                                                                                        value="1"
                                                                                        id="kt_modal_update_role_option_1" />
                                                                                    <!--end::Input-->

                                                                                    <!--begin::Label-->
                                                                                    <label class="form-check-label"
                                                                                        for="kt_modal_update_role_option_1">
                                                                                        <div
                                                                                            class="fw-bold text-gray-800">
                                                                                            {{$role}}

                                                                                        </div>
                                                                                        <div class="text-gray-600">Best
                                                                                            for
                                                                                            {{$role}}
                                                                                        </div>
                                                                                    </label>
                                                                                    <!--end::Label-->
                                                                                </div>
                                                                                <!--end::Radio-->
                                                                            </div>
                                                                            <!--end::Input row-->
                                                                            @endforeach


                                                                            <!--end::Roles-->
                                                                        </div>
                                                                        <!--end::Input group-->
                                                                    </div>
                                                                    <!--end::Scroll-->

                                                                    <!--begin::Actions-->
                                                                    <div class="text-center pt-10">
                                                                        <button type="reset" class="btn btn-light me-3"
                                                                            data-kt-users-modal-action="cancel">
                                                                            Discard
                                                                        </button>

                                                                        <button type="submit" class="btn btn-primary"
                                                                            data-kt-users-modal-action="submit">
                                                                            <span class="indicator-label">
                                                                                Submit
                                                                            </span>
                                                                            <span class="indicator-progress">
                                                                                Please wait... <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </form>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                        </div>
                                                        <!--end::Modal content-->
                                                    </div>
                                                    <!--end::Modal dialog-->
                                                </div>
                                                <!--end::Modal - Add task-->
                                            </div>

                                            @endforeach

                                    </tbody>
                                </table>
                                <!--end::Table-->
                                {!! $data->render() !!}

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end:::Main-->


        </div>
        <!--end::Wrapper container-->
    </div>
    <!--end::Wrapper-->
    @endsection