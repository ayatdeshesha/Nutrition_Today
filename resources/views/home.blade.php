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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="home_1">



    <!--
Header area start
 -->

    <div class="site-header">
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
    </div>  <!-- end top header -->
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand logo"><img src="assets/images/all-img/im.png" alt=""></a>
                <div class="main-menu">
                    <ul class="smooth-scroll list-unstyled">
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
                </div> <!-- end main-menu -->
                <div class="mobile-menu ml-auto">
                    <div class="menu-click">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!--Modal: Login / Register Form-->
                <div class="text-center  main-menu">
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login') || Route::has('register'))
                        <a class="dropdown-item btn-mr th-gradient pill slideInLeft" style="margin: left 5px;" href="{{ route('login') }}">{{ __('Login') }} / {{ __('Register') }}</a>
                    @endif
                @else
                <a class="dropdown-item btn-mr bg-danger pill slideInLeft" style="margin: left 5px;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>


                </div>
        </nav>
    </div>
    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a style="color:#f7941d;" class="nav-link active" data-toggle="tab" href="#panel7"
                                role="tab"><i class="fas fa-user mr-1"></i>
                                Login</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#f7941d;" class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i
                                    class="fas fa-user-plus mr-1"></i>
                                Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput10"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Your
                                        email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput11"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your
                                        password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn-mr th-gradient pill">Log in <i
                                            class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a style="color:#f7941d;" href="#" class=".text-default">Sign
                                            Up</a></p>
                                    <p>Forgot <a style="color:#f7941d;" href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline waves-effect ml-auto"
                                    data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput12"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your
                                        email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput13"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your
                                        password</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14"
                                        class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat
                                        password</label>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn-mr th-gradient pill">Sign up <i
                                            class="fas fa-sign-in ml-1"></i></button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a style="color:#f7941d;" href="#"
                                            class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!--Site Slider Area-->
    <section class="site-slider bg-1 img-fluid" style="background-image: url(assets/images/all-img/hhhhhh.jpeg)">
    <div class="text-slide-active owl-carousel">
        <div class="single-slide">
            <div class="container">
                <div class="row bn_height align-items-center">
                    <div class="col-lg-7">
                        <div class="slide-content" >
                            <h1>It is time to balance your life  <span>Nourish your Soul!</span></h1>
                           
                            <a href="" class="btn-mr th-gradient pill">Read More</a>
                            <a href="contact.html" class="btn-mr th-gradient2 pill">Contacts Us</a>
                        </div><!-- end slider content -->
                    </div>
                </div>
            </div>
        </div><!-- end single slider -->
        
    </div>
