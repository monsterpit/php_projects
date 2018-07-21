<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Details :: w3layouts</title>
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
				<li class="active"><a href="index.php">hotel</a></li> |
				<li><a href="rooms.php">rooms & suits</a></li> |
				<li><a href="reservation.php">reservation</a></li> |
				<li><a href="activities.php">activities</a></li> |
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
			<!-- start profile_details -->
					<!--<form class="style-1 drp_dwn">
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
				<li class="active"><a href="index.php">hotel</a></li> 
				<li><a href="rooms.php">rooms & suits</a></li> 
				<li><a href="reservation.php">reservation</a></li> 
				<li><a href="activities.php">activities</a></li> 
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
		<div class="details">
			<h2>WELCOME TO PARADISE</h2>
			<div class="det_pic">
				  <img src="images/det_pic.jpg" alt="" />
			</div>
			<div class="det_text">
				<p class="para">Set in a sprawling metropolis, Paradise Land’s End is where royal relaxation meets breath-taking sea views.Experience exotic indian flavours of foods. Tucked away at a sea facing end of Mumbai, this destination poses as the apt location to get away from the bustle of the city for a much needed break. And to aid you in that journey, we’ve got pool where a can rejuvenate yourself from inside out. Relish the aromatherapy which is a sacred practice of ancient indian essential oils and incense. At the end of it, you’ll feel immensely enriched by the experience and craving a little more.  </p>
				<p class="para">Quintessentially Indian in its fabric, The Paradise Hotels Palaces Resorts Safaris is recognized the world over for delivering a unique flavour of hospitality that offers world-class refinement while remaining deeply rooted in its local heritage. With over 100 hotels in 62 locations, The Paradise offers guests the refined luxury of heritage, the effortlessly efficient service and amenities and a local experience with the assurance of quality.</p>
				<div class="read_more">
					 <a href="activities.php">Exotic Offerings</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>		
<!--start footer -->
<?php include("Footer.php"); ?>