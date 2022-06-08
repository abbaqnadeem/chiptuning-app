@extends('partials.layout')
@section('styles')
    <link href="assets/ekko-lightbox/ekko-lightbox.css" rel="stylesheet">
@endsection
@section('banner')
    <header class="contact-us-banner" id="home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <div class="text-center m-0 vh-100 d-flex flex-column justify-content-center text-light mt-2">
                        <div class="maroon-border-l-8 text-left p-0 pl-3 small_banner_border">
                            <h1 class="display-4 text-capitalize mb-0 small_banner_main_heading">
                                Gallery
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- Gallery -->

    <div id="banner_filters" class="d-none">
        @include('banner-filters')
    </div>

    <main>
        <section class="container gallery-content">
            <div class="row">
                <div class="col-md-12">
                    <div id="mdb-lightbox-ui"></div>
                    <div class="mdb-lightbox text-center">
                        <div class="row">
                            @foreach($images as $gallery)
                                <figure class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{ images_path($gallery->image->url) }}"
                                        data-title="{{ $gallery->caption }}" data-gallery="gallery" data-toggle="lightbox">
                                        <img alt="{{ $gallery->caption }}" src="{{ images_path($gallery->image->url) }}"
                                            class="img-fluid lazyload">
                                    </a>
                                </figure>
                            @endforeach
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="text-center mt-5 mb-5">
                                <button type="button" name="commit" id="load_more"
                                        class="btn maroon-bg text-white p-3 mb-2">Load More
                                </button>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Gallery -->
@endsection
@section('scripts')
    <script defer src="assets/ekko-lightbox/ekko-lightbox.min.js"></script>
@endsection