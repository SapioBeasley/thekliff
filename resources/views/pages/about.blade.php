@extends('layouts.app')

@section('title', 'About theKliff')

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

                            <p class="big-text">ABOUT US PAGE</p>
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

                <!-- about -->
                <div class="about clearfix">

                    <!-- content -->
                    <div class="col-md-8 no-padding col-sm-offset-2">
                        <div class="blog-single-content-wrap">

                            {{-- <img class="img-responsive" src="https://source.unsplash.com/all?fashion={{rand()}}" alt="" title=""/> --}}
                            {{-- <div class="nano-content"> --}}

                                <!-- title -->
                                <div class="blog-single-title">
                                    <h1>LEARN HOW THEKLIFF WAS MADE</h1>

                                    <p class="blog-single-date"> THE DAY WE LAUNCHED THE SHOP
                                    </p>
                                    <span class="bottom-border"></span>
                                </div>
                                <!-- .title -->

                                <!-- content -->
                                <div class="blog-single-content">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                                        itself, because it is pleasure, but because those who do not know how to pursue
                                        pleasure rationally encounter consequences that are extremely painful. Nor again
                                        is there anyone who loves or pursues or desires to obtain pain of itself,
                                        because it is pain, but because occasionally circumstances occur in which toil
                                        and pain can procure him some great pleasure. </p>

                                    <p>To take a trivial example, which of us ever undertakes laborious physical
                                        exercise, except to obtain some advantage from it? But who has any right to find
                                        fault with a man who chooses to enjoy a pleasure that has no annoying
                                        consequences, or one who avoids a pain that produces no resultant pleasure? </p>

                                </div>
                                <!-- .content -->

                                <!-- title -->
                                <div class="blog-single-title">
                                    <h1>THE WAY WE SEE OUR FUTURE</h1>

                                    <p class="blog-single-date"> SOME THOUGHTS OF TOMMOROW
                                    </p>
                                    <span class="bottom-border"></span>
                                </div>
                                <!-- .title -->

                                <!-- content -->
                                <div class="blog-single-content">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are
                                        so beguiled and demoralized by the charms of pleasure of the moment, so blinded
                                        by desire, that they cannot foresee the pain and trouble that are bound to
                                        ensue; and equal blame belongs to those who fail in their duty through weakness
                                        of will, which is the same as saying through shrinking from toil and pain. </p>

                                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when
                                        our power of choice is untrammelled and when nothing prevents our being able to
                                        do what we like best, every pleasure is to be welcomed and every pain avoided.
                                        But in certain circumstances and owing to the claims of duty or the obligations
                                        of business it will frequently occur that pleasures have to be repudiated and
                                        annoyances accepted. The wise man therefore always holds in these matters to
                                        this principle of selection: he rejects pleasures to secure other greater
                                        pleasures, or else he endures pains to avoid worse pains. </p>

                                </div>
                                <!-- .content -->

                            {{-- </div> --}}
                        </div>
                    </div>
                    <!-- .content -->

                </div>
                <!-- .about -->

            </div>
        </div>
    </section>
    <!-- body content -->

    <!-- pagination -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="main-pagination clearfix">

                    <!-- prev -->
                    <div class="col-md-6">
                        <div class="text-left">
                            <a href="about.html#" class="active"><i class="fa fa-long-arrow-left"></i> BEAUTIFUL WINTER WITH THEKLIFF</a>
                        </div>
                    </div>
                    <!-- .prev -->

                    <!-- next -->
                    <div class="col-md-6">
                        <div class="text-right">
                            <a href="about.html#">OUR TRIP TO FASHION WEEK <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- .next -->

                </div>
            </div>
        </div>
    </section>
    <!-- .pagination -->

    <!-- section 5 -->
    <section>
        @include('includes.threeSectionCallToAction')
    </section>
    <!-- .section 5 -->

@endsection
