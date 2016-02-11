@extends('layouts.admin')

@section('content')
<div class="row port">
      <div class="portfolioContainer m-b-15">

            @foreach($products as $product)
                  {{-- Where mobiles is category name --}}
                  <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                        <div class="product-list-box thumb">
                              <a href="{{url('admin/products', $product['id'])}}" class="image-popup" title="Screenshot-1">
                                    <img src="{{$product['images'][0]['image_url']}}" class="thumb-img" alt="work-thumbnail">
                              </a>

                              <div class="product-action">
                                    <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                              </div>

                              <div class="detail">
                                    <h4 class="m-t-0 m-b-5"><a href="{{url('admin/products', $product['id'])}}" class="text-dark">{{$product['name']}}</a> </h4>
                              </div>
                        </div>
                  </div>
            @endforeach

      </div>
</div> <!-- End row -->
@endsection
