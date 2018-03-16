<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset ('a/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{asset ('a/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{asset ('a/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{asset ('a/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{asset ('a/css/style.css') }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/">Home</a></li>
				<li><a href="/berita">Berita</a></li>
				<li class="active"><a href="/prestasi">Prestasi</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Prestasi</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>Prestasi</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->




	


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
	@foreach ($prestasi as $data)
				<a href="/adm/prestasi/{!!$data->id!!}"><div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="{{asset('img/'.$data->cover.'')}}" alt="">
						</div>
						<div class="card-text">
							<h2>{!!$data->title!!}</h2>
						</div>
					</div>
				</div></a>
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->








	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="a/js/jquery-2.1.4.min.js"></script>
	<script src="a/js/bootstrap.min.js"></script>
	<script src="a/js/magnific-popup.min.js"></script>
	<script src="a/js/owl.carousel.min.js"></script>
	<script src="a/js/circle-progress.min.js"></script>
	<script src="a/js/main.js"></script>
</body>
</html>
