<div id="id02" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
<br>
<?php echo form_open('Login/hosp_login', 'id="login-form"');?>
<?php if($err=$this->session->flashdata('login_failed')):?>
<?= $err ?>
<?php endif;?>
      <fieldset>
        <legend>Hospital Login</legend>
      </fieldset>
      
      
      <div class="form-group col-md-12">
        <input name="hosp_id" type="text" class="form-control" placeholder="Hosp_id">
      </div>
       <div class="form-group col-md-6">
      <input name="hosp_pass" type="password" class="form-control" placeholder="password">
      </div>
      
      	  <div class="form-group col-md-6">
        <input class="btn btn-primary" id="submit-button" type="submit" value="LOGIN">
      </div>

    </form>
    </div>
    </div>
    </div>
    