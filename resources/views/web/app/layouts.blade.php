<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.creativegigstf.com/check web digitals/check web digitals/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2024 05:51:39 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
    <meta name="description"
        content="check web digitals is a beautiful website template designed for Business & Consulting websites.">
    <meta property="og:site_name" content="check web digitals">F
    <meta property="og:url" content="https://checkwebdigitals.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="check web digitals - Business & Consulting HTML5 Template">
    <meta name='og:image' content='{{ asset('assets/images/assets/ogg.png') }}'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1A4137">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1A4137">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">
    <title>check web digitals</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/logo/logo_06.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-page-wrapper">
        <!-- ===================================================
    Loading Transition
   ==================================================== -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="icon"><img src="{{ asset('assets/images/loader.svg') }}" alt=""
                        class="m-auto d-block" width="60"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="k" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>

                </div>
            </div>
        </div>



        <!--
  =============================================
    Theme Main Menu
  ==============================================
  -->
        <header class="theme-main-menu menu-overlay menu-style-six sticky-menu">
            <div class="inner-content">
                <div class="top-header position-relative">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo order-lg-0">
                            <a href="{{ route('web.index') }}" class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/logo/logo_06.png') }}" alt="Check Digitals"
                                    style="max-height: 60px" />
                            </a>
                        </div>
                        <!-- logo -->


                        <nav class="navbar navbar-expand-lg p0 ms-lg-5 order-lg-2">
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav align-items-lg-center">
                                    <li class="d-block d-lg-none">
                                        <div class="logo"><a href="{{ route('web.index') }}" class="d-block"><img
                                                    src="{{ asset('assets/images/logo/logo_06.svg') }}"
                                                    alt=""></a></div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('web.index') }}"
                                            role="button" data-bs-auto-close="outside" aria-expanded="false">Home
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown mega-dropdown-sm">
                                        <a class="nav-link dropdown-toggle" href="{{ route('web.about') }}"
                                            role="button" data-bs-auto-close="outside" aria-expanded="false">About
                                            Us
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('web.services') }}"
                                            role="button" data-bs-auto-close="outside"
                                            aria-expanded="false">Services
                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('web.contactus') }}"
                                            role="button">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div> <!--/.top-header-->
            </div> <!-- /.inner-content -->
        </header>
        <!-- /.theme-main-menu -->



        @yield('content')



        <!--
  =====================================================
   Footer Three
  =====================================================
  -->
        <div class="footer-three">
            <div class="container">
                <div class="inner-wrapper position-relative">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 footer-intro mb-30">
                            <div
                                class="round-bg color-two rounded-circle text-center d-flex flex-column align-items-center justify-content-center">
                                <div class="logo mb-15">
                                    <a href="{{ route('web.index') }}">
                                        <img src="{{ asset('assets/images/logo/logo_02.png') }}" alt="">
                                    </a>
                                </div>
                                <!-- logo -->
                                <p class="lh-sm mb-45 lg-mb-30">Cable Nagar-opposite Adlux Convetion Center
                                    <br>Karukutty-Ernakulam</p>
                                <p class="m0"><a href="#">+918075561175</a></p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 mb-20">
                            <h5 class="footer-title">Links</h5>
                            <ul class="footer-nav-link style-none">
                                <li><a href="{{ route('web.index') }}">Home</a></li>

                                <li><a href="{{ route('web.about') }}">About us</a></li>
                                <li><a href="{{ route('web.services') }}">Our services</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-4 mb-20">
                            <h5 class="footer-title">Company</h5>
                            <ul class="footer-nav-link style-none">
                                <li><a href="{{ route('web.about') }}">About us</a></li>

                                <li><a href="{{ route('web.contactus') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xxl-2 col-lg-3 col-sm-4 mb-20">

                        </div>
                    </div>
                    <img src="images/lazy.svg" data-src="images/shape/shape_38.svg" alt=""
                        class="lazy-img shapes shape_01">
                    <img src="images/lazy.svg" data-src="images/shape/shape_39.svg" alt=""
                        class="lazy-img shapes shape_02">
                </div> <!-- /.inner-wrapper -->
            </div>
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 order-lg-3 mb-15">
                            <ul
                                class="style-none d-flex align-items-center justify-content-center justify-content-lg-end social-icon">
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-6 order-lg-2 mb-15">

                        </div>
                        <div class="col-xl-4 col-lg-3 order-lg-1 mb-15">
                            <div class="copyright text-center text-lg-start order-lg-first"></div>
                        </div>
                    </div>
                </div>
                <!-- /.bottom-footer -->
            </div>
        </div> <!-- /.footer-three -->





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


<!-- Mirrored from html.creativegigstf.com/check web digitals/check web digitals/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2024 05:53:05 GMT -->

</html>
