@extends('layouts.master')
@section('content')
    <form id="kt_ecommerce_add_category_form" method="POST" action="{{route('article.store')}}"
          class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
        @csrf
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Category</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select2-->
                    <label for="kt_ecommerce_add_category_status_select">
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an category"
                                id="kt_ecommerce_add_category_status_select" name="category_id">
                            <option></option>
                            @foreach($categories as $category)
                                <option @selected(old('category_id')==$category->id)
                                        value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the category status.</div>
                        <!--end::Description-->
                        <!--begin::Datepicker-->
                        <div class="mt-10">
                            <label for="kt_ecommerce_add_category_status_datepicker"
                                   class="form-label">Select
                                publishing date and time</label>
                            <input class="form-control @error('published_at') is-invalid @enderror"
                                   data-control="datepicker" placeholder="Pick date & time"
                                   name="published_at" value="{{old('published_at')}}"/>
                            @error('name')
                            <span class="text-danger">{{$errors->first('published_at')}}</span>
                            @enderror
                        </div>
                        <!--end::Datepicker-->
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
                        <h2>Feature Image</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>
                        .image-input-placeholder {
                            background-image: url('assets/media/svg/files/blank-image.svg');
                        }

                        [data-bs-theme="dark"] .image-input-placeholder {
                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                        }
                    </style>
                    <!--end::Image input placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                         data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-600px h-150px"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                            title="Change avatar">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept="image"/>
                            <input type="hidden" name="image" accept="image"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                            title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                            title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg
                        and *.jpeg image files are accepted
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
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
                <!--end::Thumbnail settings-->
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>General</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Article Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="title"
                                   class="form-control mb-2  @error('title') is-invalid @enderror"
                                   placeholder="Article Title" value="{{old('title')}}"/>
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">A article title is required and recommended
                                to
                                be unique.
                            </div>
                            @error('name')
                            <span class="text-danger">{{$errors->first('title')}}</span>
                            @enderror
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div>
                            <!--begin::Label-->
                            <label class="form-label">Article Body</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <div id="articleBody" data-control="quill"
                                 class="min-h-200px mb-2 @error('body') is-invalid @enderror">{!!
                                                old('body') !!}</div>
                            <input id="body" type="hidden" class="" name="body" value="{{old('body')}}">
                            <!--end::Editor-->
                            @error('name')
                            <span class="text-danger">{{$errors->first('body')}}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
                <!--begin::Meta options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Tags Options</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label for="tags" class="form-label">Tags</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select id="tags" data-control="select2"
                                    class="form-control mb-2  @error('tags') is-invalid @enderror"
                                    name="tags[]" data-placeholder="Tag name" data-close-on-select="false"
                                    multiple="multiple">
                                <option></option>
                                @foreach($tags as $tag)
                                    <option @selected(key_exists($tag->id,old('tags',[])))
                                            value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                            <div class="text-muted fs-7">Set a list of keywords that the
                                category is
                                related to. Separate the keywords by adding a comma
                                <code>,</code>between each keyword.
                            </div>
                            @error('tags')
                            <span class="text-danger">{{$errors->first('tags')}}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::Meta options-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{route('article.index')}}" id="kt_ecommerce_add_product_cancel"
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

        });
    </script>
@endpush
