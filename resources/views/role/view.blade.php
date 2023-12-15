@extends('layouts.app')
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

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    <a href="/metronic8/demo28/../demo28/index.html"
                                        class="text-gray-600 text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    User Management </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    Roles </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">
                                    View Role </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
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

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">


                                        <!--begin::Group actions-->
                                        <div class="d-flex justify-content-end align-items-center d-none"
                                            data-kt-view-roles-table-toolbar="selected">
                                            <div class="fw-bold me-5">
                                                <span class="me-2"
                                                    data-kt-view-roles-table-select="selected_count"></span> Selected
                                            </div>

                                            <button type="button" class="btn btn-danger"
                                                data-kt-view-roles-table-select="delete_selected">
                                                Delete Selected
                                            </button>
                                        </div>
                                        <!--end::Group actions-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0"
                                        id="kt_roles_view_table">
                                        <thead>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_roles_view_table .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-50px">ID</th>
                                                <th class="min-w-150px">User</th>
                                                <th class="min-w-125px">Joined Date</th>
                                                <th class="text-end min-w-100px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($role->users as $user)
                                            @if($user)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
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
                                                <td>
                                                    {{$user->created_at}} </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-duotone ki-down fs-5 m-0"></i> </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{route('users.show',$user->id)}}"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <form action="{{route('users.destroy',$user->id)}}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class=" menu-link px-3">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
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