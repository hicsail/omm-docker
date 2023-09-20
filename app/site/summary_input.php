<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once '../database/connect.php';

$time = $_POST["time"];
$response = strip_tags($_POST["a"]);
$clicks = $_POST["clicks"];
$sql = mysqli_query($con, "SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
$t = mysqli_query($con, "INSERT INTO summarypage VALUES('$subid','$clicks','$time','$response')");
