<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mobbiz Digital Business Associate" />
    <meta name="author" content="Hinet Technologies">
    <!-- SITE TITLE -->
    <title> Mobbiz: New </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/css/owl.theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style type="text/css">
        .item-list-options {
            margin-right: 20px;
        }
    </style>
</head>

<body data-spy="scroll" data-offset="110">
   
    <!-- START HEADER -->
     <header class="header_wrap fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll animation" href="dashboard" data-animation="fadeInLeft" data-animation-delay="0.8s">
                    <img class="logo_light" src="images/logo.png" alt="logo" />
                    <img class="logo_dark" src="images/logo_dark.png" alt="logo" />
                </a>
                <button class="navbar-toggler animation" data-animation="fadeInRight" data-animation-delay="1.2s" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li><a class="nav-link page-scroll" href="">godwinoluyomi@gmail.com</a></li>
                    </ul>
                    <ul class="navbar-nav nav_btn">
                      <li><a class="btn btn-default" href="logout.php">Logout</a></li>
                      <!-- <li><a class="nav-link page-scroll btn btn-default" href="#mobileapp">Our App</a></li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- START HEADER --> 

    <!-- START SECTION ABOUT US -->
        <div id="about" class="section_gradiant">
        <div class="container">
            <div class="divider small_divider"></div>
            <br><br>
            <div class="row text-center small_space benefit_wrap">
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="new">
                        <div class="benefit_box animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                            <img src="images/icons/new.png" alt="new" />
                            <h6>Create New</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="sent">
                        <div class="benefit_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <img src="images/icons/sent.png" alt="sent" />
                            <h6>Sent</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="received">
                        <div class="benefit_box animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                            <img src="images/icons/received.png" alt="received" />
                            <h6>Received</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="support">
                        <div class="benefit_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <img src="images/icons/support.png" alt="suppport" />
                            <h6>Support</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="divider small_divider"></div>

        <!-- <div class="rounded_shape rounded_shape1"></div> -->
        <!-- <div class="rounded_shape rounded_shape2"></div> -->
    </div>
    <!-- END SECTION ABOUT US -->

    <!-- START SECTION TOKEN -->
    @yield('content')
 
    <!-- END SECTION TOKEN -->

    <!-- START FOOTER SECTION -->
        <footer>
        <div class="bottom_footer staggered-animation-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright staggered-animation" data-animation="fadeInLeft" data-animation-delay="0.1s">Copyright © <?php echo date('Y'); ?> All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_none footer_menu staggered-animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                            <li><a href="privacy">Privacy Policy</a></li>
                            <li><a href="terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="#" class="scrollup btn-default animation" data-animation="zoomIn" data-animation-delay="0.1s" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- particles min js  -->
    <script src="js/particles.min.js"></script>
    <!-- scripts js -->
    <script src="js/scripts.js"></script>

</body>

</html>