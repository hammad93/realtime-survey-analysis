<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$dbhost = '50.62.209.77:3306';
$dbuser = 'database_admin';
$dbpass = '1hnjNF6m!';
$dbname = 'ucfsurveys';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$result = mysqli_query($link,"SELECT * FROM `SURVEY_3` WHERE 1");
$response = array();
while($row = mysqli_fetch_assoc($result)){
	$response[] = $row;
}
 echo json_encode($response);
 
?>
