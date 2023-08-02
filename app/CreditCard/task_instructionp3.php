
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
		
    <h3><center><b>
Now on the next screen a question will be displayed.<br><br><br> Once I click "Next", the credit card statement will be displayed and you have to click on the answer.<br><br><br> Try to answer the question as quickly as you can, but also as carefully as you can. Ready?
</center>
</b>
</h3><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="confidence3.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>

</body>
</html>