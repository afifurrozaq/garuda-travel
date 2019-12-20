<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Garuda Travel</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.css');?>"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--Header-->
<header>
	<div class="container agile-banner_nav">
	<div class="row header-top">
			<div class="col-md-1 top-left p-0">
				<p><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#" data-toggle="modal" data-target="#myModal">Login</a> </p>
				
			</div>
			<div class="col-md-4 top-left p-0">
				
				<p><a href="#" data-toggle="modal" data-target="#myModal2">Register</a> </p>
			</div>
			<div class="col-md-7 top-right p-0">
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. A. Yani No.11,Kota Malang.
			</div>
		</div>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<h1><a class="navbar-brand" href="<?php echo site_url();?>">Garuda Travel</a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url();?>">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url("rent_car/");?>">Rent Car</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url("leadership_camp/");?>">Jasa Dokumentasi</a>
					</li>
					<li class="nav-item pr-lg-0">
						<a class="nav-link pr-lg-0" style="font-size: 12px" href="<?php echo site_url("adventure_tour/");?>">Adventure Tour</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" style="font-size: 12px" class="dropdown-toggle nav-link" data-toggle="dropdown">Article
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
						<li>
								<a style="font-size: 12px" href="<?php echo site_url('article/article_jenis/serba_serbi');?>">Serba-Serbi</a>
							</li>
							<li>
								<a style="font-size: 12px" href="<?php echo site_url('article/article_jenis/malang_over_view');?>">Malang Over View</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		  
		</nav>
	</div>
</header>
<!--Header-->