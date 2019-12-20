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
	
	
	<!-- pop up box -->
	<link href="<?php echo site_url('assets/css/popuo-box.css');?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop up box -->

	<link rel="stylesheet" href="<?php echo site_url('assets/css/jquery.desoslide.css');?>">

	<!-- css files -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.css');?>"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<link rel="stylesheet" href="<?php echo site_url('assets/css/jquery-ui.css');?>" />
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--Header-->
<header>
	<div class="container agile-banner_nav">
		<div class="row header-top">
			<?php if(!isset($_SESSION['username'])){ ?>
			<div class="col-md-1 top-left p-0">
				<p><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#" data-toggle="modal" data-target="#myModal">Login </a> </p>
				
			</div>
			<div class="col-md-2 top-left p-0">
				
				<p><a href="#" data-toggle="modal" data-target="#myModal2">Register</a> </p>
			</div>
			<?php }else{ ?>
				<div class="col-md-1 top-left p-0">
				<p> <?php echo $_SESSION['username']; ?> </p>
				
			</div>
			<div class="col-md-2 top-left p-0">
				
				<p><a href="<?php echo site_url("auth/logout");?>">logout</a> </p>
			</div>
			<?php } ?>
			<div class="col-md-9 top-right p-0">
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. A. Yani No.11,Kota Malang
			</div>
		</div>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<h1><a class="navbar-brand" href="<?php echo site_url();?>">Garuda Travel</a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url();?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url('rent_car/');?>">Rent Car</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-size: 12px" href="<?php echo site_url('leadership_camp/');?>">Jasa Dokumentasi</a>
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
	



		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner-top">
						<div class="layer">
							<div class="container">
								<div class="banner-info_agile_w3ls">
									<h2>Travel Things go as <span> per plan</span>. </h2>
									<p>Holiday packages and special deals.</p>
								</div>
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="banner-top1">
						<div class="layer">
							<div class="container">
								<div class="banner-info_agile_w3ls">
									<h3>Best travel website <span> Inspire</span> You.</h3>
									<p>Holiday packages and special deals.</p>
								</div>
							</div>
						</div>
						</div>
					</li>
					<li>
						<div class="banner-top2">
						<div class="layer">
							<div class="container">
								<div class="banner-info_agile_w3ls">
									<h3>Lets Find Some <span>Beautiful</span> Place.</h3>
									<p>Holiday packages and special deals.</p>

								</div>
							</div>
						</div>
						</div>
					</li>

				</ul>
			</div>
			<div class="clearfix"> </div>

			
		<!-- Social Icons -->
			
		<!-- To bottom button-->
		<div class="thim-click-to-bottom">
			<div class="rotate">
				<a href="#booking" class="scroll">
					<i class="fa fa-ellipsis-v"></i>
				</a>
			</div>
		</div>
		<!-- //To bottom button-->
		</div>
		<!--//Slider-->
		
<!-- //booking form -->



<!-- welcome -->
<section class="welcome py-5">
	<div class="container py-3">
	<h3 class="heading text-center mb-md-5 mb-4"> About Us </h3>
		<div class="row welcome-grids">
			<div class="col-lg-6">
				<h4 class="mb-3">Garuda Travel</h4>
				<h3>Liburan Mudah dengan Garuda Travel.</h3>
				<p class="my-4">Garuda Travel merupakan aplikasi yang dikembangkan oleh Koperasi Pegawai Telkom Malang yang bertujuan untuk memudahkan para traveler dalam memilih paket liburan</p>
				<!-- <a href="#">Read More</a> -->
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3">
				<div class="position">
					<img src="<?php echo site_url('assets/images/b33.jpeg');?>" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //welcome -->
<!-- booking bottom -->	

<!-- //booking bottom -->	
<!-- /services -->
<section class="featured_services py-5">
	<div class="container py-3">
		<h3 class="heading text-center mb-5">Serba Serbi</h3>
		<div class="row agile_inner_info">

		<?php foreach($tbl_article as $t){ ?>
			<div class="col-lg-4 col-md-6 w3_agile_services_grid">
				<div class="agile_services_grid">
					<div class="hover06 column">
						<div>
							<figure><img src="<?php echo site_url('assets/images/s1.jpg');?>" alt=" " class="img-responsive"></figure>
						</div>
					</div>
					<div class="agile_services_grid_pos">
						<i class="fa fa-globe" aria-hidden="true"></i>
					</div>
				</div>
				<h4><?php echo $t['judul_article']; ?></h4>
				<p><?php echo $t['isi_article']; ?></p>
			</div>
		<?php } ?>
			<div class="mx-auto mt-lg-4 mt-5 text-center">
		<?php echo $this->pagination->create_links(); ?> 
			</div>
		</div>
	</div>
</section>

<section class="bottom py-5">
	<div class="container">
		<div class="row bottom-grids">
			<div class="col-md-6 grid1">
				<h4 class="mb-4">Discount 10-35% off</h4>
				<h3 class="mb-4">Garuda Travel the world with us</h3>
				<!-- <a href="#">Read More</a> -->
			</div>
			<div class="col-md-3 video-play">
				<!-- video -->
				<div class="video-grid1 mt-4">
					<div class="demo-bg1">
						<div class="pop-bg position-relative">
							<div class="arrow-container animated fadeInDown">
								<a href="#small-dialog1" class="arrow-2 popup-with-zoom-anim">
									<i class="fa fa-play"></i>
								</a>
								<div class="arrow-1 animated hinge infinite zoomIn"></div>
							</div>
							<h4 class="mt-3">Watch video</h4>
							<!--  video-button-popup -->
							<div id="small-dialog1" class="mfp-hide">
								<div class="agileits_modal_body">
									<iframe src="https://player.vimeo.com/video/162413069"></iframe>
								</div>
							</div>
							<!-- // video-button-popup -->
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-3 mt-md-0 mt-4">
				<img src="<?php echo site_url('assets/images/b44.jpeg');?>" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</section>

