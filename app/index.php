<?php include_once 'database/connect.php';
include 'common/gtag_setup.php';

if (isset($_POST['Enter'])) {
  if (empty($form_errors)) {

    $userid = $_POST['userid'];
    $subid = $_POST['subid'];
    $session = $_POST['session'];
    $form = $_POST['form'];
    $track_ga = $_POST['track_ga']; //whether to track events in Google Analytics


    $add_user = mysqli_query($con, "INSERT INTO registration VALUES ('$userid','$subid','$session','$form',DATE_FORMAT(now(), '%m/%d/%Y'), TIME(NOW()))")  or die("error" . mysqli_error($con));
    // Set the subid in a session or cookie
    session_start();
    $_SESSION['subid'] = $subid;
    // set cookie for 24 hours
    setcookie('subid', $subid, time() + (86400), "/");
    $_SESSION['track_ga'] = $track_ga;
    setcookie('track_ga', $track_ga, time() + (86400), "/");
    echo "<script>console.log('track_ga (from form): ', $track_ga);</script>";
?>
    <p style='padding: 20px; color: black;'> Registration Successful. Please <a href="instructions/1.php"> Click Here</a> to start the task.
    </p>
    <script>
      console.log('Registration Successful', '<?php echo $subid; ?>');
      gtag('event', 'registration_success', {
        'event_category': 'Form Submission',
        'event_label': 'Registration',
        'subid': '<?php echo $subid; ?>',
        'page': 'Registration',
        'event_callback': function() {
          console.log('Registration event sent to Google Analytics');
        }
      });
    </script>

<?php }
} ?>


<html>


<head>
  <link rel="stylesheet" type="text/css" href="styles/register.css">
</head>
<?php
$pageTitle = 'Registration';
include 'common/head_content.php'; ?>



<body>
  <script>
    console.log('in registration page');
    document.addEventListener('DOMContentLoaded', function() {
      const elements = document.querySelectorAll(".cls_pawg");

      elements.forEach(function(element) {
        console.log("cls_pawg elements: ", element);

        element.addEventListener("dblclick", function() {
          console.log(
            "Double-click detected on element with text:",
            element.textContent
          );
          alert("Double-click detected on: " + element.textContent);
        });
      });
    });
  </script>
  <div class="jumbotron">
    <div class="container-fluid padding">
      <div class="container">


        <?php if (!empty($form_errors)) { ?>

          <p style='color: red ; border: 1px solid gray;'> There were <?php echo count($form_errors); ?> errors in the form
            <?php echo show_errors($form_errors); ?>
          </p>
        <?php } ?>
        <div class="cls_pawg"><span>PAT MILLERRRR</span></div>
        <div class="cls_pawg">PAT MILLERRRR2</div>
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
          <!-- add a checkbox to track events in Google Analytics -->
          <input type="hidden" name="track_ga" value="0">
          <input type="checkbox" name="track_ga" value="1" checked> Track events in Google Analytics<br><br>
          <center><input type="submit" name="Enter" value="Enter" style="color: white;"></center></input>
        </form>

</BODY>

</HTML>