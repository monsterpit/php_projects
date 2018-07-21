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
								$dbname = "hotelM";

								// Create connection
								$conn = mysqli_connect($servername, $uname, $passwd, $dbname);
								// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$id=(int)$_GET["id"];

								$sql = "delete FROM roombook WHERE id={$id}";
								

								if (mysqli_query($conn, $sql)) {
									echo "<script>alert('Record deleted of Order ID is ".$id."'); window.location = 'Adminreservation.php';</script>";
																	} 
								else {			
									echo "<script>alert('Error retrieving message.Your Order ID is ".mysqli_insert_id($conn)."'); window.location = 'Adminreservation.php';</script>";
								}

								mysqli_close($conn);
							?>

