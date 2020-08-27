<!-----------------------------------------------------------------------------------------
Home Page
------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--    Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Home - IT support</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm nav-size navbar-design">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">IT Support</a>
            <!-- Navigation -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link current" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Documents/about.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#services"
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
                    <a class="nav-link" href="Documents/contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Documents/feedback.php">Feedback</a>
                </li>
            </ul>
        </nav>
        <!-- Slider -->
        
        <!--end of slide -->
        
        <div class="container">
            <!-- What we do -->
            <h2>What we do...</h2>
            <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah
                Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah
            Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah </p>
            <!-- Service Section -->
            <section id="service">
                <div class="container">
                    <h1 class="section-title">What<span> we do</span> </h1>
                    <hr>
                    <div class="style"></div>
                    <div class="service">
                        <!-- Web Development Service Start -->
                        <div class="service-section ">
                            <h3>Web Design</h3>
                            <p> Are you looking to build a ecommerce, business or portfolio website that is affordable to you.
                            Good web design can help the audience remain on your page and learn about your business. 
                            <br>
                              Click Read More to learn more about web design
                          </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Read More
                            </button>
                            <!-- Web Development Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Web Design</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Your website often provides the first impression of who your company is and what you represent.
                                                Web design is the work involved in developing a Web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, electronic businesses, and social network services.
                                                We will design and build
                                                all kinds of websites, below are the list of some of the most popular websites, we can design and build for your needs.<br> 
                                                <ul>
                                                    <li>eCommerce</li>
                                                    <li>Business</li>
                                                    <li>Portfolio</li>
                                                    <li>Entertainment</li>
                                                </ul>
                                            </p>
                                            <p>If you want us to build a website or you want to know more information regarding web design,feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Web Development -->
                        <!-- Database Design Service Start -->
                        <div class="service-section">
                            <h3>Database Design</h3>
                            <p>
                                Are you looking for a new database
                                system for your business? Do you need 
                                to organize information about your customer,
                                clients and product inventory? 
                                <br>
                                Click Read More to learn more about Database design
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#serviceDatabase">
                            Read More
                            </button>
                            <!-- Database Modal -->
                            <div class="modal fade" id="serviceDatabase" data-backdrop="static" tabindex="-1" role="dialog"
                                aria-labelledby="serviceDatabaseLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceDatabaseLabel">Database Design</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                A database is an organized collection of information. Small businesses can use databases in a number of different ways. A database can help you organize information about your customers and clients. A database can contain information about your product inventory. Businesses use their databases to Keep track of basic transactions. Provide information that will help the company run the business more efficiently. Help managers and employees make better decisions.
                                                Good database system is needed to organize information that can be easily accesssed, managed and update. 
                                                We will design and implement the best database system for your business needs. Below are some of the most popular database system we will be using for your business.
                                                 <ul>
                                                    <li>Oracle Database</li>
                                                    <li>MySQL</li>
                                                    <li>Microsoft SQL server</li>
                                                </ul>

                                            </p>
                                            <p>If you want us to design and implement the best database system for your business or wanna know more information regarding database design, feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Database -->
                        <!-- Android Development Service Start -->
                        <div class="service-section">
                            <h3>Mobile App Development</h3>
                            <p>
                                Do you need a mobile app for your business?
                                An mobile app makes it easier to promote your products or services. Business with mobile app makes a better impressions than those without one. An mobile app will make your business stand out.<br>
                                Click Read More to learn more about Mobile App Development

                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviceAndroid">
                            Read More
                            </button>
                            <!-- Android Modal -->
                            <div class="modal fade" id="serviceAndroid" data-backdrop="static" tabindex="-1" role="dialog"
                                aria-labelledby="serviceAndroidLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceAndroidLabel">Android App Development</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                We will only be developing android app as of now, if you need iOS app we reccomennd choosing a different company. Mobile apps allow you to resolve customer questions, makes them aware of the discounts or offers you are providing, gives a platform to directly interact with the company and suggest services the way they want. Below are some of the benefits of having a mobile app
                                                 <dl>
                                                  <dt> <strong>Increase Customer Engagement</strong></dt>
                                                  <dd>&nbsp Mobile apps are a great strategy to keep your customers engaged with your brand, offering unique features that are more engaging than Web.</dd>
                                                  <dt> <strong>Increase Revenue</strong></dt>
                                                  <dd>&nbsp Mobile apps give your brand the opportunity to increase and earn additional revenue. By making the purchasing process more convenient, intuitive and simple, apps can significantly improve the customer experience which, in turn, positively impacts sales</dd>
                                                  <dt> <strong>Encourage Brand Loyalty</strong></dt>
                                                  <dd>&nbsp It is important to make a true and sincere connection with your customers in order to foster brand loyalty. It is the user experience of an app, and how valuable this is to customers, that has tied brand loyalty to mobile apps</dd>
                                                  
                                                </dl>

                                            </p>
                                            <p>If are looking forward to develop a mobile app for your business, feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Android Development-->
                        <!-- Networking Service Start -->
                        <div class="service-section">
                            <h3>Network design and implementation</h3>
                            <p>
                                Do you need to build a computer network for your business? Your computer network infrastructure is the backbone of your business. All your devices, applications, software, and most of your work is supported by or built upon your computer network. 
                                <br>
                                 Click Read More to learn more about Network design and implementation
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#serviceNetworking">
                            Read More
                            </button>
                            <!-- Networking Modal -->
                            <div class="modal fade" id="serviceNetworking" data-backdrop="static" tabindex="-1"
                                role="dialog" aria-labelledby="serviceNetworkingLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceNetworkingLabel">Networking</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                When you run a small business, budgeting is typically tight, so creating an effective, available network may seem intimidating. However, you don’t need the same (often expensive) equipment and advanced setup that larger businesses require. we got plenty of ways to design a useful, reliable, efficient small business network infrastructure without breaking the bank. Why it's important to have a good computer network for your business?
                                                <dt> <strong>Help your business grow</strong></dt>
                                                  <dd>&nbsp A good computer networking solution can be very beneficial for your business. It lets you store important business data in a centralized location. This allows the various computers in the network to retrieve important data from the main location.</dd>
                                                  <dt> <strong>Cost-effective resource sharing</strong></dt>
                                                  <dd>&nbsp A good networking setup will reduce the amount of money you spend on hardware. How? By creating a computer network and sharing the hardware you already have. </dd>
                                                  <dt> <strong>Securing valuable information</strong></dt>
                                                  <dd>&nbsp Company data can never be fully secure without protected access to network resources and files. We will design the security features on your network following the highest security standards. </dd>
                                            </p>
                                            <p>Let us help you build a perfect network for your business, feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Networking -->
                        <!-- Software Development Service Start -->
                        <div class="service-section">
                            <h3>Software Development</h3>
                            <p>
                                Do you need a new customized software for your business? Don't like the off-the-shelf software, no problem. We will build a customzied software for your business needs. 
                                <br>
                                Click Read More to learn more about software development
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#serviceSoftwareDev">
                            Read More
                            </button>
                            <!-- Software Modal -->
                            <div class="modal fade" id="serviceSoftwareDev" data-backdrop="static" tabindex="-1"
                                role="dialog" aria-labelledby="serviceSoftwareDevLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceSoftwareDevLabel">Software Development
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Customized solutions can be more efficient and more adjustable to your needs, which will affect your business positively in the long run. Many companies may be put off at first by the cost of a custom software application, but the initial investment can be recovered by addressing the unique problems that off-the-shelf options are not able to tackle. Deciding whether you need custom software developed for you or not can be rather difficult. Below we have three ways that your business can benefit from investing in a customized solution.
                                                <dt> <strong>Targeted solution</strong></dt>
                                                  <dd>&nbsp Probably the most important reason to invest in custom software development is that you develop a product that addresses your exact needs. It is not unusual for businesses to choose an off-the-shelf software option just to realize that it is unsuitable for them. </dd>
                                                  <dt> <strong>Integration with other software</strong></dt>
                                                  <dd>&nbsp The development of custom software creates an environment in which it is easier to integrate your product with other software that is already in use. When it comes to off-the-shelf solutions, it very unlikely for them to interact without errors, which doesn’t improve the employee’s productivity and optimize business operations. </dd>
                                                  <dt> <strong>Hardware costs</strong></dt>
                                                  <dd>&nbsp Licencing off-the-shelf software often comes with the necessity of purchasing the additional hardware for it to run efficiently, which can turn into a pretty big bill at the end of the day. With tailor-made software, the current hardware capabilities are taken into consideration, which helps to save money and avoid unnecessary purchases of additional hardware. </dd>
                                            </p>
                                            <p>Let us help you develop a custom solution for your business needs, feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Software -->
                        <!-- Hardware Service Start -->
                        <div class="service-section">
                            <h3>Computer Repair</h3>
                            <p>
                                Do you have a computer issue?
                                Many times our computers have issues and we are far to invested in them to take notice. Bottom line, when a problem first starts, an expert needs to have a look as soon as possible.<br>
                                Click Read more to learn more about computer repair
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#serviceHardware">
                            Read More
                            </button>
                            <!-- Hardware Modal -->
                            <div class="modal fade" id="serviceHardware" data-backdrop="static" tabindex="-1" role="dialog"
                                aria-labelledby="serviceHardwareLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="serviceHardwareLabel">Computer Repair</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                No computer lasts forever, but to get the most out of your investment, you probably want to stretch its life out for as long as you can. Upgrades and repairs can carry your machine along for a decent amount of time, but at a certain point, you might be better off investing in a new computer instead of dribbling away your money on continuing maintenance. Contact us and we will give you the best advice as to you should repair your computer or better off buying a new one.
                                            </p>
                                            <p>Let us help you repair your computer, feel free to contact us below</p>
                                            <button onclick="window.location.href='Documents/contact.php';" class="btn-primary custom-btn"> Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Hardware -->
                    </div>
                    <!-- End Service-->
                </div>
            </section>
            <!-- End Service Section -->
            <!-- Project Section -->
            <section class="project" id="project">
                <div class="container">
                    <h1 class="section-title">Projects</h1>
                    <hr class="section-title-bottom">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#allproject" role="tab" data-toggle="tab">All Project</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" href="#">Development
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#webdev" role="tab" data-toggle="tab">Website Development</a>
                                <a class="dropdown-item" href="#appdev" role="tab" data-toggle="tab">Android Development</a>
                                <a class="dropdown-item" href="#softdev" role="tab" data-toggle="tab">Software
                                Development</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#networking" role="tab" data-toggle="tab">Networking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#database" role="tab" data-toggle="tab">Databse Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hardware" role="tab" data-toggle="tab">Hardware</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- All Project -->
                        <div class="tab-pane fade show active" id="allproject">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAllProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- All Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAllProject1" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAllProject1Label">All Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/pWkk7iiCoDM/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAllProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- All Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAllProject2" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAllProject2Label">All Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/aob0ukAYfuI/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAllProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- All Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAllProject3" tabindex="-1" role="dialog"
                                    aria-labelledby="viewAllProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAllProject3Label">All Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/EUfxH-pze7s/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- Web Development -->
                        <div class="tab-pane fade" id="webdev">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewWebDevProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Web Development Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewWebDevProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewWebDevProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewWebDevProject1Label">Website
                                                Development Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewWebDevProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2004&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Web Development Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewWebDevProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewWebDevProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewWebDevProject2Label">Website
                                                Development Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2004&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewWebDevProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2104&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Web Development Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewWebDevProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewWebDevProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewWebDevProject3Label">Website
                                                Development Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2104&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">View
                                                        Website</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- Android Development -->
                        <div class="tab-pane fade" id="appdev">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAppDevProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Android Development Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAppDevProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewAppDevProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAppDevProject1Label">Android
                                                Development Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download App</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAppDevProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1541345023926-55d6e0853f4b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Android Development Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAppDevProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewAppDevProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAppDevProject2Label">Android
                                                Development Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1541345023926-55d6e0853f4b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download App</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal" data-target="#viewAppDevProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1502201563651-826cbb30c3dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2000&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Android Development Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewAppDevProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewAppDevProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewAppDevProject3Label">Android
                                                Development Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1502201563651-826cbb30c3dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2000&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download App</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- Software Development -->
                        <div class="tab-pane fade" id="softdev">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewSoftDevProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1579403124614-197f69d8187b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1900&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Software Development Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewSoftDevProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewSoftDevProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewSoftDevProject1Label">Software
                                                Development Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-80"
                                                            src="https://images.unsplash.com/photo-1579403124614-197f69d8187b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1900&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download
                                                        Software</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewSoftDevProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1545296664-39db56ad95bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2490&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Software Development Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewSoftDevProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewSoftDevProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewSoftDevProject2Label">Software
                                                Development Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1545296664-39db56ad95bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2490&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download
                                                        Software</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewSoftDevProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail"
                                        src="https://images.unsplash.com/photo-1555066931-bf19f8fd1085?ixlib=rb-1.2.1&auto=format&fit=crop&w=2551&q=80"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Software Development Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewSoftDevProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewSoftDevProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title text-center" id="viewSoftDevProject3Label">Software
                                                Development Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://images.unsplash.com/photo-1555066931-bf19f8fd1085?ixlib=rb-1.2.1&auto=format&fit=crop&w=2551&q=80"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-primary">Download
                                                        Software</button>
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Code</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- Networking -->
                        <div class="tab-pane" id="networking">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewNetworkingProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Networking Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewNetworkingProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewNetworkingProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewNetworkingProject1Label">Networking Project
                                                1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/M185_qYH8vg/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewNetworkingProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Networking Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewNetworkingProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewNetworkingProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewNetworkingProject2Label">Networking Project
                                                2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/sesveuG_rNo/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewNetworkingProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Networking Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewNetworkingProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewNetworkingProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewNetworkingProject3Label">Networking Project
                                                3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/AvhMzHwiE_0/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Networking -->
                        <!-- Database -->
                        <div class="tab-pane fade" id="database">
                            <div class="row text-center text-lg-left">
                                <!-- Database Project 1 -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewDatabaseProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Database Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewDatabaseProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewDatabaseProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewDatabaseProject1Label">Database Design
                                                Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/2gYsZUmockw/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <!-- Database Project 2 -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewDatabaseProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Database Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewDatabaseProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewDatabaseProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewDatabaseProject2Label">Database Design
                                                Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/EMSDtjVHdQ8/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <!-- Database Project 3 -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewDatabaseProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Database Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewDatabaseProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewDatabaseProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewDatabaseProject3Label">Database Design
                                                Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/8mUEy0ABdNE/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Database Project -->
                        <!-- Hardware Project -->
                        <div class="tab-pane fade" id="hardware">
                            <div class="row text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewHardwareProject1">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Hardware Project 1 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewHardwareProject1" tabindex="-1"
                                    role="dialog" aria-labelledby="viewHardwareProject1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewHardwareProject1Label">Hardware Project 1
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/G9Rfc1qccH4/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewHardwareProject2">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Hardware Project 2 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewHardwareProject2" tabindex="-1"
                                    role="dialog" aria-labelledby="viewHardwareProject2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewHardwareProject2Label">Hardware Project 2
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/aJeH0KcFkuc/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12" data-toggle="modal"
                                    data-target="#viewHardwareProject3">
                                    <a href="#" class="d-block mb-4">
                                        <img class="custom-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300"
                                        alt="">
                                    </a>
                                    <!-- Caption -->
                                    <div class="caption">
                                        <p>View Project</p>
                                    </div>
                                </div>
                                <!-- Hardware Project 3 Modal -->
                                <div class="modal fade bd-example-modal-lg" id="viewHardwareProject3" tabindex="-1"
                                    role="dialog" aria-labelledby="viewHardwareProject3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewHardwareProject3Label">Hardware Project 3
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- End Modal Header -->
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="d-block w-100 h-100"
                                                            src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300"
                                                            alt="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Dolorum repudiandae officia doloribus adipisci accusantium
                                                                optio
                                                                molestias minus cumque repellat numquam saepe recusandae
                                                                eius
                                                                quasi labore laborum vel excepturi voluptates consectetur,
                                                                voluptate aut laudantium quod. Fugiat voluptates obcaecati,
                                                                sit
                                                                cum, laboriosam accusantium, soluta corrupti eaque quibusdam
                                                                optio eum ex voluptate dolor provident laudantium pariatur
                                                                repellat reiciendis repudiandae nesciunt dolores? Neque
                                                                nobis
                                                                aperiam quae! Laudantium tempore sunt corrupti! Porro illum
                                                                obcaecati architecto asperiores nulla consequatur provident
                                                                consectetur autem quasi tempora laboriosam, saepe voluptas
                                                                quaerat et dolor ullam at quibusdam alias animi dicta
                                                                explicabo.
                                                                Odit molestiae laboriosam dignissimos dolore animi natus
                                                                error
                                                                molestias?
                                                            </p>
                                                        </div>
                                                        <!-- End Paragrph -->
                                                        <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">View Project</button>
                                                    </div>
                                                    <!-- End Row inside body -->
                                                </div>
                                                <!-- End Container Fluid -->
                                            </div>
                                            <!-- End Modal Body -->
                                        </div>
                                        <!-- End Modal Content -->
                                    </div>
                                    <!-- End Modal Dialog -->
                                </div>
                                <!-- End Modal -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <p>More Project Coming Soon ...</p>
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- End Hardware Project -->
                    </div>
                </section>
                <!-- End Project Section -->
            </div>
            <div class="container slideshow">
                <div class="container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="7000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="carousel-item active text-center p-4">
                                <p><font style="font-size:2em;font-family: arial;color:#2c0000;font-style: italic;">What people are saying</font></p>
                                
                            </div>
                            <div class="carousel-item text-center p-4">
                                
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great compnay to do business
                                with.<br>The two guys are fabulous to work with"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Thomas lakoo</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the worse compnay to deal with.<br>Customer service is a garbage"</font></p>
                                <p><font style="color:#ffffff; font-size:16px; text-transform: uppercase; font-weight: bold; font-style:italic">Jimmy Paterson</font></p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p><font style="font-style: italic;font-size: 22px;font-style: italic;font-family: arial;">"This is the great IT company in my area.<br>Best customer support.<br>
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
            <!-- Footer Section -->
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
                        >Policy</a>
                        
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
             <script src="js/design.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
             <!-- ***************************************************************
        Reuse of this code is strictly prohibited all the code belongs to 
        IT Support @Copyright IT Support. All rights Reserved 
        ********************************************************************
        -->
        </body>
    </html>