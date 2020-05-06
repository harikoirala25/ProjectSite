<!-----------------------------------------------------------------------------------------
Storing Feedback
------------------------------------------------------------------------------------------->
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
	//define variables
	$services = $_POST['services'];
	$site = $_POST['site'];
	$overall = $_POST['overall'];
	$expectation = $_POST['expectation'];
	$easy = $_POST['easy'];
	$needs = $_POST['needs'];
	$describe = $_POST['describe'];
	$money = $_POST['money'];
	$textarea = $_POST['textarea'];

	if (isset($services) ||isset($site) ||isset($overall) ||isset($expectation) ||isset($easy) ||isset($needs) ||isset($describe) ||isset($money) ||isset($textarea))
	{
		$sql = "INSERT INTO feedback (satisfied,sitenav,overall,expectations,information,needs,description,moneyvalue,comments)
		VALUES ('$services', '$site', '$overall', '$expectation', '$easy', '$needs', '$describe', '$money', '$textarea')";
	}

	if ($conn->query($sql) === TRUE)
	{
         header("Location:thankyou.php");
	}
	else
	{
		header("Location:index.php?ConnectionError");
	}
}

?>