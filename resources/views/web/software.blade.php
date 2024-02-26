@extends('web.layouts.app')
@section('content')
    @include('web.partials.service-header', [
        'bgImage' => asset('assets/images/media/soft.png'),
        'title' => 'Software Development',
        'titleDesc' => 'Offering solutions & services to address a spectrum of
                                financial and Digital issues',
        'breadCrumb' => 'Software Development',
    ])









    <!--
                          =====================================================
                           Service Details
                          =====================================================
                          -->
    <div class="service-details mt-150 lg-mt-80 mb-100 lg-mb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8 order-lg-last">
                    <div class="details-meta ps-xxl-5 ps-xl-3">
                        <h2>INNOVATIVE SOLUTIONS FOR DIGITAL SUCCESS</h2>
                        <p>Harness cutting-edge technologies and an efficient workflow tailored for software development
                            teams to elevate your projects with top-notch coding and impactful solutions.</p>
                        <p>Embark on a journey of software development success with our comprehensive coding solutions. From
                            strategic architecture to dynamic execution,

                            our platform empowers businesses to navigate the digital landscape seamlessly. Unleash the
                            potential of cutting-edge technologies and harness the strength of efficient coding practices.
                        </p>
                        <div class="img-meta mb-60 lg-mb-40"><img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/media/img_52.jpg') }}" alt="software development"
                                class="lazy-img w-100 rounded-4"></div>
                        <h3>Our Processing.</h3>
                        <p>rafted with precision, our platform is designed to elevate your software development strategies.
                            unleash the power of innovative solutions tailored to maximize your coding efficiency and
                            deliver exceptional software products.</p>
                        <div class="line-wrapper pb-30 mt-60 lg-mt-40 mb-70 lg-mb-40">
                            <div class="row">
                                <div class="col-md-4 wow fadeInUp">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_113.png') }}" alt=""
                                                class="lazy-img">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Software Development</h4>
                                        <p class="m0">Embark on robust software development journeys that align with
                                            your business goals, ensuring a solid foundation for technological success.</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_114.png') }}" alt=""
                                                class="lazy-img" style="max-width: 46px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Code Quality</h4>
                                        <p class="m0">Adopting industry best practices and innovative coding standards,
                                            we empower your software solutions to not only meet current demands but also
                                            anticipate future challenges, ensuring reliability</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_115.png') }}" alt=""
                                                class="lazy-img" style="max-width: 40px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Performance Analytics</h4>
                                        <p class="m0">Harness the power of data-driven insights to inform your
                                            development decisions. Our analytics tools provide valuable metrics for
                                            continuous improvement and optimization</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                            </div>
                        </div>
                        <div class="light-bg-deep quote-wrapper position-relative mb-60 lg-mb-40">
                            <div class="d-xl-flex align-items-start">
                                <img src="{{ asset('assets/images/lazy.svg') }}"
                                    data-src="{{ asset('assets/images/icon/icon_84.svg') }}" alt=""
                                    class="lazy-img icon">
                                <div class="ps-xl-5">
                                    <blockquote>Swift Problem-solving and Exceptional Performance—An Exceptional Choice for
                                        Your Software Development Needs.</blockquote>
                                    
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/assets/ils_03.svg') }}" alt=""
                                class="lazy-img shapes shape_01">
                        </div>

                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 order-lg-first">
                    <aside class="md-mt-40">
                        {{-- <div class="service-nav-item">
                                <ul class="style-none">
                                    <li><a href="#" class="d-flex align-items-center w-100 active">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_72.svg" alt="" class="lazy-img">
                                        <span>Multiple Accounts</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_73.svg" alt="" class="lazy-img">
                                        <span>Loan Facility</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_74.svg" alt="" class="lazy-img">
                                        <span>Expense Track</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_75.svg" alt="" class="lazy-img">
                                        <span>DPS & FDR</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_76.svg" alt="" class="lazy-img">
                                        <span>International Account</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_77.svg" alt="" class="lazy-img">
                                        <span>Saving Account</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_78.svg" alt="" class="lazy-img">
                                        <span>Agent Banking</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_79.svg" alt="" class="lazy-img">
                                        <span>Credit & Debit Cards</span>
                                    </a></li>
                                    <li><a href="#" class="d-flex align-items-center w-100">
                                        <img src="{{asset('assets/images/lazy.svg')}}" data-src="images/icon/icon_80.svg" alt="" class="lazy-img">
                                        <span>Consultation</span>
                                    </a></li>
                                </ul>
                            </div> --}}
                        <div class="contact-banner text-center mt-40 lg-mt-20">
                            <h3 class="mb-20">Any Questions? Let’s talk</h3>
                            <a href="{{ route('web.contactus') }}" class="tran3s fw-500">Let’s Talk</a>
                        </div>
                        <!-- /.contact-banner -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.service-details -->
@endsection
