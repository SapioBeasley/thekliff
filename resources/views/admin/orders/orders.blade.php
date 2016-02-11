@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <div class="table-responsive">
                <table class="table table-actions-bar">
                    <thead>
                        <tr>
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

    </div> <!-- end col -->


</div>
@endsection
