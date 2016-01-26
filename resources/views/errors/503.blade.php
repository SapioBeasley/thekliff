@extends('layouts.app')

@section('title', 'Error 503')

@section('content')

<!-- page title -->
<section>
    <div class="container-fluid">
        <div class="row">

            <!-- page title wrap -->
            <div class="page-title">

                <!-- page title image -->
                <div class="image">
                    <img src="{{asset('images/404-image.png')}}" class="img-responsive" title="" alt=""/>
                </div>
                <!-- .page title image -->

                <!-- page title content -->
                <div class="title-content">
                    <div class="title-content-wrap">
                        <p class="small-text">SORRY BUT THERE WAS A SERVER ISSUE</p>

                        <p class="big-text">503 ERROR</p>
                    </div>
                </div>
                <!-- .page title content -->

            </div>
            <!-- .page title wrap -->

        </div>
    </div>
</section>
<!-- .home slider -->

<!-- breadcrumbs -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs">
                <a href="503.html#">503 ERROR</a>
            </div>
        </div>
    </div>
</section>
<!-- .breadcrumbs -->

@endsection
