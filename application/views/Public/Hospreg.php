
<div class="container">
            <div class="navbar-header">
           
			 
                <a class="navbar-brand" href="index.html"><img src="<?= base_url('assets/images/munshi ki 2 ungli edit.jpg');?>"></a> 
           
            </div>
			
            <div class="collapse navbar-collapse"> 
                
                
					
                   <div data-role="main" class="ui-content">

				   <ul class="nav navbar-nav navbar-right">
				

                    <div class="w3-container">
 <button style="margin: 0px;	padding: 0px; border:0px;   background: #0099cc;    color: #ffffff;	width: 80px;	height:40px;	font-weight: 700;    text-transform: uppercase"  onclick="document.getElementById('id02').style.display='block'" type="button">Login</button> 
  <?php include_once ('Hosp_login_form.php');?>
   <button style="margin: 0px;	padding: 0px; border:0px;   background: #0099cc;    color: #ffffff;	width: 80px;	height:40px;	font-weight: 700;    text-transform: uppercase"  onclick="document.getElementById('id01').style.display='block'" type="button">Register</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        
       <br> <br>
       <?php echo form_open('Users/hosp_reg', 'id="register-form"');?>
      <fieldset>
        <legend>Hospital Registration</legend>
        <br>
      </fieldset>
      
      
      <div class="form-group col-md-12">
        <input name="hosp_id" type="text" class="form-control" placeholder="Hosp_id">
      </div>
        
         <div class="form-group col-md-12">
         <input name="hosp_name" type="text" class="form-control" placeholder="hospital name">
      </div>
      
       <div class="form-group col-md-6">
      <input name="hosp_pass" type="password" class="form-control" placeholder="password">
      </div>
     <div class="form-group col-md-6">
       <input name="con_password" type="password" class="form-control" placeholder="confirm password">
     </div>

	 <div class="form-group col-md-12">
       <input name="hosp_reg_no" type="text" class="form-control" placeholder="Registration number">
     </div>


	 <div class="form-group col-md-12">
<select name="hosp_cat" class="form-control"  >
						<option value=" disabled selected hidden">category</option>

  <option value="CLinic">CLinic</option>
  <option value="General Hospital">General Hospital</option>
  <option value="SPecialised Hospital">SPecialised Hospital</option>
  <option value="Children Hospital">Children Hospital</option>
</select>

</div>

      

	   <div class="form-group col-md-12">
         <input name="address" type="text" class="form-control" placeholder="Address">
         <input type="text" class="form-control" placeholder="Address">
         </div>


	<div class="form-group col-md-6">
       <input name="city" type="text" class="form-control" placeholder="City">
     </div>
     
	<div class="form-group col-md-6">
		  <select name="state" class="form-control" >
					  <option value=" disabled selected hidden ">State</option>

			  <option value="maharashtra">maharashtra</option>
			  <option value="rajasthan">rajasthan</option>
			  <option value="gujarat">gujarat</option>
			  <option value="madhya pradesh">Madhya Pradesh</option>
	</select>
     </div>


		<div class="form-group col-md-12">
		<select name="hosp_type" class="form-control"  >
				   <option value="disabled selected hidden">TYpe of hospital</option>

  <option value="private">private</option>
  <option value="government">government</option>
 
</select>
</div>


		 <div class="form-group col-md-12">
       <input name="phone" type="text" class="form-control" placeholder="Contact no">
     </div>

		
		<div class="form-group col-md-12">
       <input name="website" type="text" class="form-control" placeholder="website">
     </div>
		
      <div class="form-group col-md-12">
        <input class="form-control" name="email" placeholder="Email address" type="email"> 
      </div>
      
      
      
      
	 
     
     
     
      
      	  <div class="form-group col-md-6">
        <input class="btn btn-primary" id="submit-button" type="submit" value="Submit">
      </div>

    </form>
  </div>

  
 

      </div>
    </div>

</div>
</div>
</div></div>
     
                </ul> 
            </div>
            </div>
            
            <br><br>
            
            <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="<?= base_url('assets/js/validation_hos.js');?>"></script>
            