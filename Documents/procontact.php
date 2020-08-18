<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if (empty($name) || empty($email) || empty($message)){
		header("Location:contact.php?field=blank");
		
	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header ("Location:contact.php?field=invalidemail");
	}
	else{
		//use a website hosting email here
		$mailto = "harikoirala25@gmail.com";
		$headers = "From".$email;
		$bodytxt = "You have an email from".$name.".\n\n".$message;
		mail($mailto,$subject,$bodytxt,$headers);
		header("Location:thankcontact.php?field=send");
	}
	
	
}

?>