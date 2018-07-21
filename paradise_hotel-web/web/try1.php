 <?php

//$cd=date('Y', strtotime($_POST["cardexpireyear"]))."-".date('m', strtotime($_POST["cardexpiremonth"]))."-"."01";
$date1=date_create("2013-03-15");
echo gettype($date1);


$date2=date_create(date("Y-m-d"));
echo gettype($date1);
$diff=date_diff($date2,$date1);
(int)$a= $diff->format("%R%a");
if ($a<0){
	echo "hi";
}
 echo  date("m", strtotime("february"));
 
 echo "<img src='C:\Users\hint\Pictures\a.jpg'>";
?>