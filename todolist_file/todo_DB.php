<?php
	$sname= "121.186.228.127:3306";
	$uname= "root";	
	$password="0000";

	$db_name = "login";

	$conn = mysqli_connect($sname, $uname, $password, $db_name);
	//$conn = mysqli_connect("localhost:3306", "root", "0000", "login");
	mysqli_query($conn, 'SET NAMES utf8');

	if ($conn->connect_error) {
	
		die("Connection failed: " . $conn->connect_error);
	}
?>
