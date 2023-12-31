@extends('layouts.master')
@section('content')



<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">Edit Permission </h4>
        </div>
        <form action="{{route('permission.update',$permission)}}" method="POST">
            @csrf
            @method('PUT')
            @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            <div>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label"> Permission Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="name" class="form-control mb-2  @error('name') is-invalid @enderror"
                            placeholder="Permission Name" value="{{old('name',$permission->name)}}" />
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
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Guard Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->

                        <input type="text" name="guard_name"
                            class="form-control mb-2  @error('guard_name') is-invalid @enderror"
                            placeholder="Permission Name" value="{{old('guard_name',$permission->guard_name)}}" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        @error('guard_name')
                        <span class="text-danger">{{$errors->first('guard_name')}}</span>
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
@endsection