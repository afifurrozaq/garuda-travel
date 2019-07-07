<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer class="py-5">
	<div class="container py-md-3">
		<div class="row footer-grids pb-md-5 pb-3">	
			<div class="col-md-3 col-sm-6 col-6">
				<a href="#"> <i class="fa fa-phone"></i>Call Us</a>
			</div>
			<div class="col-md-3 col-sm-6 col-6">
				<a href="#"> <i class="fa fa-envelope"></i>Send Message</a>
			</div>
			<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-2">
				<a href="#"> <i class="fa fa-skype"></i>Skype Call</a>
			</div>
			<div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-2">
				<a href="#"> <i class="fa fa-comment"></i>Online Chat</a>
			</div>
		</div>
		
		<div class="subscribe-grid text-center">
			<p class="para three mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet </p>
			<h5>Subscribe for our latest updates</h5>
			<p>Get
				<span>10%</span> off on booking</p>
			<form action="#" method="post">
				<input class="form-control" type="email" placeholder="Subscribe" name="Subscribe" required="">
				<button class="btn1">
					<i class="fa fa-paper-plane"></i>
				</button>
			</form>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright py-4 text-center">
	<div class="container">
		<p>© 2018 In Travel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
	</div>
</section>
<!-- //copyright -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
  
	  <!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Modal Header</h4>
		</div>
		<div class="modal-body">
		  <p>Some text in the modal.</p>
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
		  <h4 class="modal-title">Modal Header</h4>
		</div>
		<div class="modal-body">
		  <p>Some text in the modal.</p>
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
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
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
	
<!-- //js-scripts -->

</body>
</html>