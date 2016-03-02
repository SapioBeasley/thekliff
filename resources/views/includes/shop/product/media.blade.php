<!-- main image -->
<div class="simpleLens-container">
	<div class="simpleLens-big-image-container">
		<a class="simpleLens-lens-image" data-lens-image="{{$mainImage['image_url']}}">
			<img src="{{$mainImage['image_url']}}" class="simpleLens-big-image img-responsive" title="" alt=""/>
		</a>
	</div>
</div>
<!-- .main image -->

@foreach ($images as $imageKey => $image)

	<!-- thumbnails -->
	<div class="simpleLens-thumbnails-container">
		@include('includes.shop.product.thumbnails')
	</div>
	<!-- .thumbnails -->

@endforeach
