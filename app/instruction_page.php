
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

  <link rel="stylesheet" type="text/css" href="instr.css">
</head>


<body>
  <script>
    function erroralert(e)
    {
      alert("This is incorrect. Please select another option.");
    }
  </script>
	<button value="help" style = "background-color:#33CEFF; font-family: georgia; font-weight: bold; color: black;border: 2px solid black; position:absolute; right:10px;" onclick="HelpAlert(this)">Help</button>
  <!--<bgsound src="C:\xampp\htdocs\Omm codes\file_example_MP3_700KB.mp3" loop="true" autostart="true">
  </bgsound>
</audio>-->
<div class="container-fluid">
 
<br>
<br><br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">
    <h3>{formid}</h3>
		<h3><b><center><br>
      For this task, you have to login to a pretend credit card account and download a statement. <br><br><br>Specific instructions will be given in the next page.<br><br><br> 
If you make an error, an <span onclick="erroralert(this)"; style ="color:blue">error</span> message will ask you to try another option.<br><br><br>
If you forget what you have to do, click on the "Help" button in the upper right hand corner of the screen.<center> 


</h3><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="instruction_page2.php" class="button"  style="color:white"><span> Next </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>
<!--<embed src="file_example_MP3_700KB.mp3" autostart = "true">-->

</body>
</html>