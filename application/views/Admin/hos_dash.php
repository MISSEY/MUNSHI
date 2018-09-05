<?php include_once ('A_header.php'); ?>

<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<!--<div class="panel-title">New vs Returning Visitors</div> -->
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
						<table align="center">
						<tr>
							<td> <button class="btn-primary" id="b1" type="submit" onclick="location.href='<?= base_url('A_Page/patient_foreign');?>'">Foreign Patient Registration </button></td>
							<td> <button class="btn-primary" id="b2" type="submit" onclick="location.href='<?= base_url('A_Page/Patient_reg');?>'"> Patient Registration </button></td>
							<td> <button class="btn-primary" id="b3" type="submit" onclick="location.href='<?= base_url('A_Page/Patient_Update');?>'"> Record Updation </button></td>
						</tr>

						<tr>
						<td> <button class="btn-primary" id="b4" type="submit" onclick="location.href='<?= base_url('A_Page/Patient_refer');?>'"> Refer Patient to a Doctor</button> </td>
						<td> <button class="btn-primary" id="b5" type="submit" onclick="location.href='<?= base_url('A_Page/Patient_hist');?>'" > Request Access of Patient History </button></td>
						<td> <button class="btn-primary" id="b6" type="submit" onclick="location.href='<?= base_url('A_Page/gen_bill');?>'"> Generate Bill</button> </td> 
						</tr>
							
							</table>
							<br /><br />
		  				</div>
		  			</div>
		  		</div></div></div>
		  		
		
    <?php include_once ('A_footer.php');?>
   
