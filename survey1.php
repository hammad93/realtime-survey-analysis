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
$result1_1total = ($result1 / $resultTotal) * 100;
echo $result1_1total; 

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 2 ");
$result1_2total = ($result2 / $resultTotal) * 100;
echo $result1_2total; 

$result3 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 3 ");
$result1_3total = ($result3 / $resultTotal) * 100;
echo $result1_3total; 

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 1 AND answer = 4 ");
$result1_4total = ($result4 / $resultTotal) * 100;
echo $result1_4total; 


//results for Question 2


$result2Total = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 ");
echo $result2Total; 

$result1 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 1 ");
$result2_1total = ($result1 / $result2Total) * 100;
echo $result2_1total; 

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 2 ");
$result2_2total = ($result2 / $result2Total) * 100;
echo $result2_2total;  

$result3 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 3 ");
$result2_3total = ($result3 / $result2Total) * 100;
echo $result2_3total; 

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 2 AND answer = 4 ");
$result2_4total = ($result4 / $result2Total) * 100;
echo $result2_4total; 

//results for question 3

$result3Total = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 ");
echo $result3Total; 

$result1 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 1 ");
$result1total = ($result1 / $result3Total) * 100;
echo $result1total; 

$result2 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 2 ");
$result2total = ($result2 / $result3Total)* 100; 
echo result2total; 

$result3 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 3 ");
$result3totoal = ($result3 / $result3Total) * 100;
echo result3totoal

$result4 = mysqli_query($link,"SELECT COUNT (*) FROM `SURVEY_1_RESULTS` WHERE question_id = 3 AND answer = 4 ");
$result4totoal = ($result4 / $result3Total) * 100;
echo $result4total; 



 
?>