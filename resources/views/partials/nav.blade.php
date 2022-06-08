<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg shrink text-white-50" id="navbar">
    <div class="container" id="nav_top">
        <a class="navbar-brand mr-1 mb-1 mt-0" href="{{ url('/') }}">
            <img id="logo" class="img img-responsive" src="{{ asset('images/logo.png') }}" alt="Logo" title=Logo>
        </a>
        <button class="navbar-toggler text-white" id="navbar_btn" type="button" data-toggle="collapse"
                data-target="#collapsingNavbar">
            <span class="fa fa-ellipsis-v fa-2x"></span>
            <span class="fa fa-ellipsis-v fa-2x"></span>
            <span class="fa fa-ellipsis-v fa-2x"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center text-center" id="collapsingNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('chiptuning') }}">Chiptuning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cars-gallery') }}">Gallery</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#sec-5-title">Faq</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/') }}/{{ Str::slug($latest_post->title, '-') }}-{{ $latest_post->id }}">Nieuws</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact-us') }}">Contact</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#search"><i class="fa fa-search"></i></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://shop.chiptuningrotterdam.nl/shop"><i class="fa fa-shopping-cart"></i></a>
                    <!-- <span class="badge badge-pill badge-primary ml-2 notification">1</span> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tel:010-5300010">010-53 000 10 <span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="d-none" id="navbar_filters">
        @include('filters')
    </div>
</nav>

<!-- /Navbar -->
