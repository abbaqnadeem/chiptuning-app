@extends('partials.layout')

@section('content')

    <div id="banner_filters" class="d-none mt-10">
        @include('banner-filters')
    </div>

    <!-- blog-details -->
    <main>
        <section class="container blog-details-content">
            <div class="row">
                <div class="text-dark col-md-9">
                    <h1 class="blog-details-title">{{ $blog->title }}</h1>
                    <h5 class="fs-14 mb-3">{{ $blog->created_at->format('M d, Y') }}</h5>
                    {!! str_replace('img', 'img class="img-fluid"', $blog->description) !!}
                </div>
                <div class="col-md-3">
                    <h1 class="text-dark blog-details-title">Recent Posts</h1>
                    @foreach($recent_posts as $recent_post)
                        <a class="text-dark" href="{{ Str::slug($blog->title, '-') }}-{{ $recent_post->id }}">
                            <h5>{{ $recent_post->title }}</h5>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!--/ blog-details -->

    <!-- reviews -->
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
    <!-- /reviews -->

    <main class="pt-4 pb-4">
        <section class="container pl-0">
            <div class="col-lg-12 pl-0" id="blog-title">
                <div class="pl-3 maroon-border-l-8">
                    <h2 class="bold-fam text-uppercase fs-40">Recent Posts</h2>
                </div>
            </div>
            <div id="blog">
                <div class="row">
                    @foreach($recent_posts as $recent_post)
                        <div class="col-lg-4 pl-0 pt-5r img-padding">
                            <a class="blog-url" href="blog/{{ Str::slug($recent_post->title, '-') }}-{{ $recent_post->id }}">
                                <img data-src="{{ isset($recent_post->image->url) ? images_path($recent_post->image->url) : images_path('post_thumbnails/brand_placeholder.png') }}" class="lazyload home-blog-img" alt="{{ $recent_post->title }}">
                                <div class="blog-card p-4 bg-white">
                                    <h1 class="text-capitalize bold-fam fs-18 mb-3">{{ $recent_post->title }}</h1>
                                    <h5 class="fs-14">{{ $recent_post->created_at->format('M d, Y') }}</h5>
                                    <div class="fs-14 blog_description pre-wrap blog-card-height">
                                        {!! strip_tags($recent_post->description, '<p>') !!}
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
