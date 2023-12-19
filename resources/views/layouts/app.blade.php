<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts._head')
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="false"
    data-kt-app-header-secondary-enabled="true" data-kt-app-header-tertiary-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    @include('layouts._theme_script')
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('layouts._header')
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            @include('layouts._content')
                        </div>


                        <!--end::Content-->
                        <!--begin::Footer-->
                        @include('layouts._footer')
                        <!--end::Footer-->
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
    </div>

    <!--end::Root-->
    <!--end::Main-->
    @include('layouts._scroll_top')
    @include('layouts._scripts')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.4/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>


</body>
<!--end::Body-->

</html>