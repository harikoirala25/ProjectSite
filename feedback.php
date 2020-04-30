<!DOCTYPE html>
<html>
	<head>
		<title>Feedback</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Style.css">
	</head>
	<body>
		<div class="container custom-container">
			<div class="d-flex flex-column align-items-center">
				<div class="p-2">
					<h1 id="title">We value your feedback</h1>
					<h4 id="title">Please complete the form below to help us serve you better</h4>
				</div>
			</div>
			<div class="d-flex flex-column align-items-center">
				<div class="p-2">
					<form action ="feedbackpge.php"method="get">
						<table class = "table">
							<tr>
								<th></th>
								<th>Very satisfied</th>
								<th>Satisfied</th>
								<th>Neutral</th>
								<th>Unsatisfied</th>
								<th>Very unsatisfied</th>
							</tr>
							<tr>
								<td>How satisfied are you with our services</td>
								<td><input type="radio"name="services"></td>
								<td><input type="radio"name="services"></td>
								<td><input type="radio"name="services"></td>
								<td><input type="radio"name="services"></td>
								<td><input type="radio"name="services"></td>
							</tr>
							<tr>
								<td>How satisfied are you navigating our site</td>
								<td><input type="radio"name="site"></td>
								<td><input type="radio"name="site"></td>
								<td><input type="radio"name="site"></td>
								<td><input type="radio"name="site"></td>
								<td><input type="radio"name="site"></td>
							</tr>
							<tr>
								<td>How satisfied are you overall</td>
								<td><input type="radio"name="overall"></td>
								<td><input type="radio"name="overall"></td>
								<td><input type="radio"name="overall"></td>
								<td><input type="radio"name="overall"></td>
								<td><input type="radio"name="overall"></td>
							</tr>
						</table>
					
					</div>
				</div>
				<div class="d-flex flex-column align-items-center">
					<div class="p-2">
						
						<p>Did we meet your expectations?</p>
						<input type="radio" id="Yes" name="expectation" value="Yes">
						<label for="yes">YES</label><br>
						<input type="radio" id="No" name="expectation" value="NO">
						<label for="no">NO</label>
						<p>Was it easy to find information you were looking for on our site?</p>
						<input type="radio" id="Yes" name="easy" value="Yes">
						<label for="yes">YES</label><br>
						<input type="radio" id="No" name="easy" value="NO">
						<label for="no">NO</label>
						<p>How well our product/services meet your needs?</p>
						<input type="radio" id="Bad" name="needs" value="Bad">
						<label for="bad">Badly</label><br>
						<input type="radio" id="ok" name="needs" value="fine">
						<label for="fine">Fine</label><br>
						<input type="radio" id="well" name="needs" value="well">
						<label for="well">Well</label><br>
						<input type="radio" id="verywell" name="needs" value="verywell">
						<label for="verywell">Very well</label>
						<p>Which of the following words would you use to describe our product/services?</p>
						<input type="radio" id="buggy" name="describe" value="buggy">
						<label for="describe">Buggy</label><br>
						<input type="radio" id="issue" name="describe" value="issue">
						<label for="describe">Fine, but there are some issues</label><br>
						<input type="radio" id="fine" name="describe" value="fine">
						<label for="describe">Fine</label><br>
						<input type="radio" id="fine" name="describe" value="fine">
						<label for="describe">Great</label><br>
						<input type="radio" id="saving" name="describe" value="saving">
						<label for="describe">Life saving</label>
						<p>How would you rate the value for the money of the product/services?</p>
						<input type="radio" id="bad" name="money" value="bad">
						<label for="moeny">Bad</label><br>
						<input type="radio" id="b" name="money" value="bad">
						<label for="moeny">Regular</label><br>
						<input type="radio" id="bad" name="money" value="bad">
						<label for="moeny">Good</label>
						<p>What else would you like us to know?</p>
						<textarea name="textarea" class="textarea" placeholder="Let us know how we can improve"></textarea><br>
						<input type="reset" name="reset" class="btn btn-danger">
						<input type ="submit" class="btn btn-primary"name="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>