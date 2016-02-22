@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<!-- page title -->
<section>
    <div class="container-fluid">
        <div class="row">

            <!-- page title wrap -->
            <div class="page-title">

                <!-- page title image -->
                <div class="image">
                    <img src="{{url('images/slide-5.jpg')}}" class="img-responsive" title="" alt=""/>
                </div>
                <!-- .page title image -->

                <!-- page title content -->
                <div class="title-content">
                    <div class="title-content-wrap">
                        <p class="small-text">SINCE 2015 THEKLIFF</p>

                        <p class="big-text">GREAT OFFER</p>
                    </div>
                </div>
                <!-- .page title content -->

            </div>
            <!-- .page title wrap -->

        </div>
    </div>
</section>
<!-- .home slider -->

<!-- body content -->
<section>
    <div class="container-fluid">
        <div class="row">

            <!-- product single -->
            <div class="col-md-12 no-padding">
                <div class="product-single-wrap full-width clearfix">

                    <!-- media -->
                    <div class="product-single-media clearfix">
                        <div class="simpleLens-gallery-container" id="demo-1">

                            @include('includes.shop.product.media')

                        </div>
                    </div>
                    <!-- media -->

                    <!-- content -->
                    <div class="product-content-wrap">

                        <!-- title -->
                        <div class="product-single-title">

                            <!-- short descript -->
                            <h1>{{$product['name']}}</h1>

                            <p class="product-single-date">IN STOCK - SHIPPING AVAILABLE</p>
                            <span class="bottom-border"></span>

                            <p class="product-short-description">{{$product['description']}}</p>
                            <!-- .short descript -->

                            <!-- title -->
                            <div class="product-single-price">
                                <p>
                                    PRICE:
                                    <span class="new-price">${{money_format('%i', $product['price'])}}</span>
                                    <!-- <span class="old-price">$102.99</span> -->
                                </p>
                            </div>
                            <!-- .title -->

                            <hr/>

                            <!-- add to cart -->
                            <div class="add-to-cart">
                                <form action="#" method="get">

                                    <!-- select -->
                                    <!-- <div class="select-box">
                                        <label>COLOR:</label>
                                        <select>
                                            <option selected> Black</option>
                                            <option>White</option>
                                            <option>Black</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                        </select>
                                    </div> -->
                                    <!-- .select -->

                                    <!-- select -->
                                    <div class="select-box">
                                        <label>SIZE: <a href="#" data-toggle="modal" data-target="#sizeModal"><i class="fa fa-info-circle"></i></a>
                                        </label>
                                        <select>
                                            <option selected> S</option>
                                            <option>XXL</option>
                                            <option>XL</option>
                                            <option>L</option>
                                            <option>M</option>
                                            <option>S</option>
                                        </select>
                                    </div>
                                    <!-- .select -->

                                    <!-- select -->
                                    <div class="select-box">
                                        <label>QTY:</label>
                                        <input type="number" value="0" step="1"/>
                                    </div>
                                    <!-- .select -->

                                    <hr/>

                                    <!-- add to cart -->
                                    <div class="select-box button">
                                        <input name="submit" type="submit" id="addtocart" class="submit active" value="ADD TO CART">
                                    </div>
                                    <!-- .add to cart -->

                                </form>
                            </div>
                            <!-- .add to cart -->

                            <!-- SIZE MODAL -->
                            <div class="modal fade" id="sizeModal" tabindex="-1" role="dialog" aria-labelledby="sizeModal" aria-hidden="true">
                                @include('includes.shop.sizeGuide')
                            </div>
                            <!-- .SIZE MODAL -->

                            <!-- meta -->
                            <div class="blog-single-meta product">
                                <div class="blog-single-meta-wrap">
                                    <div class="blog-single-meta-background">

                                        <!-- categories -->
                                        <div class="blog-single-categories">

                                            <p>CATEGORIES: {{strtoupper($productCategories)}}</p>

                                        </div>
                                        <!-- .categories -->

                                    </div>
                                </div>
                            </div>
                            <!-- .meta -->

                        </div>
                        <!-- .content -->
                    </div>

                    <div class="clearfix"><hr/></div>

                    <!-- tabs -->
                    <div class="product-single-tabs clearfix">
                        @include('includes.shop.tabPanel')
                    </div>
                    <!-- tabs -->

                </div>
                <!-- .product single -->
            </div>
            <!-- .blog single -->

        </div>

    </div>
</section>
<!-- body content -->

<!-- section 5 -->
<section>
    @include('includes.threeSectionCallToAction')
</section>
<!-- .section 5 -->

@endsection
