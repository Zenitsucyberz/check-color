@extends('web.layouts.app')
@section('content')
    @include('web.partials.service-header', [
        'bgImage' => asset('assets/images/media/website.png'),
        'title' => 'Website Development',
        'titleDesc' => 'Offering solutions & services to address a spectrum of
                                                            financial and Digital issues',
        'breadCrumb' => 'Website Development',
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
                        <h2>UNLEASH ONLINE POTENTIAL WITH <br> WEBSITE DEVELOPMENT</h2>
                        <p style="font-weight: bold">Empower Your Online Presence with Cutting-Edge Website Development
                            Solutions</p>
                        <p>Embark on a transformative journey of digital success with our comprehensive website development
                            services. From strategic planning to dynamic execution, our platform offers end-to-end solutions
                            to empower businesses to navigate the digital landscape seamlessly.</p>
                        <p>Our team of experts is dedicated to crafting bespoke websites tailored to your unique needs,
                            ensuring a powerful online presence that resonates with your audience. We leverage advanced
                            analytics and an integrated workflow to propel your brand forward, delivering world-class
                            development and impactful branding.</p>
                        <div class="img-meta mb-60 lg-mb-40"><img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/media/img_55.png') }}" alt="digital marketing"
                                class="lazy-img w-100 rounded-4"></div>
                        <h3>Our Processing.</h3>
                        <p>Expertly engineered, our platform is meticulously designed to elevate your website development
                            endeavors. Unleash the potential of tailored solutions crafted to maximize your online presence
                            and effectively engage your audience.</p>
                        <div class="line-wrapper pb-30 mt-60 lg-mt-40 mb-70 lg-mb-40">
                            <div class="row">
                                <div class="col-md-4 wow fadeInUp">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_109.png') }}" alt=""
                                                class="lazy-img" style="max-width: 103px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Planning and Analysis</h4>
                                        <p class="m0">Planning and Analysis" is the initial phase of web development
                                            where project goals and requirements are defined. During this stage, thorough
                                            research is conducted to understand the target audience, competitors, and market
                                            trends. </p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_119.png') }}" alt=""
                                                class="lazy-img" style="max-width: 86px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Design and Development</h4>
                                        <p class="m0">Design and Development" is the phase in web development where the
                                            visual and functional aspects of the website are created. Designers work on
                                            creating the user interface (UI) and user experience (UX), focusing on
                                            aesthetics, layout, and usability. </p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_120.png') }}" alt=""
                                                class="lazy-img" style="max-width: 43px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Deployment and Maintenance</h4>
                                        <p class="m0">Deployment and Maintenance" is the final phase of web development
                                            where the website is made live and ongoing maintenance tasks are performed.
                                        </p>
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
                                    <blockquote>Efficient Solutions Paired with Exceptional Performance—A Strong Endorsement
                                        for Your Web Development Journey</blockquote>

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
