<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    @stack('style')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth
</head>
<body>
<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <x-admin.logo />
    <!--end logo-->
    <x-admin.menu />
</div>
<!-- end left-sidenav-->


<div class="page-wrapper">
    <!-- Top Bar Start -->
    @include('admin.shared.topbar')
    <!-- Top Bar End -->

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <x-admin.breadcrumb />
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                    <span class="" id="Select_date">Jan 11</span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i data-feather="download" class="align-self-center icon-xs"></i>
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end page-title-box-->
                </div><!--end col-->
                <div class="col-sm-12">
                    @yield('content')
                </div>
            </div><!--end row-->
        </div><!-- container -->
     @include('admin.shared.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->
<script src="{{ asset('js/admin.js') }}" defer></script>
@stack('scripts')
<script src="{{ asset('js/admin-custom.js') }}" defer></script>
</body>
</html>
