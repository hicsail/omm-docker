<!DOCTYPE html>
<?php
 session_start();
 include 'connect.php';
 $sql = mysqli_query($con,"SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0]; 
 if (isset($_POST['submit'])) {
        if(isset($_POST['confident']))
        {
            $confidence = $_POST['confident'];
            $sql = mysqli_query($con,"INSERT into confidence2 VALUES ('$subid', '$confidence');");
            echo'<script>alert("Your confidence value is updated");</script>';
            header("Location: task_instruction.php");


        }
    }
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
	<center><h3><b>
 
 How confident are you that you performed well on this task?   	</b></h3><br><br><br>
    <h3><b></b></center>
<form method="post" action="">
  <center><h6><b>
    Not at all confident  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;  Neutral &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp; Extremely confident <br><br></b></h4></center>
    <center>
  <h3><b><span style="word-spacing: 60px;">1 2 3 4 5 6 7 8 9 10 </span><br><br>
<span style="word-spacing: 64px;">  
<input type="radio" id="1" name="confident" value="1">
<input type="radio" id="2" name="confident" value="2">
<input type="radio" id="3" name="confident" value="3">
<input type="radio" id="4" name="confident" value="4">
<input type="radio" id="5" name="confident" value="5">
<input type="radio" id="6" name="confident" value="6">
<input type="radio" id="7" name="confident" value="7">
<input type="radio" id="8" name="confident" value="8">
<input type="radio" id="9" name="confident" value="9">
<input type="radio" id="10" name="confident" value="10"><br><br> <br><br></span>
<input type="submit" name="submit" style="width: 30%;" value="Submit"/>



</form>
<br><br>     


</h3></center><br>
<hr>
<br><br><br>
</center>
 <br>
</div>
</div>
</div>
<hr>
<br>
<br>
<center>
</body>
</html>