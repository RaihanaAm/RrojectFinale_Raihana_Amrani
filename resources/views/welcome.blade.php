@extends('layout.Front')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        {{-- carouseel --}}
                        @foreach ($randoms as $product)
                            {{-- @if ($index >= 1 && $index <= 4) --}}

                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $product->name }} </h1>
                                                <p>{{ $product->desc }} </p>

                                                <button class="btn "><a
                                                        href="{{ route('singlepage.show', $product->id) }}"
                                                        class="btn_2">buy now</a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src="{{ asset('storage/' . $product->img) }}" width="100" height="300"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            {{-- @endif --}}
                        @endforeach

                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">

                @foreach ($lastFourElements as $product)
                    <div class="col-lg-6 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>{{ $product->name }}</p>
                            <h3>{{ $product->desc }}</h3>
                            <a href="{{ route('singlepage.show', $product) }}" class="feature_btn">EXPLORE NOW <i
                                    class="fas fa-play"></i></a>
                            <img class="img-fluid object-fit-cover" src="{{ asset('storage/' . $product->img) }}"
                                width="200" height="200" alt="{{ $product->name }}">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $index => $product)
                                    @if ($index >= 6 && $index <= 13)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single_product_item">
                                                <a href="{{ route('singlepage.show', $product->id) }}">
                                                    <img src="{{ asset('storage/' . $product->img) }}" alt="">
                                                </a>
                                                <div class="single_product_text">
                                                    <h4>{{ $product->name }}</h4>
                                                    <h3>${{ $product->price }}.00</h3>
                                                    <form action="{{route('storeCart.back', $product->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn" type='submit'><a class="add_cart">+ add to
                                                                cart<i class="ti-heart"></i></a> </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{ asset('storage/' . $products[0]->img) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <form action="{{ route('newsletter.contact') }}" method="POST" class="input-group">
                            @csrf
                            <div class="d-flex gap-2">

                                <input type="email" name="email" id="newsletter" placeholder="Email Address"
                                    class="form-control">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="input-group-text btn_2">Booknow</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->qnt <= 5)
                                <div class="single_product_item ml-3">
                                    <a href="{{ route('singlepage.show', $product->id) }}">
                                        <img class="" src="{{ asset('storage/' . $product->img) }}" width="250"
                                            height="250" alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{ $product->name }}</h4>
                                        <h3>${{ $product->price }}.00</h3>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <form action="{{ route('newsletter.contact') }}" method="POST" class="input-group">
                            @csrf
                            <div class="d-flex gap-2">

                                <input type="email" name="email" id="newsletter" placeholder="Email Address"
                                    class="form-control">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="input-group-text btn_2">Subscrube now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
