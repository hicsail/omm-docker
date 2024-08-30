<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
?>
<html>

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="../styles/header.css">
</head>

<body>
  <br>
  <br>
  <hr>
  <div class="jumbotron">
    <div class="container-fluid">
      <div class="inst-box">
        <h3><b>Welcome Preeti! </b></h3><br><br><br>
        <h3><b>
            <center>
              <form method="post" action="getresults.php">
                <input type="submit" name="export" value="CSV Export">
              </form>
              <br><br>
              <form method="post" action="delete.php">
                <input type="submit" name="delete" value="Delete all records">
              </form>
            </center>

        </h3><br>


      </div>
    </div>
  </div>
  <hr>
  <br>
</body>

</html>