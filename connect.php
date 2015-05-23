<!DOCTYPE HTML>
<html>
<head>
</head>
<body>


<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = test_input($_POST["name"]);
	addtodb($name, $db);

}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function addtodb($data, $conn)
{
	$sql = 'INSERT INTO test (name) VALUES (?)';
	$stmt = $conn->prepare($sql);
	if($stmt===false)
	{
		trigger_error("wrong SQL: " . $sql);
	}
	$stmt->bind_param('s', $data);
	$stmt->execute();

	echo $stmt->insert_id;
	echo $stmt->affected_rows;

	$stmt->close();
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" >
	<input type="submit" name="submit" value="submit">
</form>
<br>
<form method="post" action="test.php">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>