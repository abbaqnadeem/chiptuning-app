@extends('partials.layout')
@section('banner')
    <header class="contact-us-banner" id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <div class="text-center m-0 vh-100 d-flex flex-column justify-content-center text-light mt-2">
                        <div class="maroon-border-l-8 text-left p-0 pl-3 small_banner_border">
                            <h1 class="display-4 text-capitalize mb-0 small_banner_main_heading">
                                Neem contact op
                            </h1>
                        </div>
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

    <!-- contact_us -->
    <main>
        <section class="container contact-us-content">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-6">
                    <div class="maroon-border-contact-us p-0 pl-3" style="height: 131.75px">
                        <h3 class="text-capitalize bold-fam contact-us-title"><a class="text-decoration-none" style="color: #212529" target="_blank" href="https://goo.gl/maps/8USbPt9p8NiXCVoY7">Adres</a></h3>
                        <div>
                            <a class="text-decoration-none" style="color: #212529" target="_blank" href="https://goo.gl/maps/8USbPt9p8NiXCVoY7">
                            <div class="d-none d-md-block float-left contact-us-first-sec">
                                {{--                                <u class="">Hoofd Kantoor:</u>--}}
{{--                                mt-8--}}
                                <p class="mb-0">Rhijnspoor 255</p>
                                <p class="mb-0">2901 LB</p>
                                <p class="mb-0">Capelle aan den IJssel</p>
                                <br>
                            </div>
                            </a>
                            {{--                            <div class="mb-4 d-none d-md-block">--}}
                            {{--                                <u class="">Werkplaats:</u>--}}
                            {{--                                <p class="mt-8 mb-0">Breeweg 9</p>--}}
                            {{--                                <p class="mb-0">3075 LJ</p>--}}
                            {{--                                <p class="mb-0">Rotterdam</p>--}}
                            {{--                            </div>--}}
                        </div>
                        <a class="text-decoration-none" style="color: #212529" target="_blank" href="https://goo.gl/maps/8USbPt9p8NiXCVoY7">
                        <div style="margin-bottom: 7px;" class="d-lg-none d-md-none">
                            {{--                            <u class="">Hoofd Kantoor:</u>--}}
                            <p class="mt-8 mb-0">Rhijnspoor 255</p>
                            <p class="mb-0">2901 LB</p>
                            <p class="mb-0">Capelle aan den IJssel</p>
                            {{--                            <br>--}}
                            {{--                            <u class="">Werkplaats:</u>--}}
                            {{--                            <p class="mt-8 mb-0">Breeweg 9</p>--}}
                            {{--                            <p class="mb-0">3075 LJ</p>--}}
                            {{--                            <p style="margin-bottom: 30px;">Rotterdam</p>--}}
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 sm-6">
                    <div class="maroon-border-contact-us p-0 pl-3 contact-us-top-banner-sec-item">
                        <h3 class="text-capitalize bold-fam contact-us-title">Contact</h3>
                        <div class="d-none d-md-block">
                            <p class="mb-0"><span class="tel"><a class="text-decoration-none" style="color: #212529" href="tel:010-5300010">Tel:</span> 010 530 00 10</a></p>
                            <p class="mb-0"><span class="email">Email:</span> info@chiptuningrotterdam.nl
                            </p>
                            <p class="mb-0"><span class="whatsapp">Whatsapp:</span> 06-266 40 666</p>
                            <p class="mb-0"><a
                                    href="https://web.whatsapp.com/send?phone=31626640666" target="_blank"> <img
                                        class="whatsapp-logo-bg whatsapp_icon"
                                        src="images/whatsapp-logo-bg.jpg" alt=""></a> (Alleen voor berichten)</p>
                        </div>
                        <div style="margin-bottom: 7px;" class="d-lg-none d-md-none">
                            <p class="mb-0"><span class="tel">Tel:</span>010 530 00 10</p>
                            <p class="mb-0"><span class="email">Email:</span> info@chiptuningrotterdam.nl
                            </p>
                            <p class="mb-0"><span class="whatsapp">Whatsapp:</span> 06-266 40 666</p>
                            <p class="mb-0"><a
                                    href="https://api.whatsapp.com/send?phone=31626640666" target="_blank"> <img
                                        class="whatsapp-logo-bg whatsapp_icon"
                                        src="images/whatsapp-logo-bg.jpg" alt=""></a> (Alleen voor berichten)</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 sm-6">
                    <div class="maroon-border-contact-us p-0 pl-3 openingstijden-us-top-banner-sec-item">
                        <h3 class="text-capitalize bold-fam contact-us-title">Openingstijden</h3>
                        <div class="d-none d-md-block">
                            <p class="mb-0"><span class="first-item">Wij werken op afspraak:</span></p>
                            <p class="mt-0 mb-0"><span class="second-item">Maandag t/m vrijdag:</span>09.00 tot 17.00</p>
                            <p class="mt-0 mb-0"><span class="third-item">Zaterdag: </span>08.00 tot 13.00</p>
                            <p class="mt-0 mb-0"><span class="fourth-item">Zondag:</span>Gesloten</p>
                        </div>
                        <br class="d-sm-md">
                        <div style="margin-bottom: 7px;" class="d-lg-none d-md-none">
                            <p class="mb-0"><span class="first-item">Wij werken op afspraak:</span>
                                09:00 - 18:00</p>
                            <p class="mt-0 mb-0"><span class="second-item">Maandag t/m vrijdag:</span>09.00 tot
                                18.00</p>
                            <p class="mt-0 mb-0"><span class="third-item">Zaterdag: </span>08.00 tot 15.00</p>
                            <p class="mt-0 mb-0"><span class="fourth-item">Zondag:</span>Gesloten</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <form class="user" id="contact_us_form" action="{{ url('contact-us') }}" method="POST" novalidate>
                <div class="contact-us-dark contact-us-box bold-fam mt-4">
                    <div class="maroon-border-l-8 text-left mb-5 text-white">
                        <h1 class="pl-3 mb-2">VRAAG EEN OFFERTE AAN</h1>
                        <h1 class="pl-3 mb-2">VOOR UW AUTO</h1>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 form-group-mb-sm">
                            <input type="text" id="name" name="name" class="form-control p-4" placeholder="Naam"
                                   autocomplete="off">
                            <span class="invalid-feedback d-block" role="alert"><strong id="name_error"></strong></span>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" id="license_plate" name="license_plate" class="form-control p-4"
                                   placeholder="Kenteken" autocomplete="off">
                            <span class="invalid-feedback d-block" role="alert"><strong
                                    id="license_plate_error"></strong></span>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6  form-group-mb-sm">
                            <input type="email" id="email" name="email" class="form-control p-4"
                                   placeholder="Email adres" autocomplete="off">
                            <span class="invalid-feedback d-block" role="alert"><strong
                                    id="email_error"></strong></span>
                        </div>
                        <div class="col-lg-6 ">
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
                        <div class="col-lg-3 contact_us_btn_wrapper">
                            <button id="contact_us_btn"
                                    class="btn bg-white text-capitalize font-weight-light text-maroon">Verzenden
                            </button>
                        </div>
                        <div class="col-lg-9">
                            <div class="alert alert-success success-msg text-center d-none">
                                <button type="button" class="close pl-2" data-dismiss="alert">×</button>
                                <strong id="contact_us_msg"></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <!--<iframe src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyBNxi0Vp3fciEdYE7MIxx6yTZwjH9g_obQ&center=51.89671893853551,4.515674366321907&zoom=14&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0x212121&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x757575&style=element:labels.text.stroke%7Ccolor:0x212121&style=feature:administrative%7Celement:geometry%7Ccolor:0x757575&style=feature:administrative.country%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:administrative.land_parcel%7Cvisibility:off&style=feature:administrative.locality%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0x181818&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:poi.park%7Celement:labels.text.stroke%7Ccolor:0x1b1b1b&style=feature:road%7Celement:geometry.fill%7Ccolor:0x2c2c2c&style=feature:road%7Celement:labels.text.fill%7Ccolor:0x8a8a8a&style=feature:road.arterial%7Celement:geometry%7Ccolor:0x373737&style=feature:road.highway%7Celement:geometry%7Ccolor:0x3c3c3c&style=feature:road.highway.controlled_access%7Celement:geometry%7Ccolor:0x4e4e4e&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:transit%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:water%7Celement:geometry%7Ccolor:0x000000&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x3d3d3d"   width="100%" height="480"></iframe>-->

    <!-- contact_us -->

@endsection