</section>

    <!-- health guide section -->

    <section class="health-guide">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 section-wrapper text-center">
                    <h3 class="section-title">Why Health Guide?</h3>
                    <p>We only have one life.
                        Enjoy my "how to be happy" guides.<br>We believe you can do the best for yourself when armed
                        with knowledge.
                        And, while we’ll offer you a lot of information here, we’ll only ever offer one piece of advice:
                        If you have any additional medical questions or concerns, talk to a healthcare provider.</p>
                </div><!-- end section titile -->
            </div>
            <div class="row grid">

                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInLeft"
                    data-animation-delay="0.1s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">broccoli</i>
                        </div>
                        <h4>Nutrition Strategies</h4>
                        <P>Following nutritional strategies can help you reduce or even eliminate some risk factors,
                            such as reducing total and LDL-cholesterol; lowering blood pressure, blood sugars and
                            triglycerides;
                            and reducing body weight.</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 grid-item animation" data-animation="zoomIn" data-animation-delay="0.7s">
                    <div class="single-health-block-big text-center">
                        <img src="assets/images/all-img/health_add.png" alt="">
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item  animation" data-animation="fadeInRight"
                    data-animation-delay="0.3s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">live_support</i>
                        </div>
                        <h4>Individual Support</h4>
                        <P>Individual, nutritional support prevents undernutrition,
                            increases muscle strength and improves QoL among elderly at nutritional
                            risk hospitalized for acute stroke: a randomized, controlled trial</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInLeft"
                    data-animation-delay="0.2s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">runner</i>
                        </div>
                        <h4>Exercise Daily</h4>
                        <P>As a general goal, aim for at least 30 minutes of moderate physical activity every day.
                            If you want to lose weight, maintain weight loss or meet specific fitness goals, you may
                            need to exercise more</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInRight"
                    data-animation-delay="0.0.4s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">food_basket</i>
                        </div>
                        <h4>Healthy Diets</h4>
                        <P>Eat a variety of foods, even in very small amounts.
                            Eat frequently to keep blood sugar balanced.
                            Balance the food you eat with physical activity.
                            Eat breakfast every day.
                            Listen to your body's signals.</P>
                    </div>
                </div><!-- end single health blog -->
                <div class="col-lg-4 col-md-6 text-center grid-item animation" data-animation="fadeInUp"
                    data-animation-delay="0.6s">
                    <div class="single-health-block  d-flex flex-column align-items-center justify-content-center">
                        <div class="icon-box">
                            <i class="icofont">medicine</i>
                        </div>
                        <h4>Vitamins Tab</h4>
                        <P>The five best vitamins and minerals for maintaining and boosting body functions, including
                            metabolism, and supporting good weight control, are as follows:
                            B vitamins. Share on Pinterest A variety of B vitamins are important for metabolism.
                            Vitamin D.
                            Calcium.
                            Iron.
                            Magnesium.</P>
                    </div>
                </div><!-- end single health blog -->
            </div>
        </div>
    </section>

    <!-- healty recipe section -->
    <section class="helty-recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center section-wrapper no-margin">
                    <h3 class="section-title">Healthy Recipes</h3>
                    <p>Losing weight doesn't have to be so boring! Spice up your meals by making some of our favorite
                        healthy recipes for weight loss.
                        If you're looking to lose weight, we rounded up our favorite weight loss recipes right here.
                        From healthy burgers and decadent low-calorie desserts,
                        these healthy recipes for weight loss will trigger your journey towards shedding those pounds
                        for good. </p>
                </div><!-- end section title -->
                <div class="col-12">
                    <div class="healty_recipe_active owl-carousel animation" data-animation="fadeInUp"
                        data-animation-delay="0.2s">
                        <div class="media align-items-center single-helathy-recipe">
                            <div class="media-body">
                                <h3>Fruits Salad</h3>
                                <p>Fruit salad is a dish consisting of various kinds of fruit, sometimes served in a
                                    liquid, either their own juices or a syrup.
                                </p>
                                <address>
                                    <strong>Ingredients</strong> <br>
                                    <a href="#">Fruit</a>&cedil;<a href="#"> fruit juice or </a>&cedil; <a
                                        href="#">syrup</a> <br>

                                </address>
                            </div>
                            <img class="mr-3 img-thumbnail rounded-circle" src="assets/images/all-img/rec1.png"
                                alt="Generic placeholder image">
                        </div><!-- end single healthy recipe -->
                        <div class="media align-items-center single-helathy-recipe">
                            <div class="media-body">
                                <h3>Green Salad</h3>
                                <p>Green salad is a dish consisting of a group of fresh vegetables.
                                </p>
                                <address>
                                    <strong>Ingredients</strong> <br>
                                    <a href="#">head of lettuce

                                    </a>&cedil;<a href="#"> Cucumber</a>&cedil; <a href="#">Two to three tomatoes</a>
                                    <br>
                                    <a href="#">Small red onion</a>&cedil;<a href="#">Carrot</a>&cedil; <a
                                        href="#">Table Salt</a>
                                </address>
                            </div>
                            <img class="mr-3 img-thumbnail rounded-circle" src="assets/images/all-img/rec2.png"
                                alt="Generic placeholder image">
                        </div><!-- end single healthy recipe -->
                        <div class="media align-items-center single-helathy-recipe">
                            <div class="media-body">
                                <h3>Chicken Burger with Sun-Dried Tomato Aioli</h3>
                                <p>Chicken Burger is a dish with surprisingly low-calorie</p>
                                <address>
                                    <strong>Ingredients</strong> <br>
                                    <p>the chicken burger, using a lean grind of meat and a hugely flavorful</p>
                                </address>
                            </div>
                            <img class="mr-3 img-thumbnail  rounded-circle" style="width: 115px; height: 115px ;"
                                src="assets/images/all-img/healthy-chicken-burger-sundried-tomato-aioli.jpg"
                                alt="Generic placeholder image">
                        </div><!-- end single healthy recipe -->
                        <div class="media align-items-center single-helathy-recipe">
                            <div class="media-body">
                                <h3>Oatmeal Pancakes With Cinnamon Apples</h3>
                                <p>Oatmeal Pancakes helping stabilize your blood sugar levels </p>





                                <address>
                                    <strong>Ingredients</strong> <br>
                                    <p>Oatmeal Pancakes is a dith consist of Oats and wheat flour</p>
                                </address>
                            </div>
                            <img class="mr-3 img-thumbnail rounded-circle" style="width: 115px; height: 115px ;"
                                src="assets/images/all-img/meal2.jpg" alt="Generic placeholder image">
                        </div><!-- end single healthy recipe -->
                        <div class="media align-items-center single-helathy-recipe">
                            <div class="media-body">
                                <h3>Sheet-Pan Vegan Sausage and Vegetables
                                </h3>
                                <p>Sheet-Pan meals are a popular dinner hack, so why not use it for breakfast.
                                </p>
                                <address>
                                    <strong>Ingredients</strong> <br>
                                    <a href="#">Vegan Sausage</a>&cedil;<a href="#">various Vegetables</a>&cedil;

                                </address>
                            </div>
                            <img class="mr-3 img-thumbnail rounded-circle" src="assets/images/all-img/rec1.png"
                                alt="Generic placeholder image">
                        </div><!-- end single healthy recipe -->
                    </div><!-- end healthy recepie active -->
                </div>
            </div>
        </div>
    </section>
    <!--Blog section Start-->

    <section class="blog-area">
    <div class="container news-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 section-wrapper text-center">
                <h3 class="section-title">News Articles & Tips</h3>
                <p>
                    Good nutrition is a critical part of health and development. According to the World Health Organization (WHO), better nutrition is related to improved health at all ages, a lower risk of diseases, and longevity.

