@extends('auth.layouts.app')
@section('content')
<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{route('register')}}">

    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bolder mb-3">
            Sign Up
        </h1>
        <!--end::Title-->

        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">
            Your Social Campaigns
        </div>
        <!--end::Subtitle--->
    </div>
    <!--begin::Heading-->

    <!--begin::Login options-->
    <div class="row g-3 mb-9">
        <!--begin::Col-->
        <div class="col-md-6">
            <!--begin::Google link--->
            <a href="#"
                class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="{{asset('assets/media/svg/brand-logos/google-icon.svg')}}" class="h-15px me-3" />
                Sign in with Google
            </a>
            <!--end::Google link--->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6">
            <!--begin::Google link--->
            <a href="#"
                class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                <img alt="Logo" src="{{asset('assets/media/svg/brand-logos/apple-black.svg')}}"
                    class="theme-light-show h-15px me-3" />
                <img alt="Logo" src="{{asset('assets/media/svg/brand-logos/apple-black-dark.svg')}}"
                    class="theme-dark-show h-15px me-3" />
                Sign in with Apple
            </a>
            <!--end::Google link--->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Login options-->

    <!--begin::Separator-->
    <div class="separator separator-content my-14"><span class="w-125px text-gray-500 fw-semibold fs-7">Or with
            email</span>
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
    </div>
    <!--end::Separator-->

    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Username" name="name" autocomplete="off"
            class="form-control bg-transparent @error('name') is-invalid @enderror" value="{{old('name')}}" />
        <!--end::Email-->
        @error('name')
        <span class=" text-danger">{{$errors->first('name')}}</span>
        @enderror
    </div>
    <!--begin::Input group--->
    <div class=" fv-row mb-8">
        <!--begin::Email-->
        <input type="email" placeholder="Email" name="email" autocomplete="off"
            class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{old('email')}}" />
        <!--end::Email-->
        @error('name')
        <span class=" text-danger">{{$errors->first('email')}}</span>
        @enderror
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control bg-transparent @error('password') is-invalid @enderror" type="password"
                    placeholder="Password" name="password" autocomplete="off" />

                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                    data-kt-password-meter-control="visibility">
                    <i class="ki-duotone ki-eye-slash fs-2"></i> <i class="ki-duotone ki-eye fs-2 d-none"></i> </span>
                @error('name')
                <span class=" text-danger">{{$errors->first('password')}}</span>
                @enderror
            </div>
            <!--end::Input wrapper-->

            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Hint-->
        <div class="text-muted">
            Use 8 or more characters with a mix of letters, numbers & symbols.
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Input group--->

    <!--end::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Repeat Password-->
        <input type="password" placeholder="Repeat Password" name="password_confirmation" type="password"
            autocomplete="off" class="form-control bg-transparent @error('password') is-invalid @enderror" />
        <!--end::Repeat Password-->
        @error('name')
        <span class="text-danger">{{$errors->first('password')}}</span>
        @enderror
    </div>
    <!--end::Input group--->


    {{-- <div class="fv-row mb-8"> --}}
        {{--
        <!--begin::Repeat Password--> --}}
        {{-- <input type="file" name="profile_photo_path" autocomp --}} {{--
            class="form-control bg-transparent  @error('profile_photo_path') is-invalid @enderror" --}} {{--
            value="{{old('profile_photo_path')}}" accept="image" /> --}}
        {{--
        <!--end::Repeat Password--> --}}
        {{-- @error('name') --}}
        {{-- <span class="text-danger">{{$errors->first('profile_photo_path')}}</span> --}}
        {{-- @enderror --}}
        {{--
    </div> --}}

    {{--
    <!--begin::Accept--> --}}
    {{-- <div class="fv-row mb-8"> --}}
        {{-- <label class="form-check form-check-inline"> --}}
            {{-- <input class="form-check-input" type="checkbox" name="toc" value="1" /> --}}
            {{-- <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1"> --}}
                {{-- I Accept the <a href="#" class="ms-1 link-primary">Terms</a> --}}
                {{-- </span> --}}
            {{-- </label> --}}
    </div>
    <!--end::Accept-->

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">

            <!--begin::Indicator label-->
            <span class="indicator-label">
                Sign up</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Submit button-->

    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Already have an Account?

        <a href="/metronic8/demo28/../demo28/authentication/layouts/corporate/sign-in.html"
            class="link-primary fw-semibold">
            Sign in
        </a>
    </div>
    <!--end::Sign up-->
</form>
@endsection