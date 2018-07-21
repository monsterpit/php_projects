<?php include("LoginChecker.php"); 
?>
<?php
	$d1=date('d-m-Y', strtotime($_POST['dtCheckIN']));
	$d2=date('d-m-Y', strtotime($_POST['dtCheckOut']));
	$datetimeObj1 = new DateTime($d1);
	$datetimeObj2 = new DateTime($d2);
	$interval = $datetimeObj1->diff($datetimeObj2);
	$dateDiff = $interval->format('%R%a');
	if ( !(strcmp( $d1,'01-01-1970')) OR  !(strcmp( $d2,'01-01-1970')) )  
	{		
		echo "<script>alert('Please select both check in and check out dates.');window.history.back();</script>";
		exit();
	}

	elseif($dateDiff<0) {
		echo "<script>alert('Check in date should be previous to check out date.');window.history.back();</script>";
		exit();
	}
	else{
		//difference between checkin and check out dates
		$df=strtotime($_POST['dtCheckOut'])-strtotime($_POST['dtCheckIN']);
		$dff= round($df / (60 * 60 * 24));
		$_SESSION['dff'] = $dff;
		$_SESSION['drpPay'] = $_POST['drpPay'];
		$_SESSION['drpRoom'] = $_POST['drpRoom'];
	}
	
if(!strcmp($_POST['drpPay'],"Online Payment"))
{	
	header("Location: onlinepayform.php");
    die();
}
else{
	header("Location: InsertBooking.php");
    die();
}

?>


