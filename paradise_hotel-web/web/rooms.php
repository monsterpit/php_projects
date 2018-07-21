<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Rooms :: w3layouts</title>
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
				<li><a href="index.php">hotel</a></li> |
				<li class="active"><a href="rooms.php">rooms & suits</a></li> |
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
		<div class="content">
			<div class="room">
				<h4>Ocean view room</h4>
				<p class="para">Situated on the upper floors of the main building, the Deluxe Seaview Rooms offer views of the garden and the sea from their spacious balconies.</br>The rooms are designed with modern sensibilities that are expressed through amenities made from indigenous materials. These include abaca weave rugs and accent lighting created with local capiz shells.</p>
			</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<img src="images/i12ndex.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">The Luxury rooms in Mumbai are well spread out over 244 sq. ft. of elegant living area. Enjoy a calming pool view with a host of handpicked amenities and services to suit your In-room business and leisure needs. </p>
					</div>
					<div class="clear"></div>					
				</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<img src="images/Luxury-Room.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">"An Gateway to Urban." </br>Experience a new vision of style and service within a unique & modernist setting created for both business and pleasure. Tucked away amidst stunning hills and green foliage, The Park Navi Mumbai poses myriad opportunities to recharge and relax in the heart of mumbai's new business hub.</p>
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
			<h4>room features</h4>
			<ul class="s_nav">
				<li><a href="details.php">Sea and sunset views</a></li>
				<li><a href="details.php">Private balcony with a daybed.</a></li>
				<li><a href="details.php">Marble-floored bathroom featuring two sinks, a separate rainshower and bath, and premium toiletries.</a></li>
				<li><a href="details.php">Wired and wireless internet access</a></li>
				<li><a href="details.php">Round-trip land and speedboat transfers from Airport</a></li>
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