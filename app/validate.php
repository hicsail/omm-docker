<?php
if(isset($_POST['submit'])){

$user = $_POST["username"];
$pass = $_POST["psw"];

if ($user == "admin" and $pass = "password")
{
	header(summary_page.php);
	exit();
}

else
{
	alert("Incorrect password");
}

}


?>