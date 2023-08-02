
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

<body>
  <br>
  <br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">
		
    <h3><b><center>

      Thank you for downloading the statement. <br><br><br>Please review the different parts of this statement. You do not have to memorize any information.  <br><br><br> Just see the overall format of the statement and know where various pieces of information are located. <br><br><br>Let me know when you are ready to begin the next part of the task.<b>
</center>

</h3><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="task_instructionp2.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>

</body>
</html>