<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="header-wrapper">

				<!-- nav trigger -->
				<div class="menu-trigger">
					<a href="#">
						<div class="menu icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<span>MENU</span>
					</a>
				</div>
				<!-- .nav trigger -->

				<!-- logo -->
				<div class="logo">
					<a href="{{route('index')}}">
						<img src="{{asset('images/logo.png')}}" title="theKliff Home" alt="theKliff Home"/>
					</a>
				</div>
				<!-- .logo -->

				@if (! \Auth::check())
					<!-- sign up -->
					<div class="sign-up">
						<a href="#" class="hidden-xs">SIGN IN</a>
						<a href="#" class="hidden-md hidden-sm">
							<i class="fa fa-user"></i>
						</a>
					</div>
					<!-- sign up -->
				@else
					<!-- View Orders -->
					<div class="sign-up">
						<a href="#" class="hidden-xs">ACCOUNT</a>
						<a href="#" class="hidden-md hidden-sm">
							<i class="fa fa-user"></i>
						</a>
					</div>
					<!-- View Orders -->
				@endif

				<!-- cart -->
				<div class="cart">
					<a href="{{route('cart.index')}}" class="hidden-xs"><i class="fa fa-shopping-cart"></i>{{isset(Session::get('orderDetails')['products']) ? count(Session::get('orderDetails')['products']) : '0'}} - ${{isset(Session::get('orderDetails')['orderAmount']) ? money_format('%i', Session::get('orderDetails')['orderAmount']) : '0.00'}}</a>
					<a href="{{route('cart.index')}}" class="hidden-md hidden-sm hidden-lg">
						<i class="fa fa-shopping-cart"></i>
					</a>
				</div>
				<!-- .cart -->

				<!-- cart dropdown
				<div class="cart-dropdown">

					@include('includes.emptyCartDropDown')

					<nav class="cart-buttons clearfix">
						<ul>
							<li class="hidden-xs">
								<a href="{{route('cart.index')}}">VIEW CART</a>
							</li>
							<li class="hidden-md hidden-sm hidden-lg">
								<a href="{{route('cart.index')}}">CART</a>
							</li>
							<li>
								<a href="{{route('checkout.index')}}" class="red-btn">CHECKOUT</a>
							</li>
						</ul>
					</nav>

				</div>
				.cart dropdown -->

				<!-- cart -->
				<nav class="sign-up-dropdown">

					@if (! \Auth::check())
						<ul>
							<li>
								<a href="{{url('/login')}}">LOGIN</a>
							</li>
							<li>
								<a href="{{url('/register')}}">REGISTER</a>
							</li>
						</ul>
					@else
						<ul>
							<li>
								<a href="{{route('orders.index')}}">VIEW ORDERS</a>
							</li>
							<li>
								<a href="{{url('/logout')}}">LOGOUT</a>
							</li>
						</ul>
					@endif

				</nav>
				<!-- .cart -->

				<!-- nav dropdown -->
				<nav class="menu-dropdown">

					<!-- main nav -->
					<ul class="thekliff-menu">
						@include('includes.mainMenu')
					</ul>
					<!-- .main nav -->

				</nav>
				<!-- .nav dropdown -->

			</div>
		</div>
	</div>
</div>
