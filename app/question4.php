<!DOCTYPE html>
<?php
 include 'connect.php'; 
 include 'getFormId.php';
 ?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="instr.css">
</head>
<body onload="toggleZoomScreen()">
  <script>
    function toggleZoomScreen() {
       document.body.style.zoom = "130%";
   } 

  </script>
<div class="container-fluid">
 
<br>
<br><br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">
		<p5><b><center><h2 style = "font-family: georgia;">
    <?php echo ($formid === "B") ? "In the current statement, what is the annual percentage rate for cash advances?" :
       "In the current statement, what amount did Pat receive as the cashback amount in the 5% Bonus Categories?"; ?>
  </h2></center></b></p5>

</p5><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href=<?php echo ($formid === "B") ? "EliWinter4.php" : "PatMiller4.php"; ?>  class="button"  style="color:white"><span> Next </span></button></center></a>
</body>
</html>