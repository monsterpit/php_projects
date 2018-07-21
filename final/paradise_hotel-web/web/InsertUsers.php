<?php
	function clean($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ( (empty($_POST["txtName"])) || (empty($_POST["txtEmail"])) || (empty($_POST["txtContact"])) || (empty($_POST["txtUsername"])) || (empty($_POST["txtPassword"])) || (empty($_POST["txtConfirm"])) ) {
		echo "<script>alert('All fields are compulsory.');window.history.back();</script>";
	}
	else {
		$errMsg="";
		$errFlag=0;
		$name = clean($_POST["txtName"]);
		$email = clean($_POST["txtEmail"]);
		$contact = clean($_POST["txtContact"]);
		$username = clean($_POST["txtUsername"]);
		$password = clean($_POST["txtPassword"]);
		$confirmpassword = clean($_POST["txtConfirm"]);
		
		if (!(ctype_alpha($name))) {
			$errMsg.='Invalid name (Alphabets only).\n';
			$errFlag++;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errMsg.= 'Invalid email.\n';
			$errFlag++;
		}

		if((!(is_numeric ($contact))) || strpos($contact,".")>0 || strlen($contact)<10){
			$errMsg.='Invalid contact (Numbers only).\n';
			$errFlag++;
		}

		if(!(preg_match('/^[-a-zA-Z0-9 .]+$/', $username))) {
			$errMsg.='Invalid username (AlphaNumeric data only).\n';
			$errFlag++;
		}
		
		if(!(preg_match('/^[-a-zA-Z0-9 .]+$/', $password))) {
			$errMsg.='Invalid password (AlphaNumeric data only).\n';
			$errFlag++;
		}
		
		if(!(preg_match('/^[-a-zA-Z0-9 .]+$/', $confirmpassword))) {
			$errMsg.='Invalid confirm password (AlphaNumeric data only).\n';
			$errFlag++;
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
			$name = mysqli_real_escape_string($conn, $name);
			$email = mysqli_real_escape_string($conn, $email);
			$contact = mysqli_real_escape_string($conn, $contact);
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);
			$confirmpassword = mysqli_real_escape_string($conn, $confirmpassword);
			
			if(strcmp($password,$confirmpassword)==0){
				$sql = "SELECT username FROM users WHERE username='{$username}'";
				$result=mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					echo "<script>alert('Username is already taken by another user, Provide new username.');window.history.back();</script>";
				} 
				else {
					$sql = "INSERT INTO users(name,email,contact,username,password) VALUES ('{$name}','{$email}','{$contact}','{$username}','{$password}')";
					if (mysqli_query($conn, $sql)) {
						echo "<script>alert('Congratulations ! Sign up successful.'); window.location = 'index.php';</script>";
					} 
					else {
						echo "<script>alert('Something went wrong.');window.history.back();</script>";
					}
				}
			}
			else{
				echo "<script>alert('Password doesn\'t match.');window.history.back()</script>";
			}
			
			mysqli_close($conn);
		}
		else {
			echo "<script>alert('$errMsg');window.history.back();</script>";
		}
	}
?>