<!-- //services -->
<section class="featured_services py-5">
	<div class="container py-3">
		<h3 class="heading text-center mb-5">Near By</h3>
		<div id="nearby" class="row agile_inner_info">
			
		</div>
	
	</div>
</section>
<!-- footer -->
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids pb-md-5 pb-3">	
			<div class="col-md-4 col-sm-6 col-6">
				<a href="#"> <i class="fa fa-phone"></i>Call Us</a>
			</div>
			<div class="col-md-4 col-sm-6 col-6">
				<a href="#"> <i class="fa fa-envelope"></i>Send Message</a>
			</div>
			<div class="col-md-4 col-sm-6 col-6 mt-md-0 mt-2">
				<a href="#"> <i class="fa fa-whatsapp"></i>Whatsapp</a>
			</div>
		</div>
		
		<div class="subscribe-grid text-center">
			<p class="para three mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet </p>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright py-4 text-center">
	<div class="container">
		<p>© 2019 Garuda Travel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> Kopegtel </a></p>
	</div>
</section>
<!-- //copyright -->

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
  
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
		<?php echo form_open('Auth/login'); ?>
			<div class="form-group">
				<label for="email">Username:</label>
				<input type="text" name="username"  value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass">
			</div>
		
			<button type="submit" class="btn btn-default">Submit</button>
            <?php echo form_close(); ?>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	  </div>
  
	</div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">
  
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Register</h4>
		</div>
		<div class="modal-body">
            <?php echo form_open('Auth/add'); ?>
			<div class="form-group">
				<label for="email">Username:</label>
				<input type="text" name="username"  value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass">
			</div>
		
			<button type="submit" class="btn btn-default">Submit</button>
            <?php echo form_close(); ?>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	  </div>
  
	</div>
</div>

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-2.2.3.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.js');?>"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- desoslide-JavaScript -->
	<script src="<?php echo site_url('assets/js/jquery.desoslide.js');?>"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- Calendar -->
		<script src="<?php echo site_url('assets/js/jquery-ui.js');?>"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
	<!-- //Calendar -->
	
	<!-- banner slider -->
	<script src="<?php echo site_url('assets/js/responsiveslides.min.js');?>"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->
	
	<!--pop-up-box -->
	<script src="<?php echo site_url('assets/js/jquery.magnific-popup.js');?>"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->

	<!-- start-smoth-scrolling -->
	<script src="<?php echo site_url('assets/js/SmoothScroll.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/move-top.js');?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/easing.js');?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
	<script type="text/javascript">
		$(document).ready(function(){
 
                $.ajax({
                    url : "<?php echo site_url('hotel/get_json_data_place');?>",
                    method : "POST",
                    async : true,
                    dataType : 'json',
                    success: function(data){
					getLocation();
						function getLocation() {
						  if (navigator.geolocation) {
						    navigator.geolocation.getCurrentPosition(showPosition);
						  } else { 
						    console.log("Geolocation is not supported by this browser.");
						  }
						}

						function showPosition(position) {
						var html = "";
					    var poslat = position.coords.latitude;
					    var poslng = position.coords.longitude;

						  console.log( "Latitude: " + position.coords.latitude + 
						  "<br>Longitude: " + position.coords.longitude);
						

				    function distance(lat1, lon1, lat2, lon2, unit) {
				    	var radlat1 = Math.PI * lat1/180
				    	var radlat2 = Math.PI * lat2/180
				    	var theta = lon1-lon2
				    	var radtheta = Math.PI * theta/180
				    	var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
				    	if (dist > 1) {
				    		dist = 1;
				    	}
				    	dist = Math.acos(dist)
				    	dist = dist * 180/Math.PI
				    	dist = dist * 60 * 1.1515
				    	if (unit=="K") { dist = dist * 1.609344 }
				    	if (unit=="N") { dist = dist * 0.8684 }
				    	return dist
				    }

				    for (var i = 0; i < data.length; i++) {
				    	console.log(distance(poslat, poslng, data[i].latitude, data[i].longitude, "K"));
    					// if this location is within 0.1KM of the user, add it to the list
				        if (distance(poslat, poslng, data[i].latitude, data[i].longitude, "K") <= 40 ) {
				        	console.log(data[i].name_place)
				        html += '<div id="nearby" class="col-lg-4 col-md-6 w3_agile_services_grid"><div class="agile_services_grid"><div class="hover06 column"><div><figure><img src="<?php echo site_url('assets/images/s1.jpg');?>" alt=" " class="img-responsive"></figure></div></div><div class="agile_services_grid_pos"><i class="fa fa-globe" aria-hidden="true"></i></div></div><h4>'+data[i].name_place+'</h4><p>'+data[i].description+'</p></div>';
				 		}
					}
						
    				$('#nearby').append(html);
    				}
                    // console.log(data)
                    }
                });
             
        });

	


    // $('#nearbystops').append(html);
	</script>
<!-- //js-scripts -->

</body>
</html>