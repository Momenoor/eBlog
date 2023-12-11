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
                    <div id="kt_app_toolbar"
                         class="app-toolbar  align-items-center justify-content-between py-4 py-lg-6 ">
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
                                        User Management
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-500">
                                        Permissions
                                    </li>
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
                                    <a href="{{route('permission.create')}}" class="btn btn-light-primary">
                                        <i class="ki-duotone ki-plus-square fs-3"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> Add Permission
                                    </a>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0"
                                       id="kt_permissions_table">
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
                                                {{$permission->roles}}
                                            </td>
                                            <td>
                                                {{$permission->created_at->diffForHumans()}} </td>
                                            <td class="d-flex">
                                                <a href="{{route('permission.edit',$permission)}}"
                                                   class=" btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                                                    <i class="ki-duotone ki-setting-3 fs-3"><span
                                                            class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i> </a>
                                                <form action="{{route('permission.destroy',$permission)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                            data-kt-permissions-table-filter="delete_row">
                                                        <i class="ki-duotone ki-trash fs-3"><span
                                                                class="path1"></span><span
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
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
        </div>
    </div>
@endsection
