<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'connect.php';

// get_formid.php
$sql = mysqli_query($con, "SELECT formid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$formid = $row[0];
// Return the formid as JSON response
echo json_encode(["formId" => $formid]);
