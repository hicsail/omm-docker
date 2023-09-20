<?php
include_once '../database/connect.php';
$sql = mysqli_query($con, "SELECT subid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$subid = $row[0];
$sql = mysqli_query($con, "INSERT INTO summary_transaction(subid,response,count,answer) SELECT subid, response, COUNT(response),answer FROM transaction_task WHERE subid='$subid' GROUP BY subid, response, answer HAVING COUNT(response) % 2 != 0;");
if ($sql) {
} else {
  echo "Error inserting into summary_transaction: " . mysqli_error($con) . "\n";
}

$sql = mysqli_query($con, "INSERT INTO sum_trans_eliminate(subid,response,count,answer) SELECT subid, response, COUNT(response),answer FROM transaction_task WHERE subid='$subid' GROUP BY subid, response, answer HAVING COUNT(response) % 2 = 0;");
if ($sql) {
} else {
  echo "Error inserting into sum_trans_eliminate: " . mysqli_error($con) . "\n";
}
?>
<!DOCTYPE html>

<html>

<?php include '../common/head_content.php'; ?>
<script src="./confidence_script.js" data-confidence-id="6"></script>

<?php
$confidence_table = "confidence6";
include 'confidence_form.php'; ?>

</html>