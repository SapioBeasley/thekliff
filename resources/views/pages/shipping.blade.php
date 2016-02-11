@extends('layouts.app')

@section('title', 'Shipping')

@section('content')

    <!-- page title -->
    <section>
        <div class="container-fluid">
            <div class="row">

                <!-- page title wrap -->
                <div class="page-title">

                    <!-- page title image -->
                    <div class="image">
                        <img src="{{url('images/genPage.jpg')}}" width="100%" class="img-responsive" title="" alt=""/>
                    </div>
                    <!-- .page title image -->

                    <!-- page title content -->
                    <div class="title-content">
                        <div class="title-content-wrap">
                            <p class="small-text">TheKliff</p>

                            <p class="big-text">Shipping</p>
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

                <!-- about -->
                <div class="about clearfix">

                    <!-- content -->
                    <div class="col-md-8 no-padding col-sm-offset-2">
                        <div class="blog-single-content-wrap">

                                <!-- title -->
                                <div class="blog-single-title">
                                    <h1>SHIPPING INFORMATION</h1>

                                    <p class="blog-single-date"> FREE SHIPPING ON ORDERS OVER $80
                                    </p>
                                    <span class="bottom-border"></span>
                                </div>
                                <!-- .title -->

                                <!-- content -->
                                <div class="blog-single-content">

                                    <p>Orders are packed and shipped Monday-Friday only. Most orders are shipped within 24 hours from the order date. Orders placed on the weekend and select holidays are processed on the next business day.</p>

                                    <p>If we are unable to process your order due to inaccurate or incomplete payment information, your order processing may be delayed an additional 2 business days. Orders with out of stock item(s) may take an additional 5 business days to process and ship.</p>

                                    <p><strong>FREE SHIPPING OVER $80 OR MORE</strong></p>

                                </div>
                                <!-- .content -->

                                <!-- title -->
                                <div class="blog-single-title">
                                    <h1>Shipping Options and Rates</h1>
                                    <span class="bottom-border"></span>
                                </div>
                                <!-- .title -->

                                <!-- content -->
                                <div class="blog-single-content">
                                    <p>U.S. delivery addresses in the 48 continental states. Please allow 1-2 days handling time.</p>

						<p>
						<strong>Order Amount Standard Ground Shipping</strong><br>
						(4-9 Business Days) - Express Shipping<br>
						(2-3 Business Days) - Next Day Shipping<br>
						</p>

						<p>
						<strong>(Next Business Day on orders placed before 11am PST)</strong><br>
						$0 - $79.00 - $13.95 - $23.95 - $36.95<br>
						$80.00+ - FREE - $23.95 - $36.95<br>
						</p>

						<p><strong>Alaska, Hawaii, P.O. Box, APO/FPO</strong></p>

						<p>Only standard delivery is available.<br>
						Standard delivery usually arrives within 5-13 business days from the shipped date, excluding holidays.</p>

						<p>All packages are sent via United States Postal Services.<br>
						Order Amount	Standard Shipping & Handling</p>
						<strong>(5-13 Business Days, Up to 18 Business Days for APO/FPO addresses)</strong>

						<p>
						$0 - $79.00 - $18.95<br>
						$80.00 & UP - $24.95
						</p>

                                </div>
                                <!-- .content -->

                        </div>
                    </div>
                    <!-- .content -->

                </div>
                <!-- .about -->

            </div>
        </div>
    </section>
    <!-- body content -->
@endsection
