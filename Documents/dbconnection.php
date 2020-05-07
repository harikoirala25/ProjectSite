<?php 
	$host = "localhost";
	$username = "root";
	$password = "Password1";
	$db = "website";
	$conn = new mysqli($host, $username, $password, $db);
	if($conn -> connect_error)
	{
		die("connection failed " .mysqli_connect_error());
		header("Location:index.php?connectionFailed");
	}

?>