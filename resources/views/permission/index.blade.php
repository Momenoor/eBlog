@extends('layouts.app')
@section('content')
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
                        Permissions
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
                        <li class="breadcrumb-item text-gray-500">
                            Permission
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Button-->
                    <a href="{{route('permission.create')}}" class="btn btn-sm btn-primary">
                        Add Permission
                    </a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar-->
        <div class="card-body pt-0">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            Permissions List
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
            </div>
            <!--begin::Card body-->

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 " id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-700 fw-bold fs-7 text-uppercase">
                        <th class="text-end ">#</th>
                        <th class="text-end ">Name</th>
                        <th class="text-end ">Description</th>
                        <th class="text-end ">Created_By</th>
                        <th class="text-end ">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        @foreach($permissions as $permission)
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{$permission->id}}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{$permission->name}}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{$permission->description}}</span>
                        </td>
                        <td class="text-end pe-0">
                            <!--begin::Badges-->
                            <span class="fw-bold">{{$permission->created_by}}</span>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end ml-10">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                data-kt-menu-trigger="click">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{route('permission.show',$permission)}}" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{route('permission.edit',$permission)}}" class="menu-link px-3">
                                        Edit
                                    </a>
                                </div>
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form action="{{route('permission.destroy',$permission)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link menu-link px-3">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                                <!--end::Menu item-->
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection