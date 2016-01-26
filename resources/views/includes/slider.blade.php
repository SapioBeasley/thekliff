<div id="home-carousel" class="carousel slide carousel-fade clearfix">

	<!-- indicators -->
	<ol class="carousel-indicators">
		<li data-target="#home-carousel" data-slide-to="0" class="active">
			<span class="indicator-inner"></span>
		</li>
		<li data-target="#home-carousel" data-slide-to="1">
			<span class="indicator-inner"></span>
		</li>
		<li data-target="#home-carousel" data-slide-to="2">
			<span class="indicator-inner"></span>
		</li>
	</ol>
	<!-- .indicators -->

	<!-- slides -->
	<div class="carousel-inner">
		@include('includes.slides')
	</div>
	<!-- slider -->

	<!-- controls -->
	<div class="slider-controls clearfix hidden-xs">
		<a class="previous-slide" href="index.html#home-carousel" role="button" data-slide="prev">
			<i class="fa fa-long-arrow-left"></i> SUMMER DISCOUNT 50%
		</a>
		<a class="next-slide" href="index.html#home-carousel" role="button" data-slide="next"> WINTER COLLECTION
			<i class="fa fa-long-arrow-right"></i>
		</a>
	</div>
	<!-- .controls -->

</div>
