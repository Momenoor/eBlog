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
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Edit Comment</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">Comment</li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">Edit Comment</li>
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
                        <form id="kt_ecommerce_add_category_form" method="POST"
                            action="{{route('comment.update',$comment)}}" class="form d-flex flex-column flex-lg-row">
                            @csrf
                            @method('PUT')

                            <!--begin::Aside column-->
                            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                <!--begin::Status-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Article</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <label for="kt_ecommerce_add_article_status_select">
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an article"
                                                id="kt_ecommerce_add_category_status_select" name="article_id">
                                                <option></option>
                                                @foreach($articles as $article)
                                                <option @selected(old('article_id')==$article->id)
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
                                            <h2>Comment Body</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body text-center pt-0">
                                        <!--begin::Image input-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <div id="articleBody" data-control="quill"
                                                    class="min-h-200px mb-2 @error('body') is-invalid @enderror">{!!
                                                    old('body',$comment->body) !!}</div>
                                                <input id="body" type="hidden" class="" name="body"
                                                    value="{{old('body',$comment->body)}}">
                                                <!--end::Editor-->
                                                @error('name')
                                                <span class="text-danger">{{$errors->first('body')}}</span>
                                                @enderror
                                            </div>
                                            <!--end::Input group-->
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Thumbnail settings-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="{{route('comment.index')}}" id="kt_ecommerce_add_product_cancel"
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
    @push('scripts')
    <script>
        $(document).ready(function () {

            // Date picker
            $('[data-control="datepicker"]').flatpickr();

            //Text Editor
            var quill = new Quill('#articleBody', {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, 3, false]
                        }],
                        ['bold', 'italic', 'underline'],
                        [{'list': 'ordered'}, {'list': 'bullet'}],
                        [{'direction': 'rtl'}],
                        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
                        [{'font': []}],
                        ['image', 'code-block'],
                    ]
                },
                placeholder: 'Type your text here...',
                theme: 'snow' // or 'bubble'
            });
            quill.on('text-change', function (delta, oldDelta, source) {
                $('#body').val(quill.root.innerHTML);
            });

            // Tagify
            var tagifyInput = document.querySelector('#tags');
            var oldTags = JSON.parse(tagifyInput.value);
            tagifyInput.value = oldTags.join(',');
            var tagify = new Tagify(tagifyInput, {
                maxTags: 5,
                closeOnSelect: false,
            });

        });
    </script>
    @endpush