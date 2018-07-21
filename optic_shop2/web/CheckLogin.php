<?php
	function clean($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ( (empty($_POST["txtUsername"])) || (empty($_POST["txtPassword"])) ) {
		echo "<script>alert('All fields are compulsory.');window.history.back();</script>";
	}
	else {
		$errMsg="";
		$errFlag=0;
		$username=clean($_POST["txtUsername"]);
		$password = clean($_POST["txtPassword"]);

		if(!(preg_match('/^[-a-zA-Z0-9 .]+$/', $username))) {
			$errMsg.='Invalid userame(AlphaNumeric data only).\n';
			$errFlag++;
		}
		
		if(!(preg_match('/^[-a-zA-Z0-9 .]+$/', $password))) {
			$errMsg.='Invalid password(AlphaNumeric data only).\n';
			$errFlag++;
		}

		if($errFlag==0){
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
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);

			$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
			$result=mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);   //fetching value from database
			if($count == 1) {
				session_start();
				
				$_SESSION['username'] = $row["username"];          //fetching name
				$_SESSION['contact'] = $row["contact"];   			//fetching contact number
				$_SESSION['email'] = $row["email"]; 
				header("location: index.php");
			}
			
			mysqli_close($conn);
			$servername = "localhost";
			$uname = "jonny";
			$passwd = "bravo";
			$dbname = "hotelM";
			
			
			
			$conn = mysqli_connect($servername, $uname, $passwd, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}



			// Escape all strings
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);  
			
			$sql = "SELECT id FROM admins WHERE username = '$username' and password = '$password'";
			$result=mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
			if($count == 1) {
				session_start();
				echo $username;
				$_SESSION['username'] = $username;			
				header("location: Adminindex.php");	

			  }else {
				 echo "<script>alert('Wrong username or password.');window.history.back();</script>";
			  }
			mysqli_close($conn);
		}
		else {
			echo "<script>alert('$errMsg');window.history.back();</script>";
		}
	}
?>