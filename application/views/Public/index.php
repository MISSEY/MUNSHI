 
<?php include('header.php');?>

	    <!-- End Services -->
<section id="main-slider" class="no-margin">
<br><br><br><br>
        <div class="carousel slide" >
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner"  >
                <div class="item active" style="background-image: url(<?= base_url('assets/images/Healthcare.jpg');?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2><div class="animation animated-item-1"><font color ="black"> Healthy Wealthy Wise </font> </div></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?= base_url('assets/images/Hospital-Management-System-1.png');?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1"><font color ="black"> Good health Good life</font></h2>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?= base_url('assets/images/analytics.jpg');?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"><font color ="black"> Let's join hands to be fit and fine</font> </h2>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h2> <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">Health The Treasure!</span> <!--A free fully responsive Bootstrap 3 HTML5 template!--></h2> <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/" class="btn btn-orange">Take Care!!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->

		<div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-info-sign"></i>
		        			<h3>Awareness Program</h3>
		        			<p></p>
		        		 <a href="<?= base_url('Page/aware_pg');?>">Read</a>  
		        	</div>
					</div>
						
	        		
	        		
	        		<div class="col-md-4 col-sm-6">
					<div class="service-wrapper">
					
	        		<h3>NEWS<h3>
	        			<center><div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:250px;background-color:#transparent; 
	        			border:1px solid #333333;"><div id="rsswidget" style="height:300px;">
	        			
	        			<iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1491100606763&amp;x=http%3A%2F%2Fnews.google.co.in%2Fnews%3Fcf%3Dall%26hl%3Den%26pz%3D1%26ned%3Din%26topic%3Dm%26output%3Drss&amp;w=200&amp;h=200&amp;bc=333333&amp;bw=1&amp;bgc=transparent&amp;m=20&amp;it=true&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=true&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" 
	        			border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:2; padding:0; margin:0; width:250px; height:300px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:1px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>
						</div></div></center>
						<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
						<i class="icon-question-sign"></i>
						 
          
						<h1>Are you Registered?</h1>
					
					
					<div id="container">
				<input type="text" id="name"  placeholder="Type here and press Enter">
	</div>
					</div>
					<div id="result"></div>
					</div>
					        	</div>
	     </div>
</div>
		
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#name').focus();
			$('#name').keypress(function(event) {
				var key = (event.keyCode ? event.keyCode : event.which);
				if (key == 13) {
					var info = $('#name').val();
					$.ajax({
							method: "POST",
							url: "<?= base_url('users/uid_search'); ?>",
						data: {name: info},
						success: function(status) {
							//('#result').html(status);
							alert(status);
							$('#name').val('');
						}
					});
				};
			});
		});
	</script>
					
<?php include('footer.php');?>
	    <!-- Footer -->
	   