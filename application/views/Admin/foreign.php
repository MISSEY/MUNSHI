<?php include_once 'A_header.php';?>

<div class="col-md-10">
<div class="container well" style="margin-top: 40px">
     
      <fieldset>
        <legend>Foreign National Patient Registration</legend>
      </fieldset>
      
        <?php echo form_open('Hospital/Foreign_nat_reg');?>
      <div class="form-group col-md-6">
        <input name="ppno" id="ppno" type="text" class="form-control" placeholder="Passport Number">
      </div>

	  <div class="form-group col-md-6">
      <input name="name" id="name" type="text" class="form-control" placeholder="Name">
      </div>
     <div class="form-group col-md-6">
       <input name="surname" id="surname" type="text" class="form-control" placeholder="Surname">
     </div>
      
      <div class="form-group col-md-6">
        <input class="form-control" name="email" id="email" placeholder="Email address" type="email"> 
      </div>
      
      <div class="form-group col-md-6">
        <input type="text" name="dob" id="dob" class="form-control" placeholder="Date Of Birth">
     </div>
     
      <div class="form-group col-md-6">
       <input list="gen" name="gen" id="gen" class="form-control"  placeholder="Gender">  
                            <datalist id="gen">
                        <option value="Male">
                        <option value="Female">
                        
                      </datalist>
     </div>

     <div class="form-group col-md-6">
         <input name="addr" type="text" id="addr" class="form-control" placeholder="Address">
     </div>
		 
	<div class="form-group col-md-6">
         <input name="city" type="text" id="city" class="form-control" placeholder="City">
    </div>
	
	<div class="form-group col-md-6">
         <input name="state" type="text" id="state" class="form-control" placeholder="State">
    </div>
	
	
	<div class="form-group col-md-6">
         <input name="zip" type="text" id="zip" class="form-control" placeholder="ZIP">
    </div>
     
	 
	  <div class="form-group col-md-6">
       <input name="cno" type="text" id="cno" class="form-control" placeholder="Contact no">
     </div>
     
	 <div class="form-group col-md-6">
        <input type="submit" value="submit" id="submit">
      </div>
	
    </form>
  
  </div>
  </div>
 <?php include_once 'A_footer.php';?>
  