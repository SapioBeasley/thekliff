@extends('layouts.app')

@section('title', 'Checkout')

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

						<p class="big-text">CHECKOUT</p>
					</div>
				</div>
				<!-- .page title content -->

			</div>
			<!-- .page title wrap -->

		</div>
	</div>
</section>

<!-- breadcrumbs -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="breadcrumbs">CHECKOUT</a>
			</div>
		</div>
	</div>
</section>
<!-- .breadcrumbs -->

<section>
	<div class="container-fluid">
		<div class="row">

			<div class="shopping-cart body-content clearfix">

                    <div class="col-xs-12 no-padding">
                        <div class="panel panel-info">

                            {!! Form::open(['route' => 'purchaseOrder']) !!}

	                      	@include('forms.checkoutForm')

	                      	<div class="panel-footer">
						<div class="row text-right">
							<div class="to-checkout">
								<div class="col-md-9 col-xs-6 total">
									<h4>Total <strong>${{money_format('%i', $orderAmount)}}</strong></h4>
								</div>
								<div class="col-md-3 col-xs-6">
									{!! Form::submit('SUBMIT ORDER', ['class' => 's-cart-btn red-btn', 'style' => 'border: none;padding: 10px;width: 100%;font-size: 15px;']) !!}
								</div>
							</div>
						</div>
					</div>
                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>

		</div>
	</div>
</section>
@endsection
