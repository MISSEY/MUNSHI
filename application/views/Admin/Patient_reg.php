<?php include_once 'A_header.php';?>

<div class="col-md-10"> 
<div class="container well" style="margin-top: 40px">
    
      <fieldset>
        <legend>Patient Registrations</legend>
      </fieldset>
      
       <?php echo form_open('Hospital/Patient_reg');?>
      <div class="form-group col-md-6">
        <input name="uid" id="uid" type="text" class="form-control" placeholder="UID">
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
       <input name="cno" type="text" id="cno" class="form-control" placeholder="Contact no">
     </div>
     
      <div class="form-group col-md-6">
       <input list="gen" name="gen" id="gen" class="form-control"  placeholder="Gender">  
                            <datalist id="gen">
                        <option value="Male">
                        <option value="Female">
                        
                      </datalist>
     </div>

     <div class="form-group col-md-6">
         <input name="add" type="text" id="add" class="form-control" placeholder="Address">
         
         </div>
     

     <div class="form-group col-md-6">
        <input list="state1" name="state" id="state" class="form-control"  placeholder="State">  
                            <datalist id="state1">
                        <option value="Gujarat">
                        <option value="Maharashtra">
                        <option value="NCE">
                        <option value="AP">
                        <option value="Telangana">
                      </datalist>
     </div>
 <div class="form-group col-md-6">
        <input list="city1" name="city" id="city" class="form-control"  placeholder="City">  
                            <datalist id="city1">
                        <option value="surat">
                        <option value="Mumbai">
                        <option value="Delhi">
                        <option value="Hyderabad">
                        <option value="vijaywada">
                      </datalist>
     </div>
     
      
       <div class="form-group col-md-6">
        <input id="submit" type="submit" value="Submit">
      </div>
      
      </form>
	
   </div>
  

		
   
	
  </div>
  
  <?php include_once 'A_footer.php';?>
   

  
  
 