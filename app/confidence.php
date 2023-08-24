<!DOCTYPE html>

<html>

<?php include 'head_content.php'; ?>
<script src="./confidenceSubmit.js"></script>

<body>

  <br>
  <br>

  <hr>
  <div class="jumbotron">
    <div class="container-fluid">
      <div class="inst-box">
        <?php
        $confidence_table = "confidence1";
        include 'confidence_form.php'; ?>
        <br>
        <hr>
        <br><br><br>
        </center>
        <h3><b>
            <center>
              On the next page, please login with username <span style="color: blue;"> <?php echo ($formid === "B") ? "eli" : "pat"; ?></span> and password <span style="color: blue;">admin123</span>. <br><br><br>If needed, you can click on “forgot username/password”.<br><br><br>

              After you login, please download the <span style="text-decoration: underline; color: blue;">August 2018</span> statement.<br><br><br>
              Once I click on "Start Activity”, please complete this task as quickly and accurately as you can.<br><br><br>
            </center>

        </h3><br>
      </div>
    </div>
  </div>
  <hr>
  <br>
  <br>
  <center>
    <a href="login.php" class="button" style="color:white"><span> Start Activity </span></button>
  </center></a>
</body>

</html>