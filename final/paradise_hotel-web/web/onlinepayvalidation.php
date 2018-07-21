<?php include("LoginChecker.php"); ?>
<?php
	function clean($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ( (empty($_POST["txtcardnumber"])) || (empty($_POST["txtcardcvc"])) )  {
		echo "<script>alert('All fields are compulsory.');window.history.back();</script>";
	}
	else {
		$errMsg="";
		$errFlag=0;
		$cardnumber = clean($_POST["txtcardnumber"]);
		$cardcvc = clean($_POST["txtcardcvc"]);
		


		if(!(is_numeric ($cardnumber)) || strpos($cardnumber,".")>0 || strlen($cardnumber)<12){
			$errMsg.='Invalid cardnumber (Numbers only ,card number must be a 12 digit numbers).\n';
			$errFlag++;
		}
		if(!(is_numeric ($cardcvc)) || strpos($cardcvc,".")>0 || strlen($cardcvc)<4){
			$errMsg.='Invalid cardcvc (Numbers only , cvc is a 4 digit number behind your card).\n';
			$errFlag++;
		}
	//	date("m", strtotime("february"))
	
		$cd=date('Y', strtotime($_POST["cardexpireyear"])).date('m', strtotime($_POST["cardexpiremonth"])).date('d', strtotime("01"));

		$we1=($_POST["cardexpireyear"]).'/'.date('m', strtotime($_POST["cardexpiremonth"])).'/01';
		$we2=date("Y-m-d");
		

		$d1=date('d-m-Y', strtotime($we1));
		$d2=date('d-m-Y', strtotime($we2));
		
		
		
		$datetimeObj1 = new DateTime($d1);
		$datetimeObj2 = new DateTime($d2);

		
		$interval = $datetimeObj1->diff($datetimeObj2);
		$dateDiff = $interval->format('%R%a');

		if($dateDiff>0) {
		echo "<script>alert('Card has been expired try a new card. ');window.history.back();</script>";
		exit();
					}


	}
		
		
		
		if($errFlag==0){	
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
			
			$cardnumber = mysqli_real_escape_string($conn, $cardnumber);
			$cvc = mysqli_real_escape_string($conn, $_POST["txtcardcvc"]);
		
			
			$expiresdate = mysqli_real_escape_string($conn, $cd);
			
			$totalamount = mysqli_real_escape_string($conn, ($_SESSION[$_SESSION['drpRoom']]*$_SESSION['dff']));
			$totaldays = mysqli_real_escape_string($conn, $_SESSION['dff']);
			$paid=mysqli_real_escape_string($conn, "PAID");

				
			$sql = "INSERT INTO roombook(username, email, contact, roomtype, paymentmethod, cardnumber, cvc, expiresdate, totalamount, totaldays, paid) VALUES ('{$username}','{$email}','{$contact}','{$roomtype}','{$paymentmethod}','{$cardnumber}','{$cvc}','{$expiresdate}','{$totalamount}','{$totaldays}','{$paid}')";
			
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Congratulations ! Your Room booked successful. Your Order ID is ".mysqli_insert_id($conn)."'); window.location = 'index.php';</script>";
			} 
			else {
 
				echo "<script>alert('Something went wrong.');window.history.back();</script>";
			}			
			mysqli_close($conn);
		}
		else {
			echo "<script>alert('$errMsg');window.history.back();</script>";
		}
		
	
		
?>