<?php
//export.php  
if (isset($_POST["export"])) {
     $connect = mysqli_connect("", "root", "", "CreditCard");
     header('Content-Type: text/csv; charset=utf-8');
     header('Content-Disposition: attachment; filename=output.csv');
     $output = fopen("php://output", "w");

     fputcsv($output, array('registration'));
     fputcsv($output, array('userid', 'subid', 'session', 'form', 'date', 'time'));
     $query = "SELECT * from registration;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }

     fputcsv($output, array(' '));
     fputcsv($output, array('logintask'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response'));
     $query = "SELECT * from logintask;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }

     fputcsv($output, array(' '));
     fputcsv($output, array('summarypage'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response'));
     $query = "SELECT * from summarypage;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('statement download'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response'));
     $query = "SELECT * from statement_download;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question1'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question1;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question2'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question2;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question3'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question3;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question4'));
     fputcsv($output, array('clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question4;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question5'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question5;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question6'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     fputcsv($output, array(' '));
     $query = "SELECT * from question6;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('question7'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'right_ans', 'wrong_ans'));
     $query = "SELECT * from question7;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('transaction_task'));
     fputcsv($output, array('subid', 'clicks', 'timer', 'response', 'answer'));
     $query = "SELECT * from transaction_task;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('summary_transaction'));
     fputcsv($output, array('subid', 'response', 'count', 'answer'));
     $query = "SELECT * from summary_transaction;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('sum_trans_eliminate'));
     fputcsv($output, array('subid', 'response', 'count', 'answer'));
     $query = "SELECT * from sum_trans_eliminate;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('Confidence_ratings'));
     fputcsv($output, array('navigation_pre.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence1;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('navigation_post.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence2;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('Q.A_pre.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence3;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('Q.A_post.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence4;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('Account_Activity_pre.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence5;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fputcsv($output, array(' '));
     fputcsv($output, array('Account_Activity_post.confidence'));
     fputcsv($output, array('subid', 'confidence'));
     $query = "SELECT * from confidence6;";
     $result = mysqli_query($connect, $query);
     while ($row = mysqli_fetch_assoc($result)) {
          fputcsv($output, $row);
     }
     fclose($output);
}
