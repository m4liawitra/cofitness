<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	
	<!-- STYLESHEETS > EXTERNAL REFERENCE -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" />
	<!-- STYLESHEETS > COMMON -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/bootstrap/css/bootstrap.min.css') }}" />
    <!-- STYLESHEETS > PLUGINS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/ionicons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/linearicons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/plugins/css/themify-icons.css') }}" />
    <!-- STYLESHEETS > SITE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}" />
    <!-- STYLESHEETS > INCLUDE -->
    @yield('styles')
    
	<!-- META -->
	<title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/common/images/favicon.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
	<meta property="og:title" content="{{ env('APP_NAME') }}" />
	<meta property="og:url" content="{{ route('home') }}" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="310" />
	<meta property="og:image:height" content="310" />
</head>
<body>
	@yield('content')
    <div id="loading"><img id="loading-image" src="{{ URL::asset('assets/common/images/loading.gif') }}" alt="{{ __('labels.common.loading') }}..." /></div>

    <!-- JAVASCRIPTS > EXTERNAL REFERENCE >  -->
    <!-- JAVASCRIPTS > COMMON -->
	<script src="{{ asset('assets/common/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/common/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/common/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/common/bootstrap/js/bootstrap-notify.js') }}"></script>
    <!-- JAVASCRIPTS > PLUGINS -->
    <script src="{{ asset('assets/common/plugins/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/common/plugins/js/waypoints.min.js') }}"></script>
    <!-- JAVASCRIPTS > INCLUDE -->
    @yield('scripts')
    <!-- JAVASCRIPTS > SITE -->
    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
</body>
</html>