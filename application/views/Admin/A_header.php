<!DOCTYPE html>

  <head>
    <title>Hospital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?= base_url('assets/css/styles.css');?>" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
  <img style="display:block; margin:auto" src="<?= base_url('assets\admin\images\munshi ki 2 ungli edit.jpg');?>" width="1350px" height="150px">
  	
  <div class="header">
	     <div class="container" >
	        <div class="row">
	           <div class="col-md-5" >
	              <!-- Logo -->
	              <div class="logo">
	                
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                  
				
	
	                       <input type="text" name='uid' class="form-control" placeholder="..." style ="height:30px">
	                         <span class="input-group-btn">
	                        <button class="btn" type="button" name ="submit" style ="height:30px" text-align ="center"onclick="location.href='<?= base_url('Hospital/puid_search');?>'">Search</button>
	                    </span>
					
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><?= anchor('login/logout','LOGOUT')?></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	
	

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
					<li class="current"><a href="<?= base_url('hospital/hos_dash')?>"><i class="glyphicon glyphicon-user"></i> Home</a></li>
                    <!--<li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>-->
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <!--<li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>-->
                    <!--<li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>-->
                    <!--<li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>-->
                    <!--<li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                        
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li> -->
                </ul>
             </div>
		  </div>
		 