@extends('partials.layout')

@section('styles')
    <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet"/>
@endsection

@section('content')

    <div id="banner_filters" class="d-none">
        @include('banner-filters')
    </div>

    @if(isset($tuning) && isset($brand) && isset($generation) && isset($engine))

        <!-- Staging Section -->
        <main class="pt-5 staging_section" id="tuning_table">

            @include('desktop_tuning_table')
            @include('mobile_tuning_table')

            <div class="container-fluid">
                <div class="row pb-3">
                    <div class="col-lg-12 mt-5 mobile-staging-btns text-center">
                        <a href="javascript:void(0)"
                           class="stages-btn btn white-bg btn-xl text-uppercase mr-5 mb-0" id="quote_btn">
                            <i class="fa fa-envelope pr-1"></i> Vraag offerte aan
                        </a>
                        <a href="tel:010-5300010"
                           class="stages-btn btn white-bg btn-xl text-uppercase mr-5 mb-0" id="phone_btn">
                            <i class="fa fa-phone pr-1"></i> Bel 010 - 53 000 10
                        </a>
                        <a href="https://web.whatsapp.com/send?phone=31626640666" target="_blank"
                           class="stages-btn btn white-bg btn-xl text-uppercase mr-5 mb-0" id="whatsapp_btn">
                            <img id="whatsapp_logo" src="images/whatsapp-logo.png" alt=""> Contact via Whatsapp
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- /Staging Section -->
    @endif

    {{-- Benefits --}}
    <main
        class="pb-6 {{ !(isset($tuning) && isset($brand) && isset($generation) && isset($engine)) ? 'staging_section' : '' }}">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs chiptuning-benefits-tab light-gray-bg nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active benefits text-uppercase mb-0" id="benefit-1-tab"
                                   data-toggle="tab"
                                   href="#benefit-1"
                                   role="tab" aria-controls="benefit-1" aria-selected="true">Chiptuning
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link benefits text-uppercase mb-0" id="benefit-2-tab" data-toggle="tab"
                                   href="#benefit-2"
                                   role="tab" aria-controls="benefit-2" aria-selected="false">Voordelen
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link benefits text-uppercase mb-0" id="benefit-3-tab" data-toggle="tab"
                                   href="#benefit-3"
                                   role="tab" aria-controls="benefit-3" aria-selected="false">Automaat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link benefits text-uppercase mb-0" id="benefit-4-tab" data-toggle="tab"
                                   href="#benefit-4"
                                   role="tab" aria-controls="benefit-4" aria-selected="false">Opties
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link benefits text-uppercase mb-0" id="benefit-5-tab" data-toggle="tab"
                                   href="#benefit-5"
                                   role="tab" aria-controls="benefit-5" aria-selected="false">Grafiek
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-3 arial" id="benefitsTabContent">
                            <div class="tab-pane fade show active" id="benefit-1" role="tabpanel"
                                 aria-labelledby="benefit-1-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="arial mb-5 underline">Hoe gaan wij te werk ?</h3>
                                        <h3 class="arial">Diagnose</h3>
                                        <p class="pre-wrap">Alvorens met de chiptuning te beginnen moet eerst een
                                            diagnose
                                            uitgevoerd worden van de auto. We beginnen met het uitlezen van het
                                            storingsgeheugen
                                            vervolgens wordt er een diagnose proefrit gemaakt waarbij de computer
                                            aangesloten is
                                            om een aantal "real-time" waardes te controleren. Denk aan waardes zoals
                                            turbodruk,
                                            ontsteking, nokkenastimming, lambda en andere zaken.</p>
                                        <h3 class="arial">Chiptuning</h3>
                                        <p class="pre-wrap">Na de diagnose beginnen wij pas met de chiptuning. Als
                                            eerste wordt
                                            er een volledige
                                            back-up gemaakt van de originele software van de auto. Hierbij wordt gekeken
                                            of deze
                                            reeds eerder is aangepast of getuned. Vervolgens wordt de software bewerkt
                                            en de
                                            waardes van het motormanagement geoptimaliseerd. Het resultaat is een
                                            chiptuning op
                                            maat afgestemd op de wensen van de klant en technische mogelijkheden van de
                                            auto.
                                        </p>
                                        <p class="pre-wrap">
                                        <h3 class="arial">Proefrit</h3>Na het programmeren van de auto met de nieuwe
                                        software gaan we
                                        vervolgens een
                                        proefrit uitvoeren wederom met diagnose apparatuur. Hierbij testen wij hoe de
                                        geoptimaliseerde motor software op de auto functioneert. De auto wordt warm
                                        gereden
                                        op deellast en getest op vollast. Indien nodig wordt de software na deze testrit
                                        nogmaals aangepast zodat een optimaal eindresultaat bereikt wordt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="benefit-2" role="tabpanel"
                                 aria-labelledby="benefit-2-tab">
                                <div class="row arial">
                                    <div class="col-lg-6">
                                        <h3 class="arial underline">De voordelen van chiptuning</h3>
                                        <p class="pre-wrap">
                                            Na het chiptunen van uw
                                            "{{ $brand->name ?? 'brand' }} {{ $model->name ?? 'model'}}" merkt u direct
                                            een verbetering in de
                                            acceleratie en het gaspedaal response. De auto voelt een stuk dynamischer
                                            aan,
                                            is
                                            sterker in de lagere toeren en zorgt voor meer rijplezier. Wij van
                                            Chiptuning
                                            Rotterdam hebben veel ervaring opgedaan met het tunen van de
                                            "{{ $brand->name ?? 'brand' }} {{ $model->name ?? 'model'}}" ,
                                            de
                                            software wordt ons zelf ontwikkeld en is dus altijd op maat geschreven voor
                                            uw
                                            "{{ $brand->name ?? 'brand' }} {{ $model->name ?? 'model'}}". Dit is de
                                            enige manier om duurzame, betrouwbare en veilige
                                            chip-tuning te garanderen voor uw
                                            "{{ $brand->name ?? 'brand' }} {{ $model->name ?? 'model'}}". Neem vandaag
                                            nog contact
                                            met
                                            ons op
                                            voor een vrijblijvend advies over de chiptuning van uw
                                            "{{ $brand->name ?? 'brand' }} {{ $model->name ?? 'model'}}".
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="second-unordered-checklist">
                                            <li>Verbeterde acceleratie</li>
                                            <li>Lager brandstoverbruik</li>
                                            <li>Tuning op maat</li>
                                            <li>5 jaar garantie</li>
                                            <li>Volledige diagnose</li>
                                            <li>Binnen marges van fabrikant</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="benefit-3" role="tabpanel"
                                 aria-labelledby="benefit-3-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="arial underline">DSG / S-Tronic Software aanpassen</h3>
                                        <p class="pre-wrap">
                                            Voor een optimale tuning is het aan te bevelen om ook de software van de DSG
                                            aan te passen. De DSG heeft een eigen computer en indien de motor getuned
                                            wordt zal de auto veel beter / soepeler zijn vermogen afgeven indien de DSG
                                            ook opnieuw afgesteld wordt . Wij voeren diverse aanpassingen door zoals
                                            verleggen koppel begrenzer, aanpassing schakeltijd, het schakelgedrag en het
                                            moment van schakelen waardoor uw auto veel prettiger rijdt en opnieuw
                                            afgesteld wordt op het hogere vermogen en koppel van de motor. Daarnaast
                                            zitten er begrenzers die het vermogen van de motor begrenzen, zonder DSG
                                            aanpassing kan je tegen deze begrenzers aanlopen wat ten koste gaat van het
                                            toegenomen vermogen. </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <img class="chiptuning-sec-img img-fluid bold-gray-border-full"
                                                 src="images/chiptuning-2.png"
                                                 alt="DSG Tuning ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <ul class="bullet-unordered-checklist mt-2">
                                            <li>DSG Tuning DQ200</li>
                                            <li>DSG Tuning DQ250</li>
                                            <li>DSG Tuning DQ380</li>
                                            <li>DSG Tuning DQ381</li>
                                            <li>DSG Tuning DQ400</li>
                                            <li>DSG Tuning DQ500</li>
                                            <li>DSG Tuning DL501</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul class="second-unordered-checklist">
                                            <li>Schakeltijd verkorten</li>
                                            <li>Schakelmomenten aanpassen</li>
                                            <li>Max toerental verhogen (benzine motoren)</li>
                                            <li>Max toerental verlagen (diesel motoren)</li>
                                            <li>Automatisch opschakelen verwijderen</li>
                                            <li>Launch Control</li>
                                            <li>ZF AL551</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="benefit-4" role="tabpanel"
                                 aria-labelledby="benefit-4-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="arial underline">Opties</h3>
                                        <div class="pre-wrap mb-5">Voor een verdere optimalisatie van uw auto bieden wij
                                            nog de volgende opties:
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="arial">Vmax uitschakelen</h3>
                                        <div class="pre-wrap mb-2">Snelheidsbegrenzer aanpassen of verwijderen</div>
                                        <h3 class="arial">RPM limiter</h3>
                                        <div class="pre-wrap mb-2">Toerenbegrenzer aanpassen</div>
                                        <h3 class="arial">EGR</h3>
                                        <div class="pre-wrap mb-2">Vele EGR storingen kunnen door software opgelost
                                            worden. EGR storingen zijn vaak direct gerelateerd (vervuiling EGR door
                                            hergebruik van uitlaatgassen) of indirect door defecte of vervuilde
                                            sensoren.
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="arial">Pops and Bangs</h3>
                                        <div class="pre-wrap mb-2">Ook wel exhaust crackle genoemd, dit is het geluid
                                            wat je hoort wanneer brandstof ontploft in de uitlaat bij het loslaten van
                                            het gaspedaal.
                                        </div>
                                        <h3 class="arial">Start / Stop uitschakeling</h3>
                                        <div class="pre-wrap mb-2">De motor slaat automatisch af indien u stilstaat met
                                            de auto. Wij kunnen via software deze functie permanent uitzetten voor
                                            meeste auto’s.
                                        </div>
                                        <h3 class="arial">DPF / Roetfilters</h3>
                                        <div class="pre-wrap mb-2">DPF softwarematig wegschrijven is alleen toegestaan
                                            voor race gebruik. Voor straat gebruik is dit niet legaal volgens de laatste
                                            APK regels.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="benefit-5" role="tabpanel"
                                 aria-labelledby="benefit-5-tab">
                                <div class="row mt-5 mb-5">
                                    <div class="col-lg-6">
                                        <img class="img-fluid benefits-tab-5-content"
                                             src="{{ asset('images/benefits-tab-5-1.png') }}" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-fluid benefits-tab-5-content"
                                             src="{{ asset('images/benefits-tab-5-2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    {{-- /Benefits --}}

    <!-- section 6 -->
    <main id="sec-6">
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
                        <form class="user" id="contact_us_form" action="{{ url('contact-us') }}" method="POST"
                              novalidate>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control p-4" placeholder="Naam"
                                           autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong
                                            id="name_error"></strong></span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="license_plate" name="license_plate" class="form-control p-4"
                                           placeholder="Kenteken" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong
                                            id="license_plate_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <input type="email" id="email" name="email" class="form-control p-4"
                                           placeholder="Email adres" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong
                                            id="email_error"></strong></span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="phone_number" name="phone_number" class="form-control p-4"
                                           placeholder="Telefoonumer" autocomplete="off">
                                    <span class="invalid-feedback d-block" role="alert"><strong
                                            id="phone_number_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <textarea id="message" name="message" class="p-4 form-control" rows="5"
                                              placeholder="Bericht" autocomplete="off"></textarea>
                                    <span class="invalid-feedback d-block" role="alert"><strong
                                            id="message_error"></strong></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4 contact_us_btn_wrapper">
                                    <button id="contact_us_btn" class="btn bg-white text-uppercase text-maroon">
                                        Verzenden
                                    </button>
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

    <!-- reviews section -->
    <main>
        <section class="container">
            <div id="sec-7-title">
                <div class="col-lg-12 maroon-border-l-8">
                    <h2 class="bold-fam text-uppercase fs-40" id="reviews_title">Reviews <sup class="powered_by_google">Powered
                            by <img class="lazyload" src="{{ asset('images/google-logo.png') }}"></sup></h2>
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
                                        <img
                                            class="img mx-auto d-block review-img lazyload rounded-circle img-thumbnail"
                                            data-src="{{ $review->logo }}" alt="">
                                        <img class="mx-auto d-block lazyload company-img"
                                             data-src="{{ asset('images/review-compnay.png') }}" alt="">
                                    </h5>
                                    <?php $desc_word_count = str_word_count($review->description); ?>
                                    <p class="card-text review_description"
                                       style="{{ $desc_word_count < 60 ? 'height: 269px;' : '' }}">{{ $review->description }}
                                    </p>
                                    @if($desc_word_count >= 60)
                                        <button class="btn btn-primary read_more" data-title="{{ $review->title }}"
                                                data-description="{{ $review->description }}">Read more
                                        </button>
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
    <!-- /reviews section -->

    <!-- Recently Tuned Chiptuning -->
    <main>
        <section id="chiptuning" class="text-dark pt-5 pb-5">
            <div class="container">
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
@endsection
