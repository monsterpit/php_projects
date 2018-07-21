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
			<a href="Adminindex.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li ><a href="Adminindex.php">home</a></li> |
				<li class="active"><a href="Adminglass.php">Glasses</a></li> |
				<li><a href="Adminbook.php">Orders</a></li> |		
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
				<li ><a href="Adminindex.php">hotel</a></li> 
				<li class="active"><a href="Adminrooms.php">rooms & suits</a></li> 
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
			<h4>Optics DashBoard</h4>
			<p class="para">"Good, better, best. Never let it rest. 'Til your good is better and your better is best."</br>
</p>

		
<div id="content" style="overflow: auto;">
	<form id="login" method="post" action="UpdateRecord.php" >
		<table   >
				<tr>
					<td>
						<div id="info" style="color:#000000;font-size:40px;font-weight:bolder;font-family:Arial Black" >Eye-wear Details</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="info"  >
							<table style="width:900px;">
								<tr style="color:#000000;font-weight:bold;text-align:center;"><td>id</td><td>Model-Name of Glass</td><td>rate</td><td>action</td></tr> 
								<?php
									$servername = "localhost";
									$uname = "jonny";
									$passwd = "bravo";
									$dbname = "opticM";

									// Create connection
									$conn = mysqli_connect($servername, $uname, $passwd, $dbname);
									// Check connection
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT * FROM glass ";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										while($row = mysqli_fetch_assoc($result)) {
											echo "<tr><td width='25%'>{$row["id"]}</td><td width='25%'>{$row["glass"]}</td><td width='25%'><input type='text' name='rate{$row["id"]}' value='{$row["rate"]}'   /></td><td width='25%'><input type='submit' value='update'    formaction='UpdateRecord.php?id={$row["id"]}'></td></tr>";
										}
									}
									else {
										echo "<tr><td colspan='4'>There are no Rooms .</td></tr>";
									}

									mysqli_close($conn);
								?>
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
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved </span></p>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="https://www.facebook.com/"></a></li>
					<li><a class="icon2" href="https://twitter.com/login"></a></li>
					<li><a class="icon3" href="https://vimeo.com/"></a></li>
					<li><a class="icon4" href="https://slack.com/"></a></li>
					<li><a class="icon5" href="https://www.youtube.com"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>