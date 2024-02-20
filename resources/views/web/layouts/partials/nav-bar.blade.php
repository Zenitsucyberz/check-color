<nav class="navbar navbar-expand-lg p0 ms-lg-5 order-lg-2">
    <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-lg-center">
            <li class="d-block d-lg-none">
                <div class="logo"><a href="{{ route('web.index') }}" class="d-block"><img
                            src="{{ asset('assets/images/logo/logo_06.svg') }}" alt=""></a></div>
            </li>




            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('web.index') }}" role="button"
                    data-bs-auto-close="outside" aria-expanded="false">Home
                </a>

            </li>
            <li class="nav-item dropdown mega-dropdown-sm">
                <a class="nav-link dropdown-toggle" href="{{ route('web.about') }}" role="button"
                    data-bs-auto-close="outside" aria-expanded="false">About-Us
                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('web.services') }}" role="button"
                    data-bs-auto-close="outside" aria-expanded="false">Services
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown"><a href="{{ route('web.ecommerce') }}" class="dropdown-item"><span>E-Commerce Solutions</span></a></li>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Amazon</a></li>
                        <li><a href="#" class="dropdown-item">Flipkart</a></li>
                        <li><a href="#" class="dropdown-item">Meesho</a></li>
                        <!-- Add more e-commerce platforms here -->
                    </ul>
                    <li><a href="{{ route('web.software') }}" class="dropdown-item"><span>Software
                                Development</span></a></li>
                    <li><a href="{{ route('web.digital') }}" class="dropdown-item"><span>Digital Marketing</span></a>
                    </li>
                    <li><a href="{{ route('web.business') }}" class="dropdown-item"><span>Business Consulting</span></a>
                    </li>

                </ul>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.contactus') }}" role="button">Contact Us</a>
            </li>
            <li class="d-md-none ps-2 pe-2"><a href="{{ route('web.contactus') }}"
                    class="btn-one w-100 mt-15 tran3s">Get in Touch</a></li>




        </ul>
    </div>
</nav>
