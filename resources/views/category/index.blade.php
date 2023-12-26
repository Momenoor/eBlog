@extends('layouts.master')
@section('content')
<!--begin::Main-->
<div class="row">
    <!-- ... (your form code) ... -->
    <!-- ... (rest of your code) ... -->
    <div id="kt_app_toolbar" class="app-toolbar  align-items-center justify-content-between py-4 py-lg-6 ">
        <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">
            <!--begin::Page title-->
            <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                <!--begin::Title-->
                <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">
                    Categories
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
                        Category
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
        </div>
    </div>
    <!--begin::Form Column (col-3)-->
    <div class="col-lg-3">
        <!-- ... (your form code goes here) ... -->
        <form action="{{route('category.store')}}" method="POST" data-turbo-frame="categoriesList">
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
                                <input type="text" name="name" id="name"
                                    class="form-control mb-2  @error('name') is-invalid @enderror"
                                    placeholder="Category Name" value="{{old('name')}}" />
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
                                <textarea type="text" name="description" id="description"
                                    class="form-control mb-2  @error('name') is-invalid @enderror"
                                    placeholder="description" value="{{old('description')}}"></textarea>
                                <!--end::Input-->
                                <!--begin::Description-->
                                @error('description')
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
                        <button type="submit" class="btn btn-sm btn-primary" data-turbo-action="append"
                            data-turbo-frame="categoriesList">
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


        <!-- Content area -->
        <div class="content ">
            <!-- Media library -->
            <div class="card ">
                <div class="card">
                    <h4 class="mb-0 ">Categories List </h4>
                </div>

                <table class="table media-library ">
                    <thead class="">
                        <tr>
                            <th>
                                <input type="checkbox" class="form-check-input">
                            </th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @include('category.list')



                    </tbody>
                </table>
            </div>
            <!-- /media library -->

        </div>
        <!-- /content area -->

    </div>
    <!--end::Table Column (col-9)-->
</div>
<!--end::Main-->
@endsection
@push('scripts')
<script>
    document.addEventListener('turbo:submit-end', function () {
        document.getElementById('name').value = '';
        document.getElementById('description').value = '';
});
</script>
@endpush