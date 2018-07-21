	<?php
					session_start();	

				?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Hotel :: w3layouts</title>
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
		<div class="logo">
			<a href="Adminindex.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li class="active"><a href="Adminindex.php">hotel</a></li> |
				<li><a href="Adminrooms.php">rooms & suits</a></li> |
				<li><a href="Adminreservation.php">reservation</a></li> |
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
				<li class="active"><a href="Adminindex.php">hotel</a></li> 
				<li><a href="Adminrooms.php">rooms & suits</a></li> 
				<li><a href="Adminreservation.php">reservation</a></li> 				
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
		                        <h4 class="title"><i class="bg"></i>Welcome to our hotels<span class="hide"></span></h4>
		                        <h5 class="title1"><i class="bg"></i>We know what you love<span class="hide" ></span></h5>
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
		                        <h4 class="title"><i class="bg"></i>Want a Luxurious vacations?<span class="hide">  </span></h4>
		                        <h5 class="title1"><i class="bg"></i>Get accommodation Today<span class="hide"></span> </h5>
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
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="online_reservation">
	<div class="b_room">
		<div class="booking_room">

			<h4>Book Now</h4>
			<p>Come In As Guests. Leave As Family...</p>
					<input style="	text-transform:capitalize;	width: 100% !important;	background: #32A2E3;	font-family: 'Open Sans', sans-serif;	color: #FFF;	padding: 8px;
	    border: none;	font-size: 1em;	transition: 0.5s all;	-webkit-transition: 0.5s all;	-moz-transition: 0.5s all;	-o-transition: 0.5s all;	outline: none;
	    cursor: pointer;"	type="button" value="book now" onClick="window.location = 'reservation.php';" />
								
							
					
		</div>


					
				
		</div>
		<div class="clear"></div>
		</div>
	</div>
	<!--start grids_of_3 -->
	<div class="grids_of_3">
	<!-- for taking in room price -->
<?php
	$servername = "localhost";
			$uname = "jonny";
			$passwd = "bravo";
			$dbname = "hotelM";

			// Create connection
			$conn = mysqli_connect($servername, $uname, $passwd, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "select rate from room";
			$result=mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);		
			//fetching value from database	
			while ($row = mysqli_fetch_array($result)) {           
			$room[] =  $row['rate']; 	
			}			
			
			$_SESSION['Single Room'] = $room[0];          
			$_SESSION['Double Room'] = $room[1];   			
			$_SESSION['Suite room'] = $room[2]; 	
			
			mysqli_close($conn);
		?>
		<!-- closing for taking in room price -->
	
	
	
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.php">
					<img src="images/pic2.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<?php echo '<h4><a href="#">single room<span>'.$_SESSION['Single Room'].'$'.'</span></a></h4>'; ?>
			<p>A room for single person with of all facilities . Suitable for solo Dreamers,artists for personal privacy. "Stand for something even if it means standing alone , often times the one who flies solo has the strongest wings."</p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.php">
					<img src="images/pic1.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<?php echo '<h4><a href="#">double room<span>'.$_SESSION['Double Room'].'$'.'</span></a></h4>'; ?>			
			<p>A room for 2 person to be comfortable.Plenty of room for fun and enjoy with good wifi and scenario . " Fun time always starts with pairs Family,friends and partners :) "</p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.php">
					<img src="images/pic3.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<?php echo '<h4><a href="#">suite room<span>'.$_SESSION['Suite room'].'$'.'</span></a></h4>'; ?>	
			<p>When you get into a hotel room, you lock the door, and you know there is a secrecy, there is a luxury, there is fantasy. There is comfort. There is reassurance. “Your comfort zone is a place where you keep yourself in a self-illusion and nothing can grow there but your potentiality can grow only when you can think and grow out of that zone.” </p>
		</div>
		<div class="clear"></div>
	</div>	
</div>
</div>		
<!--start main -->
<?php include("Footer.php"); ?>