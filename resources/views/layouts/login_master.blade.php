<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page_title') | {{ config('app.name') }} </title>

    @include('partials.login.inc_top')
</head>
<body>
<!-- Page header -->
@include('partials.login.header')
<!-- /page header -->
<!-- Page content -->
<div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="content-inner">
            <!-- Content area -->
            @if($errors->any())
                <div class="content">
                    <div class="alert alert-danger fade show">
                        @foreach($errors->all() as $er)
                            <span><i class="me-2">-</i> {{ $er }}</span> <br>
                        @endforeach

                    </div>
                </div>
            @endif
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Content area -->
                @yield('content')

            </div>
            <!-- /content area -->


            @include('partials.login.footer')
            <!-- /inner content -->
        </div>
        <!-- /content area -->
    </div>

    <!-- /main content -->
</div>
<!-- /page content -->
@yield('scripts')
</body>
</html>
