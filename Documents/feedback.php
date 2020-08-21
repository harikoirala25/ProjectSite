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
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <style type="text/css">
    #feedback { display: none;}
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ 
      #feedback {display: inline;}
    } 
 
      .desktop { display:inline;}
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ 
      .desktop{display:none;}
    } 

#feedback {
  height: 0px;
  width:90px;
  position: fixed;
  right: 0;
  top: 50%;
  z-index: 1000;
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  
}
#feedback button{
  display: block;
  background:#000;
  height: 52px;
  padding-bottom:5px;
  width: 155px;
  text-align:center;
  color: #fff;
  font-family: Arial, sans-serif;
  font-size: 17px;
  font-weight: bold;
  text-decoration: none;
}
#feedback button:hover {
  background:#00495d;
}

  </style>
  <title>Feedback - IT Support</title>
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
          <a class="nav-link current" href="feedback.php">Feedback</a>
        </li>
      </ul>
    </nav>
    <!--feedback pge-->
    <div class="container custome-container">
      <form action ="feedbackpge.php"method="post" autocomplete="on">
         <div class="form-group">
          <div class="row">
            <div class="col-sm">
                <h1 id="title">We value your feedback</h1>
                 <h4 id="title">Please complete the form below to help us serve you better</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <div class="table-responsive-sm">
                 <table class = "table">
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Very satisfied</th>
                        <th scope="col">Satisfied</th>
                        <th scope="col">Neutral</th>
                        <th scope="col">Unsatisfied</th>
                        <th scope="col">Very unsatisfied</th>
                    </tr>
        <tr>
          <td><strong>1.</strong>&nbspHow satisfied are you with our services</td>
          <td><input type="radio"name="services" required value="very satisfied"></td>
          <td><input type="radio"name="services"value="satisfied"></td>
          <td><input type="radio"name="services" value="Neutral"></td>
          <td><input type="radio"name="services" value="Unsatisfied"></td>
          <td><input type="radio"name="services" value="Very unsatisfied"></td>
        </tr>
        <tr>
          <td><strong>2.</strong>&nbspHow satisfied are you navigating our site</td>
          <td><input type="radio"name="site" required value="Very satisfied"></td>
          <td><input type="radio"name="site"value="satisfied"></td>
          <td><input type="radio"name="site"value="Neutral"></td>
          <td><input type="radio"name="site"value="Unsatisfied"></td>
          <td><input type="radio"name="site"value="Very unsatisfied"></td>
        </tr>
        <tr>
           <td><strong>3.</strong>&nbspHow satisfied are you overall</td>
          <td><input type="radio"name="overall" required value="very satisfied"></td>
          <td><input type="radio"name="overall"value="satisfied"></td>
          <td><input type="radio"name="overall"value="Neutral"></td>
          <td><input type="radio"name="overall"value="unsatisfied"></td>
          <td><input type="radio"name="overall"value="very unsatisfied"></td>
        </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <p><strong>4.</strong>&nbspDid we meet your expectations?</p>
              <input type="radio" id="Yes" required name="expectation" value="Yes">
              <label for="yes">YES</label><br>
              <input type="radio" id="No" name="expectation" value="NO">
              <label for="no">NO</label>

              <p><strong>5.</strong>&nbspWas it easy to find information you were looking for on our site?</p>
              <input type="radio" id="Yes" name="easy" required value="Yes">
              <label for="yes">YES</label><br>
              <input type="radio" id="No" name="easy" value="NO">
              <label for="no">NO</label>

              <p><strong>6.</strong>&nbspHow well our product/services meet your needs?</p>
              <input type="radio" id="Bad" name="needs" required value="Bad">
              <label for="bad">Badly</label><br>
              <input type="radio" id="ok" name="needs" value="fine">
              <label for="fine">Fine</label><br>
              <input type="radio" id="well" name="needs" value="well">
              <label for="well">Well</label><br>
              <input type="radio" id="verywell" name="needs" value="verywell">
              <label for="verywell">Very well</label>

              <p><strong>7.</strong>&nbspWhich of the following words would you use to describe our product/services?</p>
              <input type="radio" id="buggy" required name="describe" value="buggy">
              <label for="describe">Buggy</label><br>
              <input type="radio" id="issue" name="describe" value="Fine,but there are some issues">
              <label for="describe">Fine, but there are some issues</label><br>
              <input type="radio" id="fine" name="describe" value="fine">
              <label for="describe">Fine</label><br>
              <input type="radio" id="fine" name="describe" value="fine">
              <label for="describe">Great</label><br>
              <input type="radio" id="saving" name="describe" value="Lifesaving">
              <label for="describe">Life saving</label>

              <p><strong>8.</strong>&nbspHow would you rate the value for the money of the product/services?</p>
              <input type="radio" id="bad" name="money" required value="bad">
              <label for="money">Bad</label><br>
              <input type="radio" id="bad" name="money" value="Regular">
              <label for="money">Regular</label><br>
              <input type="radio" id="bad" name="money" value="Good">
              <label for="money">Good</label>

              <p><strong>9.</strong>&nbspWhat else would you like us to know?</p>
              <div class="p-2 bd-highlight">
              <textarea name="textarea"class="textarea" placeholder="Let us know how we can improve"></textarea><br>
               <input type ="submit" class="btn btn-primary"name="submit" value="Submit">
              <input type="reset" name="reset" class="btn btn-danger">
            </div>
            <div id="feedback">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">customer feedback</button>
    </div>
          </div>
           <div class="col-sm-6 desktop">
            <a id="#feedback">
            <div class="p-2 bd-highlight">
              <h3 id="title">Recent customers feedback</h3>
            </div>
            <div class="container slideshow">
                <div class="container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="carousel-item active text-center p-4">
                              <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                                
                            </div>
                            <div class="carousel-item text-center p-4">
                                
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great compnay to do business
                                with.The two guys are fabulous to work with"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the worse compnay to deal with.Customer service is a garbage"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Jimmy Paterson</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.
                                Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Mike jones</font></p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


    <!--modal-->
    <div class="mobile-version">
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container slideshow">
                <div class="container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="carousel-item active text-center p-4">
                              <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                                
                            </div>
                            <div class="carousel-item text-center p-4">
                                
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great compnay to do business
                                with.The two guys are fabulous to work with"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the worse compnay to deal with.Customer service is a garbage"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Jimmy Paterson</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.
                                Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Mike jones</font></p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   
    </div>
            <div class="container slideshow">
                <div class="container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="carousel-item active text-center p-4">
                              <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                                
                            </div>
                            <div class="carousel-item text-center p-4">
                                
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great compnay to do business
                                with.The two guys are fabulous to work with"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the worse compnay to deal with.Customer service is a garbage"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Jimmy Paterson</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.
                                Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Mike jones</font></p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container slideshow">
                <div class="container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="carousel-item active text-center p-4">
                              <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                                
                            </div>
                            <div class="carousel-item text-center p-4">
                                
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great compnay to do business
                                with.The two guys are fabulous to work with"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the worse compnay to deal with.Customer service is a garbage"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Jimmy Paterson</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.Best customer support.
                                Im looking forward to doing business with them"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Mike jones</font></p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- end of feedback section -->
    
<!--    Footer Section -->

      <footer class="footer">
      <!-- Footer Links -->
     <div class="row justify-content-center">
        <div class="col-sm footer-content">
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
        <div class="col-sm footer-content">
          <h3 class="footer-link-title text-center">Other Services</h3>
          <hr class="line1" />
          <a class="footer-services d-block text-justify text-center" href=""
            >Networking</a
          >
          <a class="footer-services d-block text-justify text-center" href=""
            >Hardware</a
          >
        </div>

        <div class="col-sm footer-content">
             <h3 class="footer-link-title text-center">Terms and Conditions</h3>
          <hr class="line1" />
          <a class="footer-services d-block text-justify text-center" href=""
            >Terms and condtions</a
          >
          <a class="footer-services d-block text-justify text-center" href=""
            >Policy</a
          >
   
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
