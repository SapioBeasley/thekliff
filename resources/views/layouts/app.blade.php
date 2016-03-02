<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.assets.head')
    </head>

    <body>

        <!-- preloader -->
        <div class="preloader-wrap">
            @include('includes.preloader')
        </div>
        <!-- .preloader -->

        <!-- main container -->
        <div class="container-fixed">

            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{Session::get('success_message')}}
                </div>
            @endif

            <!-- header -->
            <header>
                @include('includes.header')
            </header>
            <!-- .header -->

            @yield('content')

            <!-- footer bottom -->
            <footer>
                @include('includes.footerTop')
            </footer>
            <!-- .footer top -->

            <!-- footer 2 -->
            <footer>
                @include('includes.footerBottom')
            </footer>
            <!-- .footer 2 -->

        </div>
        <!-- .main container -->

        @include('includes.assets.scripts')

    </body>

</html>
