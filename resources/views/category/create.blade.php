@extends('layouts.app')
@section('content')
    <form action="{{route('category.store')}}" method="POST">
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
                                   placeholder="Category Name" value="{{old('name')}}"/>
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
                                      placeholder="description">{{old('description')}}</textarea>
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
                    <a href="{{route('category.index')}}" id="kt_ecommerce_add_product_cancel"
                       class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
        </div>
    </form>
@endsection
