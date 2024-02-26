@extends('web.layouts.app')
@section('content')
    @include('web.partials.service-header', [
        'bgImage' => asset('assets/images/media/ecom.jpg'),
        'title' => 'E-Commerce Seller Account Management',
        'titleDesc' => 'Offering solutions & services to address a spectrum of
                                financial and Digital issues',
        'breadCrumb' => 'E-Commerce Management',
    ])



    <div class="service-details mt-150 lg-mt-80 mb-100 lg-mb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8 order-lg-last">
                    <div class="details-meta ps-xxl-5 ps-xl-3">
                        <h2>STRATEGIC E-COMMERCE SELLER ACCOUNT MANAGEMENT FOR DIGITAL TRIUMPH</h2>
                        <p>Maximize your online business potential with our advanced E-commerce Seller Account Management
                            solutions. Harness cutting-edge technologies and optimized workflows customized for seller
                            account management teams to enhance your projects with high-quality coding and impactful
                            strategies.</p>

                        <p>Embark on a journey of E-commerce Seller Account Management success with our holistic solutions.
                            From designing intuitive interfaces to integrating secure payment gateways, our platform
                            empowers sellers to excel in the digital marketplace.</p>
                        <div class="img-meta mb-60 lg-mb-40"><img src="{{ asset('assets/images/lazy.svg') }}"
                                data-src="{{ asset('assets/images/media/img_51.jpg') }}"
                                alt="E-commerce seller account management" class="lazy-img w-100 rounded-4"></div>
                        <h3>Our Processing.</h3>
                        <p>Tailored with precision, our platform is engineered to enhance your E-commerce Seller Account
                            Management strategies. Unleash the potential of innovative solutions crafted to optimize your
                            coding efficiency and deliver outstanding results for your seller accounts.</p>
                        <div class="line-wrapper pb-30 mt-60 lg-mt-40 mb-70 lg-mb-40">
                            <div class="row">
                                <div class="col-md-4 wow fadeInUp">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_110.png') }}" alt=""
                                                class="lazy-img" style="max-width: 46px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">E-commerce Seller Account Management</h4>
                                        <p class="m0">Embark on robust journeys in managing your seller accounts,
                                            aligning with your business goals to ensure a solid foundation for e-commerce
                                            success.



                                        </p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_111.png') }}" alt=""
                                                class="lazy-img" style="max-width: 46px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">E-commerce Seller Account Optimization</h4>
                                        <p class="m0">Optimize your seller account operations with our commitment to
                                            industry best practices, ensuring a robust and reliable foundation for your
                                            e-commerce success.</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="card-style-sixteen text-center mt-40">
                                        <div
                                            class="icon m-auto tran3s rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/images/lazy.svg') }}"
                                                data-src="{{ asset('assets/images/icon/icon_112.png') }}" alt=""
                                                class="lazy-img" style="max-width: 46px">
                                        </div>
                                        <h4 class="fw-bold mt-35 lg-mt-30 mb-15">Seller Account Performance Analytics</h4>
                                        <p class="m0">Harness the power of data-driven insights to inform your seller
                                            account management decisions. Our analytics tools provide valuable metrics for
                                            your e-commerce operations.</p>
                                    </div>
                                    <!-- /.card-style-sixteen -->
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 order-lg-first">
                    <aside class="md-mt-40">

                        <div class="contact-banner text-center mt-40 lg-mt-20">
                            <h3 class="mb-20">Any Questions? Let’s talk</h3>
                            <a href="{{ route('web.contactus') }}" class="tran3s fw-500">Let’s Talk</a>
                        </div>
                        <!-- /.contact-banner -->
                    </aside>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-lg-12 order-lg-last">
                    <div class="details-meta ps-xxl-5 ps-xl-3">

                        <div
                            class="block-feature-one position-relative check web digitals mt-150 lg-mt-80 pt-120 lg-pt-60 pb-130 lg-pb-60">
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
                                                    data-src="{{ asset('assets/images/icon/icon_98.png') }}" alt=""
                                                    class="lazy-img icon me-auto">
                                                <h4 class="fw-bold mt-30 mb-25">Amazon seller Account Management</h4>
                                                <p class="mb-20">Amazon Seller Account Management is a service designed to
                                                    help businesses effectively manage their presence and operations on the
                                                    Amazon marketplace, optimizing product listings, inventory, pricing,
                                                    order fulfillment, and customer engagement.</p>
                                                <a href="{{ route('web.amazon') }}"
                                                    class="arrow-btn tran3s mt-auto stretched-link"><img
                                                        src="{{ asset('assets/images/lazy.svg') }}"
                                                        data-src="{{ asset('assets/images/icon/icon_09.svg') }}"
                                                        alt="" class="lazy-img"></a>
                                            </div>
                                            <!-- /.card-style-two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="card-style-two vstack tran3s w-100 mt-30">
                                                <img src="{{ asset('assets/images/lazy.svg') }}"
                                                    data-src="{{ asset('assets/images/icon/icon_99.png') }}" alt=""
                                                    class="lazy-img icon me-auto">
                                                <h4 class="fw-bold mt-30 mb-25">Flipkart Seller Account Management</h4>
                                                <p class="mb-20">Elevate your Flipkart sales with our tailored Seller
                                                    Account Management service. We optimize listings, manage inventory,
                                                    refine pricing, streamline fulfillment, and provide dedicated support
                                                    for your success.</p>
                                                <a href="{{ route('web.flipkart') }}"
                                                    class="arrow-btn tran3s mt-auto stretched-link"><img
                                                        src="{{ asset('assets/images/lazy.svg') }}"
                                                        data-src="{{ asset('assets/images/icon/icon_09.svg') }}"
                                                        alt="" class="lazy-img"></a>
                                            </div>
                                            <!-- /.card-style-two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="card-style-two vstack tran3s w-100 mt-30">
                                                <img src="{{ asset('assets/images/lazy.svg') }}"
                                                    data-src="{{ asset('assets/images/icon/icon_100.png') }}"
                                                    alt="" class="lazy-img icon me-auto">
                                                <h4 class="fw-bold mt-30 mb-25">Meesho Seller Account Management</h4>
                                                <p class="mb-20">Unlock your Meesho success with our dedicated Seller
                                                    Account Management service. We optimize listings, manage inventory,
                                                    refine pricing, streamline fulfillment, and provide tailored support for
                                                    your growth.
                                                </p>
                                                <a href="{{ route('web.meesho') }}"
                                                    class="arrow-btn tran3s mt-auto stretched-link"><img
                                                        src="{{ asset('assets/images/lazy.svg') }}"
                                                        data-src="{{ asset('assets/images/icon/icon_09.svg') }}"
                                                        alt="" class="lazy-img"></a>
                                            </div>
                                            <!-- /.card-style-two -->
                                        </div>
                                    </div>


                                    <!-- /.section-subheading -->
                                </div>
                            </div>
                        </div>
                        <!-- /.block-feature-one -->

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.service-details -->
@endsection
