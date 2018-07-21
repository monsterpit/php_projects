<?php include("LoginChecker.php"); 


function clean($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


if ( (empty($_POST["txtPrL"])) || (empty($_POST["txtPrR"])) || (empty($_POST["txtQt"]))  ) {
		echo "<script>alert('All fields are compulsory.');window.history.back();</script>";
	}
	
elseif((!(is_numeric ($_POST["txtQt"]))) || strpos($_POST["txtQt"],".")>0 || !(($_POST["txtQt"])<100))
{
	echo "<script>alert('quantity should be numeric and only whole number only and should be below 100 .');window.history.back();</script>";
	
}
elseif((!(is_numeric ($_POST["txtPrL"]))) || !(($_POST["txtPrL"])>= -20.00  && ($_POST["txtPrL"])<=12.00 )){
		echo "<script>alert('Pr of Left Eye should be only numeric and between -20 and 12.');window.history.back();</script>";
		}
elseif((!(is_numeric ($_POST["txtPrR"]))) || !(($_POST["txtPrR"])>=-20.00  && ($_POST["txtPrR"])<=+12.00 )){
		echo "<script>alert('Pd of Right Eye should be only numeric and between -20 and 12.');window.history.back();</script>";
		}
else{
		$_SESSION['txtPrR'] = $_POST['txtPrR'];
		$_SESSION['txtPrL'] = $_POST['txtPrL'];	
		$_SESSION['drpGlass'] = $_POST['drpGlass'];		
		$_SESSION['drpPay'] = $_POST['drpPay'];
		$_SESSION['txtQt'] = $_POST['txtQt'];
			if(!strcmp($_POST['drpPay'],"Online Payment"))
{	
	header("Location: onlinepayform.php");
    die();
}
else{
	header("Location: InsertBooking.php");
    die();
}
}		
		


?>


