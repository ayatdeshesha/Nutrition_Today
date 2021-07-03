<!DOCTYPE html>
<html lang="en">

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

<body>


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
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->
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

</div>


<!--
page banner section
 -->

  <section class="page-banner"> 
    <div class="container">
        <div class="row align-items-center justify-content-center page-bn-height">
            <div class="col-12 text-center">
                <h3>Gain Weight</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="health-guide">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 section-wrapper text-center">
                <h3 class="section-title">How TO Gain Weight?</h3>
                <p>Although thinness can often be healthy, being underweight can be a concern if it is the result of poor nutrition.
                     If you are pregnant or have other health problems, you should follow a healthy diet to gain weight.
                </p>
            </div><!-- end section titile -->
        </div>
        <div class="row grid">

                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">broccoli</i>
                        </div>
                        <h4>Eat more frequently</h4>
                        <P>When you're underweight, you may feel full faster. 
                        Eat five to six smaller meals during the day rather than two or three large meals.</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 grid-item animation " data-animation="zoomIn" data-animation-delay="0.7s">
                    <div class="single-health-block-big text-center">
                        <img src="assets/images/all-img/help.jpg" alt="">
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item  animation" data-animation="fadeInRight" data-animation-delay="0.3s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">fast_food</i>
                        </div>
                        <h4>Choose nutrient-rich foods.</h4>
                        <P>As part of an overall healthy diet, choose whole-grain breads, pastas and cereals; fruits and vegetables;
                         dairy products; lean protein sources; and nuts and seeds</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">food_basket</i>
                        </div>
                        <h4>Try smoothies and shakes.  </h4>
                        <P> Don't fill up on diet soda, coffee and other drinks with few calories and little nutritional value. Instead, drink smoothies or healthy shakes made with milk and fresh or frozen fruit, and sprinkle in some ground flaxseed.
                         In some cases, a liquid meal replacement may be recommended</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInRight" data-animation-delay="0.0.4s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">medicine</i>
                        </div>
                        <h4>Have an occasional treat.</h4>
                        <P style="margin-bottom: 25px;">Even when you're underweight, be mindful of excess sugar and fat. An occasional slice of pie with ice cream is OK.
                         But most treats should be healthy and provide nutrients in addition to calories. Bran muffins, yogurt and granola bars are good choices.</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center" style="height: 290px;">
                        <div class="icon-box">
                            <i class="icofont">runner</i>
                        </div>
                        <h4>Exercise</h4>
                        <P>Exercise, especially strength training, can help you gain weight by building up your muscles.
                         Exercise may also stimulate your appetite.</P>
                    </div>
                </div><!-- end single health blog -->
        </div>
    </div>
</section>
<section class="healthy-recipe">
    <div class="container" >
        <div class="row" >
            <div class="col-lg-8 offset-lg-2 text-center section-wrapper no-margin" >
                <h3 class="section-title">What To Eat To Gain Weight?</h3>
                <p>For some people, gaining weight or adding muscle can be just as difficult as losing weight is for others.
                However, simply adding certain foods to your diet can make your weight gain efforts both healthy and more effective.. </p>  
            </div><!-- end section title -->
            <div class="col-12" >
                <div class="healty_recipe_active owl-carousel animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="media align-items-center single-helathy-recipe">
                        <div class="media-body">
                            <h3 >Salmon and oily fish</h3>
                            <p>
    
                                salmon and oily fish are excellent sources of protein and important healthy fats.
                                 Just one 6-ounce (170-gram) fillet of deboned wild sockeye salmon provides around 250 calories and 12 grams of healthy fats. The same serving packs 37 grams of high quality protein, helping you build muscle or gain weight .
 
                               </p>
                            
                        </div>
                        <img class="mr-3 img-thumbnail rounded-circle" src="assets/images/all-img/salmon.jpg"  style ="width: 115px ; height: 115px;"alt="Generic placeholder image">
                    </div><!-- end single healthy recipe -->
                    <div class="media align-items-center single-helathy-recipe">
                        <div class="media-body">
                            <h3 >Dried fruit</h3>
                            <p>
                                Dried fruit is a high calorie snack that also provides antioxidants and micronutrients .
                            You can get many different types of dried fruit, and they all have a naturally high sugar content.
                             This makes them great for gaining weight, especially since they’re convenient to eat and taste great.

                            </p>
                            

                        </div>
                        <img class="mr-3 img-thumbnail rounded-circle" src="assets/images/all-img/fruit_files/eating-granola-with-fresh-fruits.jpg"  style ="width: 115px ; height: 115px;"alt="Generic placeholder image">
                    </div><!-- end single healthy recipe -->
                    <div class="media align-items-center single-helathy-recipe">
                        <div class="media-body">
                            <h3 >Rice</h3>
                            <p>Rice is a convenient, low cost carb source to help you gain weight. 
                                Just 1 cup (158 grams) of cooked white rice provides 204 calories, 44 grams of carbs, and very little fat 
                                Rice is also fairly calorie-dense, meaning you can easily obtain a high amount of carbs and calories from a single serving. </p>
                            
                        </div>
                        <img class="mr-3 img-thumbnail  rounded-circle" style="width: 115px; height: 115px ;" src="assets/images/all-img/rice.jpg"  style ="width: 115px ; height: 115px;" alt="Generic placeholder image">
                    </div><!-- end single healthy recipe -->
                    <div class="media align-items-center single-helathy-recipe">
                        <div class="media-body">
                            <h3>Avocados</h3>
                            <p> Avocados are loaded with healthy fats.
                                Unlike other whole fruits, avocados are fairly calorie-dense and therefore a great food to help you gain weight.
                                Just one large avocado provides around 322 calories, 29 grams of fat, and 14 grams of fiber 
                                
                    
                                </p>
                            
                        </div>
                        <img class="mr-3 img-thumbnail rounded-circle"style="width: 115px; height: 115px ;" src="assets/images/all-img/avogado.jbg.jpg"  style ="width: 115px ; height: 115px;" alt="Generic placeholder image">
                    </div><!-- end single healthy recipe -->
                    <div class="media align-items-center single-helathy-recipe">
                        <div class="media-body">
                            <h3  >Dark chocolate
                            </h3>
                         <p> dark chocolate has a very high calorie density, meaning it’s very easy to get many calories from it.
                            Each 100-gram (3.5-ounce) bar with 60–75 percent cacao solids has
                             around 600 calories and is packed with micronutrients and health-promoting compounds</p>                                
                                
                                
                                
                              
                        
                        </div>
                        <img class="mr-3 img-thumbnail rounded-circle"  style="width: 115px; height: 115px " src= "assets/images/all-img/chocolate.jpg" alt="Generic placeholder image">
                    </div><!-- end single healthy recipe -->
                </div><!-- end healthy recepie active -->
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