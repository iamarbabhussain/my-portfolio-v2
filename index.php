<!DOCTYPE html>
<html>

<head>
    <title>Arbab Hussain | Web Developer & Designer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/solid.css">
    <script src="js/all.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body onload="preloaderStart()">
    <!--------------------------------messenger start------------------------------------------->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v6.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="105212791174722" theme_color="#5352ed" logged_in_greeting="Salam! How can I help you?" logged_out_greeting="Salam! How can I help you?">
    </div>
    <!--------------------------------messenger end------------------------------------------->
<!--    <button onclick="topFunction()" id="btt" title="Go to top"><i class="fa-2x fas fa-long-arrow-alt-up"></i></button>-->
    <div id="loader"></div>
    <!--------------------------------navbar ends------------------------------------------->
    <nav id="navbar" class="navbar navbar-expand-md bg-white navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold">
                <img src="img/arbabhussain.me_logo.png" class="logo" width="170px">
            </a>

            <!---navigation bar icon start-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!---navigation bar icon end-->

            <!---data to nav icon start-->
            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item highlight-navbar">
                        <a class="nav-link" href="#header"><b>Home</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about_me"><b>Qualifications</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#my_skills"><b>Skills</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#my_services"><b>Services</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><b>Contact Me</b></a>
                    </li>
                </ul>
            </div>
            <!---data to nav icon end-->
        </div>
    </nav>
    <!--------------------------------navbar ends------------------------------------------->

    <!----------------------------------header section start-------------------------------->
    <div id="header" class="container">
        <div class="row" style="padding-top:40px;">
            <div class="col-lg-6 top-left">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h6 data-aos="zoom-in-right" data-aos-delay="250"><b>Hey!</b></h6>
                <h2 data-aos="zoom-in-right" data-aos-delay="300"><b>I'm Arbab Hussain</b></h2>
                <h6 data-aos="zoom-in-right" data-aos-delay="400"><b>A <span class="writer"></span></b></h6>
                <div data-aos="zoom-in-right" data-aos-delay="500">
                    <div class="header_contact_iconsetting d-inline-block"><i class="fab fa-facebook-f"></i></div>
                    <div class="header_contact_iconsetting d-inline-block"><i class="fab fa-twitter"></i></div>
                    <div class="header_contact_iconsetting d-inline-block"><i class="fab fa-instagram"></i></div>
                    <br>
                    <button class="btn">Download CV</button>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-delay="300">
                <br>
                <br>
                <br>
                <br>

                <img src="img/developer-site-bishkek.png" class="img-fluid top-right" width="550px">
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <a href="#about_me">
            <div class="moving-mouse-holder animated fadeIn">
                <div class="mouse">
                    <div class="mouse-button">&nbsp;</div>
                </div>
            </div>
        </a>
    </div>
    <!----------------------------------header section ends-------------------------------->

    <!----------------------------------my intro section starts-------------------------------->
    <div style="margin-top: 100px;" class="container">
        <h4 class="text-center"><b>About Me</b></h4>
        <hr>
        <br>
        <div class="text-center"><img src="img/A386128.jpg" class="img-thumbnail" style="border-radius: 250px;" width="300px"></div>
        <div class="row" id="about_me">
            <div class="col-lg-6">
                <br>
                <br>
                <br>
                <br>
                <h4 class="text-center"><b>Education</b></h4>
                <hr>
                <br>
                <div data-aos="fade-up" data-aos-delay="300">
                    <h6><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;<b>2015-2020</b></h6>
                    <h6><b>Bachelor of Science in Computer Sciences</b></h6>
                    <p><b>Virtual University of Pakistan</b>
                        <br> CGPA: 3.70 / 4.00
                        <br> Percentage: 81.20 %
                        <br> Campus Name: Virtual University Campus, Jhelum</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div data-aos="fade-up" data-aos-delay="250">
                    <h6><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;<b>2014-2015</b></h6>
                    <h6><b>Intermediate (FSc Pre-Engineering)</b></h6>
                    <p><b>Board of Intermediate & Seccondry Education, Rawalpindi</b>
                        <br> College: Govt. Post Graduate College, Chakwal</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <h6><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;<b>2012-2013</b></h6>
                    <h6><b>Matriculation</b></h6>
                    <p><b>Board of Intermediate & Seccondry Education, Rawalpindi</b>
                        <br> School: Govt. Saigol Model Higher Seccondry School, Saigolabad</p>
                </div>
            </div>

            <div class="col-lg-6">
                <br>
                <br>
                <br>
                <br>
                <h4 class="text-center"><b>Certification</b></h4>
                <hr>
                <br>
                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Customer Engagement Specialist by IBM</p>
                    <p>Introduction to some key skills to handle Customers online & offline.</p>
                </div>
                
                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Fundamentals of Digital Marketing by Google</p>
                    <p>Created by Google Trainers & accredited by Interactive Advertising Bureau Europe & The Open University.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"> <i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Technical Support Fundamentals by Google</p>
                    <p>Some Technical Support aspects of IT Industry. Part 1 of Professional IT Support course composed of Professional IT Support.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Responsive Website Basics Code with HTML, CSS, and JS by University of London</p>
                    <p>Introduction to key web development languages with a touch of Responsiveness.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"><i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Responsive Web Design by University of London</p>
                    <p>Advanced version of above course.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="250">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"> <i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Introduction to SQL by University of Michigan</p>
                    <p>Information about Database Languages like SQL & MySQL and their different operations.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="250">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"> <i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Introduction To Cybersecurity by Cisco Networking Academy</p>
                    <p>Intro of Cyber threats and Security Policies of WWW.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <p style="font-size: 16px; font-weight: bold; cursor: pointer"> <i class="fas fa-arrow-alt-circle-right" style="color: #5352ed"></i>&nbsp;&nbsp;Wordpress by Digiskills Pakistan</p>
                    <p>Intro of one of the best CMS by Govt. of Pakistan's Initiative.</p>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------my intro section ends-------------------------------->

    <!----------------------------------skills section starts-------------------------------->
    <br>
    <br>
    <div id="my_skills"></div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h4 class="text-center"><b>My Skills</b></h4>
        <hr>
        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="250">
                <br>
                <br>
                <p>Over 4+ years of experience in following skills!</p>
                <label style="margin-top: 0px; margin-bottom: 0px;"><b>Mathematics Tutoring</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%
                    </div>
                </div>

                <label style="margin-top:5px; margin-bottom: 0px;"><b>HTML 5</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%
                    </div>
                </div>

                <label style="margin-top:5px; margin-bottom: 0px;"><b>CSS 3</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%
                    </div>
                </div>

                <label style="margin-top:5px; margin-bottom: 0px;"><b>Bootstrap 4</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%
                    </div>
                </div>

                <label style="margin-top:5px; margin-bottom: 0px;"><b>JavaScript</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%
                    </div>
                </div>

                <label style="margin-top:5px; margin-bottom: 0px;"><b>PHP & MySql</b></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-delay="250">
                <br>
                <br>
                <img src="img/skills2.png" class="img-fluid" width="500px">
            </div>
        </div>
    </div>
    <!----------------------------------skills section ends-------------------------------->

    <!----------------------------------pricing section starts-------------------------------->
    <br>
    <br>
    <div id="my_services"></div>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <h4 class="text-center"><b>My Services</b></h4>
        <hr>
        <br>
        <div class="row text-center">
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <br>
                <div class="iconsetting d-block mx-auto"><i class="fa-lg fas fa-paint-brush rounded-circle"></i></div>
                <h6><b>Web Design</b></h6>
                <br>
                <p>I can design your front-end website and give them a pleasant look with illustrations and modern styling.</p>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="250">
                <br>
                <div class="iconsetting d-block mx-auto"><i class="fa-lg fas fa-cogs rounded-circle"></i></div>
                <h6><b>Web Development</b></h6>
                <br>
                <p>I can develop your back-end website and give them a dynamic touch with modern languages and databases.</p>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <br>
                <div class="iconsetting d-block mx-auto"><i class="fa-lg fas fa-desktop rounded-circle"></i></div>
                <h6><b>Desktop Development </b></h6>
                <br>
                <p>I can develop your desktop based projects like university projects, small assignments and POS solutions etc.</p>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="350">
                <br>
                <div class="iconsetting d-block mx-auto"><i class="fa-lg fas fa-square-root-alt rounded-circle"></i></div>
                <h6><b>Mathematics Tutoring</b></h6>
                <br>
                <p>I can help and assist you in your elementry and high school math e.g. Calculus & Discrete Math etc.</p>
            </div>
        </div>
        <br>
        <br>
    </div>
    <!----------------------------------pricing section ends-------------------------------->

    <!----------------------------------contactus section starts-------------------------------->
    <br>
    <br>
    <div id="contact"></div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h4 class="text-center"><b>Get In Touch</b></h4>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <form class="col-lg-12" data-aos="zoom-in" data-aos-delay="250">
                    <br>
                    <div class="form-group">
                        <label><b>Name</b></label>
                        <input class="form-control" id="txt_name" placeholder="Name"  >
                    </div>

                    <div class="form-group">
                        <label><b>Email/Whatsapp</b></label>
                        <input class="form-control" id="txt_email" placeholder="Email/Whatsapp"  >
                    </div>

                    <div class="form-group">
                        <label><b>Message</b></label>
                        <textarea class="form-control" id="txt_msg" placeholder="Message" rows="5"  ></textarea>
                    </div>
                    <button id="btn-send" type="button" class="btn btn-block">Send Message</button>
                </form>
            </div>

            <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-delay="250">
                
                <img src="img/contact.png" class="img-fluid" width="400px">
                <p style="color: green ;"><b>My Contact #: +923456640398</b></p>
            </div>
        </div>
    </div>
    <!----------------------------------contactus section ends-------------------------------->

    <!----------------------------------footer section starts-------------------------------->
    <!-- Footer -->
    <br>
    <br>
    <div class="container">
        <footer class="page-footer">
            <br>
            <br>
            <br>
            <div class="text-center">
                <p>© Copyright <?php echo date("Y"); ?> : <a href="https://www.facebook.com/Iamarbabhussain" style="text-decoration: none; color: #5352ed;"> Arbab Hussain</a> </p>
            </div>
            <br>
        </footer>
    </div>
    <!-- Footer -->
    <!----------------------------------footer section ends-------------------------------->

    <!----------------------------------js starts-------------------------------->
    <!-----------preloader start------------>
    <script>
        //preloader
        var preloader = document.getElementById('loader');

        function preloaderStart() {
            preloader.style.display = 'none';
        }
    </script>
    <!-----------preloader end------------>
    <!----------------------------------js ends-------------------------------->
</body>

</html>