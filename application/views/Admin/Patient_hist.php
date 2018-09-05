<?php include_once('A_header.php');?>
<?php echo form_open('hospital/patient_hist');?>

<div class="col-md-10">
<div class="container well" style="margin-top: 40px">
<div class="form-group">
								    <label for="uid" class="col-sm-2 control-label"> Patient UID </label>
								    <div class="col-sm-5">
								      <input type="number" name='uid' class="form-control" id="uid" placeholder="UID">
								    </div>

									<div class="form-group">
								    <label for="hid" class="col-sm-2 control-label"> Hospital ID </label>
								    <div class="col-sm-5">
								      <input type="number" name='hosp_id' class="form-control" id="hid" placeholder="Previous Hospital ID">
								    </div>
								  
								  <div class="form-group">
								    <label for="otp" class="col-sm-2 control-label"> OTP Received </label>
								    <div class="col-sm-5">
								      <input type="text" class="form-control" id="otp" placeholder="Enter OTP">
									  <br>
								      <input type="submit" id="submit" value="submit">
								    </div>
								  </form>
								  </div></div>
		</div>
		
 <?php include_once 'A_footer.php';?>