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
                                Roles List
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
                                    User Management
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    Roles
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">
                                    Roles List
                                </li>
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
                    <!--begin::Row-->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                        <!--begin::Col-->
                        @foreach ($roles as $role)

                        <div class="col-md-4">
                            <!--begin::Card-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2> {{ $role->name }}
                                        </h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-1">
                                    <!--begin::Users-->
                                    <div class="fw-bold text-gray-600 mb-5">Total users with this role:
                                        {{$role->users_count}}</div>
                                    <!--end::Users-->

                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        @foreach($role->permissions as $permission)
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> {{ $permission->name }}
                                        </div>

                                        @endforeach
                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Card footer-->
                                <div class="card-footer flex-wrap pt-0">
                                    <a href="" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>

                                    <button type="button" class="btn btn-light btn-active-light-primary my-1"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_role_{{ $role->id }}">
                                        Edit Role
                                    </button>

                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Modal - Update role-->
                        <div class="modal fade" id="kt_modal_update_role_{{ $role->id }}" tabindex="-1"
                            aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-750px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Update Role</h2>
                                        <!--end::Modal title-->

                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-roles-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->

                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 my-7">
                                        <!--begin::Form-->
                                        <form class="form" action="{{ route('role.update', $role) }}" method="POST">
                                            <!--begin::Scroll-->
                                            @csrf
                                            @method('PUT')
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                id="kt_modal_update_role_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_update_role_header"
                                                data-kt-scroll-wrappers="#kt_modal_update_role_scroll"
                                                data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-5 fw-bold form-label mb-2">
                                                        <span class="required">Role name</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid"
                                                        placeholder="Enter a role name" name="name"
                                                        value="{{$role->name}}" />

                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Permissions-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                    <!--end::Label-->

                                                    <!--begin::Table wrapper-->
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                            <!--begin::Table body-->
                                                            <tbody class="text-gray-600 fw-semibold">
                                                                <!--begin::Table row-->
                                                                <tr>
                                                                    <td class="text-gray-800">
                                                                        Administrator Access


                                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                                            title="Allows a full access to the system">
                                                                            <i
                                                                                class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span><span
                                                                                    class="path3"></span></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <!--begin::Checkbox-->
                                                                        <label
                                                                            class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="kt_roles_select_all" />
                                                                            <span class="form-check-label"
                                                                                for="kt_roles_select_all">
                                                                                Select all
                                                                            </span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                    </td>
                                                                </tr>
                                                                <!--end::Table row-->
                                                                <!--end::Table row-->
                                                                @foreach($permissions as $category => $perms)
                                                                <!--begin::Table row-->
                                                                <tr>
                                                                    <!--begin::Label-->
                                                                    <td class=" text-gray-800"> {{
                                                                        \Str::ucfirst($category)
                                                                        }}
                                                                    </td>
                                                                    <!--end::Label-->
                                                                    <!--begin::Options-->
                                                                    <td>
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Checkbox-->
                                                                            @foreach($perms as $perm)
                                                                            <label
                                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"
                                                                                    value="{{$perm['permission']->name}}"
                                                                                    name="permissions[]"
                                                                                    @checked(old('permission.*.name')==$perm['permission']->name
                                                                                ||
                                                                                $role->hasPermissionTo($perm['permission']->name))>
                                                                                <span class="form-check-label">
                                                                                    {{\Str::ucfirst($perm['action'])}}
                                                                                </span>
                                                                            </label>
                                                                            @endforeach

                                                                            <!--end::Checkbox-->
                                                                            <!--end::Checkbox-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </td>
                                                                    <!--end::Options-->
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Table wrapper-->
                                                </div>
                                                <!--end::Permissions-->
                                            </div>
                                            <!--end::Scroll-->

                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-roles-modal-action="cancel">
                                                    Discard
                                                </button>

                                                <button type="submit" class="btn btn-primary">
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
                        <!--end::Modal - Update role-->
                        @endforeach
                        <!--begin::Col-->
                        <!--begin::Add new card-->
                        <div class="ol-md-4">
                            <!--begin::Card-->
                            <div class="card h-md-100">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center">
                                    <!--begin::Button-->
                                    <a type="button" class="btn btn-clear d-flex flex-column flex-center"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                        <!--begin::Illustration-->
                                        <img src="{{asset('assets/media/illustrations/sketchy-1/4.png')}}" alt=""
                                            class="mw-100 mh-150px mb-7" />
                                        <!--end::Illustration-->

                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role
                                        </div>
                                        <!--end::Label-->
                                    </a>
                                    <!--begin::Button-->
                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>
                        <!--begin::Add new card-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Modals-->

                    <!--begin::Modal - Add role-->
                    <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-750px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Add a Role</h2>
                                    <!--end::Modal title-->

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-roles-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-lg-5 my-7">
                                    <!--begin::Form-->

                                    <form id="kt_modal_add_role_form" class="form" action="{{route('role.store')}}"
                                        method="POST">
                                        <!--begin::Scroll-->
                                        @csrf
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                            id="kt_modal_add_role_scroll" data-kt-scroll="true"
                                            data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_role_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_role_scroll"
                                            data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">
                                                    <span class="required">Role name</span>
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    placeholder="Enter a role name" name="name" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Permissions-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                                <!--end::Label-->

                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                        <!--begin::Table body-->
                                                        <tbody class="text-gray-600 fw-semibold">
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <td class="text-gray-800">
                                                                    Administrator Access

                                                                    <span class="ms-2" data-bs-toggle="popover"
                                                                        data-bs-trigger="hover" data-bs-html="true"
                                                                        data-bs-content="Allows a full access to the system">
                                                                        <i class="ki-duotone ki-information fs-7"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span></i> </span>
                                                                </td>
                                                                <td>
                                                                    <!--begin::Checkbox-->
                                                                    <label
                                                                        class="form-check form-check-custom form-check-solid me-9">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="kt_roles_select_all" />
                                                                        <span class="form-check-label"
                                                                            for="kt_roles_select_all">
                                                                            Select all
                                                                        </span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                </td>
                                                            </tr>
                                                            <!--end::Table row-->
                                                            @foreach($permissions as $category => $perms)
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Label-->
                                                                <td class=" text-gray-800"> {{ \Str::ucfirst($category)
                                                                    }}
                                                                </td>
                                                                <!--end::Label-->
                                                                <!--begin::Options-->
                                                                <td>
                                                                    <!--begin::Wrapper-->
                                                                    <div class="d-flex">
                                                                        <!--begin::Checkbox-->
                                                                        @foreach($perms as $perm)
                                                                        <label
                                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                            <input class="form-check-input"
                                                                                type="checkbox"
                                                                                value="{{$perm['permission']->name}}"
                                                                                name="permissions[]" />
                                                                            <span class="form-check-label">
                                                                                {{\Str::ucfirst($perm['action'])}}
                                                                            </span>
                                                                        </label>
                                                                        @endforeach
                                                                        <!--end::Checkbox-->
                                                                        <!--end::Checkbox-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </td>
                                                                <!--end::Options-->
                                                            </tr>
                                                            @endforeach

                                                            <!--end::Table row-->
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Permissions-->
                                        </div>
                                        <!--end::Scroll-->

                                        <!--begin::Actions-->
                                        <div class=" text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-roles-modal-action="cancel">
                                                Discard
                                            </button>

                                            <button type="submit" class="btn btn-primary"
                                                data-kt-roles-modal-action="submit">
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
                    <!--end::Modal - Add role-->

                    <!--end::Modals-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->

            @endsection