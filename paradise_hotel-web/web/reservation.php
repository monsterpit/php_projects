<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Reservation :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
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
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li><a href="index.php">hotel</a></li> |
				<li><a href="rooms.php">rooms & suits</a></li> |
				<li class="active"><a href="reservation.php">reservation</a></li> |
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
<?php
	if(!isset($_SESSION['username'])){
		echo "<script>alert('You must login first to book a room.'); window.location = 'login.php';</script>";
	}
?>
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="res_online">
			<h4>basic information</h4>
			<p class="para">Book a memorable stay at your favourite hotel with this special offer.</br>

Paradise Mumbai, is located in the financial capital of India. A short walk from station, is an absolute beachfront resort property overlooking the Arabian Sea, 5km (20 minutes) from domestic and International airports and home of Bollywood. Mulund beach is iconic to Mumbai and known for relaxation and for partying alike. Paradise boasts of five restaurants and a bar, extensive banqueting services, Spa, Swimming pool and a Gym all with full beach views. You'll enjoy whole time you spent here

</p>
		</div>			
<div id="content" >
	<form id="login" method="post" action="Paymentchecker.php">
		<table>					
			<tr>
				<td>
					<div id="info" style="color:#228AC6;font-size:40px;font-weight:bolder;font-family:Times New Roman">Booking</div>
				</td>
			</tr>					
			<tr>
				<td>
					<div id="info" >
						<div id="heading">Enter following details</div>
						<table>
							<tr><td>Check In:</td><td><input type="date" name="dtCheckIN"  class="txtbx"   /></td></tr>
								<tr><td>Check Out:</td><td><input type="date" name="dtCheckOut"  class="txtbx"  /></td></tr>
								<tr><td>Type of Room</td><td><select name="drpRoom"  class="txtRoom" style="width:300px " >
								 <option value="Suite room">Suite room</option>
								 <option value="Single Room">Single Room</option>
								 <option value="Double Room">Double Room</option>
								 
								</select>
								</td></tr>
								<tr><td>Payment Method</td><td><select name="drpPay"  class="txtRoom" style="width:300px " >
								<option value="Offline">Offline</option>	
								 <option value="Online Payment">Online Payment</option>
								 															 
								</select>
								</td></tr>
								
							<tr>
								<td colspan="2">
									<input type="submit" name="btnSubmit" value="Submit" class="btn" style="width:20px" />&nbsp;
									<input type="reset" name="btnReset" value="Reset" class="btn" style="width:20px" />
								</td>
							</tr>
							<tr><td colspan="2"><a href="login.php" style="color:#003366;"></a  </td></tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>

	</div>
</div>
</div>		
<!--start main -->
<?php include("Footer.php"); ?>