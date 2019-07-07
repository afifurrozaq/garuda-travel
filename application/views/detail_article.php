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
			<h2 class="heading text-center mb-sm-5 mb-4"><?php echo $tbl_article['judul_article']; ?></h2>
		</div>
		<div class="w3ls_map">
            <figure><img src="<?php echo site_url('assets/images/s1.jpg');?>" alt=" " class="img-responsive"></figure>
		</div>

		<div class="row contact_wthreerow agileits-w3layouts">
		
			<div class="col-lg-12 col-md-12 agileits_w3layouts_contact_gridl">
				<div class="agileits_mail_grid_right_grid">
					<p> Penulis : <?php echo $tbl_article['penulis']; ?></p>
					<p><?php echo $tbl_article['isi_article']; ?></p>
				</div>
			</div>
			
		</div>
	</div>
</section>