<?php include_once ('header.php'); ?>
<br>
<br><br><br><br><br><br><br><br><br>
<div class="col-md-10">
	<div class="content-box-large">
				<div class="panel-heading">
				<div class="panel-title"> Search Criteria: </div>
  				<div class="panel-body">
						<div class="col-sm-10">
							<input type="text" class="form-control" id="byname" placeholder="By Name">
						</div>
				
						<div class="col-sm-10">
							<input type="text" class="form-control" id="bycity" placeholder="By City">
						</div>
				
						<div class="col-sm-10">
							<input type="text" class="form-control" id="bysp" placeholder="By Speciality">
						</div>
				
						<div class="col-sm-10">
							<input type="text" class="form-control" id="bytype" placeholder="By Type">
						</div>
						
						<div class="col-sm-10">
							<input type="button" class="btn" id="search" name="search" value="search">
						</div>
						
		
				</div>
				<div class="panel-heading">
				<div class="panel-title"> Search Results </div>
				<br><br>
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Hospital ID</th>
								<th>Hospital Name</th>
								<th>Address</th>
								<th>City</th>
								<th>State</th>
								<th>Phone</th>
								<th>Fax</th>
								<th>E-mail</th>
							</tr>
						</thead>
						<!-- <tbody>
						<?php if(count($querry)):?>
						<?php foreach($querry as $q):?>
							<tr class="odd gradeX">
								<td><?=$q->sr_no ?></td>
								<td><?=$q->uid ?></td>
								<td><?= $q->dt_of_cre ?></td>
								<td><?= $q->hosp_id ?> </td>
								<td><?= $q->doc_id ?></td>
								<td><?= $q->disease_id ?></td>
								<td><?= $q->rep_link ?></td>
								
							</tr>
							<?php endforeach;?>
							<?php endif;?>
							
						</tbody> -->
					</table>
  				</div>
  			</div>
  			</div>
 <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url('assets/js/jquery-1.9.1.min.js');?>"><\/script>')</script>
        <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  		
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?= base_url('assets/js/jquery.easing.min.js');?>"></script>
		<script src="<?= base_url('assets/js/scrolling-nav.js');?>"></script>		
 
