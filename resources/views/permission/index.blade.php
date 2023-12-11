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
                                Permissions List
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
                                <li class="breadcrumb-item text-gray-500">
                                    Permissions </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">


                    <!--begin::Card-->
                    <div class="card card-flush ">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->

                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_permission">
                                    <i class="ki-duotone ki-plus-square fs-3"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> Add Permission
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="">Name</th>
                                        <th class="">Assigned to</th>
                                        <th class="">Created Date</th>
                                        <th class="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{$permission->name}}</td>
                                        <td>
                                            <a href="/metronic8/demo28/../demo28/apps/user-management/roles/view.html"
                                                class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                        </td>
                                        <td>
                                            {{$permission->created_at}} </td>
                                        <td class="d-flex">
                                            <button class=" btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                                <i class="ki-duotone ki-setting-3 fs-3"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></i> </button>
                                            <form action="{{route('permission.destroy',$permission)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                    data-kt-permissions-table-filter="delete_row">
                                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span>
                                                    </i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                    <!--begin::Modals-->
                    <!--begin::Modal - Add permissions-->
                    <div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Add a Permission</h2>
                                    <!--end::Modal title-->

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-permissions-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_add_permission_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Permission Name</span>

                                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover"
                                                    data-bs-html="true"
                                                    data-bs-content="Permission names is required to be unique.">
                                                    <i class="ki-duotone ki-information fs-7"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                placeholder="Enter a permission name" name="permission_name" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-9">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="permissions_core" id="kt_permissions_core" />
                                                <span class="form-check-label" for="kt_permissions_core">
                                                    Set as core permission
                                                </span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Disclaimer-->
                                        <div class="text-gray-600">Permission set as a <strong class="me-1">Core
                                                Permission</strong> will be locked and <strong class="me-1">not
                                                editable</strong> in future</div>
                                        <!--end::Disclaimer-->

                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-permissions-modal-action="cancel">
                                                Discard
                                            </button>

                                            <button type="submit" class="btn btn-primary"
                                                data-kt-permissions-modal-action="submit">
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
                    <!--end::Modal - Add permissions-->
                    <!--begin::Modal - Update permissions-->
                    <div class="modal fade" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Update Permission</h2>
                                    <!--end::Modal title-->

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-permissions-modal-action="close">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Notice-->

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 ">
                                            <!--begin::Content-->
                                            <div class=" fw-semibold">

                                                <div class="fs-6 text-gray-700 "><strong class="me-1">Warning!</strong>
                                                    By editing the permission name, you might break the system
                                                    permissions functionality. Please ensure you're absolutely certain
                                                    before proceeding.</div>
                                            </div>
                                            <!--end::Content-->

                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Notice-->

                                    <!--begin::Form-->
                                    <form id="kt_modal_update_permission_form" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Permission Name</span>

                                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover"
                                                    data-bs-html="true"
                                                    data-bs-content="Permission names is required to be unique.">
                                                    <i class="ki-duotone ki-information fs-7"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                placeholder="Enter a permission name" name="permission_name" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-permissions-modal-action="cancel">
                                                Discard
                                            </button>

                                            <button type="submit" class="btn btn-primary"
                                                data-kt-permissions-modal-action="submit">
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
                    <!--end::Modal - Update permissions-->
                    <!--end::Modals-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
        </div>
    </div>
</div>
@endsection