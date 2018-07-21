<?php include("LoginChecker.php"); ?>
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

			//Extracting values from request


			// Escape all strings
			$username = mysqli_real_escape_string($conn, $_SESSION['username']);
			$email = mysqli_real_escape_string($conn, $_SESSION['email']);
			$contact = mysqli_real_escape_string($conn, $_SESSION['contact']);
			$roomtype = mysqli_real_escape_string($conn, $_SESSION['drpRoom']);
			$paymentmethod = mysqli_real_escape_string($conn, $_SESSION['drpPay']);
			
			//$cardnumber = mysqli_real_escape_string($conn, $cardnumber);
			//$cvc = mysqli_real_escape_string($conn, $_POST["txtcardcvc"]);
		
			
			//$expiresdate = mysqli_real_escape_string($conn, $cd);
			
			$totalamount = mysqli_real_escape_string($conn, ($_SESSION[$_SESSION['drpRoom']]*$_SESSION['dff']));
			$totaldays = mysqli_real_escape_string($conn, $_SESSION['dff']);
			$paid=mysqli_real_escape_string($conn, "PENDING");
			
				
			$sql = "INSERT INTO roombook(username, email, contact, roomtype, paymentmethod, totalamount, totaldays, paid) VALUES ('{$username}','{$email}','{$contact}','{$roomtype}','{$paymentmethod}','{$totalamount}','{$totaldays}','{$paid}')";
			
			if (mysqli_query($conn, $sql)) {
				
				echo "<script>alert('Congratulations ! Your Room booked successful.Your Order ID is ".mysqli_insert_id($conn)."'); window.location = 'index.php';</script>";
			} 
			else {
 
				echo "<script>alert('Something went wrong.');window.history.back();</script>";
			}			
			mysqli_close($conn);
			
			
	
	
	?>
		