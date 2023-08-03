
<!DOCTYPE html>
<?php
 session_start();
 include 'connect.php'; 
 ?>
<html>
<head>
	<title>Bank statement</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="flip.css">
</head>

<button value="help" style = "background-color:#33CEFF; font-family: georgia; font-weight: bold; color: black; border: solid black; position:absolute; right:10px;" onclick="HelpAlert(this)">Help</button>

<body>
  <br>
  <br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">
    <h4><center><b>
This part of the task is focused on the <b><span style="color: blue;">Account Activity</span></b>. Please follow along carefully:<br><br><br>

<b><span style="color: #8A2908;">This is Pat Miller’s credit card statement. <br><br><br>Pat is 64 years old and lives in NYC. <br><br><br>During this statement period, Pat did not travel outside New York City and incurred regular everyday expenses.</span><br><br><br></b>
 
I would like you to imagine that this is a real-life credit card statement and review it carefully, as if it were yours.<br><br><br>


</h4><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="task_instructionp5.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>

</body>
</html>