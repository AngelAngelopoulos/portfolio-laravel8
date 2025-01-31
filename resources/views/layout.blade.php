<?php
function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta content="Angel Alvarado Portfolio. Welcome to angelalvaradohdz.me" name="description">
    <meta content="Angel Alvarado" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.ico') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Template Main CSS File -->

    <!--<link href="https://storage.googleapis.com/segment-assets/assets/css/style.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css"/>

    <!-- =======================================================
    * Template Name: iPortfolio - v1.4.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
</head>

<body>

@include('partials.nav')
<!--Session Status-->


<!--End Session status-->


<main class="main" id="main">
    @include('partials.session-status')

    <div>
        @yield('content')
    </div>
</main>


<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Angel Alvarado</span></strong>
        </div>

    </div>
</footer><!-- End  Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<!--<script src="https://storage.googleapis.com/segment-assets/assets/vendor/php-email-form/validate.js"></script>-->

<script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}" ></script>
<script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<!--<script src="https://storage.googleapis.com/segment-assets/assets/js/main.js" defer></script>-->
<!--<script src="{{ mix('js/validate.js') }}" type="text/javascript" defer></script>-->
<script src="{{ mix('js/app.js') }}" type="text/javascript">
</script>
</body>

</html>
