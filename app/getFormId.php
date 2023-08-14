<?php
// get_formid.php
$sql = mysqli_query($con, "SELECT formid FROM registration ORDER BY datetime DESC LIMIT 1;");
$row = mysqli_fetch_row($sql);
$formid = $row[0];
?>
