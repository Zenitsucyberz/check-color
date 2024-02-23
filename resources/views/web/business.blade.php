@extends('web.layouts.app')
@section('content')

@include('web.partials.service-header', [
    'bgImage' => asset('assets/images/media/business.jpg'),
    'title' => 'Business Consultation',
    'titleDesc' => 'Offering solutions & services to address a spectrum of
                            financial and Digital issues',
    'breadCrumb' => 'Business Consultation',
]);
    




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
                        <h2>Unlocking Potential: Tailored Business Consulting Solutions</h2>
                        <p>Unlocking Value through Strategic Business Consulting: Risk management and compliance, when
                            strategically addressed, extend beyond traditional safeguards. Our dedicated team recognizes
                            these functions as potential drivers of growth, capable of generating value and fostering
                            opportunities within your organization's landscape. By meticulously analyzing your risk profile
                            and compliance framework, we uncover untapped potential and strategic advantages.</p>
                        <div class="img-meta mb-60 lg-mb-40"><img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/media/img_54.jpg') }}" alt="Business consultatuion"
                                class="lazy-img w-100 rounded-4"></div>
                        <h3>Our Processing.</h3>
                        <p>Through our tailored approach, we transform risk management and compliance into strategic assets
                            that propel your business forward.</p>
                        <div class="line-wrapper pb-30 mt-60 lg-mt-40 mb-70 lg-mb-40">
                            <div class="row">
                                <div class="col-md-4 wow fadeInUp">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_81.svg') }}" alt=""
                                                class="lazy-img">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Assessment and Analysis</h4>
                                        <p class="m0"> This involves thoroughly evaluating the client's current business
                                            situation, identifying challenges, and understanding their goals and objectives.
                                        </p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_108.png') }}" alt=""
                                                class="lazy-img">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Strategy Development</h4>
                                        <p class="m0">Based on the assessment, consultants develop a customized
                                            strategic plan tailored to address the client's specific needs and objectives,
                                            outlining actionable steps and timelines.</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_83.svg') }}" alt=""
                                                class="lazy-img">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Implementation and Monitoring</h4>
                                        <p class="m0">Consultants work closely with the client to implement the
                                            developed strategies, providing guidance, support, and monitoring progress along
                                            the way to success.</p>
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
                                    <blockquote>Swift Problem-solving Paired with Exceptional Performance—a Superb
                                        Recommendation for Your Business Consulting Needs.</blockquote>
                                    
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
