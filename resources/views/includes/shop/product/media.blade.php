@foreach ($images as $imageKey => $image)

	@if ($image['is_main'] === 1)

		<!-- main image -->
		<div class="simpleLens-container">
			<div class="simpleLens-big-image-container">
				<a class="simpleLens-lens-image" data-lens-image="{{ url('images/single-product-3-zoom.png') }}">
					<img src="{{ url('images/single-product-3.png') }}" class="simpleLens-big-image img-responsive" title="" alt=""/>
				</a>
			</div>
		</div>
		<!-- .main image -->

	@else

		<!-- thumbnails -->
		<div class="simpleLens-thumbnails-container">
			@include('includes.shop.product.thumbnails')
		</div>
		<!-- .thumbnails -->
	@endif

@endforeach
