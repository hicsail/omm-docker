<?php
if (isset($_POST['delete'])){
  $con=mysqli_connect("localhost","root","","CreditCard");

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "Truncate table question1;";
  $sql .= "Truncate table logintask;";
  $sql .= "Truncate table statement_download;";
  $sql .= "Truncate table summarypage;";
  $sql .= "Truncate table summary_transaction;";
  $sql .= "Truncate table sum_trans_eliminate;";
  $sql .= "Truncate table transaction_task;";
  $sql .= "Truncate table question2;";
  $sql .= "Truncate table question3;";
  $sql .= "Truncate table question4;";
  $sql .= "Truncate table question5;";
  $sql .= "Truncate table question6;";
  $sql .= "Truncate table question7;";





  if (mysqli_multi_query($con,$sql))
  {
   do
    {
    
     if ($result=mysqli_store_result($con)) {
  
      while ($row=mysqli_fetch_row($result))
        {
        printf("");
        }
    
      mysqli_free_result($result);
      }
    }
    while (mysqli_next_result($con));
  }

  mysqli_close($con);
}
?>