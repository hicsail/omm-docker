<?php
include_once 'connect.php';


$time =$_POST["time"]; 
$clicks =$_POST["clicks"];
$response =strip_tags( $_POST["ans"]);
$sql = mysqli_query($con,"SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
$t = mysqli_query($con, "INSERT INTO logintask VALUES('$subid','$clicks','$time','$response')");
?>