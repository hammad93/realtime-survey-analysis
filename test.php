<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

$result = $db->query("select * from test");
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "name: " . $row["name"] . "<br>";
	}
}
?>