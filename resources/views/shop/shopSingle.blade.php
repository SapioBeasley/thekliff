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

                                <!-- main image -->
                                <div class="simpleLens-container">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{ url('images/single-product-3-zoom.png') }}">
                                            <img src="{{ url('images/single-product-3.png') }}" class="simpleLens-big-image img-responsive" title="" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <!-- .main image -->

                                <!-- thumbnails -->
                                <div class="simpleLens-thumbnails-container">
                                    @include('includes.shop.product.thumbnails')
                                </div>
                                <!-- .thumbnails -->

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
                                        <span class="old-price">$102.99</span>
                                    </p>
                                </div>
                                <!-- .title -->

                                <hr/>

                                <!-- add to cart -->
                                <div class="add-to-cart">
                                    <form action="#" method="get">

                                        <!-- select -->
                                        <div class="select-box">
                                            <label>COLOR:</label>
                                            <select>
                                                <option selected> Black</option>
                                                <option>White</option>
                                                <option>Black</option>
                                                <option>Red</option>
                                                <option>Blue</option>
                                            </select>
                                        </div>
                                        <!-- .select -->

                                        <!-- select -->
                                        <div class="select-box">
                                            <label>SIZE: <a href="#" data-toggle="modal" data-target="#sizeModal"><i
                                                    class="fa fa-info-circle"></i></a>
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
                                            <input name="submit" type="submit" id="addtocart" class="submit active"
                                                   value="ADD TO CART">
                                        </div>
                                        <!-- .add to cart -->

                                    </form>
                                </div>
                                <!-- .add to cart -->

                                <!-- SHARE MODAL-->
                                <div class="modal fade" id="shareModal" tabindex="-1" role="dialog"
                                     aria-labelledby="shareModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body theKliff">
                                                <a href="#_" class="pull-right close-modal" data-dismiss="modal"><i
                                                        class="fa fa-close"></i>
                                                </a>
                                                <h4>SHARE THIS PRODUCT</h4>
                                                <!-- add to cart -->
                                                <div class="select-box button icon">
                                                    <a href="#" title="Compare product"><i
                                                            class="fa fa-fw fa-facebook"></i></a>
                                                </div>
                                                <!-- .add to cart -->
                                                <!-- add to cart -->
                                                <div class="select-box button icon">
                                                    <a href="#" title="Compare product"><i
                                                            class="fa fa-fw fa-twitter"></i></a>
                                                </div>
                                                <!-- .add to cart -->
                                                <!-- add to cart -->
                                                <div class="select-box button icon">
                                                    <a href="#" title="Compare product"><i
                                                            class="fa fa-fw fa-google-plus"></i></a>
                                                </div>
                                                <!-- .add to cart -->
                                                <!-- add to cart -->
                                                <div class="select-box button icon">
                                                    <a href="#" title="Compare product"><i
                                                            class="fa fa-fw fa-pinterest"></i></a>
                                                </div>
                                                <!-- .add to cart -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- .SHARE MODAL -->

                                <!-- SHARE MODAL-->
                                <div class="modal fade" id="compareModal" tabindex="-1" role="dialog"
                                     aria-labelledby="compareModal" aria-hidden="true">
                                    <div class="modal-dialog modal-huge">
                                        <div class="modal-content">
                                            <div class="modal-body theKliff">
                                                <a href="#_" class="pull-right close-modal" data-dismiss="modal"><i
                                                        class="fa fa-close"></i>
                                                </a>
                                                <h4>COMPARE PRODUCTS</h4>
                                                <!-- table compare -->
                                                <div class="table-responsive compare-table">
                                                    <table class="table table-condensed table-hover">
                                                        <tbody>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Title</p>
                                                            </td>
                                                            <td class="content-part title">
                                                                <p>GREAT NADURO JEANS <span
                                                                        class="pull-right remove-compare"><a
                                                                        href="#_"><i class="fa fa-close"></i></a></span>
                                                                </p>
                                                            </td>
                                                            <td class="content-part title">
                                                                <p>NICE BLACK T-SHIRT <span
                                                                        class="pull-right remove-compare"><a
                                                                        href="#_"><i class="fa fa-close"></i></a></span>
                                                                </p>
                                                            </td>
                                                            <td class="content-part title">
                                                                <p>TOP NOTCH BLUE JEANS <span
                                                                        class="pull-right remove-compare"><a
                                                                        href="#_"><i class="fa fa-close"></i></a></span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Image</p>
                                                            </td>
                                                            <td class="content-image">
                                                                <img src="{{url('images/product-1.png')}}" class="img-thumbnail"
                                                                     title="" alt=""/>
                                                            </td>
                                                            <td class="content-image">
                                                                <img src="{{url('images/product-2.png')}}" class="img-thumbnail"
                                                                     title="" alt=""/>
                                                            </td>
                                                            <td class="content-image">
                                                                <img src="{{url('images/product-3.png')}}" class="img-thumbnail"
                                                                     title="" alt=""/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Ratings</p>
                                                            </td>
                                                            <td class="content-image">
                                                                <div class="product-ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </td>
                                                            <td class="content-image">
                                                                <div class="product-ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </td>
                                                            <td class="content-image">
                                                                <div class="product-ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Description</p>
                                                            </td>
                                                            <td class="content-descript">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adi piscing
                                                                    elit. Suspendisse erat mi, tempor vitae vestibulum
                                                                    viverra.
                                                                </p>
                                                            </td>
                                                            <td class="content-descript">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adi piscing
                                                                    elit. Suspendisse erat mi, tempor vitae vestibulum
                                                                    viverra.
                                                                </p>
                                                            </td>
                                                            <td class="content-descript">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adi piscing
                                                                    elit. Suspendisse erat mi, tempor vitae vestibulum
                                                                    viverra.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Availability</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>IN STOCK</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>IN STOCK</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>IN STOCK</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Size</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>XL</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>XL, XXL</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>S, XL</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Color</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>RED</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>BLACK</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>BLUE</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Category</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>MEN</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>WOMEN</p>
                                                            </td>
                                                            <td class="content-part">
                                                                <p>MEN, JEANS</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="part-title">
                                                                <p>Price</p>
                                                            </td>
                                                            <td class="content-price">
                                                                <p>$165.00</p>
                                                            </td>
                                                            <td class="content-price">
                                                                <p>$227.00</p>
                                                            </td>
                                                            <td class="content-price">
                                                                <p>$99.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="content-button-black">ADD TO CART</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="content-button-black">SELECT
                                                                    OPTIONS</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="content-button-black">ADD TO CART</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- .add to cart -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- .SHARE MODAL -->

                                <!-- SIZE MODAL -->
                                <div class="modal fade" id="sizeModal" tabindex="-1" role="dialog"
                                     aria-labelledby="sizeModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body theKliff">
                                                <a href="#_" class="pull-right close-modal" data-dismiss="modal"><i
                                                        class="fa fa-close"></i>
                                                </a>
                                                <h4>SIZE GUIDE</h4>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <td></td>
                                                            <td>XXS</td>
                                                            <td>XS</td>
                                                            <td>S</td>
                                                            <td>M</td>
                                                            <td>L</td>
                                                            <td>XL</td>
                                                            <td>XXL</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>Bust</th>
                                                            <td>78</td>
                                                            <td>82</td>
                                                            <td>86</td>
                                                            <td>90</td>
                                                            <td>96</td>
                                                            <td>103</td>
                                                            <td>110</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Waist</th>
                                                            <td>60</td>
                                                            <td>64</td>
                                                            <td>68</td>
                                                            <td>72</td>
                                                            <td>78</td>
                                                            <td>85</td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Hips</th>
                                                            <td>86</td>
                                                            <td>90</td>
                                                            <td>94</td>
                                                            <td>98</td>
                                                            <td>104</td>
                                                            <td>111</td>
                                                            <td>118</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- .SIZE MODAL -->

                                <!-- meta -->
                                <div class="blog-single-meta product">
                                    <div class="blog-single-meta-wrap">
                                        <div class="blog-single-meta-background">

                                            <!-- categories -->
                                            <div class="blog-single-categories">
                                                <p>CATEGORIES:<a href="#">LORE</a>, <a href="#">IPSUM</a>, <a href="#">DOLOR</a>,
                                                    <a href="#">AMET</a>, <a href="#">VELUM</a>
                                                </p>
                                            </div>
                                            <!-- .categories -->

                                        </div>
                                    </div>
                                </div>
                                <!-- .meta -->

                            </div>
                            <!-- .content -->
                        </div>

                        <div class="clearfix">
                            <hr/>
                        </div>

                        <!-- tabs -->
                        <div class="product-single-tabs clearfix">
                            <div role="tabpanel">

                                <!-- navs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#details" aria-controls="details" role="tab" data-toggle="tab">DETAILS</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#washinginstructions" aria-controls="washinginstructions" role="tab" data-toggle="tab">WASHING INSTRUCTIONS</a>
                                    </li>
                                </ul>
                                <!-- nav -->

                                <!-- panels -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="details">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi explicabo. Nemo enim <strong>ipsam voluptatem quia
                                                voluptas</strong> sit aspernatur aut odit aut.</p>
                                        <br/>

                                        <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</p>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="washinginstructions">
                                        <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</p>
                                        <br/>
                                        <ul>
                                            <li>
                                                <strong>Type:</strong> Shift Dresses
                                            </li>
                                            <li>
                                                <strong>Fabric:</strong> Georgette
                                            </li>
                                            <li>
                                                <strong>Sleeves:</strong> Half Sleeve
                                            </li>
                                            <li>
                                                <strong>Neck:</strong> V Neck
                                            </li>
                                            <li>
                                                <strong>Fit:</strong> Regular
                                            </li>
                                            <li>
                                                <strong>Length:</strong> Mini
                                            </li>
                                            <li>
                                                <strong>Color:</strong> Pink
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- <div role="tabpanel" class="tab-pane fade" id="reviews">

                                        <div class="reviews-wrap">

                                            <div class="reviews-comments">
                                                <h3>REVIEWS</h3>

                                                <!-- 1 -->
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="review-name">JAMES COSTNER - 7. JUNE 2015.
                                                        </p>
                                                        <!-- product ratings -->
                                                        <div class="product-ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <!-- .product ratings -->
                                                        <p class="review-comment">Nulla vel metus scelerisque ante
                                                            sollicitudin commodo. Cras purus odio, vestibulum in
                                                            vulputate at, tempus viverra turpis. Donec lacinia congue
                                                            felis in faucibus.</p>
                                                    </div>
                                                </div>
                                                <!-- .1 -->

                                                <!-- 2 -->
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="review-name">MARK SWENSON - 6. JUNE 2015.
                                                        </p>
                                                        <!-- product ratings -->
                                                        <div class="product-ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <!-- .product ratings -->
                                                        <p class="review-comment">Fusce condimentum nunc ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                            Cras purus odio, vestibulum in vulputate at, tempus viverra
                                                            turpis. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div>
                                                <!-- .2 -->


                                                <!-- numbers -->
                                                <div class="text-center">
                                                    <ul class="list-inline comment-pagination">
                                                        <li><a href="#" class="active">1</a>
                                                        </li>
                                                        <li><a href="#">2</a>
                                                        </li>
                                                        <li><a href="#">...</a>
                                                        </li>
                                                        <li><a href="#">8</a>
                                                        </li>
                                                        <li><a href="#">9</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .numbers -->

                                            </div>

                                            <div class="reviews-leave">
                                                <!-- leave comment -->
                                                <div class="leave-comment ratings">
                                                    <div id="respond" class="comment-respond">
                                                        <h3>LEAVE REVIEW</h3>

                                                        <form action="#" method="#">
                                                            <br/>

                                                            <p class="comment-form-author review-left">
                                                                <label for="author">NAME <span class="required">*</span>
                                                                </label>
                                                                <input x-autocompletetype="name-full" id="author"
                                                                       name="author" type="text" value="" size="30"
                                                                       aria-required="true">
                                                            </p>

                                                            <p class="comment-form-email review-right">
                                                                <label for="email">EMAIL<span class="required">*</span>
                                                                </label>
                                                                <input x-autocompletetype="email" id="email"
                                                                       name="email" type="text" value="" size="30"
                                                                       aria-describedby="email-notes"
                                                                       aria-required="true">
                                                            </p>
                                                            <br/>

                                                            <p class="comment-form-email">
                                                                <label for="email">RATING<span class="required">*</span>
                                                                </label>
                                                                <!-- product ratings -->

                                                            <div class="product-ratings">
                                                                        <span>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                        <span>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                            </div>
                                                            <!-- .product ratings -->
                                                            </p>
                                                            <br/>

                                                            <p>
                                                                <label for="comment">COMMENT <span
                                                                        class="required">*</span>
                                                                </label>
                                                                <textarea id="comment" class="form-control"
                                                                          name="comment" cols="45" rows="8"
                                                                          aria-required="true"></textarea>
                                                            </p>

                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="commentsubmit"
                                                                       class="submit btn btn-primary"
                                                                       value="LEAVE RATING">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- .leave comment -->
                                            </div>

                                        </div>
                                    </div> --}}
                                </div>
                                <!-- .panels -->

                            </div>
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

    <!-- pagination -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="main-pagination clearfix">

                    <!-- prev -->
                    <div class="col-md-6">
                        <div class="text-left">
                            <a href="#" class="active"><i class="fa fa-long-arrow-left"></i> BEAUTIFUL WINTER WITH THEKLIFF</a>
                        </div>
                    </div>
                    <!-- .prev -->

                    <!-- next -->
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="#">OUR TRIP TO FASHION WEEK <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- .next -->

                </div>
            </div>
        </div>
    </section>
    <!-- .pagination -->

    <!-- section 5 -->
    <section>
        @include('includes.threeSectionCallToAction')
    </section>
    <!-- .section 5 -->

@endsection
