<?php
if(isset($_POST['submit'])){

	  $host = "localhost";
	  $username = "root";
	  $password = "Password1";
	  $db = "website";
	  $conn = new mysqli($host, $username, $password, $db);
	  if($conn -> connect_error)
	  {
	      die("connection failed " .mysqli_connect_error());
	  }

	$services = $_POST['services'];
	$site = $_POST['site'];
	$overall = $_POST['overall'];
	$expectation = $_POST['expectation'];
	$easy = $_POST['easy'];
	$needs = $_POST['needs'];
	$describe = $_POST['describe'];
	$money = $_POST['money'];
	$textarea = $_POST['textarea'];

	if (empty($services) ||empty($site) ||empty($overall) ||empty($expectation) ||empty($easy) ||empty($needs) ||empty($describe) ||empty($money) ||empty($textarea)) 
	{
		echo"Please answere all the question"; 	  

	}
	else {
		$sql = "INSERT INTO feedback (satisfied,sitenav,overall,expectations,information,needs,description,moneyvalue,comments)
		VALUES ('$services', '$site', '$overall', '$expectation', '$easy', '$needs', '$describe', '$money', '$textarea')";
	}

	

	if ($conn->query($sql) === TRUE) 
	{
    echo "Thank you for taking the time to complete the survey";
	} 	
	else 
	{
	echo "We are trying to resolve the problem we will be back soon";
 	}

}

?>