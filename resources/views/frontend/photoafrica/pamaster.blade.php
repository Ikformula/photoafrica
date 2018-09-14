<!DOCTYPE html>
@langrtl
<html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
    @endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Bartholomew Ikechukwu')">


        <meta name="keywords" content="photoafrica,photo,africa,contest,beauty,pageant,winner">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="{{asset('appy/images/apple-touch-icon.png')}}">
        <link rel="shortcut icon" type="image/ico" href="{{asset('appy/images/favicon.ico')}}" />


    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{--{{ style(mix('css/frontend.css')) }}--}}
    <!-- Plugin-CSS -->
        <link rel="stylesheet" href="{{asset('appy/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('appy/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('appy/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('appy/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('appy/css/animate.css')}}">
        <!-- Main-Stylesheets -->
        <link rel="stylesheet" href="{{asset('appy/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('appy/style.css')}}">
        <link rel="stylesheet" href="{{asset('appy/css/responsive.css')}}">
        @stack('after-styles')


        <script src="{{asset('appy/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <div id="app">
        @include('includes.partials.logged-in-as')
        @include('frontend.photoafrica.includes.nav')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
        <div class="space-70"></div>
            @include('includes.partials.messages')
                </div>
            </div>
        </div>
            @yield('content')
        @include('frontend.photoafrica.includes.footer')
    </div><!-- #app -->

    <!-- Scripts -->
    @stack('before-scripts')
    {{--{!! script(mix('js/frontend.js')) !!}--}}
    <!--Vendor-JS-->
    <script src="{{asset('appy/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('appy/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('appy/js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{asset('appy/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('appy/js/contact-form.js')}}"></script>
    <script src="{{asset('appy/js/ajaxchimp.js')}}"></script>
    <script src="{{asset('appy/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('appy/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('appy/js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{asset('appy/js/main.js')}}"></script>
    @stack('after-scripts')

    @include('includes.partials.ga')
    </body>
    </html>
