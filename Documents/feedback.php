<!-----------------------------------------------------------------------------------------
                                    Feedback Page
------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<title>IT Support</title>
</head>
	<body>
		<nav class="navbar navbar-expand-sm nav-size navbar-design">
      <!-- Logo -->
      <a class="navbar-brand" href="../index.php">IT Support</a>
      <!-- Navigation -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="../#services"
            id="navbardrop"
            data-toggle="dropdown"
          >
            Our Services
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Networking</a>
            <a class="dropdown-item" href="#">Web Development</a>
            <a class="dropdown-item" href="#">Software Development</a>
            <a class="dropdown-item" href="#">Hardware</a>
            <a class="dropdown-item" href="#">Database Development</a>
            <a class="dropdown-item" href="#">Android Development</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
      </ul>
    </nav>
		
		<div class="container-fluid custom-container">
			<form action ="feedbackpge.php"method="post" autocomplete="on">
				<div class="d-flex flex-column align-items-center">
					<div class="p-2">
						<h1 id="title">We value your feedback</h1>
						<h4 id="title">Please complete the form below to help us serve you better</h4>
					</div>
				</div>
				<div class="d-flex flex-column align-items-left">
					<div class="p-2">
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
								<td><input type="radio"name="services" value="very satisfied"></td>
								<td><input type="radio"name="services" value="satisfied"></td>
								<td><input type="radio"name="services" value="Neutral"></td>
								<td><input type="radio"name="services"value="Unsatisfied"></td>
								<td><input type="radio"name="services"value="Very unsatisfied"></td>
							</tr>
							<tr>
								<td>How satisfied are you navigating our site</td>
								<td><input type="radio"name="site"value="Very satisfied"></td>
								<td><input type="radio"name="site"value="satisfied"></td>
								<td><input type="radio"name="site"value="Neutral"></td>
								<td><input type="radio"name="site"value="Unsatisfied"></td>
								<td><input type="radio"name="site"value="Very unsatisfied"></td>
							</tr>
							<tr>
								<td>How satisfied are you overall</td>
								<td><input type="radio"name="overall"value="very satisfied"></td>
								<td><input type="radio"name="overall"value="satisfied"></td>
								<td><input type="radio"name="overall"value="Neutral"></td>
								<td><input type="radio"name="overall"value="unsatisfied"></td>
								<td><input type="radio"name="overall"value="very unsatisfied"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="d-flex flex-row bd-highlight mb-3 justify-content-around">
					<div class="p-2 bd-highlight">
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
						<input type="radio" id="issue" name="describe" value="Fine,but there are some issues">
						<label for="describe">Fine, but there are some issues</label><br>
						<input type="radio" id="fine" name="describe" value="fine">
						<label for="describe">Fine</label><br>
						<input type="radio" id="fine" name="describe" value="fine">
						<label for="describe">Great</label><br>
						<input type="radio" id="saving" name="describe" value="Lifesaving">
						<label for="describe">Life saving</label>
						<p>How would you rate the value for the money of the product/services?</p>
						<input type="radio" id="bad" name="money" value="bad">
						<label for="money">Bad</label><br>
						<input type="radio" id="bad" name="money" value="Regular">
						<label for="money">Regular</label><br>
						<input type="radio" id="bad" name="money" value="Good">
						<label for="money">Good</label>
						<p>What else would you like us to know?</p>
						<textarea name="textarea" class="textarea" placeholder="Let us know how we can improve"></textarea><br>
						<input type="reset" name="reset" class="btn btn-danger">
						<input type ="submit" class="btn btn-primary"name="submit" value="Submit">
					</div>
					<div class="p-2 bd-highlight">
						<h4 id="title">Recent customers feedback</h4>
						<p class="customer-feedback">"This is the great 
							compnay to do business<br>
							with.The two guys are fabulous to work with"<br>
							<span id="customer-name">Mike Jones</span></p>
							<hr>
							<p class="customer-feedback">"This is the worse compnay to deal<br>
							with.Customer service is a garbage"<br>
							<span id="customer-name">Jimmy Peterson</span></p>
							<hr>
							<p class="customer-feedback">"I called in to do an estimate for my web development<br>
							and this two guy offer a reasonnable prices<br>.I would reccomend this company"<br>
							<span id="customer-name">Tyler murphy</span></p>
							<hr>
							<p class="customer-feedback">"This is the great 
							IT company in my area.Best customer support.<br>
							Im looking forward to doing business with them"<br>
							<span id="customer-name">Janson Kelly</span></p>
					</div>
				</div>
			</form>
		</div>
		<script src="../js/design.js"></script>
	</body>
</html>
