<!DOCTYPE html>
<?php $pageTitle = 'Thank you';
include '../common/gtag_setup.php';
//study finished, reset subid
// if current subid ends in 'debug', add it to the placeholder subid
$_old_subid = isset($_SESSION['subid']) ? $_SESSION['subid'] : (isset($_COOKIE['subid']) ? $_COOKIE['subid'] : '');

$_subid = "PLACEHOLDER";
if ($_old_subid && strlen($_old_subid) >= 5) {
  $_subid .= (substr($_old_subid, -5) === 'debug') ? 'debug' : '';
}


// update session variable with new subid
$_SESSION['subid'] = $_subid;

// set cookie for 24 hours
setcookie('subid', $_subid, time() + 86400, "/");
?>

<?php
session_start();
include '../database/connect.php';
$sql = mysqli_query($con, "SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
if (isset($_POST['submit'])) {
  if (isset($_POST['confident'])) {
    $confidence = $_POST['confident'];
    $sql = mysqli_query($con, "INSERT into confidence6 VALUES ('$subid', '$confidence');");
  }
}
?>
<html>

<head>
  <title>Thank you</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>

<body>
  <br>
  <br>
  <hr>
  <div class="jumbotron">
    <div class="container-fluid">
      <div class="inst-box">
        <center>
          <h3><b>
              Thank you for completing this part of the task!
            </b></h3>
</body>

</html>
