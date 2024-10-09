<!DOCTYPE html>
<html>

<?php
$pageTitle = 'Site Summary';
include '../common/head_content.php'; ?>


<body onload="startTimer(this)">
  <div class="container-fluid">
    <p id="errMsg"></p>

    <script>
      var t = 0,
        b = 0;
      var i;
      var clicks = 0;

      function HelpAlert(e) {
        if (track_ga != 0) {
          gtag('event', 'help_click', {
            'subid': '<?php echo $subid; ?>',
            'page': 'Summary',
            timestamp: Date.now(),
          });
        }
        showAlert("Please download the statement for August 2018");
      }

      function startTimer(e) {
        var a = e.innerHTML;
        i = window.setInterval(() => {
          t++;
        }, 1000)
      }

      function stopTimer(e) {
        window.clearInterval(i);
        var a = e.innerHTML;
        e.setAttribute("onclick", "startTimer(this)");
        saveTime(getTime(t), a);

      }

      function saveResponse(e) {

        var a = e.innerHTML;
        var b = e.id;

        if (b == "al2") {
          a = "Learn More 1"
        }
        if (b == "al3") {
          a = "Learn More 2"
        }
        if (b == "al4") {
          a = "Learn More 3"
        }
        if (b == "al5") {
          a = "Facebook-icon"
        }
        if (b == "al6") {
          a = "Twitter-icon"
        }
        if (b == "al7") {
          a = "Google-plus-icon"
        }
        if (b == "al8") {
          a = "Instagram-icon"
        }
        if (b == "al9") {
          a = "Youtube-icon"
        }
        //alert(a);
        saveTime(getTime(t), a);
        if (b != "al1") {
          if (track_ga != 0) {
            gtag('event', 'incorrect_click', {
              'elementClicked': a,
              'subid': '<?php echo $subid; ?>',
              'page': 'Summary',
              timestamp: Date.now(),
            });
          }
          showAlert("This is incorrect. Please select another option.");
        }
      }

      // function showTime(time) {
      //   document.getElementById("time").innerHTML = time;
      // }

      function getTime(m) {
        let hh = "" + Math.floor(m / 3600);
        m = m % 3600;
        let mm = "" + Math.floor(m / 60);
        m = m % 60;
        let ss = "" + m;

        return hh.padStart(2, "0") + ":" + mm.padStart(2, "0") + ":" + ss.padStart(2, "0");
      }

      function saveTime(time, a) {

        clicks++;
        if (t > 0) {

          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status != 200) {
              document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
            } else {
              document.getElementById("errMsg").innerHTML = "";
            }
          };
          xmlhttp.open("POST", "summary_input.php", true);
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.send("time=" + time + "&a=" + a + "&clicks=" + clicks);
        }
      }
    </script>


    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #DC143C" ;>
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_item" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav_item">
        <ul class="navbar-nav mr-auto">
          <li class="nav_item active">
            <a class="nav-link" onclick="saveResponse(this)" style="color: white">Account</a>
          </li>
          <li class="nav_item">
            <a class="nav-link" onclick="saveResponse(this)" style="color: white">Services</a>
          </li>
          <li class="nav_item">
            <a class="nav-link" href="statementdownload.php" onclick="stopTimer(this)" style="color: white">Statements</a>
          </li>
          <li class="nav_item">
            <a class="nav-link" onclick="saveResponse(this)" style="color: white">Investments</a>
          </li>
          <li class="nav_item">
            <a class="nav-link" onclick=" saveResponse(this)" style="color: white">Logout</a>
          </li>
          <li class="nav_item">
            <button value="help" id="al1" style="background-color:#33CEFF; font-family: georgia; font-weight: bold; color: black; border: 2px solid black; position:absolute; top:15px; right:30px;" onclick="HelpAlert(this),saveResponse(this)">Help</button>
          </li>
        </ul>

      </div>
    </nav>
    <hr>
    <br>
    <div class="jumbotron">
      <div class="container-fluid padding">
        <div class="row padding">
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="../assets/monitor.jpg">
              <div class="card-body">
                <h5 class="card-title" onclick="saveResponse(this)"> Monitor Your Account</h5>
                <p1 class="card-text" onclick="saveResponse(this)">Keep a track on your transactions and more..</p1><br>
                <a href="#" id="al2" class="btn btn-outline-secondary" onclick="saveResponse(this)"> Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="../assets/savetime.jpg">
              <div class="card-body">
                <h5 class="card-title" onclick="saveResponse(this)"> Pay bills Online</h5>
                <p1 class="card-text" onclick="saveResponse(this)">Save time,make payments online...</p1><br>
                <a href="#" id="al3" class="btn btn-outline-secondary" onclick="saveResponse(this)">Learn More </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="../assets/greeting.jpg">
              <div class="card-body">
                <h5 class="card-title" onclick="saveResponse(this)"> Need Help?</h5>
                <p1 class="card-text" onclick="saveResponse(this)">For additional informations and queries, call us..</p1><br>
                <a href="#" id="al4" class="btn btn-outline-secondary" onclick="saveResponse(this)"> Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>

    <footer>
      <div class="container-fluid">
        <div class="row  text-center">
          <div class="col-12">
            <p class="text" onclick="saveResponse(this)"><strong>Follow Us</strong></p>
          </div>
          <div class="col-12 social padding">
            <a href="#" id="al5" onclick="saveResponse(this)"> <i class="fab fa-facebook fa-3x fa-fw"></i></a>
            <a href="#" id="al6" onclick="saveResponse(this)"> <i class="fab fa-twitter fa-3x fa-fw"></i></a>
            <a href="#" id="al7" onclick="saveResponse(this)"> <i class="fab fa-google-plus-g fa-3x fa-fw"></i></a>
            <a href="#" id="al8" onclick="saveResponse(this)"> <i class="fab fa-instagram fa-3x fa-fw"></i></a>
            <a href="#" id="al9" onclick="saveResponse(this)"> <i class="fab fa-youtube fa-3x fa-fw"></i></a>
          </div>
          <br>
          <hr>
        </div>
      </div>
      <hr>

      <footer style="font-family: georgia; background-color: black; color: white">
        <div class="row text-center">
          <div class="col-md-4">

            <h5 onclick="saveResponse(this)">Mortgage</h5>
            <p onclick="saveResponse(this)">Home equity
            </p>
            <p onclick="saveResponse(this)">Auto Mobile</p>
            <p onclick="saveResponse(this)">Lending</p>
          </div>
          <div class="col-md-4">
            <h5 onclick="saveResponse(this)">Investment Planning</h5>
            <p onclick="saveResponse(this)">Personalized
            </p>
            <p onclick="saveResponse(this)">Not FDIC Insured</p>
            <p onclick="saveResponse(this)">Risk Level</p>
          </div>
          <div class="col-md-4">

            <h5 onclick="saveResponse(this)">Help and Support</h5>
            <p onclick="saveResponse(this)">Contact
            </p>
            <p onclick="saveResponse(this)">Security Center</p>
            <p onclick="saveResponse(this)">Help and FAQs</p>

          </div>
          <hr>
        </div>
      </footer>
      <br>

</body>
</head>

</html>