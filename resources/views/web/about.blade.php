@extends('web.layouts.app')
@section('content')
    <!--
                              =============================================
                               Inner Banner
                              ==============================================
                              -->
    <div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative"
        style="background-image: url({{ asset('assets/images/media/about.jpg') }});">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-heading d-inline-block position-relative me-xl-4">UNVEILING CHECK WEB DIGITALS<img
                            src="{{ asset('asset/images/shape/shape_25.svg') }}" alt=""></h1>
                </div>
                <div class="col-xl-4 col-lg-5 ms-auto">
                    <p class="text-white text-lg mb-70 lg-mb-40">Our narrative is marked by dedication and continuous
                        evolution toward crafting industry-defining digital solutions</p>
                    <ul class="style-none d-inline-flex pager">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li>/</li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner-banner-one -->




    <!--
                              =====================================================
                               Text Feature One
                              =====================================================
                              -->
    <div class="text-feature-one mt-150 lg-mt-80">
        <div class="container">
            <div class="line-wrapper position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-5 wow fadeInLeft">
                        <div class="title-one">
                            <div class="upper-title">About us</div>
                            <h2>We've surpassed the milestone of 200 projects under our belt.</h2>
                        </div>
                        <!-- /.title-one -->
                        <p class="text-lg mt-45 lg-mt-30 mb-35 lg-mb-30">Your success is our mission. As business advisors,
                            we offer expert guidance, unlocking your potential for growth and profitability</p>
                        <a href="{{  route('web.contactus') }}" class="btn-three icon-link mt-15 md-mb-40">
                            <span>Request a Callback</span>
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                class="lazy-img icon ms-1">
                        </a>
                    </div>
                    <div class="col-lg-6 ms-auto wow fadeInRight">
                        <div class="card-style-three d-flex pt-75 lg-pt-40 pb-45 lg-pb-20">
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon_10 (1).svg') }}" alt=""
                                class="lazy-img icon">
                            <div class="ps-4">
                                <h4 class="fw-bold mb-20">Our Journey</h4>
                                <p>Established in 2009, Check Digitals is a dynamic business center, marketing agency, and
                                    software company located in the heart of Karukutty, Kerala. Our team of experienced
                                    professionals provides a comprehensive range of services to help businesses thrive in
                                    today's competitive landscape. From creating innovative marketing campaigns to
                                    developing cutting-edge software solutions, we are your one-stop shop for all your
                                    business needs.</p>
                            </div>
                        </div>
                        <!-- /.card-style-three -->
                        <div class="card-style-three d-flex pt-75 lg-pt-40 pb-45 lg-pb-20">
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon_11.svg') }}" alt=""
                                class="lazy-img icon">
                            <div class="ps-4">
                                {{-- <h4 class="fw-bold mb-20">Our company vision.</h4> --}}
                                <p>At Check Web Digitals, we are committed to bringing innovation and fresh perspectives to
                                    every venture. Our dedicated team is adept at providing customized software solutions
                                    tailored to the unique needs of our clients. To date, we have successfully served over
                                    200+ cases, maintaining a loyal client base of 300 and counting, with a continual
                                    increase in clientele.One of our key priorities is to ensure a doubt-free environment
                                    for our clients, achieved through 24/7 customer support.</p>
                            </div>
                        </div>
                        <!-- /.card-style-three -->
                    </div>
                </div>
                <img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/shape/shape_0.svg') }}"
                    alt="" class="lazy-img shapes shape_01">
            </div>

            <div class="counter-wrapper mt-80 lg-mt-20">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="counter-block-two text-center text-md-start mt-35 wow fadeInUp">
                            <div class="main-count fw-500"><span class="counter">250</span>+</div>
                            <p class="m0 text-md">Partner with us</p>
                        </div>
                        <!-- /.counter-block-two -->
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter-block-two text-center mt-35  wow fadeInUp" data-wow-delay="0.1s">
                            <div class="main-count fw-500"><span class="counter">300</span>+</div>
                            <p class="m0 text-md">Projects Done</p>
                        </div>
                        <!-- /.counter-block-two -->
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter-block-two text-center mt-35  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="main-count fw-500"><span class="counter">10</span></div>
                            <p class="m0 text-md">Skilled people</p>
                        </div>
                        <!-- /.counter-block-two -->
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter-block-two text-center mt-35  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="main-count fw-500"><span class="counter">200</span>+</div>
                            <p class="m0 text-md">Companies Served</p>
                        </div>
                        <!-- /.counter-block-two -->
                    </div>
                </div>
            </div>
            <!-- /.counter-wrapper -->
        </div>
    </div>
    <!-- /.text-feature-one -->





    <!--
                              =============================================
                               BLock Feature One
                              ==============================================
                              -->
    <div class="block-feature-one position-relative light-bg-deep mt-150 lg-mt-80 pt-120 lg-pt-60 pb-130 lg-pb-60">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-one text-center text-md-start mb-30 sm-mb-10">
                            <h2>Provide quality Services.</h2>
                        </div>
                        <!-- /.title-one -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
                        <div class="card-style-two vstack tran3s w-100 mt-30">
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon_101.png') }}" alt=""
                                class="lazy-img icon me-auto">
                            <h4 class="fw-bold mt-30 mb-25">Software Development</h4>
                            <p class="mb-20">Harness cutting-edge technologies and an efficient workflow tailored for
                                software development teams to elevate your projects with top-notch coding and impactful
                                solutions.</p>
                            <a href="{{route('web.software')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                    src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                    class="lazy-img"></a>
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card-style-two vstack tran3s w-100 mt-30">
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon_102.png') }}" alt=""
                                class="lazy-img icon me-auto">
                            <h4 class="fw-bold mt-30 mb-25">Digital Marketing</h4>
                            <p class="mb-20">Leverage advanced analytics and an integrated workflow designed for digital
                                marketing teams to propel your brand with world-class development and impactful branding</p>
                            <a href="{{route('web.digital')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                    src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                    class="lazy-img"></a>
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-style-two vstack tran3s w-100 mt-30">
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/icon/icon-103.png') }}" alt=""
                                class="lazy-img icon me-auto">
                            <h4 class="fw-bold mt-30 mb-25">E-commerce Management</h4>
                            <p class="mb-20">Embark on a journey of ecommerce management success with our comprehensive
                                solutions. From crafting user-friendly interfaces to implementing secure payment gateways,
                            </p>
                            <a href="{{route('web.ecommerce')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                    src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                    class="lazy-img"></a>
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                </div>

                <div class="section-subheading sm-mt-40">
                    <p class="text-lg">Explore Our Services: Elevate your business with our comprehensive range of
                        solutions designed to meet your needs.</p>
                    <a href="{{ route('web.services') }}" class="btn-three icon-link">
                        <span>See All Services</span>
                        <img src="{{ asset('assets/images/lazy.svg') }}"
                            data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                            class="lazy-img icon ms-1">
                    </a>
                </div>
                <!-- /.section-subheading -->
            </div>
        </div>
    </div>
    <!-- /.block-feature-one -->


    <!--
		=====================================================
			Partner Logo
		=====================================================
		-->
        <div class="partner-logo-one pt-80 lg-pt-40 pb-80 lg-pb-40">
            <div class="container">
                <div class="partner-slider-one" style="height: 117px;">
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 122px"><img src="{{asset('assets/images/logo/media_03.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 143px"><img src="{{asset('assets/images/logo/media_04.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 122px"><img src="{{asset('assets/images/logo/media_05.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 122px"><img src="{{asset('assets/images/logo/media_01.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 122px"><img src="{{asset('assets/images/logo/media_02.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 143px"><img src="{{asset('assets/images/logo/media_04.png')}}" alt=""></div>
                    </div>
                    <div class="item">
                        <div class="logo d-flex align-items-center justify-content-center" style="height: 122px"><img src="{{asset('assets/images/logo/media_05.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.partner-logo-one -->



@endsection
