<?php
include_once 'connect.php';

$question = $_POST["que"];
$value = "$900";
$time =$_POST["time"];
$ans =strip_tags($_POST["ans"]);
$clicks =$_POST["clicks"];
 if($ans == $value)
 {
 	$r=1;
 	$w=0;
 }
 else{
 	$r=0;
 	$w=1;
 }
$sql = mysqli_query($con,"SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
 $t = mysqli_query($con, "INSERT INTO question2 VALUES('$subid','$clicks','$time','$ans','$r','$w')");

?>
