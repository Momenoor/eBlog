@extends('layouts.master')
@section('content')


<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">Create Permission </h4>
        </div>
        <form action="{{route('permission.store')}}" method="POST">
            @csrf
            <div class="card card-flush py-4">
                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
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
                        <label for="name" class="required form-label"> Permission Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="name" type="text" name="name"
                            class="form-control mb-2  @error('name') is-invalid @enderror" placeholder="Permission Name"
                            value="{{old('name')}}" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Permission Name is required and recommended to
                            be unique.
                        </div>
                        @error('name')
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @enderror
                        <!--end::Description-->
                    </div>
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label for="guard_name" class="form-label"> Guard Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input id="guard_name" type="text" name="guard_name"
                            class="form-control mb-2  @error('guard_name') is-invalid @enderror"
                            placeholder="Guard Name" value="{{old('guard_name')}}" />

                        <!--end::Input-->
                        <!--begin::Description-->
                        @error('guard_name')
                        <span class="text-danger">{{$errors->first('guard_name')}}</span>
                        @enderror
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->


                    <!--end::Input group-->
                </div>
                <!--end::Card header-->
                <!--end::General options-->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('permission.index')}}" id="kt_ecommerce_add_product_cancel"
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
    </div>
    <!-- /media library -->

</div>
<!-- /content area -->

@endsection