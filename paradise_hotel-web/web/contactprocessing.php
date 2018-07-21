<?php
		if(empty($_POST["userName"]) || empty($_POST["userEmail"]) || empty($_POST["userPhone"]) || !strlen(trim($_POST["userMsg"])))
		{
			echo "<script>alert('Please Fill all Fields.');window.history.back();</script>";
		}


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
			$username = mysqli_real_escape_string($conn, $_POST['userName']);
			$email = mysqli_real_escape_string($conn, $_POST['userEmail']);
			$contact = mysqli_real_escape_string($conn, $_POST['userPhone']);
			$message = mysqli_real_escape_string($conn, $_POST['userMsg']);

				
			$sql = "INSERT INTO feedbacks(username,email,contact,message) VALUES ('{$username}','{$email}','{$contact}','{$message}')";
			
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Congratulations ! Your FeedBacks recorded successful.'); window.location = 'contact.php';</script>";
			} 
			else {
 
				echo "<script>alert('Something went wrong.');window.history.back();</script>";
			}			
			mysqli_close($conn);	



			
?>