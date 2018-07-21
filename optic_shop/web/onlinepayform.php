<?php include("LoginChecker.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>GUNNAR OPTIC SHOP</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Optics Checkout Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min1.js"></script>
<link href='//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- script for close -->
<script>
$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.vlcone').fadeOut('slow', function(c){
			$('.vlcone').remove();
		});
	});	  
});
</script>
<!-- //script for close -->
</head>
<body>
<div class="main">
	<h1>Gunnar Secure Online Payment</h1>
	
	<div class="hotel-right  vlcone">
		<div class="alert-close"> </div>
		<div class="hotel-form">
			<h3>Receipt Form</h3>
			<ul class="list_ins1">
						
						<li>Eye-wear Model Name</li>
						<li>Amount per piece</li>	
						<li>Quantity</li>
						<li>Total Amount</li>
			</ul>
			<ul class="list_ins2">
						
						<?php   echo "<li>: ".$_SESSION['drpGlass']."</li>" ?>
						<?php 	echo "<li>: $".$_SESSION[$_SESSION['drpGlass']]."</li>" ?>
						<?php 	echo "<li>: ".$_SESSION['txtQt'] ." units</li>" ?>
						<?php 	echo "<li>: $".$_SESSION[$_SESSION['drpGlass']]*$_SESSION['txtQt'] ."</li>" ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="pay-form">
			<form   method="post" action="onlinepayvalidation.php">
				<h3>Payment Information</h3>					
				<h5>Credit Card Number</h5>
				<input class="card_logo"  type="text"  name="txtcardnumber" value="2525 2525 2525 2525" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2525 2525 2525 2525';}" required="">

				<h5>Expires On</h5>
				<select id="country" name="cardexpiremonth" onchange="change_country(this.value)" class="frm-field required">
					<option value="January">January</option>
					<option value="February">February</option>         
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<ul>
					<li>
						<input type="number" name="cardexpireyear" class="text_box" type="text" value="2018" min="1" />	
					</li>
				</ul>
				<div class="clear"></div>
				<h5>CVC</h5>
				<input type="text"  name="txtcardcvc" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""  value="">

				<input type="submit" value="BOOK SECURELY">
			</form>
			<p><span></span>Your credit card information is encrypted.</p>
		</div>
	</div>
	<div class="hotel-left">
		<div class="hotel-text">
			<h2><a href="index.php" style="color:green;">Gunnar Optics</a></h2>
			<?php echo '<h3 style="color:purple";> $'.$_SESSION[$_SESSION['drpGlass']].'/ <span>unit</span></h3>'; ?>	
			<p> Enhance and protect your vision</p>

		</div>
	</div>
	<div class="clear"></div>
	<p class="footer">&copy; 2018 Optics Checkout Form. All Rights Reserved </p>
</div>
</body>
</html>