People can find it difficult or confusing to navigate the amount of nutrition information now available, and many sources have differing views.

This article offers science-based nutrition tips to help someone lead a healthier lifestyle
                </p>
            </div><!-- end section titile -->
        </div>
        <div class="row grid">
            <div class="col-md-6 grid-item animation single-new" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="single-blog ">
                    <div class="blog-thumb">
                        <img src="assets/images/all-img/blog1.jpg" alt="">
                    </div><!-- end blog thumb -->
                    <div class="blog-text">
                        <ul class="post-meta d-flex justify-content-between">
                            <li><a href="#"><i class="icofont">ui_calendar</i> March 4, 2021</a></li>
                            
                        </ul>
                        <h4><a href="#">What is a “Healthy” Food? The Answer
                            Will Surprise You</a></h4>
                        <p>What does “healthy” food mean to you? Is it raw? Plant based? Low fat? Low sugar? “Clean?” The answer could be different for everyone—and according to
                             Integrative Nutrition’s core concept of bio-individuality, it wouldn’t be wrong either. [...]</p>
                        <a href="https://www.integrativenutrition.com/blog/2016/07/what-is-a-healthy-food-the-answer-will-surprise-you"  target="_blank " class="blog-link">Reads More</a>
                    </div>
                </div>
            </div><!-- end single blog -->
            <div class="col-md-6 grid-item animation  single-new" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img src="assets/images/all-img/physiotherapy-595529_960_720.webp" height="260px" width="540px" alt="">
                    </div><!-- end blog thumb -->
                    <div class="blog-text">
                        <ul class="post-meta d-flex justify-content-between">
                            <li><a href="#"><i class="icofont">ui_calendar</i> March 4, 2021</a></li>
                        
                        </ul>
                        <h4><a href="#">Top 10 Fitness Facts
                           </a></h4>
                        <p> If you've been looking for the motivation to begin an exercise program or get back into working out regularly,
                             here are 10 fitness facts that may help inspire you to get off the couch.[...]</p>
                        <a href="https://www.webmd.com/men/features/exercise-benefits"  target="_blank " class="blog-link">Reads More</a>
                    </div>
                </div>
            </div><!-- end single blog -->
            <div class="col-md-6 grid-item animation single-new" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img src="assets/images/all-img/blog3.jpg" alt="">
                    </div><!-- end blog thumb -->
                    <div class="blog-text">
                        <ul class="post-meta d-flex justify-content-between">
                            <li><a href="#"><i class="icofont">ui_calendar</i>March 4, 2021</a></li>
                            
                        </ul>
                        <h4><a href="#"> 6 Tips for Successful Weight Loss on a Paleo Diet
                           </a></h4>
                        <p>Many Paleo newbies believe that less food is always better when it comes to losing weight. This belief causes you to deprive your body of the calories
                             and nutrients it needs to function optimally and causes additional stress [...]</p>
                        <a href="https://chriskresser.com/6-tips-for-successful-weight-loss-on-a-paleo-diet/" target="_blank " class="blog-link">Reads More</a>
                    </div>
                </div>
            </div><!-- end single blog -->
            <div class="col-md-6 grid-item animation single-new" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <img src="assets/images/all-img/blog4.jpg" alt="">
                    </div><!-- end blog thumb -->
                    <div class="blog-text">
                        <ul class="post-meta d-flex justify-content-between">
                            <li><a href="#"><i class="icofont">ui_calendar</i> March 4, 2021</a></li>
                            
                        </ul>
                        <h4><a href="#">What to Eat Before and After a Workout?
                            </a></h4>
                        <p>It’s the age old fitness question that many people often ask – what should you eat before and after a workout?

                            Despite all of the information and opinions out there, the answer to this question is actually pretty simple: Eat the right foods at the right time. Second to that answer is finding out what is right for you. Like most things with health and fitness, 
                            an individualized approach always works best, and fueling and recovery are no exception. [...]</p>
                        <a href="https://health.clevelandclinic.org/what-to-eat-before-and-after-a-workout/" target="_blank " class="blog-link">Reads More</a>
                    </div>
                </div>
            </div><!-- end single blog -->
        </div>
    </div>
