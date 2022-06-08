@extends('partials.layout')

@section('banner')
    <header class="gallery-banner" id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <div class="text-center m-0 vh-100 d-flex flex-column justify-content-center text-light mt-2">
                        <div class="maroon-border-l-8 text-left p-0 pl-3" id="gallery_banner_border">
                            <h1 class="display-4 text-capitalize mb-0" id="gallery_banner_main_heading">
                                Car Details
                            </h1>
                        </div>
                        <!-- <h3 class="text-capitalize" id="gallery_search_specification">
                            Zoek specificaties</h3> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- Custom Chip Tunning -->

    <section id="custom_chiptuning" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" id="custom_chiptuning_img" src="{{ asset('images/new-section-1.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="custom_chiptuning_title text-uppercase h-xl mb-4">custom chiptuning</h1>
                    <div class="text-left">
                        <p class="car_details_par pre-line">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour, or randomised words
                            which don't look even slightly believable.

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                            words, combined with a handful of model sentence.
                        </p>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <a href="javascript:void(0)"
                               class="custom_chiptuning_btn btn btn-primary maroon-bg btn-xl text-uppercase mr-3">
                                vraag offerte aan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="your_dashboard_easy">
                <div class="col-lg-6">
                    <h1 class="custom_chiptuning_title text-uppercase h-xl mb-4 mt-0">your dashboard easy</h1>
                    <div id="about_description" class="text-left">
                        <p class="car_details_par pre-line">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour, or randomised words
                            which don't look even slightly believable.

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet.
                        </p>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <a href="javascript:void(0)"
                               class="custom_chiptuning_btn btn btn-primary maroon-bg btn-xl text-uppercase mr-3">
                                vraag offerte aan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" id="about_img" src="{{ asset('images/car_details/dashboard_easy.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <main id="get_a_best_car_ever">
        <section class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="maroon-border-l-8">
                        <div class="col-lg-6 mt-7">
                            <h1 class="text-uppercase text-maroon mb-0 h-xl fs-35 pre">Get a best car ever</h1>
                        </div>
                        <div class="text-left text-white">
                            <p class="car_details_par border-left-none pre-line">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable.

                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet. It uses a dictionary of
                                over 200 Latin words, combined with a handful of model sentence.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="about_btn_row">
                        <div class="form-group">
                            <a href="javascript:void(0)"
                               class="custom_chiptuning_btn btn btn-primary maroon-bg btn-xl text-uppercase mr-3">
                                vraag offerte aan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <main id="get_a_best_car_ever_mobile"></main>

    <!-- /Custom Chip Tunning -->

    <main id="not_simply_a_car">
        <section class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-uppercase mb-3 bold-fam fs-35 pre mt-5" id="not_simply_a_car_title">this is not only a simple car</h1>
                    <h4 id="not_simply_a_car_subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                        deleniti deserunt dignissimos.</h4>
                </div>
                <div class="col-lg-6 not_simply_a_car_img_parent">
                    <img src="{{ asset('images/car_details/1.png') }}" class="img-fluid not_simply_a_car_img" alt="">
                </div>
                <div class="col-lg-6 not_simply_a_car_img_parent">
                    <img src="{{ asset('images/car_details/2.png') }}" id="not_simply_a_car_2nd_img" class="img-fluid not_simply_a_car_img"
                         alt="">
                    <img src="{{ asset('images/car_details/3.png') }}" class="img-fluid not_simply_a_car_img" alt="">
                </div>
            </div>

        </section>
    </main>

    <main id="feel_free_to_contact_us">
        <section class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto" id="feel_free_to_contact_us_content">
                    <h1 class="text-uppercase text-maroon mb-0 fs-45">Feel Free to contact us</h1>
                    <p class="feel_free_par">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis consectetur deleniti
                        ducimus earum hic ipsum iusto necessitatibus nobis nulla numquam officiis perferendis, perspiciatis,
                        quae, quibusdam reprehenderit sint temporibus veritatis!
                    </p>
                    <div class="form-group mx-auto">
                        <a href="javascript:void(0)"
                           class="custom_chiptuning_btn btn btn-primary maroon-bg btn-xl text-uppercase">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
