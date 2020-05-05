<!-----------------------------------------------------------------------------------------
                                    Contact Page
------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<title>IT Support</title>
</head>
<body>
	<div class="container-fluid">
		<header>
			<div class="header">
				<h1>IT Support</h1>
			</div>
			<div class="nav">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Our Services</a>
						<ul>
							<li><a href="">Networking</a></li>
							<li><a href="">Web Development</a></li>
							<li><a href="">Software Development</a></li>
							<li><a href="">Hardware</a></li>
							<li><a href="">Database Development</a></li>
							<li><a href="">Android Development</a></li>
						</ul>
					</li>
					<li><a href="">Contact Us</a></li>
					<li><a href="">Feedback</a></li>
				</ul>
			</div>
		</header>
    </div>



    <div class="container">
        <h2>If you have any questions or concers than feel free to contact us by filling the form below</h2>
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label><br>
                        <textarea name="" class="form-control" cols="30" rows="10" id="message" placeholder="What you wanna know...">What is your message...</textarea>
                    </div>
                    <button type="button" class="btn btn-primary+ btn-block">Send Message</button>
                </form>
            </div>
            <div class="col-4">
                <h2>Our Contact Information...</h2>
                <p>Email: <a href="mailto:example@gmail.com">example@gmail.com</a></p>
                <p>Phone: <a href="tel:5555555555">555-555-5555</a></p>
            </div>
        </div>
    </div>

<!-- Footer Section -->
    <footer>
        <div class="row">
            <div class="col-6">
                <p><a href=""><img src="fblogo" alt="facebook logo"></a></p>
                <p><a href=""><img src="fblogo" alt="twitter logo"></a></p>
                <p><a href=""><img src="fblogo" alt="instagram logo"></a></p>
                <p><a href=""><img src="fblogo" alt="linkend logo"></a></p>
            </div>
            <div class="col-6">
                <p><a href="">Terms and Conditions</a></p>
                <p><a href="">Privacy Policy</a></p>
            </div>
        </div>

        <p>Copyright &amp; <a href="#">IT Support 2020</a></p>
        
    </footer>
	
	    <script src="../js/design.js"></script>
</body>
</html>