</section>
    <!--
 success story
 -->
 <section class="success-story no-bg">
    <div class="container">
        <div class="row align-items-center owl-carousel active-story">
            <div class="col-12 single_stroy">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="section-title">Story Of Success</h3>
                        <p><strong>I feel super positive and energetic - the feelings that
                            I did not know of before.</strong></p>
                        <p>After living her whole life with excess weight , and after numerous failed weight loss trials ,
                             Hailey Morris made the final decision to change her destiny . Thanks to exercise , healthy eating and cutting out fatty foods and sugars 
                             , Hailey managed to lose 30 kilos of weight , and today she continues to encourage and inspire others to follow this healthy lifestyle.
                        </p>
                             
                        <h4 style="color: #90c438;">Hailey Morris</h4>
                        
                    </div><!-- end story text -->
                    <div class="col-lg-6">
                        <div class="strong-man">
                            <img src="assets/images/all-img/man2.jpg" alt="">
                        </div>
                    </div><!-- end story images -->
                </div>
            </div><!-- end single story -->
            <div class="col-12 single_stroy">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="section-title">Story Of Success</h3>
                        <p><strong>I feel super positive and energetic - the feelings that
                            I did not know of before.</strong></p>
                        <p>"I was diagnosed with high blood pressure, hypertension, high cholesterol, fatty liver disease, and sleep apnea, among other things," Gendreau told Best Life in October. "I knew they were all because of my eating habits, but I just couldn't stop."
                             But when his sister was diagnosed with terminal cancer in 2016, it became a wake-up call for him to make his physical health a priority. "What she was going.</p>
                        <h4 style="color: #90c438;">Md. Kevin Gendreau</h4>
                        
                    </div><!-- end story text -->
                    <div class="col-lg-6">
                        <div class="strong-man">
                            <img src="assets/images/all-img/man1.jpg" alt="">
                        </div>
                    </div><!-- end story images -->
                </div>
            </div><!-- end single story -->
            <div class="col-12 single_stroy">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="section-title">Story Of Success</h3>
                        <p><strong>I feel super positive and energetic - the feelings that
                            I did not know of before.</strong></p>
                        <p>Luckily, Morganelli had people around him who cared about his wellbeing and were 
                            concerned by what they saw. In his freshman year of college, his microbiology professor
                             pulled him aside to express concerns about his health,   Sick and Nearly Dead and slowly but surely, he replaced fast food with healthy, home-cooked meals. Eventually
                            , he became more committed, going on a vegan diet, and then he had lost 150 pounds.  .</p>
                        <h4 style="color: #90c438;">Md.Morganelli </h4>
                       
                    </div><!-- end story text -->
                    <div class="col-lg-6">
                        <div class="strong-man">
                            <img src="assets/images/all-img/man3.jpg" alt="">
                        </div>
                    </div><!-- end story images -->
                </div>
            </div><!-- end single story -->
        </div>
    </div>
