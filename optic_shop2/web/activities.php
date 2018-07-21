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
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><a href="index.php">home</a></li> |
				<li class="active"><a href="activities.php">Glasses</a></li> |
				<li><a href="reservation.php">purchase</a></li> |
				<li><a href="about.php">About</a></li> |			
			    <li><a href="contact.php">contact</a></li> | 
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
					</form>  -->
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.php">home</a></li> 
				<li><a href="activities.php">Glasses</a></li> 
				<li><a href="reservation.php">purchase</a></li> 
				<li><a href="about.php">about</a></li> 				
				<li><a href="contact.php">contact</a></li>
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
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
<!-- start main_content -->
				<ul class="service_list">
				<li>
						<div class="ser_img">
							<a href="reservation.php?&id=1">
								<img src="images/58_pic.jpg" alt="" />
								
							</a>
						</div>	
						<a href="reservation.php?&id=1"><h3>MLG MICRON Onyx ($<?php echo $_SESSION['MLG MICRON Onyx']; ?>)</h3></a>
						 <p class="para">The MLG MICRON fuses modern lines with classic style to create the perfect weapon for any op.Designed with an ideal balance of precision optics and optimum comfort, the MLG MICRON brings new meaning to perfect fit.</p>
						 <h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=1';" /></h4>
					</li>
				
				
				
				
					
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=2">
								<img src="images/onyx.jpg" alt="" />
								
							</a>
						</div>	
						<a href="reservation.php?&id=2"><h3 >VINYL Onyx z ($<?php echo $_SESSION['VINYL Onyx z']; ?>)</h3></a>
						 <p class="para">Mastered with the best of both worlds, VINYL’S modern digital lines combine with a vintage silhouette. A tech spin on classic styling.Spring hinges and three dimensionally adjustable nose pads allow precise tuning of the fit. </p>
						 <h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=2';" /></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=3">
								<img src="images/17_pic.jpg" alt="" />
								
							</a>
						</div>						
						 <a href="reservation.php?&id=3"><h3>Desmo - Onyx ($<?php echo $_SESSION['Desmo - Onyx']; ?>)</h3></a>
						 <p class="para">The DESMO gaming glasses feature a unique semi-rimless design that delivers the broadest visual field of all GUNNAR styles. As an added benefit for gamers, the ultra-slim temples rest comfortably beneath a gaming headset.</p>
						 <h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=3';" /></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=4">
								<img src="images/26_pic.jpg" alt="" />
								
							</a>
						</div>						
						<a href="reservation.php?&id=4"><h3>Penta - Mercury ($<?php echo $_SESSION['Penta - Mercury']; ?>)</h3></a>
						 <p class="para">With custom engineered lenses manufactured on machinery from the ophthalmic industry and eyewear features found only on best-in-class frames, Penta delivers professional grade comfort.</p>
						 <h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=4';" /></h4>
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="service_list top">
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=5">
								<img src="images/64_pic.jpg" alt="" />
								
							</a>
						</div>						
						 <a href="reservation.php?&id=5"><h3>INTERCEPT Raven Grey ($<?php echo $_SESSION['INTERCEPT Raven Grey']; ?>)</h3></a>
						 <p class="para">Agency approved. Retro classic frame fused with futuristic technology. INTERCEPT completes the line between style and science. This hinges anchor injected temples. An ergonomically balanced frame supports precision optics.</p>
						<h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=5';" /></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=6">
								<img src="images/23_pic.jpg" alt="" />
								
							</a>
						</div>						
						 <a href="reservation.php?&id=6"><h3>Sparrow - Onyx / Red ($<?php echo $_SESSION['Sparrow - Onyx / Red']; ?>) </h3></a>
						 <p class="para">Redline. With billet aluminum construction, SPARROW with i-AMP lens technology inspires confidence when behind the wheel of any technology. Internal spring hinges unite a solid chassis. </p>
						 <h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=6';" /></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=7">
								<img src="images/62_pic.jpg" alt="" />
								
							</a>
						</div>	
						 <a href="reservation.php?&id=7"><h3>RAZER CERBERUS Onyx Grey ($<?php echo $_SESSION['RAZER CERBERUS Onyx Grey'] ?>)</h3></a>
						<p class="para">Crafted of the best of all materials, CERBERUS, designed by Razer outdoor eyewear, combines traditional style with modern digital lines.Combine all that with GUNNAR's i-AMP lens technology and you have the perfect performance. </p>
						<h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=7';" /></h4>
											
					</li>
					<li>
						<div class="ser_img">
							<a href="reservation.php?&id=8">
								<img src="images/30_pic.jpg" alt=""  />
								
							</a>
						</div>		
						 <a href="reservation.php?&id=8"><h3>Emissary - Onyx ($<?php echo $_SESSION['DEmissary - Onyx'] ?>)</h3></a>
						 <p class="para">The EMISSARY computer glasses are designed for those looking for more freedom of sight while maintaining a sharp look. GUNNAR’s most popular semi-rimless design, the EMISSARY features adjustable nose pads and a lightweight .</p>
						<h4><input style="	text-transform:capitalize;	width: 100% !important;	background: #009688;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="Buy Now" onClick="window.location = 'reservation.php?&id=8';" /></h4>
					</li>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	<!-- end main_content -->

	</div>
</div>
</div>		
<!--start main -->
<?php include("Footer.php"); ?>