<?php include_once 'A_header.php';?>
 <div class="col-md-8">
	  			<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"> Generate Bill </div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="uid" class="col-sm-2 control-label">Patient UID: </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="uid" placeholder="UID">
								    </div>
								  </div>
								  
								  
								  <div class="form-group">
								    <label for="srno" class="col-sm-2 control-label"> Serial Number: </label>
								    <div class="col-sm-5">
								      <input type="number" class="form-control" id="srno" placeholder="SerialNo">
								    </div>
								  
								  <div class"col-sm-5">
								  <button class="btn" type="button" name="search" value="search"> Search </button>
								  </div>
								  
								  <div="form-group">
								  <div class"col-sm-5">
								  <button class="btn" type="button" name="search" value="search"> Generate Bill </button>
								  </div>
								  </div>
								  
								  
								  </div>
								    <link href="<?= base_url('assets/admin/vendors/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- jQuery UI -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

    <script src="<?= base_url('assets/admin/vendors/datatables/js/jquery.dataTables.min.js');?>"></script>

    <script src="<?= base_url('assets/admin/vendors/datatables/dataTables.bootstrap.js');?>"></script>
			 <?php include_once 'A_footer.php';?>		