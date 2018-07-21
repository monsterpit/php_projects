<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gunnar Optic SHOP</title>
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
				<li><a href="activities.php">Glasses</a></li> |
				<li><a href="reservation.php">purchase</a></li> |
				<li class="active"><a href="about.php">about</a></li> |
				
			
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
					</form> -->
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.php">home</a></li> 
				<li><a href="about.php">about</a></li> 
				<li><a href="reservation.php">purchase</a></li> 
				<li><a href="activities.php">Glasses</a></li> 
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
		<div class="content">
			<div class="room">
				<h4>What Are GUNNARS?</h4>
				<p class="para">GUNNAR is a high tech eyewear defends eyes from the effects of digital eye strain which can include dry eyes, headaches, blurred vision, eye fatigue, alter circadian rhythms, and insomnia.
</p>
			</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<img src="images/i12ndex.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">REDUCE DIGITAL EYE STRAIN.<br>Eye fatigue, dry eyes and headaches are symptoms of spending too much time in front of a digital screen. GUNNAR lens design has extra focusing power, providing you sharper, clearer vision. This patented technology helps you focus more naturally, creating less eyestrain. </p>
					</div>
					<div class="clear"></div>					
				</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<img src="images/Luxury-Optic.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">"IMPROVE COMFORT AND FOCUS." </br>An overabundance of bright artificial light can create strain on your eyes. But GUNNAR custom lens tints and filters block harsh blue light and glare so your eyes can finally relax. Focus longer. Work more efficiently. Be comfortable doing it.</p>
					</div>
					<div class="clear"></div>					
				</div>						

		</div>
		<div class="sidebar">
			 <div class="date_btn">
				<form action="reservation.php">
					<input type="submit" value="book now" style="width: 82px;">
				</form>
			</div>
			<h4>Glass features</h4>
			<ul class="s_nav">
				<li><a href="details.php">Blue-Light Protection</a></li>
				<li><a href="details.php">PROTECT YOUR EYES.</a></li>
				<li><a href="details.php">IMPROVE COMFORT AND FOCUS.</a></li>
				<li><a href="details.php">REDUCE DIGITAL EYE STRAIN.</a></li>
				<li><a href="details.php">ANTI GLARE LENSES</a></li>
			</ul>
			<h4>we accept</h4>
			<ul class="s_nav1">
				<li><a class="icon1" href="#"></a></li>
				<li><a class="icon2" href="#"></a></li>
				<li><a class="icon3" href="#"></a></li>
				<li><a class="icon4" href="#"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>		
<!--start main -->
<?php include("Footer.php"); ?>