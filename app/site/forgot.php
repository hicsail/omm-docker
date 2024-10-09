<!DOCTYPE html>
<html>
<?php include '../common/gtag_setup.php'; ?>

<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../styles/header.css">
</head>

<script>
  if (track_ga != 0) {
    gtag('event', 'forgot_password', {
      'subid': '<?php echo $subid; ?>',
      'page': 'Forgot Password',
      timestamp: Date.now(),
      'event_callback': function() {
        console.log('forgot_password event sent to Google Analytics');
      }
    });
  }
  let timeSpentOnPage = 0;
  let startTime = Date.now();

  const updateTimeSpent = setInterval(function() {
    timeSpentOnPage = Math.floor((Date.now() - startTime) / 1000); //  in seconds
  }, 1000);

  window.addEventListener('beforeunload', function(event) {
    clearInterval(updateTimeSpent);
    if (track_ga != 0) {
      gtag('event', 'exit_forgot_password', {
        'subid': '<?php echo $subid; ?>',
        'page': 'Forgot Password',
        'time_spent_on_page': timeSpentOnPage,
        timestamp: Date.now(),
        'event_callback': function() {
          console.log('exit_forgot_password event sent to Google Analytics');
        }
      });
    }
  });
</script>

<body>
  <div class="container-fluid">

    <br>
    <br><br>
    <hr>
    <div class="jumbotron">
      <div class="container-fluid">
        <div class="inst-box">
          <h1>
            <center><strong> Username: pat</strong></center>
          </h1><br>
          <p5><b>
              <center>
                <h1><strong>Password: admin123</strong></h1>
              </center>
            </b></p5>

          </p5><br>


        </div>
      </div>
    </div>
    <hr>
    <br>
    <center>
      <a href="login.php" class="button" style="color:white"><span> Login Now </span></button>
    </center></a>
</body>

</html>