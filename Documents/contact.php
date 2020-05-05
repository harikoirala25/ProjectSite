
<!-----------------------------------------------------------------------------------------
                                    Contact Page
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
      <a class="navbar-brand" href="#">IT Support</a>
      <!-- Navigation -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
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
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
      </ul>
    </nav>



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
