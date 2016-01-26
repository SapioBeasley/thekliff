@extends('layouts.app')

<!-- Main Content -->
@section('content')
<!-- page title -->
<section>
    <div class="container-fluid">
        <div class="row">

            <!-- page title wrap -->
            <div class="page-title">

                <!-- page title image -->
                <div class="image">
                    <img src="https://source.unsplash.com/random?{{rand(0, 50)}}" width="100%" class="img-responsive" title="" alt=""/>
                </div>
                <!-- .page title image -->

                <!-- page title content -->
                <div class="title-content">
                    <div class="title-content-wrap">
                        <p class="small-text">SINCE 2015 THEKLIFF</p>

                        <p class="big-text">RESET PASSWORD</p>
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
                        <h2>Enter email to reset your password</h2>
                        <!-- .title -->

                        <!-- login form -->
                        <div class="leave-comment">
                            <div id="respond" class="comment-respond">

                                <form action="{{ url('/password/email') }}" method="get">
                                    <br/>

                                    <p class="comment-form-email">
                                        <label for="email">EMAIL<span class="required">*</span>
                                        </label>
                                        <input id="email" name="email" type="text" value="{{ old('email') }}" size="30">
                                    </p>

                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="commentsubmit" class="submit btn btn-primary" value="Send Password Reset Link">
                                    </p>
                                </form>
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
@endsection
