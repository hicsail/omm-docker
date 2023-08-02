<?php
include_once 'connect.php';

$question = $_POST["que"];
$value = "29.99%";
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
$clicks =$_POST["clicks"];
$sql = mysqli_query($con,"SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
 $t = mysqli_query($con, "INSERT INTO question6 VALUES('$subid', '$clicks','$time','$ans','$r','$w')");

?>
