@extends('layouts.app')

@section('title', 'Contact theKliff')

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

                            <p class="big-text">CONTACT US ANYTIME</p>
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

                <!-- blog single -->
                <div class="blog-single clearfix">

                    <div class="col-md-6 no-padding">
                        <div class="blog-single-media clearfix">
                            <div class="leave-comment">
                                    <div id="respond" class="comment-respond">
                                        <h3>LEAVE MESSAGE</h3>

                                        <form action="contact.html#" method="get">
                                            <p class="comment-notes"><span>Your email address will not be published. Required fields are marked </span>
                                                <span class="required">*</span>
                                            </p>
                                            <br/>

                                            <p class="comment-form-author">
                                                <label for="author">NAME <span class="required">*</span>
                                                </label>
                                                <input id="author" name="author"
                                                       type="text" value="" size="30">
                                            </p>
                                            <br/>

                                            <p class="comment-form-email">
                                                <label for="email">EMAIL<span class="required">*</span>
                                                </label>
                                                <input id="email" name="email" type="text"
                                                       value="" size="30">
                                            </p>
                                            <br/>

                                            <p>
                                                <label for="comment">MESSAGE <span class="required">*</span>
                                                </label>
                                                <textarea id="comment" class="form-control" name="comment" cols="45"
                                                          rows="8" aria-required="true"></textarea>
                                            </p>

                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="commentsubmit"
                                                       class="submit btn btn-primary" value="SEND MESSAGE">
                                            </p>

                                            <div class="allowed-tags"><span>You may use these
                                                    <abbr>HTML</abbr> tags and attributes:</span>
                                                <br/>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym
                                                title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt;
                                                &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
                                                &lt;strong&gt;
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <div class="blog-single-content-wrap">
                            {{-- <div class="nano-content"> --}}

                                <!-- title -->
                                <div class="blog-single-title">
                                    <h1>CONTACT US ANYTIME AND GET INVOLVED</h1>

                                    <p class="blog-single-date">21 STREET, 32001 NEW YORK, USA
                                    </p>
                                    <span class="bottom-border"></span>
                                </div>
                                <!-- .title -->

                                <!-- content -->
                                <div class="blog-single-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam aliquam quaerat voluptatem. </p>

                                </div>
                                <!-- .content -->

                            {{-- </div> --}}
                        </div>
                    </div>

                </div>
                <!-- .blog single -->

            </div>
        </div>
    </section>
    <!-- body content -->

    <!-- section 5 -->
    <section>
        @include('includes.threeSectionCallToAction')
    </section>
    <!-- .section 5 -->

@endsection
