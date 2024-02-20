@extends('web.layouts.app')
@section('content')
    <!--
          =============================================
           Hero Banner
          ==============================================
          -->
    <div class="hero-banner-six pt-170 md-pt-110 position-relative">
        <div class="container position-relative">
            <div class="row justify-content-between">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="pt-20 pb-50">
                        <h1 class="hero-heading fw-bold">LET'S BE
                            CHECKMATES</h1>
                        <p class="text-lg pt-35 lg-pt-30 pb-35 lg-pb-20">At Check Web Digitals, we empower you to reign as
                            the king in your industry, moulding brands with cultural insight, strategic vision, and
                            emotional resonance.</p>
                        <div class="d-flex flex-wrap">
                            <a href="{{ route('web.contactus') }}" class="btn-eighteen tran3s me-4 mt-10">Contact</a>
                            <a href="{{ route('web.services') }}" class="btn-nineteen tran3s mt-10">Let’s Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex justify-content-end wow fadeInRight">
                    <div class="media-wrapper position-relative ms-lg-5">
                        <img src="images/lazy.svg" data-src="images/assets/screen_22.svg" alt=""
                            class="lazy-img shapes screen_01">
                        <img src="images/lazy.svg" data-src="images/assets/screen_23.png" alt=""
                            class="lazy-img shapes screen_02">
                        <img src="images/lazy.svg" data-src="images/shape/shape_43.svg" alt=""
                            class="lazy-img shapes bg-shape">
                    </div>
                    <!-- /.media-wrapper -->
                </div>
            </div>

            {{--  --}}
    </div>
    <!-- /.hero-banner-six -->



    <!--
          =============================================
           BLock Feature Eleven
          ==============================================
          -->
    <div class="block-feature-eleven overflow-hidden position-relative mt-225 lg-mt-100 pb-200 lg-pb-100 md-pb-80">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="title-one">
                        <h2 class="color-deep">LET’S CHECK OUR SERVICES</h2>
                    </div>
                    <!-- /.title-one -->
                    <p class="text-lg text-dark mt-30 md-mt-20 mb-45 md-mb-30">A team of highly skilled individuals at the agency is delivering top-notch services.</p>
                    <a href="{{ route('web.services') }}" class="btn-eighteen tran3s">Explore All</a>
                </div>
                <div class="col-lg-7">
                    <div class="slider-wrapper md-mt-50">
                        <div class="service-slider-one">
                            <div class="item">
                                <div class="card-style-seventeen d-lg-flex tran3s w-100">
                                    <div
                                        class="icon tran3s rounded-circle d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/icon/icon_95.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4 class="fw-bold mb-25 md-mb-20">Software Development</h4>
                                        <p class="mb-25">Software development is the process of designing, coding, testing, and maintaining software applications</p>
                                        <a href="service-v1.html" class="btn-three"><span>Learn More</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-style-seventeen -->
                            </div>
                            <div class="item">
                                <div class="card-style-seventeen d-lg-flex tran3s w-100">
                                    <div
                                        class="icon tran3s rounded-circle d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/icon/icon_96.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4 class="fw-bold mb-25 md-mb-20">Digital Marketing</h4>
                                        <p class="mb-25">Digital marketing is the strategic utilization of online channels to promote and enhance brand presence, engage target audiences</p>
                                        <a href="service-v1.html" class="btn-three"><span>Learn More</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-style-seventeen -->
                            </div>
                            <div class="item">
                                <div class="card-style-seventeen d-lg-flex tran3s w-100">
                                    <div
                                        class="icon tran3s rounded-circle d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/icon/icon_95.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4 class="fw-bold mb-25 md-mb-20">E_COMMERCE MANAGEMENT</h4>
                                        <p class="mb-25">E-commerce management is an online operations, including product listings and digital marketing.




										</p>
                                        <a href="service-v1.html" class="btn-three"><span>Learn More</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-style-seventeen -->
                            </div>
                            <div class="item">
                                <div class="card-style-seventeen d-lg-flex tran3s w-100">
                                    <div
                                        class="icon tran3s rounded-circle d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/icon/icon_96.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4 class="fw-bold mb-25 md-mb-20">Business Consulting</h4>
                                        <p class="mb-25">Customized Consulting Solutions for Success. Unlock Your Potential with Expert Guidance. Let's Collaborate to Achieve Your Goals.</p>
                                        <a href="service-v1.html" class="btn-three"><span>Learn More</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!-- /.card-style-seventeen -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img src="images/lazy.svg" data-src="images/shape/shape_44.svg" alt="" class="lazy-img shapes shape_01">
    </div>
    <!-- /.block-feature-eleven -->



    <!--
          =============================================
           BLock Feature Twelve
          ==============================================
          -->
    <div class="block-feature-twelve position-relative pt-130 lg-pt-80 pb-180 lg-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-11">
                    <div class="title-one mb-40 lg-mb-20">
                        <h2 class="color-deep">We're here to help you manage, build & protect your wealth.</h2>
                    </div>
                    <!-- /.title-one -->
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-lg-8 d-flex mt-40 md-mt-20">
                    <div class="card-style-eighteen position-relative">
                        <div class="row h-100">
                            <div class="col-lg-7 order-lg-last">
                                <div class="pt-45">
                                    <div class="icon rounded-circle d-flex align-items-center justify-content-center"><img
                                            src="{{ asset('assets/images/lazy.svg') }}"
                                            data-src="{{ asset('assets/images/icon/icon_97.svg') }}" alt=""
                                            class="lazy-img"></div>
                                    <blockquote>“Effortless, Expert, and Innovative IT Solutions. A Top Pick for Smooth and Knowledgeable Services!”
                                    </blockquote>
                                    <h6>- Musa Jamy. <span>CEO check web digitals</span></h6>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-end justify-content-center order-lg-first">
                                <img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{asset('assets/images/assets/businessman_02.png')}}" alt=""
                                    class="lazy-img">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-style-eighteen -->
                </div>
                <div class="col-lg-4 d-flex mt-40 md-mt-20">
                    <div class="card-style-two bg-white vstack tran3s w-100">
                        <img src="{{ asset('assets/images/lazy.svg') }}"
                            data-src="{{asset('assets/images/icon/icon_10 (1).svg')}}" alt=""
                            class="lazy-img icon2 me-auto">
                        <h4 class="fw-bold mt-50 mb-25">Our Motto</h4>
                        <p class="mb-20">Unleashing Innovation with Tailored Solutions. Let Us Transform Your Vision into Reality.
                        </p>
                        <a href="{{route('web.about')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/icon/icon_09.svg') }}"
                                alt="" class="lazy-img"></a>
                    </div>
                    <!-- /.card-style-two -->
                </div>
                <div class="col-lg-4 d-flex mt-40 md-mt-20">
                    <div class="card-style-two bg-white vstack tran3s w-100">
                        <img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/icon/icon_11.svg') }}"
                            alt="" class="lazy-img icon2 me-auto">
                        <h4 class="fw-bold mt-50 mb-25">What We Do</h4>
                        <p class="mb-20">Revolutionizing Businesses through Cutting-Edge Digital Solutions. Let's Propel Your Success into the Digital Era.</p>
                        <a href="{{route('web.about')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/icon/icon_09.svg') }}"
                                alt="" class="lazy-img"></a>
                    </div>
                    <!-- /.card-style-two -->
                </div>
                <div class="col-lg-8 d-flex mt-40 md-mt-20">
                    <div class="card-style-nineteen">
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="color-deep fw-bold mt-20">We’r Check Web Digitals</h2>
                                <p class="text-md mt-30 lg-mt-20 mb-35">Your success is our mission. As business advisors,
                                    we offer expert guidance, unlocking your potential</p>
                                <a href="{{route('web.about')}}" class="btn-seven d-inline-flex align-items-center">
                                    <span class="text">Learn More</span>
                                    <div class="icon tran3s rounded-circle d-flex align-items-center"><img
                                            src="{{ asset('assets/images/lazy.svg') }}"
                                            data-src="{{ asset('assets/images/icon/icon_27.svg') }}" alt="" class="lazy-img"></i></div>
                                </a>
                            </div>
                            <div class="col-lg-4 ms-auto">
                                <div class="counter-block-one md-mt-40">
                                    <div class="main-count fw-bold"><span class="counter">300</span>+</div>
                                    <p class="m0">Successful Projects</p>
                                </div>
                                <div class="counter-block-one mt-60 md-mt-20">
                                    <div class="main-count fw-bold"><span class="counter">250</span>+</div>
                                    <p class="m0">Happy Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-style-nineteen -->
                </div>
            </div>

        </div>
        <img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/shape/shape_45.svg" alt=""
            class="lazy-img shapes shape_01">
    </div>
    <!-- /.block-feature-twelve -->





















    
@endsection
