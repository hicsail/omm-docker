<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
include 'getFormId.php';

?>
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
        <br><br>


        </h3>
        </center><br>
        <hr>
        <br><br><br>
        </center>
        <h4>
          <center><b>
              Once you are ready, the credit card statement will once again be displayed. <br><br><br>You have to go to the <b><span style="color: blue;">Account Activity</span> </b> section and click on any suspicious or strange transactions. <br><br><br>There could be several such transactions or there could be none. <br><br><br>Once you complete this task, let me know that you are done.
        </h4>
        <br>
      </div>
    </div>
  </div>
  <hr>
  <br>
  <br>
  <center>
    <a href=<?php echo ($formid === "B") ? "EliWinterErr.php" : "PatMillerErr.php"; ?> class="button" style="color:white"><span>Start Activity </span></button>
  </center></a>
</body>

</html>