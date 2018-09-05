<!DOCTYPE html>
 <html class="no-js">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

    <title>health care</title>
    <link href="https://bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet">
	
    <!-- CSS FILES -->
     <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>"/>
      <link rel="stylesheet" href="<?=base_url('assets/css/signup-form.css');?>" type="text/css" />
    
     <link rel="stylesheet" href="<?=base_url('assets/css/main.css');?>"/>
     <link rel="stylesheet" href="<?= base_url('assets/css/custom.css');?>">
     
      <script src="https://use.edgefonts.net/bebas-neue.js"></script>
     
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    
   

    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon-social.css');?>"/>
   	<script src="https://use.fontawesome.com/b5a3ec52ca.js"></script>
   	 <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');?>">
   	
   
    

   <script src="<?= base_url('assets/js/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>

    
    
</head>


<body>

       
		
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
       
	    
	   <?php include_once 'Hospreg.php';?>
	  
		
		
  
           <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Basica"></a> -->
            </div> 
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?= base_url('Users/index');?>">HOME</a></li>
                     <li class="active"><a href="<?= base_url('Page/aboutus');?>">ABOUT US</a></li>
                    
                    
                    <li class="active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title ="Search for hospitals and doctor">SEARCH  <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li ><a href="<?= base_url('Page/hossear');?>">Hospital</a></li>
                             <li class="divider"></li>
                            <li ><a href="<?= base_url('Page/docsear');?>">Doctor</a></li>
                          
                           
                            
                        </ul>
                    </li> 
           

                    
                     <li class="active"><a href="<?= base_url('Page/contact_us');?>">CONTACT US</a></li>
                </ul>
            </div>
        </div>
		
    </header><!--/header-->
