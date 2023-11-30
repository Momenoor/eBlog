<!--begin::Javascript-->
<script>var hostUrl = "{{asset('assets/')}}";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--end::Javascript-->
@yield('scripts')
@stack('scripts')
