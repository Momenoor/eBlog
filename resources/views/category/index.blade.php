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
        @include('category.create')

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