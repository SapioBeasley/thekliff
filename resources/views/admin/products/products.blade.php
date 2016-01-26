@extends('layouts.admin')

@section('content')
<div class="row port">
      <div class="portfolioContainer m-b-15">
            @foreach($products as $product)
                  {{-- Where is mobiles is category name --}}
                  <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                        <div class="product-list-box thumb">
                              <a href="{{url('admin-assets/assets/images/products/big/1.jpg')}}" class="image-popup" title="Screenshot-1">
                                    <img src="{{url('admin-assets/assets/images/products/big/1.jpg')}}" class="thumb-img" alt="work-thumbnail">
                              </a>

                              <div class="product-action">
                                    <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                              </div>

                              <div class="detail">
                                    <h4 class="m-t-0 m-b-5"><a href="{{url('admin/products', $product['id'])}}" class="text-dark">{{$product['name']}}</a> </h4>
                                    {{-- <h5 class="m-0"><span class="text-custom">${{money_format('%i', $product['price'])}}</span> <span class="text-muted m-l-15"> Stock :98pcs.</span></h5> --}}
                              </div>
                        </div>
                  </div>
            @endforeach

      </div>
</div> <!-- End row -->


{{--
<script type="text/javascript">
// $(window).load(function(){
// var $container = $('.portfolioContainer');
// $container.isotope({
// filter: '*',
// animationOptions: {
// duration: 750,
// easing: 'linear',
// queue: false
// }
// });

// $('.portfolioFilter a').click(function(){
// $('.portfolioFilter .current').removeClass('current');
// $(this).addClass('current');

// var selector = $(this).attr('data-filter');
// $container.isotope({
// filter: selector,
// animationOptions: {
// duration: 750,
// easing: 'linear',
// queue: false
// }
// });
// return false;
// });
// });
// $(document).ready(function() {
// $('.image-popup').magnificPopup({
// type: 'image',
// closeOnContentClick: true,
// mainClass: 'mfp-fade',
// gallery: {
// enabled: true,
// navigateByImgClick: true,
// preload: [0,1] // Will preload 0 - before current, and 1 after the current image
// }
// });
// });
</script> --}}
@endsection
