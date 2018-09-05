<?php include_once ('A_header.php'); ?>
 <?php echo form_open('hospital/patient_update');?>
 <div class=col-md-10>
 <div class="container well" style="margin-top: 40px">
 <fieldset>
        <legend>Record Updation </legend>
      </fieldset>
      <?php echo form_open('hospital/Patient_Update');?>
  <div class="col-md-12">
        <input name="uid" type="text" class="form-control" placeholder="Uid">
      </div>
        
         <div class="form-group col-md-12">
         <input name="sr_no" type="text" class="form-control" placeholder="serial_no">
      </div>
      
       <div class="form-group col-md-6">
      <input name="dt_of_cre" type="text" class="form-control" placeholder="date of creation">
      </div>
     <div class="form-group col-md-6">
       <input name="hosp_id" type="text" class="form-control" placeholder="hosp_id">
     </div>

	 <div class="form-group col-md-12">
       <input name="doc_id" type="text" class="form-control" placeholder="Doctor id">
     </div>
 
  <div class="form-group col-md-12">
       <input name="disease_id" type="text" class="form-control" placeholder="disease id">
     </div>
      <div class="form-group col-md-12">
       <input name="descp" type="text" class="form-control" placeholder="Description">
     </div>
      <div class="form-group col-md-12">
       <input name="rep_link" type="text" class="form-control" placeholder="Report link">
     </div>
 	<div class="form-group col-sm-offset-6">
       <button type="submit" class="btn" value="submit"> Submit </button>
     </div>
     </form>
     </div></div>
								  
							
								  

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
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include_once 'A_footer.php';?>	
