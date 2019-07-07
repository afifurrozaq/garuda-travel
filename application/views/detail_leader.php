<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>

<section class="w3ls-section contact py-5">
	<div class="container py-sm-3">
		<div class="w3ls-title">
			<h2 class="text-center"><?php echo $tbl_leader_camp['nama_paket']; ?></h2>
			<br/>
					<h5 class="mb-sm-5 mb-4"> Alamat : <?php echo $tbl_leader_camp['price']; ?></h5>
		</div>
		<div class="w3ls_map">
            <figure><img src="<?php echo site_url('assets/images/s1.jpg');?>" class="img-responsive"></figure>
		</div>

		<div class="row contact_wthreerow agileits-w3layouts">
		
			<div class="col-lg-12 col-md-12 agileits_w3layouts_contact_gridl">
				<div class="agileits_mail_grid_right_grid">
					<h5><?php echo $tbl_leader_camp['location_leader_camp']; ?></h5>
					<p><?php echo $tbl_leader_camp['description']; ?></p>
					<div class="mx-auto mt-lg-4 mt-5 text-center">
				<a href="<?php echo site_url('booking/');?>">Booking</a>
			</div>
				</div>
			</div>
		
		</div>
	</div>
</section>