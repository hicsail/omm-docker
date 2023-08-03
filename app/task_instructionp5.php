
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

Once you are ready, the credit card statement will once again be displayed. <br><br><br>You have to go to the <b><span style="color: blue;">Account Activity</span> </b> section and click on any suspicious or strange transactions. <br><br><br>There could be several such transactions or there could be none. <br><br><br>Once you complete this task, let me know that you are done.


</h4><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="confidence5.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>

</body>
</html>