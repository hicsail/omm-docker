<?php
if (isset($_POST['delete'])) {
  $con = mysqli_connect("localhost", "root", "", "CreditCard");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

  $tables = [
    "registration", "logintask", "statement_download", "summarypage",
    "summary_transaction", "sum_trans_eliminate", "transaction_task",
    "question1", "question2", "question3", "question4", "question5", "question6",
    "question7", "confidence1", "confidence2", "confidence3", "confidence4",
    "confidence5", "confidence6"
  ];

  foreach ($tables as $table) {
    $sql = "TRUNCATE TABLE $table";

    if (mysqli_query($con, $sql)) {
      echo "Table $table truncated successfully.<br>";
    } else {
      echo "Error truncating table $table: " . mysqli_error($con) . "<br>";
    }
  }

  mysqli_close($con);
}
