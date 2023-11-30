@extends('auth.layouts.app')

@section('content')
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{route('login')}}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bolder mb-3">
            Sign In
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
    <!--begin::Separator-->
    <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
    </div>
    <!--end::Separator-->
    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="off"
            class="form-control bg-transparent @error('name') is-invalid @enderror" value="{{old('name')}}" />
        <!--end::Email-->
        @error('name')
        <span class="text-danger">{{$errors->first('name')}}</span>
        @enderror
    </div>

    <!--end::Input group--->
    <div class="fv-row mb-3">
        <!--begin::Password-->
        <input type="password" placeholder="Password" name="password" autocomplete="off"
            class="form-control bg-transparent @error('password') is-invalid @enderror" />
        <!--end::Password-->
        @error('name')
        <span class="text-danger">{{$errors->first('password')}}</span>
        @enderror
        iv>
    </div>
    <!--end::Input group--->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>

        <!--begin::Link-->
        <a href="/metronic8/demo28/../demo28/authentication/layouts/corporate/reset-password.html" class="link-primary">
            Forgot Password ?
        </a>
        <!--end::Link-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

            <!--begin::Indicator label-->
            <span class="indicator-label">Sign In</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...<span
                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Submit button-->

    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Not a Member yet?

        <a href="{{route('register')}}" class="link-primary">
            Sign up
        </a>
    </div>
    <!--end::Sign up-->
</form>
@endsection