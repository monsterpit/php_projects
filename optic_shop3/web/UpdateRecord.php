<?php include("LoginChecker.php"); ?>
<!--start main -->
<?php
	if(!isset($_SESSION['username'])){
		echo "<script>alert('You must login first.'); window.location = 'login.php';</script>";
	}
?>

							<?php								
								$servername = "localhost";
								$uname = "jonny";
								$passwd = "bravo";
								$dbname = "opticM";
								$id=(int)$_GET["id"];
								$rate=(int)$_POST["rate{$id}"];
								//$rate=(int)$_POST["rate{$id}"];
								// Create connection
								$conn = mysqli_connect($servername, $uname, $passwd, $dbname);
								// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}
								
									//"UPDATE MyGuests SET lastname='Doe' WHERE id=2"
								$sql = "update glass SET rate={$rate} WHERE id={$id}";
								
								
								if (mysqli_query($conn, $sql)) {
									echo "<script>alert('Record updated of Order ID is ".$id."'); window.location = 'Adminglass.php';</script>";
																	} 
								else {			
									echo "<script>alert('Error retrieving message.Your Order ID is ".mysqli_insert_id($conn)."'); window.location = 'Adminglass.php';</script>";
								}

								mysqli_close($conn);
							?>