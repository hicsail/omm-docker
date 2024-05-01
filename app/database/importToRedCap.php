<?php

# Use only one of the following requires:
require('../PHPCap/autoloader.php');
require_once('tokenHelper.php');

use IU\PHPCap\RedCapProject;

$apiUrl = 'https://redcap.bumc.bu.edu/api/';
$file_path = '../.env';
$apiToken  = getToken($file_path);

$project = new RedCapProject($apiUrl, $apiToken);
$record = array();
$connect = mysqli_connect("", "root", "", "CreditCard");

// Function to get the last row from a given table
function getLastRow($connect, $tableName)
{
    $query = "SELECT * FROM $tableName;";
    $result = mysqli_query($connect, $query);
    mysqli_data_seek($result, mysqli_num_rows($result) - 1);
    return mysqli_fetch_assoc($result);
}

# get participant id
$registrationRow = getLastRow($connect, 'registration');
$record['record_id'] = $registrationRow['userid'];


# logintask
$logintaskRow = getLastRow($connect, 'logintask');
$record['omm_login_clicks'] = $logintaskRow['clicks'];
$record['omm_login_timer'] = $logintaskRow['time'];
$record['omm_login_response'] = $logintaskRow['response'];


# summarypage
$summarypageRow = getLastRow($connect, 'summarypage');
$record['omm_summary_clicks'] = $summarypageRow['clicks'];
$record['omm_summary_timer'] = $summarypageRow['time'];
$record['omm_summary_response'] = $summarypageRow['response'];


# statement_download
$statementRow = getLastRow($connect, 'statement_download');
$record['omm_statement_clicks'] = $statementRow['clicks'];
$record['omm_statement_timer'] = $statementRow['time'];
$record['omm_statement_response'] = $statementRow['response'];


# question1
$question1Row = getLastRow($connect, 'question1');
$record['omm_q1'] = ($question1Row['right_ans'] == 1) ? 1 : 2;
$record['q1_timer'] = $question1Row['time'];
$record['omm_q1_click'] = $question1Row['clicks'];
$record['omm_q1_correct_click'] = $question1Row['right_ans'];
$record['omm_q1_incorrect_click'] = $question1Row['wrong_ans'];
$record['omm_q1_response'] = $question1Row['response'];


# question2
$question2Row = getLastRow($connect, 'question2');
$record['omm_q2'] = ($question2Row['right_ans'] == 1) ? 1 : 2;
$record['q2_timer'] = $question2Row['time'];
$record['omm_q2_click'] = $question2Row['clicks'];
$record['omm_q2_correct_click'] = $question2Row['right_ans'];
$record['omm_q2_incorrect_click'] = $question2Row['wrong_ans'];
$record['omm_q2_response'] = $question2Row['response'];


# question3
$question3Row = getLastRow($connect, 'question3');
$record['omm_q3'] = ($question3Row['right_ans'] == 1) ? 1 : 2;
$record['q3_timer'] = $question3Row['time'];
$record['omm_q3_click'] = $question3Row['clicks'];
$record['omm_q3_correct_click'] = $question3Row['right_ans'];
$record['omm_q3_incorrect_click'] = $question3Row['wrong_ans'];
$record['omm_q3_response'] = $question3Row['response'];


# question4
$question4Row = getLastRow($connect, 'question4');
$record['omm_q4'] = ($question4Row['right_ans'] == 1) ? 1 : 2;
$record['q4_timer'] = $question4Row['time'];
$record['omm_q4_click'] = $question4Row['clicks'];
$record['omm_q4_correct_click'] = $question4Row['right_ans'];
$record['omm_q4_incorrect_click'] = $question4Row['wrong_ans'];
$record['omm_q4_response'] = $question4Row['response'];


# question5
$question5Row = getLastRow($connect, 'question5');
$record['omm_q5'] = ($question5Row['right_ans'] == 1) ? 1 : 2;
$record['q5_timer'] = $question5Row['time'];
$record['omm_q5_click'] = $question5Row['clicks'];
$record['omm_q5_correct_click'] = $question5Row['right_ans'];
$record['omm_q5_incorrect_click'] = $question5Row['wrong_ans'];
$record['omm_q5_response'] = $question5Row['response'];


# question6
$question6Row = getLastRow($connect, 'question6');
$record['omm_q6'] = ($question6Row['right_ans'] == 1) ? 1 : 2;
$record['q6_timer'] = $question6Row['time'];
$record['omm_q6_click'] = $question6Row['clicks'];
$record['omm_q6_correct_click'] = $question6Row['right_ans'];
$record['omm_q6_incorrect_click'] = $question6Row['wrong_ans'];
$record['omm_q6_response'] = $question6Row['response'];


# question7
$question7Row = getLastRow($connect, 'question7');
$record['omm_q7'] = ($question7Row['right_ans'] == 1) ? 1 : 2;
$record['q7_timer'] = $question7Row['time'];
$record['omm_q7_click'] = $question7Row['clicks'];
$record['omm_q7_correct_click'] = $question7Row['right_ans'];
$record['omm_q7_incorrect_click'] = $question7Row['wrong_ans'];
$record['omm_q7_response'] = $question7Row['response'];

# transaction_task
$transactionRow = getLastRow($connect, 'transaction_task');
$record['omm_transaction_clicks'] = $transactionRow['clicks'];
$record['omm_transaction_timer'] = $transactionRow['time'];

try {
    $records[] = $record;
    $number = $project->importRecords($records);
} catch (Exception $exception) {
    print "*** Import Error: " . $exception->getMessage() . "\n";
}