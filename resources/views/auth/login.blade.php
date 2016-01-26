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

                        <p class="big-text">LOGIN</p>
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

                    <!-- login -->
                    <div class="col-md-6 col-md-offset-3">
                        <!-- title -->
                        <h2>Sign into your account</h2>
                        <!-- .title -->

                        <!-- login form -->
                        <div class="leave-comment">
                            <div id="respond" class="comment-respond">

                                {!! Form::open(['url' => '/login', 'method' => 'POST']) !!}
                                    <br/>

                                    <p class="comment-form-author">
                                        <label for="author">EMAIL <span class="required">*</span></label>
                                        {!! Form::text('email', null, ['size' => '30', 'id' => 'email']) !!}
                                    </p>

                                    <p class="comment-form-email">
                                        <label for="email">PASSWORD<span class="required">*</span></label>
                                        {!! Form::password('password', null, ['size' => '30', 'id' => 'password']) !!}
                                    </p>

                                    <p class="form-submit">
                                        {!! Form::submit('LOGIN', ['id' => 'commentsubmit', 'class' => 'submit btn btn-primary']) !!}
                                        <a href="{{url('/register')}}" class="content-button green-style" style="height:43px;">REGISTER</a>
                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </p>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- .login form -->
                    </div>
                    <!-- .login -->

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
