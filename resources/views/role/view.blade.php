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
                        <div class="d-flex align-items-center py-2">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Menu-->
                                <a href="#" class="btn btn-sm btn-flex btn-light-primary fw-bold"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    Filter
                                </a>



                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_6571e0afe9b9b">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple
                                                    data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_6571e0afe9b9b"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->

                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                                                <!--end::Options-->

                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->

                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>

                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Button-->
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                                Create </a>
                            <!--end::Button-->
                        </div>
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
                                        <h2 class="mb-0">Developer</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Permissions-->
                                    <div class="d-flex flex-column text-gray-600">
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> Some Admin Controls</div>
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> View Financial Summaries only
                                        </div>
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> View and Edit API Controls</div>
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> View Payouts only</div>
                                        <div class="d-flex align-items-center py-2"><span
                                                class="bullet bg-primary me-3"></span> View and Edit Disputes</div>

                                        <div class="d-flex align-items-center py-2 d-none">
                                            <span class='bullet bg-primary me-3'></span> <em>and 3 more...</em>
                                        </div>

                                    </div>
                                    <!--end::Permissions-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Card footer-->
                                <div class="card-footer pt-0">
                                    <button type="button" class="btn btn-light btn-active-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Card-->

                            <!--begin::Modal-->

                            <!--begin::Modal - Update role-->
                            <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
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
                                            <form id="kt_modal_update_role_form" class="form" action="#">
                                                <!--begin::Scroll-->
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
                                                            placeholder="Enter a role name" name="role_name"
                                                            value="Developer" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Permissions-->
                                                    <div class="fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-bold form-label mb-2">Role
                                                            Permissions</label>
                                                        <!--end::Label-->

                                                        <!--begin::Table wrapper-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table
                                                                class="table align-middle table-row-dashed fs-6 gy-5">
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
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">User Management</td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="user_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="user_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="user_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Content Management
                                                                        </td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="content_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="content_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="content_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Financial Management
                                                                        </td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="financial_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="financial_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="financial_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Reporting</td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="reporting_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="reporting_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="reporting_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Payroll</td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="payroll_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="payroll_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="payroll_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Disputes Management
                                                                        </td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="disputes_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="disputes_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="disputes_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">API Controls</td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="api_controls_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="api_controls_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="api_controls_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Database Management
                                                                        </td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="database_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="database_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="database_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
                                                                    <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                                                    <tr>
                                                                        <!--begin::Label-->
                                                                        <td class="text-gray-800">Repository Management
                                                                        </td>
                                                                        <!--end::Label-->

                                                                        <!--begin::Input group-->
                                                                        <td>
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex">
                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="repository_management_read" />
                                                                                    <span class="form-check-label">
                                                                                        Read
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="repository_management_write" />
                                                                                    <span class="form-check-label">
                                                                                        Write
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->

                                                                                <!--begin::Checkbox-->
                                                                                <label
                                                                                    class="form-check form-check-custom form-check-solid">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value=""
                                                                                        name="repository_management_create" />
                                                                                    <span class="form-check-label">
                                                                                        Create
                                                                                    </span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </td>
                                                                        <!--end::Input group-->
                                                                    </tr>
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
                                                <div class="text-center pt-15">
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
                                                class="text-gray-600 fs-6 ms-1">(14)</span></h2>
                                    </div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1"
                                            data-kt-view-roles-table-toolbar="base">
                                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                                    class="path1"></span><span class="path2"></span></i> <input
                                                type="text" data-kt-roles-table-filter="search"
                                                class="form-control form-control-solid w-250px ps-15"
                                                placeholder="Search Users" />
                                        </div>
                                        <!--end::Search-->

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
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID6352</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-6.jpg"
                                                                    alt="Emma Smith" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                                        <span>smith@kpmg.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    20 Jun 2023, 6:43 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID6813</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                                M </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Melody
                                                            Macy</a>
                                                        <span>melody@altbox.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    20 Dec 2023, 5:30 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID2329</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-1.jpg"
                                                                    alt="Max Smith" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                                        <span>max@kt.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    22 Sep 2023, 6:05 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID1845</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-5.jpg"
                                                                    alt="Sean Bean" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                                        <span>sean@dellito.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    22 Sep 2023, 11:30 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID2350</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-25.jpg"
                                                                    alt="Brian Cox" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                                        <span>brian@exchange.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    05 May 2023, 6:05 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID2986</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div
                                                                class="symbol-label fs-3 bg-light-warning text-warning">
                                                                C </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Mikaela
                                                            Collins</a>
                                                        <span>mik@pex.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    24 Jun 2023, 11:30 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID2280</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-9.jpg"
                                                                    alt="Francis Mitcham" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Francis
                                                            Mitcham</a>
                                                        <span>f.mit@kpmg.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    20 Jun 2023, 11:30 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID1927</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                                O </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Olivia
                                                            Wild</a>
                                                        <span>olivia@corpmail.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    25 Jul 2023, 6:05 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID3027</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div
                                                                class="symbol-label fs-3 bg-light-primary text-primary">
                                                                N </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                                        <span>owen.neil@gmail.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    22 Sep 2023, 11:05 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID7005</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-23.jpg"
                                                                    alt="Dan Wilson" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                                        <span>dam@consilting.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    21 Feb 2023, 10:10 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID7806</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                                E </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                                                        <span>emma@intenso.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    22 Sep 2023, 11:30 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID3276</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-12.jpg"
                                                                    alt="Ana Crown" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                                                        <span>ana.cf@limtel.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    19 Aug 2023, 6:43 am </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID5849</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label fs-3 bg-light-info text-info">
                                                                A </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
                                                        <span>robert@benko.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    21 Feb 2023, 9:23 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>ID1025</td>
                                                <td class="d-flex align-items-center">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo28/../demo28/apps/user-management/users/view.html">
                                                            <div class="symbol-label">
                                                                <img src="/metronic8/demo28/assets/media/avatars/300-13.jpg"
                                                                    alt="John Miller" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                            class="text-gray-800 text-hover-primary mb-1">John
                                                            Miller</a>
                                                        <span>miller@mapple.com</span>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    19 Aug 2023, 5:20 pm </td>
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
                                                            <a href="/metronic8/demo28/../demo28/apps/user-management/users/view.html"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                                data-kt-roles-table-filter="delete_row">
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
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