</section>
    <!--
 Special Diet Price
 -->

 <section class="ration-price">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center section-wrapper">
                <h3 class="section-title">Special Diet Plans</h3>
                <p>Whether you want to lose weight or improve your health in general, you must first know which types of diet are right for you?

                </p>
            </div><!-- end sdection title -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="rationSinglePrice text-center">
                    <div class="priceHeader">
                        <svg version="1.1" class="priceshape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 370 219.5" enable-background="new 0 0 370 219.5" xml:space="preserve">
    <path class="path-1"  d="M0,20.1V204c0,0,208.9,56,370-45V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    <path class="path-2"  d="M0,20.1v141.6h105.6c9.1,0,18.1,0.7,27.1,2.2c33.5,5.6,119.3,19.7,134.3,20.8c18.7,1.3,57.2,1.3,103-26.3
	V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    </svg>
                        <div class="price-header-content">
                            <h3>Intermittent fasting</h3>

                        </div>
                    </div><!-- end price he ader -->
                    <div class="priceBody" style="margin: auto; width: 90%;">
                        <p>There are many types of diet that fall under the intermittent fasting diet ,
                             but the most famous of them is the one that is based on eating healthy food for only 8 hours throughout the day, fasting the rest of the day from solid food, and only drinking water and some healthy fluids only during the remaining sixteen hours of fasting.

                        </p>
                    </div><!-- end price body -->
                    <div class="priceFooter">
                        <a href="https://www.webteb.com/articles/%D8%A7%D9%84%D8%B5%D9%8A%D8%A7%D9%85-%D8%A7%D9%84%D9%85%D8%AA%D9%82%D8%B7%D8%B9_21350" target="_blank"> Read More...</a>
                    </div><!-- end price footer -->
                </div>
            </div><!-- end single price -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="rationSinglePrice text-center active">
                    <div class="priceHeader">
                        <svg version="1.1" class="priceshape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 370 219.5" enable-background="new 0 0 370 219.5" xml:space="preserve">
    <path class="path-1"  d="M0,20.1V204c0,0,208.9,56,370-45V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    <path class="path-2"  d="M0,20.1v141.6h105.6c9.1,0,18.1,0.7,27.1,2.2c33.5,5.6,119.3,19.7,134.3,20.8c18.7,1.3,57.2,1.3,103-26.3
	V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    </svg>
                        <div class="price-header-content">
                            <h3>Plant-based <br>diets
                            </h3>
                        </div>
                    </div><!-- end price header -->
                    <div class="priceBody" style="margin: auto; width: 90%;">
                        <p>There are many types of dieting that fall under the classification of  
                            vegetarian diets , including flexible types that may allow animal products in a small way, 
                            and severe types that focus on the rule of completely excluding meat and animal products from the daily diet.

                        </p><br>
                    </div><!-- end price body -->
                    <div class="priceFooter">
                        <a href="https://www.webteb.com/articles/%D8%AA%D8%B3%D8%A7%D8%A4%D9%84%D8%A7%D8%AA-%D8%AD%D9%88%D9%84-%D8%A7%D9%84%D8%AD%D9%85%D9%8A%D8%A9-%D8%A7%D9%84%D9%86%D8%A8%D8%A7%D8%AA%D9%8A%D8%A9_16464" target="_blank"> Read More...</a>
                    </div><!-- end price footer -->
                </div>
            </div><!-- end single price -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="rationSinglePrice text-center">
                    <div class="priceHeader">
                        <svg version="1.1" class="priceshape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 370 219.5" enable-background="new 0 0 370 219.5" xml:space="preserve">
    <path class="path-1"  d="M0,20.1V204c0,0,208.9,56,370-45V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    <path class="path-2"  d="M0,20.1v141.6h105.6c9.1,0,18.1,0.7,27.1,2.2c33.5,5.6,119.3,19.7,134.3,20.8c18.7,1.3,57.2,1.3,103-26.3
	V20.1C370,9,361,0,349.9,0H20.1C9,0,0,9,0,20.1z"/>
    </svg>
                        <div class="price-header-content">
                            <h3>Keto diet</h3><br>
                            
                        </div>
                    </div><!-- end price header -->
                    <div class="priceBody" style="margin: auto; width: 90%;">
                        <p>It is a system based on eating fat versus reducing carbohydrate intake  , as reducing carbohydrate intake and replacing
                             it with fat will help more in the burning process.But it is not recommended to follow this diet except under medical supervision and for short periods so as not to affect health negatively.


                        </p>
                        
                    </div><!-- end price body -->
                    <div class="priceFooter">
                        <a href="https://www.webteb.com/articles/%D9%88%D9%82%D9%88%D8%AF-%D8%A7%D9%84%D8%AC%D8%B3%D9%85-%D9%83%D9%84-%D8%B4%D9%8A%D8%A1-%D8%B9%D9%86-%D9%81%D9%88%D8%A7%D8%A6%D8%AF-%D8%A7%D9%84%D9%83%D8%B1%D8%A8%D9%88%D9%87%D9%8A%D8%AF%D8%B1%D8%A7%D8%AA_10177" target="_blank"> Read More...</a>
                    </div><!-- end price footer -->
                </div>
            </div><!-- end single price -->
        </div>
    </div>
</section>

    <!--
 Our sponsers Start
 -->
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
    <!-- app js -->
    <script src="assets/js/app.js"></script>



</body>

</html>
