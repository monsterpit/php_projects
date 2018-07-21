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
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li ><a href="index.php">home</a></li> |
				<li><a href="activities.php">glasses</a></li> |
				<li><a href="reservation.php">purchase</a></li> |
				<li><a href="about.php">about</a></li> |
				<li><a href="contact.php">contact</a></li> |
				<?php
				//error_reporting(0);
				if(!empty($_SESSION['username'])){				
				echo "<li class='active'><a href='logout.php'>logout</a></li>"; 
				}
				else{
				echo "<li class='active'><a href='login.php'>login</a></li>";
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
				<li ><a href="index.php">home</a></li> 
				<li><a href="activities.php">glasses</a></li> 
				<li><a href="reservation.php">purchase</a></li>
				<li><a href="about.php">about</a></li> 
				<li><a href="contact.php">contact</a></li>				
				<?php
				if($_SESSION['username']){
				echo "<li class='active'><a href='logout.php'>logout</a></li>"; 
				}
				else{
				echo "<li class='active'><a href='login.php'>login</a></li>";
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
<div id="content" >
	<form id="login" method="post" action="InsertUsers.php">
		<table>					
			<tr>
				<td>
					<div id="info" style="color:#228AC6;font-size:40px;font-weight:bolder;font-family:Times New Roman">Login</div>
				</td>
			</tr>					
			<tr>
				<td>
					<div id="info" >
						<div id="heading">Enter following details</div>
						<table>
							<tr><td>Name</td><td><input type="text" name="txtName" maxlength="50" class="txtbx" style="width:300px" /></td></tr>
								<tr><td>Email</td><td><input type="text" name="txtEmail" maxlength="50" class="txtbx" style="width:300px" /></td></tr>
								<tr><td>Contact</td><td><input type="text" name="txtContact" maxlength="10" class="txtbx" style="width:300px" /></td></tr>
								<tr><td>Username</td><td><input type="text" name="txtUsername" maxlength="50" class="txtbx" style="width:300px" /></td></tr>
								<tr><td>Password</td><td><input type="password" name="txtPassword" maxlength="50" class="txtbx" style="width:300px" /></td></tr>
								<tr><td>Confirm password</td><td><input type="password" name="txtConfirm" maxlength="50" class="txtbx" style="width:300px" /></td></tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="btnSubmit" value="Submit" class="btn" style="width:20px" />&nbsp;
									<input type="reset" name="btnReset" value="Reset" class="btn" style="width:20px" />
								</td>
							</tr>
							<tr><td colspan="2"><a href="login.php" style="color:#003366;"><u> Have an Account Already ?</u></a  </td></tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
<!-- footer -->
<?php include("Footer.php"); ?>
