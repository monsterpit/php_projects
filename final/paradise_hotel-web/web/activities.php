<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Activities :: w3layouts</title>
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
				<li><a href="rooms.php">rooms & suits</a></li> |
				<li><a href="reservation.php">reservation</a></li> |
				<li class="active"><a href="activities.php">activities</a></li> |
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
<!-- start main_content -->
				<ul class="service_list">
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic1.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details.php"><h3>Exotic Drinks</h3></a>
						<p class="para">In our stylish lounge/bar complete with summer garden we mix both classic and exotic drinks to trendy music</p>
						<h4><a  href="details.php">Check Details</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic2.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						<a href="details.php"><h3>world renowned chefs</h3></a>
						 <p class="para">Taste the dishes from famous chefs which you will enjoy every bite of</p>
						 <h4><a href="details.php">Check Details</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic3.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.php"><h3>Fresh Sea foods</h3></a>
						 <p class="para">Taste the exotic ,tasty fresh shrimps,prawns and plenty of seafoods</p>
						 <h4><a href="details.php">Check Details</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic4.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						<a href="details.php"><h3>Dinner And Bar</h3></a>
						 <p class="para">Enjoy the tempo of Our vibrant dinner  and bar lounge</p>
						 <h4><a href="details.php">Check Details</a></h4>
					</li>
					<div class="clear"></div>
				</ul>
				<ul class="service_list top">
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic5.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.php"><h3>Proper hygiene control</h3></a>
						 <p class="para">We maintain proper hygiene in hotel and process only Fresh foods</p>
						<h4><a  href="details.php">Check Details</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic6.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>						
						 <a href="details.php"><h3>Highly Skilled staffs</h3></a>
						 <p class="para">we have attractive and highely skilled staffs how can assist you for any queries 24*7</p>
						 <h4><a href="details.php">Check Details</a></h4>
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/ser_pic7.jpg" alt="" />
								<span class="next"> </span>
							</a>
						</div>	
						 <a href="details.php"><h3>Variety of Dishes at Your doorstep</h3></a>
						<p class="para">There are many variations of dishes available even for vegans and room delivery</p>
						<h4><a href="details.php">Check Details</a></h4>
											
					</li>
					<li>
						<div class="ser_img">
							<a href="details.php">
								<img src="images/pool.jpg" alt="" height="190px" />
								<span class="next"> </span>
							</a>
						</div>		
						 <a href="details.php"><h3>Water Pool</h3></a>
						 <p class="para">Pleasant water Pool in hotel to freshen up your mind and enjoy your time with partners and family.</p>
						<h4><a  href="details.php">Check Details</a></h4>
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