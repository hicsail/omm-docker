
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
	<link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="flip.css">
</head>
<button value="help" style = "background-color:#33CEFF; font-family: georgia; color: white; position:absolute; right:10px;" onclick="HelpAlert(this)">Help</button>

<body>
  <br>
  <br>
<hr>
<div class="jumbotron">
<div class="container-fluid">
	<div class="inst-box">
		<h1><center><strong>Instructions</strong></center></h1>
    <p5><b>Please read the following instructions carefully:</b> <br>1. Enter the unique user ID and a dummy password to login.<br>2. After login, the first page is the account page of each user, where the user can navigate to different pages.<br>3. Click the welcome button and enter to the summary page.After the view of the summary, click onto the pay and transfer options which directs to the statement page.<br>4. The statement page will have two options, first click the download option to generate the statement for the user and then click on the view option to perform the tasks.<br>5. The task_1 will have a set of questions and clicks on the transactions to mark the answers. <br>6. At the end of task_1 you will be directed to task_2, with a pdf file. Errors and false values should be marked in the second task.<br>7. Exit the task after answering the questions.

</p5><br>


</div>
</div>
</div>
<hr>
<br>
<center>
  <a href="PatMillerErr.php" class="button"  style="color:white"><span> Start Task </span></button></center></a>
<script>
  function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>

</body>
</html>