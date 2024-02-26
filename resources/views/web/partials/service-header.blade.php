<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative"
    style="background-image: url({{ $bgImage }});">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-heading d-inline-block position-relative me-xl-4"
                    style="
                    
                    background:none !important;
                    color: #0a3622">
                    {{ $title }}
                </h1>
            </div>
            <div class="col-xl-4 col-lg-5 ms-auto">
                <p class="text-white text-lg mb-70 lg-mb-40">{{ $titleDesc }}</p>
                <ul class="style-none d-inline-flex pager">
                    <li><a href="{{ route('web.index') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('web.services') }}">Services</a></li>
                    <li>/</li>
                    <li>{{ $breadCrumb }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
