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
                        @include('layouts._content')
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->

                <!--begin::Footer-->
                @include('layouts._footer')
                <!--end::Footer-->
            </div>
            <!--end::Body-->

            <!--begin::Aside-->
            @include('layouts._aside')
            <!--end::Aside-->
        </div>
        <!--end::Authentication - Sign-in-->

    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    @include('layouts._scripts')
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>
<!--end::Body-->

</html>