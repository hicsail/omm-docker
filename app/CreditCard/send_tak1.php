<?php
include_once 'connect.php';
$click_count=$_POST["click_count"];
$question = $_POST["que"];
$value = "22 year(s)";
$time =$_POST["time"];
$ans =strip_tags($_POST["ans"]);
 if($ans == $value)
 {
 	$r=1;
 	$w=0;
 }
 else{
 	$r=0;
 	$w=1;
 }

 $t = mysqli_query($con, "INSERT INTO task1 VALUES('$time','$click_count','$ans','$r','$w')");

?>
