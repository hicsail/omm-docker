
<!DOCTYPE html>
<?php
 session_start();
 include 'connect.php'; 
 include 'getFormId.php';
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

<link rel="stylesheet" type="text/css" href="instr.css">
</head>


<body>
  <script>
    function erroralert(e)
    {
      alert("This is incorrect. Please select another option.");
    }
  </script>

<div class="container-fluid">
 
<br>
<br><br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">

		<h3><b><center>
      On the next page, please login with username <span style="color: blue;">  <?php echo ($formid === "B") ? "eli" : "pat"; ?></span> and password <span style="color: blue;">admin123</span>. <br><br><br>If needed, you can click on “forgot username/password”.<br><br><br> 

   After you login, please download the <span style="text-decoration: underline; color: blue;">August 2018</span> statement.<br><br><br>
   Once I click on "Start Activity”, please complete this task as quickly and accurately as you can.<br><br><br>
</center>

</h3><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="confidence.php" class="button"  style="color:white"><span> Start Activity </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>
</body>
</html>