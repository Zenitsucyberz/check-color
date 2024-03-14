<!DOCTYPE html>
<html lang="en">



<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1A4137">
    <meta name="msapplication-navbutton-color" content="#1A4137">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">



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



        <meta property="og:site_name" content="{{ env('APP_NAME') }}">
        <meta property="og:url" content="https://checkwebdigitals.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Software Development & Digital Marketing Solutions in Ernakulam">
        <meta name='og:image' content='{{ asset('assets/images/logo/logo_06.png') }}'>
    @endif
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/logo_071.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">





    @if (env('APP_ENV', 'production') == 'production')
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif



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


        <a href="https://api.whatsapp.com/send?phone=918075561175&text=Hello." class="float" target="_blank"
            style="position: fixed; width: 60px; height: 60px; bottom: 100px; right: 10px; background-color: #25d366; color: #FFF; border-radius: 50px; text-align: center; font-size: 30px; box-shadow: 2px 2px 3px #999; z-index: 100;">
            <i class="fa fa-whatsapp my-float" style="margin-top: 16px;"></i>
        </a>

        <a href="tel:+918075561175" class="float px-2 py-2" target="_blank"
            style="position: fixed; width: auto; height: auto; bottom: 20px; right: 10px; background-color: #e11926; color: #FFF; border-radius: 50px; text-align: center; font-size: 20px; box-shadow: 2px 2px 3px #999; z-index: 100;">




            <i class="fa fa-phone my-float"></i>+91 80755 611 75
        </a>


        

        @include('web.layouts.partials.footer')





        <button class="scroll-top" style="position: fixed;bottom: 20px;left: 10px;z-index: 1000;">
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
