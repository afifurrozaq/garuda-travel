<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>
<!-- //inner page banner --> 	
		
<!-- contact -->
<section class="w3ls-section contact py-5">
	<div class="container py-sm-3">
		<div class="w3ls-title">
			<h2 class="heading text-center mb-sm-5 mb-4">Booking</h2>
		</div>


		<div class="row contact_wthreerow agileits-w3layouts">
		
			<div class="col-lg-12 col-md-12 mt-md-0 mt-5 w3l_contact_form">
				<h4>Form Booking</h4>
				
                <?php echo form_open('booking/add'); ?>
                
                <select name="order_type" class="form-control">
								<option value="">select</option>
								<?php 
								$order_type_values = array(
									'rent_car'=>'Rental Car',
									'leader_camp'=>'Leadership Camp',
									'adventure_tour'=>'Adventure Tour',
								);

								foreach($order_type_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('order_type')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
						</select>
                        <br/>
					<input type="text" name="nama" id="nama" value="<?php echo $this->input->post('nama'); ?>" placeholder="Nama"
						required="">
                     
					<input type="email" name="email" id="email" value="<?php echo $this->input->post('email'); ?>" placeholder="Email"
						required="">
					<input type="text" name="no_telp" id="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" placeholder="No Telpon"
						required="">
                        <br/>
                        <br/>
                    <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" placeholder="Alamat"
						required="">
					<textarea name="keterangan" id="keterangan" placeholder="Message" required=""><?php echo $this->input->post('keterangan'); ?></textarea>
					<input type="submit" value="Submit">
            <?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>