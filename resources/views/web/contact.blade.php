@extends('web.layouts.app')
@section('content')
    <!-- =============================================
       Inner Banner
      ============================================== -->
    <div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative"
        style="background-image: url({{ asset('assets/images/media/contact.jpg') }});">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-heading d-inline-block position-relative">Contact us for inquiries <img
                            src="images/shape/shape_33.svg" alt=""></h1>
                </div>
                <div class="col-xl-4 col-lg-5 ms-auto">
                    <p class="text-white text-lg mb-70 lg-mb-40">Get our all info and also can message us directly from here
                    </p>
                    <ul class="style-none d-inline-flex pager">
                        <li><a href="{{route('web.index')}}">Home</a></li>
                        <li>/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner-banner-one -->




    <!-- =============================================
         Contact Us
    ============================================== -->
    <div class="contact-us-section pt-150 lg-pt-80">
        <div class="container">
            <div class="position-relative">
                <div class="row">
                    <div class="col-12 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="address-block-one text-center mb-40 wow fadeInUp">
                                    <div
                                        class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                                        <img src="{{ asset('assets/images/lazy.svg') }}"
                                            data-src="{{ asset('assets/images/icon/icon_90.svg') }}" alt=""
                                            class="lazy-img">
                                    </div>
                                    <h5 class="title">Our Address</h5>
                                    <p>Cable nagar-opposite adlux convention center <br>Karukutty, Ernakulam</p>
                                </div> <!-- /.address-block-one -->
                            </div>
                            <div class="col-md-4">
                                <div class="address-block-one text-center mb-40 wow fadeInUp">
                                    <div
                                        class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                                        <img src="{{ asset('assets/images/lazy.svg') }}"
                                            data-src="{{ asset('assets/images/icon/icon_91.svg') }}" alt=""
                                            class="lazy-img">
                                    </div>
                                    <h5 class="title">Contact Info</h5>
                                    <p>Open a chat or give us call at <br><a href="tel:+918075561175"
                                            class="call text-lg fw-500">8075561175</a></p>
                                </div> <!-- /.address-block-one -->
                            </div>
                            <div class="col-md-4">
                                <div class="address-block-one text-center mb-40 wow fadeInUp">
                                    <div
                                        class="icon rounded-circle d-flex align-items-center justify-content-center m-auto">
                                        <img src="{{ asset('assets/images/lazy.svg') }}"
                                            data-src="{{ asset('assets/images/icon/icon_92.svg') }}" alt=""
                                            class="lazy-img">
                                    </div>
                                    <h5 class="title">Live Support</h5>
                                    <p>live chat service <br><a href="mailto:checkdigitals@gmail.com"
                                            class="webaddress">checkdigitals@gmail.com</a></p>
                                </div> <!-- /.address-block-one -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-wrapper light-bg mt-80 lg-mt-40">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="d-flex flex-column flex-lg-column-reverse">
                                <div class="row">
                                    <div class="col-md-8 col-6 me-auto ms-auto"><img src="images/lazy.svg"
                                            data-src="images/assets/ils_07.svg" alt=""
                                            class="lazy-img me-auto ms-auto"></div>
                                </div>
                                <div class="title-one text-center text-lg-start md-mt-20 mb-70 md-mb-30">
                                    <h2>Have inquiries? Reach out via message</h2>
                                </div>
                                <!-- /.title-one -->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-style-one ps-xl-5">
                                <form action="" id="contact-form" data-toggle="validator" method="POST">
                                    @csrf
                                    <div class="messages"></div>
                                    @if (Session::has('mail_send'))
                                        <div class="col-lg-12">

                                            <div class="form-group">

                                                <div class="alert alert-success"> {{ Session::get('mail_send') }}
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                    <div class="row controls">
                                        <div class="col-12">
                                            <div class="input-group-meta form-group mb-30">
                                                <label for="">Name*</label>
                                                <input id="form_name @error('name')is-invalid @enderror" type="text"
                                                    placeholder="Your Name*" name="name" value="{{ old('name') }}"
                                                    required="required" data-error="Name is required.">
                                                @error('name')
                                                    <div class="help-block with-errors"> {{ $message }} </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group-meta form-group mb-40">
                                                <label for="">Email*</label>
                                                <input id="form_name @error('email')is-invalid @enderror" type="email"
                                                    placeholder="Email Address*" name="email" value="{{ old('email') }}"
                                                    required="required" data-error="Valid email is required.">
                                                @error('company')
                                                    <div class="help-block with-errors">{{ $message }} </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group-meta form-group mb-40">
                                                <label for="">Phone*</label>
                                                <input id="form_name @error('phone')is-invalid @enderror" type="phone"
                                                    placeholder="Phone Number*" name="phone" value="{{ old('phone') }}"
                                                    required="required" data-error="Valid phone Number is required.">
                                                @error('phone')
                                                    <div class="help-block with-errors">{{ $message }} </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group-meta form-group mb-40">
                                                <label for="">Company*</label>
                                                <input id="form_name @error('company')is-invalid @enderror" type="company"
                                                    placeholder="Company Address*" name="company"
                                                    value="{{ old('company') }}" required="required"
                                                    data-error="Valid Company is required.">
                                                @error('company')
                                                    <div class="help-block with-errors"> {{ $message }} </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group-meta form-group mb-35">
                                                <textarea id="form_message @error('description') is-invalid @enderror" placeholder="Your message*" name="description"
                                                    value="{{ old('description') }}" required="required" data-error="Please,leave us a message."></textarea>
                                                @error('description')
                                                    <div class="help-block with-errors">{{ $message }} </div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button  class="btn-four tran3s w-100 d-block" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- /.form-style-one -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-banner mt-120 lg-mt-80">
            <div class="gmap_canvas h-100 w-100">
                <iframe class="gmap_iframe h-100 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15705.217039118103!2d76.3763076!3d10.2370265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0806b289e5faff%3A0xaf3a1abed4f9cc4b!2sCheck%20Digitals!5e0!3m2!1sen!2sin!4v1707546848951!5m2!1sen!2sin"></iframe>
            </div>
        </div>
    </div>
    <!-- ./contact-us-section -->
@endsection
