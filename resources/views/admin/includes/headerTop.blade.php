<!-- Logo container-->
<div class="logo">
	<a href="index.html" class="logo"><span>Admin</span></a>
</div>
<!-- End Logo container-->

<div class="menu-extras">

	<ul class="nav navbar-nav navbar-right pull-right">
		<li class="dropdown">
			<a href="ecommerce-dashboard.html" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
				<img src="{{url('admin-assets/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle">
			</a>
			<ul class="dropdown-menu">
				<li><a href="{{url('/shop')}}">View Shop</a></li>
				<li><a href="{{url('/logout')}}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
			</ul>
		</li>
	</ul>

	<div class="menu-item">
		<!-- Mobile menu toggle-->
		<a class="navbar-toggle">
			<div class="lines">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</a>
		<!-- End mobile menu toggle-->
	</div>
</div>
