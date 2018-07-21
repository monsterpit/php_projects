<?php include("LoginChecker.php"); ?>
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

			//Extracting values from request


			// Escape all strings
			$username = mysqli_real_escape_string($conn, $_SESSION['username']);
			$email = mysqli_real_escape_string($conn, $_SESSION['email']);
			$contact = mysqli_real_escape_string($conn, $_SESSION['contact']);
			
			$paymentmethod = mysqli_real_escape_string($conn, $_SESSION['drpPay']);
			
			$prr = mysqli_real_escape_string($conn,$_SESSION['txtPrR']);
			$prl = mysqli_real_escape_string($conn,$_SESSION['txtPrL']);
			
			$glassname = mysqli_real_escape_string($conn,$_SESSION['drpGlass']);
			//$cardnumber = mysqli_real_escape_string($conn, $cardnumber);
			//$cvc = mysqli_real_escape_string($conn, $_POST["txtcardcvc"]);
		
			
			//$expiresdate = mysqli_real_escape_string($conn, $cd);
			$qt = mysqli_real_escape_string($conn,$_SESSION['txtQt']);
			$totalamount = mysqli_real_escape_string($conn, ($_SESSION[$_SESSION['drpGlass']]*$_SESSION['txtQt']));
			
			$paid=mysqli_real_escape_string($conn, "PENDING");
			
				
			$sql = "INSERT INTO glassbook(username, email, contact, glassname,prl,prr, paymentmethod, totalamount, quantity, paid) VALUES ('{$username}','{$email}','{$contact}','{$glassname}','{$prl}','{$prr}','{$paymentmethod}','{$totalamount}','{$qt}','{$paid}')";
			
			if (mysqli_query($conn, $sql)) {
				
				echo "<script>alert('Congratulations ! Your Glasses booked successfully.Your Order ID is ".mysqli_insert_id($conn)."'); window.location = 'index.php';</script>";
			} 
			else {
 
				echo "<script>alert('Something went wrong.');window.history.back();</script>";
			}			
			mysqli_close($conn);
			
			
	
	
	?>
		