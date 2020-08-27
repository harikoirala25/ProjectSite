<?php 
	$host = "localhost:3306";
	$username = "lethbrl7_feedback";
	$password = "password1";
	$db = "lethbrl7_website";
	$conn = new mysqli($host, $username, $password, $db);
	if($conn -> connect_error)
	{
		die("connection failed " .mysqli_connect_error());
		header("Location:index.php?connectionFailed");
	}

?>