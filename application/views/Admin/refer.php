			  				<?php include_once 'A_header.php';?>
			  				<div class="col-md-10">
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  
								  <div class="form-group">
								    <label for="uid" class="col-sm-2 control-label">Patient UID </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="uid" placeholder="">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="docid" class="col-sm-2 control-label">Doctor ID </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="docid" placeholder="">
								    </div>
									</div>
							
								<div class="form-group">
								    <label for="rhid" class="col-sm-2 control-label">Referred Hospital ID </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="docid" placeholder="">
								    </div>
									</div>
									
									<div class="form-group">
								    <label for="rdocid" class="col-sm-2 control-label">Referred Doctor ID </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="rdocid" placeholder="">
								    </div>
									</div>
									
								<div class="form-group">
								    <label for="srno" class="col-sm-2 control-label"> Serial No. </label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="srno" placeholder="">
								    </div>
									</div>
									
								  
								  <div class="form-group">
									<label class="col-md-5"> </label>
									<div class="col-md-5">
									<button class="btn" type="submit" name="submit" value="submit"> Refer </button>
									</div>
									</form>
								  </div>
								  </div>
							
								  
						
								 				
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

  <?php include_once 'A_footer.php';?>