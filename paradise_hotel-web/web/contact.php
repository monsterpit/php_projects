<?php include("LoginChecker.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Paradise-Hotel Website Template | Contact :: w3layouts</title>
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
				<li><a href="activities.php">activities</a></li> |
				<li class="active"><a href="contact.php">contact</a></li> | 
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
		<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7536.917794796417!2d72.95395616077352!3d19.175148946798107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8e5321ecbfb%3A0xf7d295a999c47b89!2sMulund+College+of+Commerce!5e0!3m2!1sen!2sin!4v1518936924167" width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
								<!--<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View Larger Map</a></small>
					   		-->
							</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						<p>The Paradise Hotel ,SN Rd, Near Court</p>
						<p>Mulund West, Mumbai, Maharashtra, 400080</p>
						<p>India</p>
				   		<p>Phone:(+022) 2560 0017</p>
				   		<p>Fax: (100) 54 55 11 21</p>
				 	 	<p>Email: <a href="mailto:rajkamalmcc@gmail.com">rajkamalmcc@gmail.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://twitter.com/login">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form id="contact" method="post" action="contactprocessing.php">
					    	<div>					
								<span><label>NAME</label></span>
								<?php 
								if(!empty($_SESSION['username']))   // to display name when logined in contact
								{	$name=$_SESSION['username'];
									echo '<span><input name="userName" type="text" class="textbox" value='.$name.'></span>';
								} 
								else{                                 // to empty name when logined in contact
									echo '<span><input name="userName" type="text" class="textbox"></span>';
								}
								?> 					
							</div>
						    <div>
						    	<span><label>E-MAIL</label></span>
								<?php 
								if(!empty($_SESSION['username']))   // to display email when logined in contact
								{	$email=$_SESSION['email'];
									echo '<span><input name="userEmail" type="text" class="textbox" value='.$email.'></span>';
								} 
								else{                                 // to empty email when logined in contact
									echo '<span><input name="userEmail" type="text" class="textbox"></span>';
								}
								?>							
							</div>
						    <div>
						     	<span><label>MOBILE</label></span>
								<?php 
								if(!empty($_SESSION['username']))   // to display phone number when logined in contact
								{	$contact=$_SESSION['contact'];
									echo '<span><input name="userPhone" type="text" class="textbox" value='.$contact.'></span>';
								} 
								else{                                 // to empty phone number when logined in contact
									echo '<span><input name="userPhone" type="text" class="textbox"></span>';
								}
								?>						
							</div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div >
						   		<span><input type="submit" value="submit us" "></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>
</div>		
<!--start main -->
<?php include("Footer.php"); ?>