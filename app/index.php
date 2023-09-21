<?php include_once 'connect.php';



if (isset($_POST['Enter'])) {

  if (empty($form_errors)) {


    $userid = $_POST['userid'];
    $subid = $_POST['subid'];
    $session = $_POST['session'];
    $form = $_POST['form'];

    $add_user = mysqli_query($con, "INSERT INTO registration VALUES ('$userid','$subid','$session','$form',DATE_FORMAT(now(), '%m/%d/%Y'),now())") or die("error" . mysqli_error($con));

?>
    <p style='padding: 20px; color: black;'> Registration Successful. Please <a href="instruction_page.php"> Click Here </a> to start the task.
    </p>

<?php }
} ?>


<html>

<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <meta charset="utf-8" name="viewport" content="widtg=device-width" , initial-scale=1>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
  <div class="jumbotron">
    <div class="container-fluid padding">
      <div class="container">


        <?php if (!empty($form_errors)) { ?>

          <p style='color: red ; border: 1px solid gray;'> There were <?php echo count($form_errors); ?> errors in the form
            <?php echo show_errors($form_errors); ?>
          </p>
        <?php } ?>

        <form class="form_align" action="" method="post">
          Examiner_ID<br>
          <input type="text" name="userid" placeholder="Please enter a unique ID" required><br>
          Subject_ID<br>
          <input type="text" name="subid" required><br>
          Session<br>
          <select name="session" required>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <br><br>
          Form_ID<br>
          <select name="form" required>
            <option value="A">A</option>
            <option value="B">B</option>
          </select><br><br>
          <center><input type="submit" name="Enter" value="Enter" style="color: white;"></center></input>
        </form>

</BODY>

</HTML>