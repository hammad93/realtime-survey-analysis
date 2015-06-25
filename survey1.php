<?php


$dbhost = '50.62.209.77:3306';
$dbuser = 'database_admin';
$dbpass = '1hnjNF6m!';
$dbname = 'ucfsurveys';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//results for Question1
$resultTotal = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 ");
echo $resultTotal; 

$result1 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 1 ");
echo ($result1 / $resultTotal) * 100;

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 2 ");
echo ($result2 / $resultTotal) * 100; 

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 3 ");
echo ($result3 / $resultTotal) * 100; 

$result5 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 4 ");
echo ($result5 / $resultTotal) * 100; 


//results for Question 2


$resultTotal = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 ");
echo $resultTotal; 

$result1 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 1 ");
echo ($result1 / $resultTotal) * 100;

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 2 ");
echo ($result2 / $resultTotal) * 100; 

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 3 ");
echo ($result3 / $resultTotal) * 100; 

$result5 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 4 ");
echo ($result5 / $resultTotal) * 100; 

//results for question 3

$resultTotal = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 ");
echo $resultTotal; 

$result1 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 1 ");
echo ($result1 / $resultTotal) * 100;

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 2 ");
echo ($result2 / $resultTotal)* 100; 

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 3 ");
echo ($result3 / $resultTotal) * 100; 

$result5 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 4 ");
echo ($result5 / $resultTotal) * 100; 



 
?>