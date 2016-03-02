@extends('layouts.app')

@section('title', 'theKliff | thekliff.com')

@section('content')

    <!-- home slider -->
    <section>
        <div class="home-slider">
            @include('includes.slider')
        </div>
    </section>
    <!-- .home slider -->

    <!-- section 1 -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- newsletter box -->
                <div class="col-md-6 no-padding">
                    @include('includes.newsletterBox')
                </div>
                <!-- .newsletter box -->

                <!-- simple box -->
                <div class="col-md-3 no-padding">
                    @include('includes.latestNewsBox')
                </div>
                <!-- .simple box -->

                <!-- simple box -->
                <div class="col-md-3 no-padding">
                    @include('includes.freeShippingBox')
                </div>
                <!-- simple box -->

            </div>
        </div>
    </section>
    <!-- .section 1 -->

    <!-- section 2 -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- image box -->
                <div class="col-md-6 no-padding">
                    @include('includes.menOnly')
                </div>
                <!-- .image box -->

                <!-- image box -->
                <div class="col-md-6 no-padding">
                    @include('includes.womenOnly')
                </div>
                <!-- .image box -->

            </div>
        </div>
    </section>
    <!-- .section 2 -->

    <!-- section 5 -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no-padding">
                    <div class="promo-block white">
                        <p>THIS IS BACKGROUND COLOR</p>

                        <h3>LATEST FROM SHOP</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .section 5-->

    <!-- section 6 -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- featured slider -->
                <div class="col-md-12 no-padding">
                    <div class="featured-product-slider">
                        <div class="carousel slide">
                            <div class="carousel-inner">

                                <!-- 1 -->
                                <div class="item active">

                                    <div class="row">

                                        @foreach ($products as $product)
                                            <div class="col-md-3 no-padding">
                                                <div class="product-box-wrap">
                                                    <div class="product-box">

                                                        <!-- image -->
                                                        <div class="product-image">
                                                            <a href="{{route('shop.show', $product['id'])}}">
                                                                <img src="{{$product['images'][0]['image_url']}}" class="img-responsive" title="" alt=""/>
                                                            </a>

                                                            <!-- add to cart -->
                                                            <div class="product-button">
                                                                <a href="{{route('shop.addToCart', 'product=' . $product['id'])}}">ADD TO CART</a>
                                                            </div>
                                                            <!-- .add to cart -->

                                                        </div>
                                                        <!-- .image -->

                                                        <!-- content -->
                                                        <div class="product-content">

                                                            <!-- product title -->
                                                            <div class="product-title">
                                                                <h4><a href="{{route('shop.show', $product['id'])}}">{{$product['name']}}</a></h4>
                                                            </div>
                                                            <!-- .product title -->

                                                            <!-- product price -->
                                                            <div class="product-price">
                                                                <p>${{money_format('%i', $product['price'])}}</p>
                                                            </div>
                                                            <!-- .product price -->

                                                        </div>
                                                        <!-- .content -->

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <!-- .1 -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .image box -->

            </div>
        </div>
    </section>
    <!-- .section 6-->

    <!-- section 7 -->
    <section>
        @include('includes.threeSectionCallToAction')
    </section>
    <!-- .section 7 -->

@endsection
