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
				<li class="active"><a href="index.php">home</a></li> |
				<li><a href="activities.php">glasses</a></li> |
				<li><a href="reservation.php">purchase</a></li> |
				<li><a href="about.php">about</a></li> |			
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
		<div class="details">
			<h2>GUNNAR PRESCRIPTION EYEWEAR IS ENGINEERED FOR THE DIGITAL GENERATION

 </h2>
			<div class="det_pic">
				  <img src="images/det_pic.jpg" alt="" />
			</div>
			<div class="det_text">
				<p class="para">You wouldn’t run a marathon in loafers, don’t make your eyes perform their most demanding work without the right eyewear. Regular prescription eyewear isn’t optimized for computer use, it is designed for variable viewing. Continued near-focus work, typical of computer use, causes ciliary muscles to flex for extended periods. The cumulative eyestrain may cause headaches or even long-term changes in the eye. Specialized computer eyeglasses with GUNNAR patented i-AMP lens technology provide proper design and fit for computer viewing. With the custom prescription provided by your optometrist, GUNNAR’s highly accurate lens design can relieve the effects of digital eyestrain by relaxing eye muscles. When used in GUNNAR frames that wrap closely to the face, eyes are protected from drying air currents. All GUNNAR lenses are finished with proprietary lens tints and coatings specifically tuned to filter artificial blue light and glare.</p>
				
				<div class="read_more">
					 <a href="about.php">What is Gunnar & its Features ?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>		
<!--start footer -->
<?php include("Footer.php"); ?>