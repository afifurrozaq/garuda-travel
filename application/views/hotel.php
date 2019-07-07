
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>	


<!-- best offers -->
<section class="featured_services py-5">
	<div class="container py-sm-3">
		<h2 class="heading text-center mb-sm-5 mb-4">Our Services</h2>
		<div class="row agile_inner_info">
		<?php foreach($tbl_hotel as $t){ ?>
			<div class="col-lg-4 col-sm-6 mb-5 w3_agile_services_grid">
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
				<h4><?php echo $t['nama_hotel']; ?></h4>
				<p><?php echo $t['alamat']; ?></p>
			</div>
		<?php } ?>
		
		</div>
		<div class="mx-auto mt-lg-4 mt-5 text-center">
		<?php echo $this->pagination->create_links(); ?> 
			</div>
	</div>
</section>