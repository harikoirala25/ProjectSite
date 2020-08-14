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
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <title>Contact - IT Support</title>
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
              <a class="nav-link current" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
          </ul>
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-8">
              <h1 id="title">Get in touch with us today</h1>
              <form action ="procontact.php" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Jason Kenny" required="Name is required" >
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="youremail25@gmail.com" required="email is required" >
                </div>
                <div class="form-group">
                  <label for="email">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="subject is required" >
                </div>
                <div class="form-group">
                  <label for="message">Your Message</label><br>
                  <textarea name="message" class="form-control" cols="30" rows="10" placeholder="We are happy to help, send us a messsage" required="messsage is required"></textarea>
                </div>
                <input type="submit" name="submit" value="SEND MESSAGE" class="btn btn-primary + btn-block">
              </form>
              

            </div>
            <div class="col-4 text-right customcol">
              <h3>Contact our technician</h3>
              <hr>
              <address>
                <p><strong>Name</strong>:Ishor Bastola<br>
                  <strong>Email</strong>:<a href="mailto:Ishorbastola@gmail.com">ishorbastola@gmail.com<br></a>
                  <strong>Phone</strong>:<a href="tel:000-235-1234">000-235-1234</a>
                </p>
              </address>
              <address>
                <p><strong>Name</strong>:Hari Koirala<br>
                  <strong>Email</strong>:<a href="mailto:harikoirala25@gmail.com">harikoirala25@gmail.com<br></a>
                  <strong>Phone</strong>:<a href="tel:000-125-4563">000-000-4563</a>
                </p>
              </address>
            </div>
          </div>
        </div>
        <!-- Footer Section -->
        <footer class="footer">
          <!-- Footer Links -->
          <div class="row">
            <div class="col-4 footer-content">
              <h3 class="footer-link-title text-center">Development Services</h3>
              <hr class="line" />
              <a class="footer-services d-block text-justify text-center" href=""
              >Website Development</a
              >
              <a class="footer-services d-block text-justify text-center" href=""
              >Software Development</a
              >
              <a class="footer-services d-block text-justify text-center" href=""
              >Android Development</a
              >
              <a class="footer-services d-block text-justify text-center" href=""
              >Database Development</a
              >
            </div>
            <div class="col-4 footer-content">
              <h3 class="footer-link-title text-center">Other Services</h3>
              <hr class="line1" />
              <a class="footer-services d-block text-justify text-center" href=""
              >Networking</a
              >
              <a class="footer-services d-block text-justify text-center" href=""
              >Hardware</a
              >
            </div>
            <div class="col-4 footer-content">
              <p><a class="footer-services" href="">Privacy Policy</a></p>
              <p><a class="footer-services" href="">Terms and Conditions</a></p>
            </div>
          </div>
          <!-- Footer Icons -->
          <div class="row">
            <div class="col-12 text-center mb-4 pb-2 icon">
              <a
                class="p-1 hover-style"
                target="_blank"
                href="https://www.facebook.com/lethbridgeitsupport/"
                ><i class="fa fa-facebook-square"></i
              ></a>
              <a
                class="p-1 hover-style"
                target="_blank"
                href="https://twitter.com/ITSuppo75875687"
                ><i class="fa fa-twitter-square"></i
              ></a>
              <a
                class="p-1 hover-style"
                target="_blank"
                href="https://www.instagram.com/lethbridgeitsupport/"
                ><i class="fa fa-instagram"></i
              ></a>
              <a
                class="p-1 hover-style"
                target="_blank"
                href="https://www.linkedin.com/in/it-support-a002841a9/"
                ><i class="fa fa-linkedin"></i
              ></a>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <p class="footer-copyright text-center">
                Copyright &copy; 2020
                <a href="#"><span class="style-link">IT Support</span></a> - All
                Rights Reserved
              </p>
            </div>
          </div>
        </footer>
        
        <script src="../js/design.js"></script>
      </body>
    </html>