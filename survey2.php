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

//results for Question 1
$response = array();
$response[3]['question_type'] = 'TX';
$query = mysqli_query($link,"SELECT * FROM SURVEY_2_RESULTS WHERE question_id=3 LIMIT 10");
while($row = mysqli_fetch_assoc($query)){
	$response[3]['answers'][] = $row['answer'];
}
//results for Question1
$response[1]['question_type'] = 'MC';
$query2 = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=1 ");
$resultTotal = mysqli_fetch_assoc($query2);
$response[1]['total'] = $resultTotal['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=1 AND answer=1 "); 
$result1 = mysqli_fetch_assoc($query);
$response[1]['result1'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=1 AND answer=2 "); 
$result1 = mysqli_fetch_assoc($query);
$response[1]['result2'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=1 AND answer=3 "); 
$result1 = mysqli_fetch_assoc($query);
$response[1]['result3'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=1 AND answer=4 "); 
$result1 = mysqli_fetch_assoc($query);
$response[1]['result4'] = $result1['c'];



//results for Question2
$response[2]['question_type'] = 'MC';
$query2 = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=2 ");
$resultTotal = mysqli_fetch_assoc($query2);
$response[2]['total'] = $resultTotal['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=2 AND answer=1 "); 
$result1 = mysqli_fetch_assoc($query);
$response[2]['result1'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=2 AND answer=2 "); 
$result1 = mysqli_fetch_assoc($query);
$response[2]['result2'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=2 AND answer=3 "); 
$result1 = mysqli_fetch_assoc($query);
$response[2]['result3'] = $result1['c'];

$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=2 AND answer=4 "); 
$result1 = mysqli_fetch_assoc($query);
$response[2]['result4'] = $result1['c'];






//results for Question4
$response[4]['question_type'] = 'MC';
$query2 = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=4 ");
$resultTotal = mysqli_fetch_assoc($query2);
$response[4]['total'] = $resultTotal['c'];
$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=4 AND answer=1 "); 
$result1 = mysqli_fetch_assoc($query);
$response[4]['result1'] = $result1['c'];
$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=4 AND answer=2 "); 
$result1 = mysqli_fetch_assoc($query);
$response[4]['result2'] = $result1['c'];
$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=4 AND answer=3 "); 
$result1 = mysqli_fetch_assoc($query);
$response[4]['result3'] = $result1['c'];
$query = mysqli_query($link,"SELECT COUNT(*) AS c FROM `SURVEY_2_RESULTS` WHERE question_id=4 AND answer=4 "); 
$result1 = mysqli_fetch_assoc($query);
$response[4]['result4'] = $result1['c'];
echo json_encode($response);




?>