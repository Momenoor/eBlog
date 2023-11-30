<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts._head')

<!--begin::Body-->

<body id="kt_body" class="app-blank">

<!--end::Theme mode setup on page load-->
@include('layouts._theme_script')
<!--Begin::Google Tag Manager (noscript) -->
<!--End::Google Tag Manager (noscript) -->

<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">

    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--begin::Form-->
                    @include('auth.layouts._content')
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->

            <!--begin::Footer-->
            @include('auth.layouts._footer')
            <!--end::Footer-->
        </div>
        <!--end::Body-->

        <!--begin::Aside-->
        @include('auth.layouts._aside')
        <!--end::Aside-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
@include('layouts._scripts')
<!--end::Custom Javascript-->
</body>
<!--end::Body-->

</html>
