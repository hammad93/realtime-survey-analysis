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

$result = mysqli_query($link,"SELECT * FROM `SURV1EY_1` WHERE 1");
$choices = "SELECT answer_num, text FROM SURVEY_1_CHOICES WHERE question_id=?";
$response = array();
while($row = mysqli_fetch_assoc($result)){
	if($row['num_choices'] > 0){
		$stmt = mysqli_stmt_init($link);
		if(mysqli_stmt_prepare($stmt, $choices)){
			mysqli_stmt_bind_param($stmt, "i",$row['question_id']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $num, $text);
			$row['choices'] = array();
			$i = 0;
			while(mysqli_stmt_fetch($stmt)){
				$row['choices'][i]['num'] = $num;
				$row['choices'][i]['text'] = $text;
				$i = $i + 1;
			}
		}
	}
	$response[] = $row;

}
 echo json_encode($response);
 
?>
