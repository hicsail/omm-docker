<?php
include_once 'connect.php';

$answer = 0;
$time =$_POST["time"];
$response =$_POST["a"];
$id = $_POST["b"];
$ar = array("300","400","500", "600","700","800","900");
foreach ($ar as $ans ) {
	if($id == $ans){
		$answer = 1;
	}
}
$r = strip_tags($response);
$clicks =$_POST["clicks"];
$sql = mysqli_query($con,"SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
 $t = mysqli_query($con, "INSERT INTO transaction_task VALUES('$subid','$clicks','$time','$r','$answer')");
?>
