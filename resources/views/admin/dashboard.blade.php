@extends('layouts.admin')

@section('content')
<div class="row">
      <div class="col-lg-6 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                  <i class="md md-attach-money text-primary"></i>
                  <h2 class="m-0 text-dark counter font-600">50568</h2>
                  <div class="text-muted m-t-5">Total Revenue</div>
            </div>
      </div>
      <div class="col-lg-6 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                  <i class="md md-add-shopping-cart text-pink"></i>
                  <h2 class="m-0 text-dark counter font-600">1256</h2>
                  <div class="text-muted m-t-5">Orders</div>
            </div>
      </div>
</div>

<div class="row">
      <div class="col-lg-12">
            <div class="card-box">
                  <a href="ecommerce-dashboard.html#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                  <h4 class="text-dark header-title m-t-0">Recent Orders</h4>
                  <p class="text-muted m-b-30 font-13">
                        Your awesome text goes here.
                  </p>

                  <div class="table-responsive">
                        <table class="table table-actions-bar">
                              <thead>
                                    <tr>
                                          <th>Product</th>
                                          <th>Order Date</th>
                                          <th>Order Number</th>
                                          <th>Amount</th>
                                          <th style="min-width: 80px;">Action</th>
                                    </tr>
                              </thead>
                              <tbody>

                                    @foreach($orders as $order)
                                          @include('admin.includes.ordersLoop')
                                    @endforeach

                              </tbody>
                        </table>
                  </div>

            </div>
      </div>

</div>
@endsection
