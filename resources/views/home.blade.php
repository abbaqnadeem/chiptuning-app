@extends('partials.layout')
@section('banner')
    <header class="bg-primary" id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <div class="text-center m-0 vh-100 d-flex flex-column justify-content-center text-light mt-2">
                        <h1 class="display-4 banner-heading text-capitalize">
                            It's Time For more Power
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')

    <div id="banner_filters" class="d-none">
        @include('banner-filters')
    </div>

    <!-- Chiptuning -->
    <main>
        <section id="chiptuning" class="text-dark mt-3 pt-5 pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 maroon-border-l-8">
                        <h2 class="bold-fam text-uppercase fs-40" id="chiptuning_title">Welkom BIJ</h2>
                        <h1 class="text-uppercase text-maroon mb-0 fs-50" id="chiptuning_subtitle">Chiptuning
                            rotterdam</h1>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 chiptuning-first-sec pl-0">
                        <img class="lazyload chiptuning-sec-img img-fluid" data-src="images/chiptuning-1.png" alt="Chiptuning">
                        <div class="chiptuning-label-parent">
                            <a href="javascript:void(0)"
                               class="btn btn-primary chiptuning-sec-label text-uppercase mr-3">
                                Chiptuning
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 chiptuning-first-sec">
                        <img class="lazyload chiptuning-sec-img img-fluid gray-border-full img-fluid" data-src="images/chiptuning-2.png"
                             alt="DSG Tuning ">
                        <div class="chiptuning-label-parent">
                            <a href="javascript:void(0)"
                               class="btn btn-primary chiptuning-sec-label text-uppercase mr-1">
                                DSG Tuning
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 chiptuning-first-sec pr-0">
                        <img class="lazyload chiptuning-sec-img img-fluid" data-src="images/chiptuning-3.png" alt="Diagnose">
                        <div class="chiptuning-label-parent">
                            <a href="javascript:void(0)"
                               class="btn btn-primary chiptuning-sec-label text-uppercase">
                                Diagnose
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-12 sec1" id="about_us">
                        <div class="row text-center justify-content-center align-items-center">
                            <div class="col-lg-3 mb-4 services">
                                <div class="card maroon-border rounded-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <h1 class="display-2 text-primary mb-0 mt-1-5"><img class="lazyload banner-title-img"
                                                                                data-src="images/services-list-style.png"
                                                                                alt="">
                                        </h1>
                                        <h2 class="banner-title card-title text-uppercase mb-0">Chiptuning op maat</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 services">
                                <div class="card maroon-border rounded-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <h1 class="display-2 text-primary mb-0 mt-1-5"><img class="lazyload banner-title-img"
                                                                                data-src="images/services-list-style.png"
                                                                                alt="">
                                        </h1>
                                        <h2 class="banner-title card-title text-uppercase mb-0">5 jaar garantie</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 services">
                                <div class="card maroon-border rounded-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <h1 class="display-2 text-primary mb-0 mt-1-5"><img class="lazyload banner-title-img"
                                                                                data-src="images/services-list-style.png"
                                                                                alt="">
                                        </h1>
                                        <h2 class="banner-title card-title text-uppercase mb-0"> dyno tested
                                            software</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 services">
                                <div class="card maroon-border rounded-0">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <h1 class="display-2 text-primary mb-0 mt-1-5"><img class="lazyload banner-title-img"
                                                                                data-src="images/services-list-style.png"
                                                                                alt="">
                                        </h1>
                                        <h2 class="banner-title card-title text-uppercase mb-0">sinds 2010</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <main>

        <!-- About -->

        <section id="about" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="maroon-border-l-8 mb-5">
                            <h2 class="bold-fam text-uppercase fs-40" id="about_title">Introductie</h2>
                            <h1 class="text-uppercase text-maroon mb-0 fs-50" id="about_subtitle">Over ons</h1>
                        </div>
                        <div id="about_description" class="text-left">
                            <p class="par">
                                <strong class="bold-fam">Chiptuning Rotterdam</strong>  is ontstaan vanuit een passie voor auto’s en is inmiddels al 10 jaar een begrip in de regio. Wij leveren geen universele chip, alles wat wij doen is puur maatwerk, tuning afgesteld op de motor van uw auto.  Ons doel is een optimale tuning, “dus niet een maximaal belaste motor” , Wij gaan voor een goed en verantwoord afgestelde auto die meer vermogen heeft in het volledige toeren gebied zonder in te leveren op betrouwbaarheid.
                                <br>
                                <br>
                                <strong class="bold-fam">Engineering Team</strong>
                                <br>
                                Chiptuning Rotterdam
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" id="about_img_parent">
                        <img class="img-fluid lazyload" id="about_img" data-src="images/new-section-1.png" alt="">
                    </div>
                </div>
                <div class="row" id="about_btn_row">
                    <div class="col-lg-12">
                        <div class="mt-5 text-center">
                            <a href="javascript:void(0)"
                               class="introduction-btn btn white-bg btn-xl text-uppercase mr-5" id="quote_btn">
                                <i class="fa fa-envelope pr-1"></i> Vraag offerte aan
                            </a>
                            <a href="tel:010-5300010"
                               class="introduction-btn btn white-bg btn-xl text-uppercase mr-5" id="phone_btn">
                                <i class="fa fa-phone pr-1"></i> Bel 010 - 53 000 10
                            </a>
                            <a href="https://web.whatsapp.com/send?phone=31626640666" target="_blank"
                               class="introduction-btn btn white-bg btn-xl text-uppercase mr-5"
                               id="whatsapp_btn">
                                <img id="whatsapp_logo" class="lazyload" data-src="images/whatsapp-logo.png" alt=""> Contact via
                                Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- /About -->

    <main class="pt-5 mt-5" id="sec-4">
        <!-- carousel -->
        <section class="row">

            <div class="col-lg-12">
                <div class="container p-t-0 m-t-2">
                    <div class="row row-equal m-t-0">
                        <!-- CHIPTUNING GARANTIE 5 JAAR -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="center-services">
                                <div class="">
                                    <i class="fa fa-shield fa-5x color-maroon"></i>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-4 mb-0">CHIPTUNING GARANTIE</h2>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-0">5 JAAR</h2>
                                    <div class="card-block p-4 black-card bg-dark text-white">
                                        Betrouwbaarheid en veiligheid is voor ons een prioriteit, vandaar dat elke
                                        optimalisaties op maat uitgevoerd wordt voor uw specifieke auto. Wij zijn
                                        overtuigd van onze kwaliteit en geven standaard 5 jaar software garantie op
                                        elke getuned auto.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VERBRUIK TOT 15% ZUINIGER -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="center-services">
                                <div class="">
                                    <i class="fa fa-download fa-5x color-maroon"></i>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-4 mb-0">VERBRUIK TOT</h2>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-0">15% ZUINIGER</h2>
                                    <div class="card-block p-4 black-card bg-dark text-white">
                                        Meer vermogen met minder brandstof, waarom zou je kiezen als je beide kan
                                        hebben ? Een goede tuning kan zorgen voor meer power met een lager verbruik.
                                        Deze afstelling is mogelijk voor diverse auto maar niet voor elke type, neem
                                        contact met ons op voor de mogelijkheden voor uw specifieke auto.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- KWALITEIT EN DUURZAAMHEID -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="center-services">
                                <div class="">
                                    <i class="fa fa-check fa-5x color-maroon"></i>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-4 mb-0">KWALITEIT</h2>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-0">EN DUURZAAMHEID</h2>
                                    <div class="card-block p-4 black-card bg-dark text-white">
                                        Meeste auto’s worden getuned voor dagelijks gebruik vandaar dat
                                        betrouwbaarheid bij ons voorop staat. Wij zorgen voor meer vermogen op een
                                        verantwoorde manier door het benutten van de marges die de autofabrikant
                                        standaard heeft ingebouwd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MEER VERMOGEN 20% TOT 100% -->

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                            <div class="center-services">
                                <div class="">
                                    <i class="fa fa-level-up fa-5x color-maroon"></i>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-4 mb-0">MEER VERMOGEN</h2>
                                    <h2 class="text-uppercase text-maroon fs-24 mt-0">20% TOT 100%</h2>
                                    <div class="card-block p-4 black-card bg-dark text-white">
                                        Chiptuning is het afstellen van de motor voor optimale prestaties. Elke
                                        moderne auto beschikt over een computer (ecu) die op basis van sensoren de
                                        motor aanstuurt. Wij stellen uw auto af zodat deze beter presteert binnen de
                                        marges van de fabrikant, dus zonder afbreuk op betrouwbaarheid.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /carousel -->
    </main>

    <!-- / Chiptuning -->

    <!-- section 5 -->
    <main id="sec-5">
        <section class="container">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5 mt-7 maroon-border-l-8" id="sec-5-title">
                    <h1 class="text-uppercase text-maroon mb-0 h-xl">The facts speak</h1>
                    <h1 class="text-uppercase text-maroon mb-0 h-xl">for themselves</h1>
                </div>
                <!--            <div class="col-lg-1"></div>-->
                <div class="maroon-border-2 sec-5-box dark-overlay mr-5" id="sec-5-box-1">
                    <h2 class="text-maroon text-uppercase text-center counter">10</h2>
                    <h3 class="text-white text-uppercase text-center">jaar ervaring</h3>
                </div>
                <div class="maroon-border-2 sec-5-box dark-overlay mr-5" id="sec-5-box-2">
                    <h2 class="text-maroon text-uppercase text-center counter">9488</h2>
                    <h3 class="text-white text-uppercase text-center">TEVREDEN klanten</h3>
                </div>
                <div class="maroon-border-2 sec-5-box dark-overlay" id="sec-5-box-3">
                    <h2 class="text-maroon text-uppercase text-center" id="third_counter"><div class="counter">100</div>%</h2>
                    <h3 class="text-white text-uppercase text-center">focus op kwaliteit</h3>
                </div>
            </div>

        </section>
    </main>
    <!-- /section 5 -->

    <!-- /section 5 -->

    <!-- section 5 -->
    <main>
        <section class="container">
            <div id="sec-7-title">
                <div class="col-lg-12 maroon-border-l-8">
                    <h2 class="bold-fam text-uppercase fs-40" id="reviews_title">Reviews <sup class="powered_by_google">Powered by <img class="lazyload" src="{{ asset('images/google-logo.png') }}"></sup></h2>
                    <h1 class="text-uppercase text-maroon mb-0 fs-50" id="reviews_subtitle">wat zeggen onze klanten</h1>
                </div>
            </div>

            <div id="reviews">
                <div class="row mt-5 mb-7 owl-carousel owl-theme">
                    <!-- Card 1 -->

                    @foreach($reviews as $review)
                        <div class="review-card col-lg-4 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                        <img class="img mx-auto d-block review-img lazyload rounded-circle img-thumbnail"
                                             data-src="{{ $review->logo }}" alt="">
                                        <img class="mx-auto d-block lazyload company-img" data-src="{{ asset('images/review-compnay.png') }}" alt="">
                                    </h5>
                                    <?php $desc_word_count = str_word_count($review->description); ?>
                                    <p class="card-text review_description" style="{{ $desc_word_count < 60 ? 'height: 269px;' : '' }}">{{ $review->description }}
                                    </p>
                                    @if($desc_word_count >= 60)
                                        <button class="btn btn-primary read_more" data-title="{{ $review->title }}" data-description="{{ $review->description }}">Read more</button>
                                    @endif
                                    <hr>
                                    <h6>{{ $review->title }}</h6>
                                    <div>
                                        <p><span class="duration">{{ $review->duration }}</span> - <span>Google</span>
                                            <span class="stars float-right">
                                            @for($i = 0; $i < $review->star; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                        </span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- section 6 -->
    <main id="sec-6" class="mt-10">
        <section class="container">
            <div class="text-white">
                <div class="row">
                    <div id="contact_us_offset_elem"></div>
                    <div class="col-lg-5 home-contact-us-sec-1">
                        <div class="home-contact-content text-center maroon-border-l-8">
                            <h2 class="text-maroon text-uppercase"><a class="text-decoration-none text-maroon" target="_blank" href="https://goo.gl/maps/8USbPt9p8NiXCVoY7"><i class="fa fa-map-marker"></i> Adres</a></h2>
                            <p class="mb-4 pre-line float-left contact-us-addr-first"><a class="text-decoration-none text-white" target="_blank" href="https://goo.gl/maps/8USbPt9p8NiXCVoY7">Rhijnspoor 255
                                2901 LB
                                Capelle aan den IJssel
                                </a></p>

{{--                            <p class="mb-4 pre-line float-left contact-us-addr-first"><u>Hoofd Kantoor:</u>--}}
{{--                                Rhijnspoor 255--}}
{{--                                2901 LB--}}
{{--                                Capelle aan den IJssel--}}
{{--                            </p>--}}

                            {{--                            <p class="mb-4 pre-line"><u class="pl-20">Werkplaats:</u>--}}
{{--                                <span class="pl-20">Breeweg 9</span>--}}
{{--                                <span class="pl-20">3075 LJ</span>--}}
{{--                                <span class="pl-20">Rotterdam</span>--}}
{{--                            </p>--}}
                            <h2 class="text-maroon text-uppercase"><a class="text-decoration-none text-maroon" href="tel:010-5300010"><i class="fa fa-phone"></i> Telefoon</a></h2>
                            <p class="mb-4 pl-30 text-uppercase pre-line"><a class="text-decoration-none text-white" href="tel:010-5300010">010 530 00 10</a>
                            </p>
                            <h2 class="text-maroon text-uppercase"><i class="fa fa-envelope"></i> Mail ons</h2>
                            <p class="mb-4 pl-33 pre-line">info@chiptuningrotterdam.nl
                            </p>
                            <h2 class="text-maroon text-uppercase"><i class="fa fa-clock-o"></i> Openingstijden</h2>
                            <p class="mb-4 pl-30 pre">Wij werken op afspraak:
Maandag t/m vrijdag :     09.00 tot 17.00
Zaterdag :                        08.00 tot 13.00
Zondag :                           Gesloten
                            </p>
                            <div id="eng_team">

                            </div>
                        </div>
                    </div>
                    <div class="mt-15 col-lg-7 home-contact-us-sec-2">
                        <div class="contact-us-title">
                            <div class="maroon-border-l-10 pl-3 text-uppercase mt-5 mb-5">
                                <h1 class="text-uppercase fs-35 mb-0">vraag een offerte aan</h1>
                                <h1 class="text-uppercase fs-35 mb-0">voor uw auto</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <form class="user" id="contact_us_form" action="{{ url('contact-us') }}" method="POST" novalidate>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control p-4" placeholder="Naam" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong id="name_error"></strong></span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="license_plate" name="license_plate" class="form-control p-4" placeholder="Kenteken" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong id="license_plate_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <input type="email" id="email" name="email" class="form-control p-4" placeholder="Email adres" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong id="email_error"></strong></span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="phone_number" name="phone_number" class="form-control p-4" placeholder="Telefoonumer" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong id="phone_number_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <textarea id="message" name="message" class="p-4 form-control" rows="5" placeholder="Bericht" autocomplete="off"></textarea>
                                    <span class="invalid-feedback d-block" role="alert"><strong id="message_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 contact_us_btn_wrapper">
                                    <button id="contact_us_btn" class="btn bg-white text-uppercase text-maroon">Verzenden</button>
                                </div>
                                <div class="col-lg-8">
                                    <div class="alert alert-success success-msg text-center d-none">
                                        <button type="button" class="close pl-2" data-dismiss="alert">×</button>
                                        <strong id="contact_us_msg">Lorem ipsum Expedita deserunt eos facere?</strong>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- /section 6 -->

    <!-- Recently Tuned Chiptuning -->
    <main>
        <section id="chiptuning" class="text-dark pt-5">
            <div class="container p-0">
                <div class="col-lg-12 maroon-border-l-8">
                    <h1 class="text-uppercase bold-fam mb-0" id="chiptuning_subtitle">Recentelijk getuned</h1>
                </div>
                <div class="row mt-5">
                    @foreach($images as $gallery)
                    <div class="col-lg-4 chiptuning-first-sec">
                        <img class="chiptuning-sec-img img-fluid" src="{{ images_path($gallery->image->url) }}"
                             alt="{{ $gallery->caption }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!-- / Recently Tuned Chiptuning -->

    <!-- Passion for Power -->
    <main class="bg-primary" id="passion_for_power">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <div class="passion-for-power-parent text-center m-0 vh-100 d-flex flex-column justify-content-center text-light mt-2">
                        <h1 class="display-4 passion-for-power-heading text-capitalize">
                            Passion for Power
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- /Passion for Power -->

    <main class="pt-4 pb-4" id="news_section">
        <section class="container pl-0">
            <div class="col-lg-12 pl-0" id="blog-title">
                <div class="pl-3 maroon-border-l-8">
                    <h2 class="bold-fam text-uppercase fs-40">Nieuws</h2>
                    <h1 class="text-uppercase text-maroon mb-0 fs-50">laatste ontwikkelingen op tuning gebied</h1>
                </div>
            </div>
            <div id="blog">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 pl-0 pt-5r img-padding">
                            <a class="blog-url" href="blog/{{ Str::slug($blog->title, '-') }}-{{ $blog->id }}">
                                <img data-src="{{ isset($blog->image->url) ? images_path($blog->image->url) : images_path('post_thumbnails/brand_placeholder.png') }}" class="lazyload home-blog-img" alt="{{ $blog->title }}">
                                <div class="blog-card home-blog-mobile p-4 bg-white">
                                    <h1 class="text-capitalize bold-fam fs-18 mb-3">{{ $blog->title }}</h1>
                                    <h5 class="fs-14 home-blog-date">{{ $blog->created_at->format('M d, Y') }}</h5>
                                    <div class="fs-14 home-blog-description blog_description pre-wrap blog-card-height">
                                        {!! strip_tags($blog->description, '<p>') !!}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
