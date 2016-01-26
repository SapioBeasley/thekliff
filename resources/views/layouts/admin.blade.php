<!DOCTYPE html>
<html>
	<head>
		@include('admin.includes.head')
	</head>
	<body>

		<!-- Navigation Bar-->
		<header id="topnav">
			@include('admin.includes.header')
		</header>
		<!-- End Navigation Bar-->

		<div class="wrapper">
            		<div class="container">

				@yield('content')

				<!-- Footer -->
				<footer class="footer text-right">
					@include('admin.includes.footer')
				</footer>
				<!-- End Footer -->

			</div> <!-- end container -->
	        </div>
	        <!-- End wrapper -->

		@include('admin.includes.scripts')

	</body>
</html>
