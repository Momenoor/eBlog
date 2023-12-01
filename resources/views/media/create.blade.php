@extends('layouts.app')
@section('content')
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar align-items-center justify-content-between py-4 py-lg-6">
                    <!--begin::Toolbar wrapper-->
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">
                        <!--begin::Page title-->
                        <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                            <!--begin::Title-->
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Add Media</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">Media</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">Add Media</li>
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
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <form id="kt_ecommerce_add_category_form" method="POST" action="{{route('media.store')}}"
                            class="form d-flex flex-column flex-lg-row">
                            @csrf
                            <!--begin::Aside column-->
                            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                <!--begin::Status-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Type Media</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <label for="kt_ecommerce_add_article_status_select">
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an type"
                                                id="kt_ecommerce_add_category_status_select" name="type">
                                                <option></option>
                                                @foreach (config('app.option') as $key=>$value)
                                                <option @selected(old('type')) value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the Media type.</div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <label for="kt_ecommerce_add_article_status_select">
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an article"
                                                id="kt_ecommerce_add_category_status_select" name="article_id">
                                                <option></option>
                                                @foreach($articles as $article)
                                                <option @selected(old('category_id')==$article->id)
                                                    value="{{$article->id}}">{{$article->title}}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the Article status.</div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Status-->
                            </div>
                            <!--end::Aside column-->
                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin::Thumbnail settings-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Media</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body text-center pt-0">
                                        <!--begin::Image input-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <!--<label class="required form-label"> Name</label>-->
                                            <!--begin::Input-->
                                            <input type="text" name="name"
                                                class="form-control mb-2  @error('name') is-invalid @enderror"
                                                placeholder="Name" value="{{old('name')}}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Name Media is required and recommended to
                                                be unique.
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{$errors->first('name')}}</span>
                                            @enderror
                                        </div>

                                        <!--begin::Image input-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <!--<label class="required form-label"> Status Name</label>-->
                                            <!--begin::Input-->
                                            <input type="file" name="path"
                                                class="form-control mb-2  @error('path') is-invalid @enderror"
                                                placeholder="Path File" value="{{old('path')}}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">File Path is required and recommended to
                                                be unique.
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{$errors->first('path')}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <!--<label class="required form-label"> Name</label>-->
                                            <!--begin::Input-->
                                            <input type="number" name="size"
                                                class="form-control mb-2  @error('size') is-invalid @enderror"
                                                placeholder="Size" value="{{old('size')}}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Size Media is required and recommended to
                                                be unique.
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{$errors->first('size')}}</span>
                                            @enderror
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Thumbnail settings-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <a href="{{route('media.index')}}" id="kt_ecommerce_add_product_cancel"
                                            class="btn btn-light me-5">Cancel</a>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save Changes</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Main column-->
                        </form>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper container-->
    </div>
    @endsection