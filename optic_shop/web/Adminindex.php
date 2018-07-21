<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>GUNNAR OPTIC SHOP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo" >
			<a href="index.html"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li class="active"><a href="Adminindex.php">home</a></li> |
				<li><a href="Adminglass.php">Glasses</a></li> |
				<li><a href="Adminbook.php">Orders</a></li> |		
			    <li><a href="Admincontact.php">contact</a></li> |
				
				<?php
				//error_reporting(0);
				if(!empty($_SESSION['username'])){				
				echo "<li><a href='logout.php'>logout</a></li>"; 
				}
				else{
				echo "<li><a href='login.php'>login</a></li>";
				}
				?>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details 
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>USA</option>
									<option>AUS</option>
									<option>UK</option>
									<option>IND</option>
								</select>
							</div>		
						</div>		
					</form> -->
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="Adminindex.php">home</a></li> 
				<li><a href="Adminglass.php">Glasses</a></li> 
				<li><a href="Adminbook.php">Orders</a></li> 		
			    <li><a href="Admincontact.php">contact</a></li> 

				
				<?php
				if($_SESSION['username']){
				echo "<li><a href='logout.php'>logout</a></li>"; 
				}
				else{
				echo "<li><a href='login.php'>login</a></li>";
				}
				?>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
				<?php 
				if(!empty($_SESSION['username']))
				{
					echo "<h6 style='color:grey;text-align:right;width:95%;'>Welcome ".$_SESSION['username']."</h6>";
					} 
				?> 
	
	</div>

</div>
</div>
<!----start-images-slider---->

		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>WHY GUNNAR COMPUTER EYEWEAR?<span class="hide"></span></h4>
		                        <h5 class="title1"><i class="bg"></i>REDUCE DIGITAL EYE STRAIN.<span class="hide" ></span></h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/slider-bg.jpg" alt=""/>
		                <div class="slide_content">
		                     <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>IMPROVE COMFORT AND FOCUS.<span class="hide">  </span></h4>
		                        <h5 class="title1"><i class="bg"></i>PROTECT YOUR EYES.<span class="hide"></span> </h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>
		
<!-- for taking in glass price -->
<?php
	$servername = "localhost";
			$uname = "jonny";
			$passwd = "bravo";
			$dbname = "opticM";

			// Create connection
			$conn = mysqli_connect($servername, $uname, $passwd, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "select rate from glass";
			$result=mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);		
			//fetching value from database	
			while ($row = mysqli_fetch_array($result)) {           
			$glass[] =  $row['rate']; 	
			}			
			
			$_SESSION['MLG MICRON Onyx'] = $glass[0];          
			$_SESSION['VINYL Onyx z'] = $glass[1];   			
			$_SESSION['Desmo - Onyx'] = $glass[2]; 	
			$_SESSION['Penta - Mercury'] = $glass[3];          
			$_SESSION['INTERCEPT Raven Grey'] = $glass[4];   			
			$_SESSION['Sparrow - Onyx / Red'] = $glass[5];
			$_SESSION['RAZER CERBERUS Onyx Grey'] = $glass[6];          
			$_SESSION['DEmissary - Onyx'] = $glass[7];   			
			
			mysqli_close($conn);
		?>
		<!-- closing for taking in glass price -->		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
<!-- start main_content -->
				<ul class="service_list">
				<li>
						<div class="ser_img">
							
								<img src="images/58_pic.jpg" alt="" />
								
							
						</div>	
						<h3>MLG MICRON Onyx ($<?php echo $_SESSION['MLG MICRON Onyx']; ?>)</h3>
						 <p class="para">The MLG MICRON fuses modern lines with classic style to create the perfect weapon for any op.Designed with an ideal balance of precision optics and optimum comfort, the MLG MICRON brings new meaning to perfect fit.</p>

					</li>
				
				
				
				
					
					<li>
						<div class="ser_img">
							
								<img src="images/onyx.jpg" alt="" />
								
							
						</div>	
						<h3 >VINYL Onyx z ($<?php echo $_SESSION['VINYL Onyx z']; ?>)</h3>
						 <p class="para">Mastered with the best of both worlds, VINYL’S modern digital lines combine with a vintage silhouette. A tech spin on classic styling.Spring hinges and three dimensionally adjustable nose pads allow precise tuning of the fit. </p>
						
					</li>
					<li>
						<div class="ser_img">
							
								<img src="images/17_pic.jpg" alt="" />
								
							
						</div>						
						 <h3>Desmo - Onyx ($<?php echo $_SESSION['Desmo - Onyx']; ?>)</h3>
						 <p class="para">The DESMO gaming glasses feature a unique semi-rimless design that delivers the broadest visual field of all GUNNAR styles. As an added benefit for gamers, the ultra-slim temples rest comfortably beneath a gaming headset.</p>
						
					</li>
					<li>
						<div class="ser_img">
							
								<img src="images/26_pic.jpg" alt="" />
								
							
						</div>						
						<h3>Penta - Mercury ($<?php echo $_SESSION['Penta - Mercury']; ?>)</h3>
						 <p class="para">With custom engineered lenses manufactured on machinery from the ophthalmic industry and eyewear features found only on best-in-class frames, Penta delivers professional grade comfort.</p>
						 
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="service_list top">
					<li>
						<div class="ser_img">
							
								<img src="images/64_pic.jpg" alt="" />
								
							
						</div>						
						<h3>INTERCEPT Raven Grey ($<?php echo $_SESSION['INTERCEPT Raven Grey']; ?>)</h3>
						 <p class="para">Agency approved. Retro classic frame fused with futuristic technology. INTERCEPT completes the line between style and science. This hinges anchor injected temples. An ergonomically balanced frame supports precision optics.</p>
						
					</li>
					<li>
						<div class="ser_img">
							
								<img src="images/23_pic.jpg" alt="" />
								
							
						</div>						
						 <h3>Sparrow - Onyx / Red ($<?php echo $_SESSION['Sparrow - Onyx / Red']; ?>) </h3>
						 <p class="para">Redline. With billet aluminum construction, SPARROW with i-AMP lens technology inspires confidence when behind the wheel of any technology. Internal spring hinges unite a solid chassis. </p>
						
					</li>
					<li>
						<div class="ser_img">
							
								<img src="images/62_pic.jpg" alt="" />
								
							
						</div>	
						<h3>RAZER CERBERUS Onyx Grey ($<?php echo $_SESSION['RAZER CERBERUS Onyx Grey'] ?>)</h3>
						<p class="para">Crafted of the best of all materials, CERBERUS, designed by Razer outdoor eyewear, combines traditional style with modern digital lines.Combine all that with GUNNAR's i-AMP lens technology and you have the perfect performance. </p>
						
											
					</li>
					<li>
						<div class="ser_img">
						
								<img src="images/30_pic.jpg" alt=""  />
								
							
						</div>		
						<h3>Emissary - Onyx ($<?php echo $_SESSION['DEmissary - Onyx'] ?>)</h3>
						 <p class="para">The EMISSARY computer glasses are designed for those looking for more freedom of sight while maintaining a sharp look. GUNNAR’s most popular semi-rimless design, the EMISSARY features adjustable nose pads and a lightweight .</p>
						
					</li>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	<!-- end main_content -->

	</div>
</div>
</div>	
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved </span></p>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="https://www.facebook.com/"></a></li>
					<li><a class="icon2" href="https://twitter.com/login"></a></li>
					<li><a class="icon3" href="https://vimeo.com/"></a></li>
					<li><a class="icon4" href="https://slack.com/"></a></li>
					<li><a class="icon5" href="https://www.youtube.com"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>