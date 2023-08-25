<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'connect.php';

$time = $_POST["time"];
$user_answer = strip_tags($_POST["user_answer"]);
$correct_answer = $_POST["correct_answer"];
$clicks = $_POST["clicks"];
$question_table = $_POST['question_number'];

if ($user_answer == $correct_answer) {
    $r = 1;
    $w = 0;
} else {
    $r = 0;
    $w = 1;
}
$user_answer = ($user_answer === " ") ? "val" : $user_answer;

$sql = mysqli_query($con, "SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
$t = mysqli_query($con, "INSERT INTO $question_table VALUES('$subid','$clicks','$time','$user_answer','$r','$w')");
