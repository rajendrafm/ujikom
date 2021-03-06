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
	<link rel="stylesheet" href="a/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="a/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="a/css/flaticon.css"/>
	<link rel="stylesheet" href="a/css/owl.carousel.css"/>
	<link rel="stylesheet" href="a/css/style.css"/>


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
				<li class="active"><a href="/berita">Berita</a></li>
				<li><a href="/prestasi">Prestasi</a></li>
				
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Berita</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>Berita</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->




	

	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($berita as $data)
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							 <img src="{{asset('img/'.$data->cover.'')}}" alt="">
							
						</div>
						<div class="post-content">
							<h2 class="post-title">{!!$data->title!!}</h2>
							<div class="post-meta">
							
							</div>
							
							<a href="/adm/berita/{!!$data->id!!}" class="read-more">Baca Berita</a>
						</div>
					</div>

					@endforeach
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->


	<!-- newsletter section -->
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aac580f4b401e45400dce00/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->