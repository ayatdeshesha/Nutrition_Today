<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Diet & Nutrition</title>
    <!-- ==================Start Css Link===================== -->
    <!-- icon fonts css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- fonts css -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <!-- fav icon link -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fav.jpg">
    <!-- animated css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstartp css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carosel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- silck carosel css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- magnify popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- app css -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- ==================End Css Link===================== -->


    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="page-single">


    <!--
Header area start
 -->

    <div class="site-header header-2">
        <div class="top-header">
            <div class="container">
                <div class="row">
                   
                    <!-- end top header single -->
                    <div class="col-lg-6 col-md-4">
                        <ul class="text-center text-md-right rgt">
                            <li><a href="#"><i class="icofont">facebook</i></a></li>
                            <li><a href="#"><i class="icofont">twitter</i></a></li>
                            <li><a href="#"><i class="icofont">google_plus</i></a></li>
                            <li><a href="#"><i class="icofont">linkedin</i></a></li>
                        </ul>
                    </div>
                    <!-- end top header single -->
                </div>
            </div>
        </div>
        <!-- end top header -->
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand logo"><img src=" assets/images/all-img/162506406133198837.png" alt=""></a>
                <div class="ml-auto main-menu">
                    <ul>
                        <li class="current-menu-item ">
                        <a href="{{route('home')}}">Home</a>  
                        </li>
                        <li><a href="{{route('bmi')}}">BMI</a></li>

                        <li class="menu-item-has-children"><a href="#">Keep Weight </a>
                            <ul class="sub-menu">
                                <li><a href="{{route('sports')}}">sports</a></li>
                                <li><a href="{{route('Healthy_Food')}}">Healthy-Food</a></li>
                            </ul>
                        </li>
                     
                        
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('sports')}}">sports</a></li>
                                <li><a href="{{route('Healthy_Food')}}">Healthy-Food</a></li>
                                <li><a href="{{route('Healthy_Guide')}}">Healthy-Guide</a></li>
                                <li><a href="{{route('diet')}}">Diet Plans</a></li>
                                <li><a href="{{route('gain_weight')}}">Gain Weight</a></li>
                                <li><a href="{{route('restaurants')}}">Diet restaurants</a></li>
                                <li><a href="{{route('events')}}">events</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{route('food')}}">Food Calculator</a>
                            
                        </li>
                        <li><a href="{{route('contact')}}">Contacts</a></li>
                    </ul>
                </div>
                <!-- end main-menu -->
                <div class="mobile-menu ml-auto">
                    <div class="menu-click">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </nav>
    </div>


    <!--
page banner section
 -->

    <section class="page-banner">
        <div class="container">
            <div class="row align-items-center justify-content-center page-bn-height">
                <div class="col-12 text-center">
                    <h3>Event</h3>
                    
                </div>
            </div>
        </div>
    </section>



    <!--
    our events
 -->

    <section class="ration-events">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev1.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>26</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">Most active member awards</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev2.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>20</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">Opening of new gym everyone</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev3.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>26</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">WNHF Pro Contest – 2018 Event</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev4.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>15</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">International Yoga Festival</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev5.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>16</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">Most active member awards</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
                <div class="col-md-6">
                    <div class="singleEvents">
                        <div class="eventsThumbs">
                            <img src="assets/images/all-img/ev6.jpg" alt="">
                            <div class="eventsDtae text-center">
                                <span>12</span>
                                <span>may</span>
                            </div>
                        </div>
                        <div class="eventsText">
                            <h3><a href="#">Opening of new gym everyone</a></h3>
                            <ul>
                                <li> <i class="fa fa-clock-o" aria-hidden="true"></i> 9 August 2017 (Sat) 8:00 am - 10:00 am.</li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 56, Marborne, Howello Resort NY 18565</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end seingle events -->
            </div>
            <div class="spacer-extra2"></div>
            <!-- end spacer extra2 -->
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="pagination custom-paganation-1 justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link">Prev</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <span class="page-link">
        2
        <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!--
 footer section
 -->
 <footer class="site-footer">
    <div class="container">
        <div class="row align-items-center">
    <!-- end single footer -->
            <div class="col-lg-4 col-md-6">
            
            </div><!-- end single footer -->
            <div class="col-lg-4 col-md-6">
                <div class="single-footer">
                 
                    <ul class="footer-social">
                        <li><a href="#"><i class="icofont">facebook</i></a></li>
                        <li><a href="#"><i class="icofont">twitter</i></a></li>
                        <li><a href="#"><i class="icofont">google_plus</i></a></li>
                        <li><a href="#"><i class="icofont">linkedin</i></a></li>
                    </ul>
                </div>
            </div><!-- end single footer -->
            <div class="col-12 text-center">
                <div class="copy-right">
                    <p>2021 &copy; Nutrition Today, ALL RIGHTS RESERVED</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-decoration">
        <div class="fbox-1"></div>
        <div class="fbox-2"></div>
    </div><!-- end footer decoration -->
</footer>






    <!-- jquey -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- poper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotop js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- counter up js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- scrollup js -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- apper js -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- jquery weapoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carosel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- silck js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- magnify popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- app js -->
    <script src="assets/js/app.js"></script>



</body>

</html>