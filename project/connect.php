<?php

$servername = "localhost";
$username = "id14172004_kapil";
$password = "jk8EAN<Gpr1(<V[9";
$dbname = "id14172004_mydb1";

$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$remark = $_POST['remark'];

//Database connection

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO `fcdata`(`Name`, `Email`, `Password`, `Suggestion`) VALUES (?,?,?,?);");
	$stmt->bind_param("ssss",$fname, $email, $pass, $remark);
	$stmt->execute();
	echo "Sign-Up Successful. Please close tab to avoid resubmission.";
	$stmt->close();
	$conn->close();
}

?>