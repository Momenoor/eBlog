@extends('layouts.app')

@section('content')
<!--begin::Main-->
<div class="row">
    <!-- ... (your form code) ... -->
    <!-- ... (rest of your code) ... -->

    <!--begin::Form Column (col-3)-->
    <div class="col-lg-3">
        <!-- ... (your form code goes here) ... -->
        <form action="{{route('category.store')}}" method="POST" data-turbo-frame="tags_form">
            @csrf
            <div class="card">

                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>{{__('create_new_category')}}</h2>
                        </div>
                    </div>
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label"> Category Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name"
                                    class="form-control mb-2  @error('name') is-invalid @enderror"
                                    placeholder="Tag Name" value="{{old('name')}}" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Category Name is required and recommended to
                                    be unique.
                                </div>
                                @error('name')
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label"> Description</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea type="text" name="description"
                                    class="form-control mb-2  @error('name') is-invalid @enderror"
                                    placeholder="description" value="{{old('description')}}"></textarea>
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('name')
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @enderror
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('tag.index')}}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-sm btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary" data-turbo-action="replace"
                            data-turbo-frame="tags_form">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>

                        <!--end::Button-->
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!--end::Form Column (col-3)-->

    <!--begin::Table Column (col-9)-->
    <div class="col-lg-9">

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!-- ... (your existing code for the table) ... -->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  align-items-center justify-content-between py-4 py-lg-6 ">
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">
                        <!--begin::Page title-->
                        <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                            <!--begin::Title-->
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">
                                Tags
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
                                    Tag
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                    </div>
                </div>
                <!--end::Toolbar-->
                <div class="card-body pt-0 col-9">
                    <!-- ... (your existing code for the table) ... -->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid ">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    Tags List
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--begin::Card body-->
                    <!--begin::Label-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 " id="tags_table">
                        <thead>
                            <tr class="text-start text-gray-700 fw-bold fs-7 text-uppercase">
                                <th class="min-w-10px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#tags_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="text-end min-w-60px">Name</th>
                                <th class="text-end min-w-100px">Slug</th>
                                <th class="text-end min-w-100px">Description</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                        </thead>

                        @include('category.list')

                    </table>

                </div>
            </div>
        </div>
    </div>
    <!--end::Table Column (col-9)-->
</div>
<!--end::Main-->
@endsection