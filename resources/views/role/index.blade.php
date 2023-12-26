@extends('layouts.master')
@section('content')
<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">List Comments </h4>
        </div>
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
                                <div class="d-flex align-items-center py-2"><span class="bullet bg-primary me-3"></span>
                                    {{
                                    $permission->name }}
                                </div>

                                @endforeach
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Card body-->

                        <!--begin::Card footer-->
                        <div class="card-footer flex-wrap pt-0">
                            <div class="d-flex">
                                <a href="{{route('role.show',$role->id)}}"
                                    class="btn btn-light btn-active-primary my-1 me-2">View
                                    Role</a>

                                <button type="button" class="btn btn-light btn-active-light-primary my-1"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_update_role_{{ $role->id }}">
                                    Edit Role
                                </button>
                                <form action="{{route('role.destroy',$role->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light btn-active-light-primary my-1">
                                        Delete
                                    </button>
                                </form>
                            </div>

                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Modal - Update role-->
                @include('role.edit')
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
                            <a type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_role">
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
            @include('role.create')
            <!--end::Modal - Add role-->
            <!--end::Modals-->
        </div>
    </div>
</div>
<!--end::Content-->




@endsection