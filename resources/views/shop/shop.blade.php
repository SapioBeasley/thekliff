@extends('layouts.app')

@section('title', 'Shop theKliff')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="page-title">
                <div class="image">
                    <img src="{{url('images/noProducts.jpg')}}" class="img-responsive" title="" alt=""/>
                </div>
                <div class="title-content">
                    <div class="title-content-wrap">
                        @if (empty($products))
                            <p class="small-text">SORRY...</p>
                            <p class="big-text">NO PRODUCTS FOUND</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">

            @if (! empty($products))
                <div class="col-md-3 no-padding">
                    @include('includes.shop.shopSidebar')
                </div>
                <div class="col-md-9 body-content products">
                    <div class="row">

                        @foreach ($products as $product)
                            <div class="col-md-4">
                                <div class="product-box-wrap">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="{{route('shop.show', $product['id'])}}">
                                                <img src="images/product-2.png" class="img-responsive" title="" alt=""/>
                                            </a>
                                            <div class="product-button">
                                                <a href="{{route('shop.show', $product['id'])}}">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-title">
                                            <h4><a href="{{route('shop.show', $product['id'])}}">{{$product['name']}}</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <p>${{money_format('%i', $product['price'])}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif

        </div>
    </div>
</section>

<section>
    @include('includes.threeSectionCallToAction')
</section>
@endsection
