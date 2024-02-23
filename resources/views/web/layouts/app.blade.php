<!DOCTYPE html>
<html lang="en">



<head>



    @hasSection('meta-content')
        @yield('meta-content')
    @else
        <title>{{ env('APP_NAME') }}</title>

        <meta name="title" content="Software Development & Digital Marketing Solutions in Ernakulam">
        <meta name="description"
            content=" Discover top-notch software development, ERP development,Business Consultation and digital marketing services in Ernakulam. Boost your business with our expert solutions">
        <meta name="keywords"
            content="Software Development Ernakulam,ERP Development Services,Digital Marketing Solutions,Business Boosting Services,Expert Solutions,Top-notch Software Services,ERP Solutions Ernakulam,Digital Marketing Ernakulam,Business Excellence,Custom Software Solutions,">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="3 days">
        <meta name="author" content="Check Web Digitals">
    @endif
    <!-- Favicon -->
    <link rel="icon" type="image/png"  href="{{ asset('assets/images/logo/logo_071.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all">




    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">



</head>

<body>
    <div class="main-page-wrapper">

        @include('web.layouts.partials.pre-loader')






        @php
            if (Route::is('web.index')) {
                $headerClasses = 'menu-style-six';

                $headerFirstCClasses = 'inner-content ';

                $headerSecondCClasses = 'top-header position-relative';
            } else {
                $headerClasses = 'menu-style-one white-vr ';
                $headerFirstCClasses = 'inner-content position-relative';

                $headerSecondCClasses = 'top-header';
            }
        @endphp





        <header class="theme-main-menu menu-overlay sticky-menu {{ $headerClasses }}">

            <div class="{{ $headerFirstCClasses }}">
                <div class="{{ $headerSecondCClasses }}">

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo order-lg-0">
                            <a href="{{ route('web.index') }}" class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/logo/logo_06.png') }}" alt="Check Digitals"
                                    style="max-height: 60px" />
                            </a>
                        </div>
                        <!-- logo -->

                        @include('web.layouts.partials.nav-bar')
                    </div>
                </div> <!--/.top-header-->
            </div> <!-- /.inner-content -->
        </header>
        <!-- /.theme-main-menu -->



        @yield('content')





        @include('web.layouts.partials.footer')





        <button class="scroll-top">
            <i class="bi bi-arrow-up-short"></i>
        </button>




        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- WOW js -->
        <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
        <!-- Slick Slider -->
        <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
        <!-- Lazy -->
        <script src="{{ asset('assets/vendor/jquery.lazy.min.js') }}"></script>
        <!-- js Counter -->
        <script src="{{ asset('assets/vendor/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.waypoints.min.js') }}"></script>

        <!-- validator js -->
        <script src="{{ asset('assets/vendor/validator.js') }}"></script>

        <!-- Theme js -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
    </div> <!-- /.main-page-wrapper -->
</body>



</html>
