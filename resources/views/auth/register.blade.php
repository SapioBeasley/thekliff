@extends('layouts.app')

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
                        <p class="small-text">SINCE 2015 THEKLIFF</p>
                        <p class="big-text">REGISTER</p>
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

            <div class="login clearfix">

                <!-- register -->
                <div class="col-md-6 col-md-offset-3">

                    <!-- title -->
                    <h2>CREATE ACCOUNT</h2>
                    <!-- .title -->

                    <div class="row">

                        <!-- register form -->
                        <div class="leave-comment register-form">
                            <div id="respond" class="comment-respond">

                                {!! Form::open(['url' => '/register', 'method' => 'POST']) !!}
                                    <br/>

                                    <div class="col-md-12">
                                        <p class="comment-form-name">
                                            <label for="name">NAME <span class="required">*</span></label>
                                            <input id="name" name="name" type="text" value="{{ old('name') }}" size="30">
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="comment-form-email">
                                            <label for="email">EMAIL<span class="required">*</span></label>
                                            <input id="email" name="email" type="text" value="{{ old('email') }}" size="30">
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="comment-form-password">
                                            <label for="password">PASSWORD<span class="required">*</span></label>
                                            <input id="password" name="password" type="text" value="" size="30">
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="comment-form-password-repeat">
                                            <label for="repeat-password">REPEAT PASSWORD <span class="required">*</span></label>
                                            <input id="repeat-password" name="password_confirmation" type="text" value="" size="30">
                                        </p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="form-submit">
                                            {!! Form::submit('REGISTER', ['id' => 'commentsubmit', 'class' => 'submit btn btn-primary']) !!}
                                        </p>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- .register form -->

                    </div>

                </div>
                <!-- .register -->

            </div>

        </div>
    </div>
</section>
<!-- .body content -->

<!-- section 5 -->
<section>
    @include('includes.threeSectionCallToAction')
</section>
<!-- .section 5 -->
@endsection
