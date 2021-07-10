<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Diet & Nutrition </title>
    <!-- ==================Start Css Link===================== -->
    <!-- icon fonts css -->
    <link rel="stylesheet" href="css/all.min.css">
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
                    <h3>contact us</h3>

                </div>
            </div>
        </div>
    </section>



    <!--
    our experts
 -->

 <section class="page-content">
     <div class="container">
         @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>

        @endif
         <div class="row">
                <div class="col-lg-4">
                    <div class="single-contact-innfo d-flex flex-column justify-content-center align-items-center">
                        <div class="boxicon mr-3"><i class="icofont">location_pin</i></div>
                        <h3>Our Location</h3>
                    </div>
                </div>
                <!-- end single contact info -->

                <div class="col-lg-4">
                    <div class="single-contact-innfo d-flex flex-column justify-content-center align-items-center">
                        <div class="boxicon mr-3"><i class="icofont">ui_call</i></div>
                        <h3>Call Us Now</h3>
                    </div>
                </div>
                <!-- end single contact info -->
                <div class="col-lg-4">
                    <div class="single-contact-innfo d-flex flex-column justify-content-center align-items-center">
                        <div class="boxicon mr-3"><i class="icofont">ui_message</i></div>
                        <h3>Write Us Now</h3>

                    </div>
                </div>
                <!-- end single contact info -->
            </div>
            <div class="spacer-extra2"></div>
            <!-- end extra spacer -->
            <div class="row">









                <div class="col-lg-6">
                    <form class="site-contactform" action="messages" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="section-title xs2">Contact Us</h3>
                        <div class="form-row">
                            <div class="col-12">
                                <label for="">Name</label>
                                <input  name="name" type="text" class="form-control" placeholder="Type Your Name" required>
                            </div>
                            <div class="col-12">
                                <label for="">Email</label>
                                <input  name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control" placeholder="write your message" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-mr th-primary pill">SEND</button>

                    </form>
                </div>















                <div class="col-lg-6">
                    <div class="promo-add">
                        <img src="assets/images/all-img/contact.jpg" alt="">
                        <div class="promo-text">
                            <span>Need Help For Any</span>
                            <h4>Health Information </h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-extra2"></div>
            <!-- end spacer -->
            <div class="row">
                <div class="col-12">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </section>








    <section class="partners-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 section-wrapper text-center">
                    <h3 class="section-title">Our Sponsers</h3>
                    <p>Obtaining a healthy meal that fits the diet or diet is a big dilemma,
                         especially since many restaurants rely on the food they offer on foods rich in fat and fat
                         , and many do not have knowledge of eating diet restaurants that
                         allocate suitable food for those who want to eat lunch or dessert outside Home without fear of gaining weight.</p>
                </div><!-- end section titile -->
                <div class="col-12">
                    <div class="brands-active owl-carousel">
                        <div class="single-brands">
                         <a target="_blank" href="https://www.facebook.com/balancegymegy"><img src="assets/images/all-img/Balance-gym.jpg" alt=""></a>
                        </div><!-- end single brands -->
                        <div class="single-brands">
                        <a  target="_blank" href="https://www.facebook.com/GoldsGymEgypt/"><img src="assets/images/all-img/gym2.jpg" alt=""></a>
                        </div><!-- end single brands -->
                        <div class="single-brands">
                          <a   target="_blank" href="https://www.facebook.com/just4diet/"> <img src="assets/images/all-img/diet_rest.jpeg" alt=""></a>
                        </div><!-- end single brands -->
                        <div class="single-brands">
                            <a  target="_blank" href="https://www.facebook.com/CaloriesEgy/"> <img src="assets/images/all-img/diet_rest2.jpg" alt="" ></a>
                        </div><!-- end single brands -->

                    </div>
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
    <!-- map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMjWSDG4QO9RnoYOsLOKITmRLbkg6B5TM"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map.js"></script>

    <!-- app js -->
    <script src="assets/js/app.js"></script>





</body>

</html>
