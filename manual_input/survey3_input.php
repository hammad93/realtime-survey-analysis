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

// Escape user inputs for security
$q1 = mysqli_real_escape_string($link, $_GET["question1"]);
$q2 = mysqli_real_escape_string($link, $_GET["question2"]);
$q3 = mysqli_real_escape_string($link, $_GET["question3"]);
$q4 = mysqli_real_escape_string($link, $_GET["question4"]);
 
// attempt insert query execution
$sql = "INSERT INTO `ucfsurveys`.`SURVEY_3_RESULTS` (`id`, `question_id`, `answer`) VALUES (NULL, '0', '$q1');";
$sql .= "INSERT INTO `ucfsurveys`.`SURVEY_3_RESULTS` (`id`, `question_id`, `answer`) VALUES (NULL, '1', '$q2');";
$sql .= "INSERT INTO `ucfsurveys`.`SURVEY_3_RESULTS` (`id`, `question_id`, `answer`) VALUES (NULL, '2', '$q3');";
$sql .= "INSERT INTO `ucfsurveys`.`SURVEY_3_RESULTS` (`id`, `question_id`, `answer`) VALUES (NULL, '3', '$q4');";

if($link->multi_query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
/*php self string: <?php echo $PHP_SELF;?>*/
?>