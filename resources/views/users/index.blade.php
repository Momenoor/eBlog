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
                                    @include('users.create')
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
                                        <tbody class="text-gray-600 fw-semibold" id="userList">
                                        @foreach ($users as $key => $user)
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
                                                            </form>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>

                                            <!--begin::Modal - Add task-->
                                            @include('users.edit')
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
                <!--end:::Main-->


            </div>
            <!--end::Wrapper container-->
        </div>


        <!--end::Wrapper-->
@endsection
