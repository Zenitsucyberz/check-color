@extends('web.layouts.app')
@section('content')
    <!--
                                  =============================================
                                   Inner Banner
                                  ==============================================
                                  -->
    <div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative"
        style="background-image: url({{ asset('assets/images/media/service.jpg') }});">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-heading d-inline-block position-relative me-xxl-4 me-lg-5">Our offerings & Services <img
                            src="images/shape/shape_26.svg" alt=""></h1>
                </div>
                <div class="col-xl-4 col-lg-5 ms-auto">
                    <p class="text-white text-lg mb-70 lg-mb-40">Offering solutions & services to address a spectrum of
                        digital issues</p>
                    <ul class="style-none d-inline-flex pager">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li>/</li>
                        <li>Services</li>
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
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="title-one">
                        <h2>300+ clients base & growing.</h2>
                    </div>
                    <!-- /.title-one -->
                    <p class="text-lg mt-45 lg-mt-30 mb-60 lg-mb-30">Your success is our mission. As business advisors, we
                        offer expert guidance, unlocking your potential for growth and profitability</p>
                    <a href="{{ route('web.contactus') }}" class="btn-three icon-link mt-15 md-mb-60">
                        <span>Request a Callback</span>
                        <img src="{{ asset('assets/images/lazy.svg') }}"
                            data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                            class="lazy-img icon ms-1">
                    </a>
                </div>
                <div class="col-lg-6 ms-auto">
                    <div class="row">
                        <div class="col-sm-6 d-flex wow fadeInUp">
                            <div class="card-style-twelve mb-40 lg-mb-20">
                                <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle">
                                    <img src="{{ asset('assets/images/lazy.svg') }}"
                                        data-src="{{ asset('assets/images/icon/icon_55.svg') }}" alt=""
                                        class="lazy-img">
                                </div>
                                <h4 class="fw-bold mt-20 mb-15">Expert Advisor</h4>
                                <p>Our seasoned professionals bring a wealth of experience and insight to guide you through
                                    every stage of your journey. From strategic planning to tactical execution, our team is
                                    dedicated to helping you achieve your goals efficiently and effectively.</p>
                            </div>
                            <!-- /.card-style-twelve -->
                        </div>
                        <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card-style-twelve mb-40 lg-mb-20">
                                <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle">
                                    <img src="{{ asset('assets/images/lazy.svg') }}"
                                        data-src="{{ asset('assets/images/icon/icon_56.svg') }}" alt=""
                                        class="lazy-img">
                                </div>
                                <h4 class="fw-bold mt-20 mb-15">Effective Support</h4>
                                <p>Our Effective Support Team is Here for You. With prompt assistance and personalized
                                    solutions, we ensure your needs are met swiftly and comprehensively, providing the
                                    support you need to thrive.</p>
                            </div>
                            <!-- /.card-style-twelve -->
                        </div>
                        <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card-style-twelve mb-40 lg-mb-20">
                                <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle">
                                    <img src="{{ asset('assets/images/lazy.svg') }}"
                                        data-src="{{ asset('assets/images/icon/icon_57.svg') }}" alt=""
                                        class="lazy-img">
                                </div>
                                <h4 class="fw-bold mt-20 mb-15">Performance Analytics</h4>
                                <p>Harness the power of data-driven insights to inform your development decisions. Our
                                    analytics tools provide valuable metrics for continuous improvement and optimization.
                                </p>
                            </div>
                            <!-- /.card-style-twelve -->
                        </div>
                        <div class="col-sm-6 d-flex wow fadeInUp" data-wow-delay="0.3s">
                            <div class="card-style-twelve mb-40 lg-mb-20">
                                <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle">
                                    <img src="{{ asset('assets/images/lazy.svg') }}"
                                        data-src="{{ asset('assets/images/icon/icon_58.svg') }}" alt=""
                                        class="lazy-img">
                                </div>
                                <h4 class="fw-bold mt-20 mb-15">Digital Strategy</h4>
                                <p>Develop a robust digital marketing strategy that aligns with your business goals,
                                    ensuring a solid foundation for online success.
                                </p>
                            </div>
                            <!-- /.card-style-twelve -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.text-feature-one -->



    <!--
                                  =============================================
                                   BLock Feature One
                                  ==============================================
                                  -->
    <div class="block-feature-one position-relative light-bg-deep mt-100 lg-mt-60 pt-120 lg-pt-60 pb-130 lg-pb-60">
        <div class="container">
            <div class="position-relative">
                <div class="title-one text-center mb-40 lg-mb-10">
                    <h2>Our Services</h2>
                    <p class="text-lg mt-20">Elevate Your Business: Comprehensive Solutions Tailored to Your Needs.</p>
                </div>
                <!-- /.title-one -->
                <div class="row">
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
                                data-src="{{ asset('assets/images/icon/icon_109.png') }}" alt=""
                                class="lazy-img icon me-auto">
                            <h4 class="fw-bold mt-30 mb-25">Business Consulting</h4>
                            <p class="mb-20">Leverage advanced analytics and an integrated workflow designed for digital
                                marketing teams to propel your brand with world-class development and impactful branding</p>
                            <a href="{{route('web.business')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                    src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                    class="lazy-img"></a>
                        </div>
                        <!-- /.card-style-two -->
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
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
                            <p class="mb-20">Empower your online business with state-of-the-art ecommerce solutions.
                                Leverage cutting-edge technologies and a streamlined workflow tailored for ecommerce
                                development teams to elevate your projects with top-notch coding and impactful solutions.
                            </p>
                            <a href="{{route('web.ecommerce')}}" class="arrow-btn tran3s mt-auto stretched-link"><img
                                    src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_09.svg') }}" alt=""
                                    class="lazy-img"></a>
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/shape/shape_05.svg') }}"
            alt="" class="lazy-img shapes shape_01">
        <img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/shape/shape_05.svg') }}"
            alt="" class="lazy-img shapes shape_02">
    </div>
    <!-- /.block-feature-one -->
@endsection
