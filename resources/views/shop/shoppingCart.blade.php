@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')

    <!-- page title -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- page title wrap -->
                <div class="page-title">

                    <!-- page title image -->
                    <div class="image">
                        <img src="{{asset('images/noProducts.jpg')}}" class="img-responsive" title="" alt=""/>
                    </div>
                    <!-- .page title image -->

                    <!-- page title content -->
                    <div class="title-content">
                        <div class="title-content-wrap">
                            <p class="small-text">SINCE 2015 THEKLIFF</p>

                            <p class="big-text">SHOPPING CART</p>
                        </div>
                    </div>
                    <!-- .page title content -->

                </div>
                <!-- .page title wrap -->

            </div>
        </div>
    </section>
    <!-- .home slider -->

    <!-- breadcrumbs -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumbs">
                    <a href="shopping-cart.html#">SHOPPING CART</a>
                </div>
            </div>
        </div>
    </section>
    <!-- .breadcrumbs -->

    <!-- body content -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- checkout -->
                <div class="shopping-cart body-content clearfix">

                    <div class="col-xs-12 no-padding">
                        <div class="panel panel-info">

                            <div class="panel-heading">
                                <div class="s-cart-heading">
                                    <div class="panel-title">
                                        <div class="row">
                                            <div class="col-xs-12 text-right">
                                                <a href="{{route('shop.index')}}" class="content-button black-style">BACK TO SHOPPING</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">

                            @if (! is_null($products))
                                @foreach ($products as $product)
                                    <!-- cart-item -->
                                    <div class="row">
                                        <div class="cart-item">
                                            <div class="cart-item-remove">
                                                <a href="shopping-cart.html#">x</a>
                                            </div>
                                            <div class="cart-item-content clearfix">
                                                <div class="col-xs-1 no-padding">
                                                    <img class="img-responsive"  alt="product-image" src="{{$product['images'][0]['image_url']}}">
                                                </div>
                                                <div class="col-xs-5">
                                                    <h4>{{$product['name']}}</h4>
                                                </div>
                                                <div class="col-md-5 col-xs-4 text-right">
                                                    <h6>{{money_format('%i', $product['price'])}} X</h6>
                                                </div>
                                                <!-- <div class="col-md-1 col-xs-2">
                                                    <div class="select-box">
                                                        <input type="number" value="1" step="1" min="0">
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .cart-item -->
                                @endforeach
                            @endif
                                <!-- <div class="row">
                                    <div class="update-cart clearfix">
                                        <div class="text-right">
                                            <div class="col-md-10 col-xs-7">
                                                <h6>
                                                    <small>ADDED ITEMS?</small>
                                                </h6>
                                            </div>
                                            <div class="col-md-2 col-xs-5">
                                                <a href="shopping-cart.html" class="s-cart-btn green-btn">UPDATE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="panel-footer">
                                <div class="row text-right">
                                    <div class="to-checkout">
                                        <div class="col-md-9 col-xs-6 total">
                                            <h4>Total <strong>${{money_format('%i', $orderAmount)}}</strong></h4>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <a href="{{route('checkout.index')}}" class="s-cart-btn red-btn">CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- .checkout -->

            </div>
        </div>
    </section>
    <!-- .body content -->

    <!-- section 5 -->
    <section>
        @include('includes.threeSectionCallToAction')
    </section>
    <!-- .section 5 -->

@endsection
