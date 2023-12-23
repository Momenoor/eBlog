<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page_title') | {{ config('app.name') }} </title>

    @include('partials.inc_top')
</head>

<body>

<!-- Main navbar -->
@include('partials.top_menu')
<!-- /main navbar -->

<!-- Breadcrumbs -->
@include('partials.bread_crumb')
<!-- /breadcrumbs -->

<!-- Page header -->
@include('partials.header')
<!-- /page header -->


<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main sidebar -->
    @include('partials.side_menu')
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            @if($errors->any())
                <div class="alert alert-danger border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                    @foreach($errors->all() as $er)
                        <span><i class="icon-arrow-right5"></i> {{ $er }}</span> <br>
                    @endforeach

                </div>
            @endif
            <div id="ajax-alert" style="display: none"></div>

            @yield('content')

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

@include('partials.inc_bottom')
@yield('scripts')
</body>
</html>
