<?php
include_once 'dbconnection.php';

if(isset($_POST['submit'])){
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
	//inserting data in to the databse
	//Webserver change feedback to Feedback
	if (isset($services) ||isset($site) ||isset($overall) ||isset($expectation) ||isset($easy) ||isset($needs) ||isset($describe) ||isset($money) ||isset($textarea))
	{
		$sql = "INSERT INTO feedback (satisfied,sitenav,overall,expectations,information,needs,description,moneyvalue,comments)
		VALUES ('$services', '$site', '$overall', '$expectation', '$easy', '$needs', '$describe', '$money', '$textarea')";
	}
	//if connection is successful redirect to thankyou pge
	if ($conn->query($sql)===TRUE)
	{
		header("Location:thankyou.php?success");
	}
	//if there is a problem redirect them to the index pge
	else
	{
		header("Location:index.php?ConnectionError");
	}
}
?>