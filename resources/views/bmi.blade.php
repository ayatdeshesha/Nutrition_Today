<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  Diet & Nutrition </title>
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


<!--
page banner section
 -->

<section class="page-banner">
    <div class="container">
        <div class="row align-items-center justify-content-center page-bn-height">
            <div class="col-12 text-center">
                <h3>BMI</h3>

            </div>
        </div>
    </div>
</section>

<!--
 client testimonials section
 -->
 <section class="client-review section-padding">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7">
                <div class="row">
                    <h3 class="section-title  col-12">BMI Introduction</h3>         
                    <div class="col-md-10">
                        <h4 class="bmi">BMI is a measurement of a person's leanness or corpulence based on their height and weight,
                             and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a
                              healthy body weight for their height. Specifically, the value obtained from the calculation of BMI is used to categorize
                               whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between. 
                               These ranges of BMI vary based on factors such as region and age, and are sometimes further divided into subcategories
                                such as severely underweight or very severely obese. Being overweight or underweight can have significant health effects,
                                 so while BMI is an imperfect measure of healthy body weight, it is a useful indicator of whether any additional testing 
                                 or action is required. Refer to the table below to see the different categories based on BMI that is used by the calculator.
                        </h4>
                    </div><!-- client review text -->
                </div>
            </div><!-- end review -->

            <div class="col-lg-4 bmi-calcalutaer offset-lg-1">
                {{-- {{$errors}} --}}
                <h3 class="section-title xs" id="calc">BMI Calculator</h3>
                <form action="test" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4>height</h4>
                    <div class="form-group row">
                        <label for="ft" class="col-sm-2 col-form-label" >CM</label>
                        <div class="col-sm-10">
                            <input required type="number" min="50" max="250"  class="form-control" id="ft" name="cm">
                        </div>
                    </div>
                    <h4>weight</h4>
                    <div class="form-group row">
                        <label for="lbs" class="col-sm-2 col-form-label" >KG</label>
                        <div class="col-sm-10">
                            <input required type="number" min="30" max="200" class="form-control" id="lbs" name="kg">
                        </div>
                    </div>
                          <h4>age</h4>
                         <div class="form-group row">
                        <label for="lbs" class="col-sm-2 col-form-label">YEAR</label>
                        <div class="col-sm-10">
                            <input required type="number" min="1" max="150"  class="form-control" id="lbs" name="age">
                        </div>

                    </div>


                    <h4>gender</h4>



                    <div class="form-group row">
                        <!-- Default unchecked -->
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios" value="male">
                            <label class="custom-control-label" for="defaultUnchecked">male</label>
                        </div>

                        <!-- Default checked -->
                        <div class="custom-control custom-radio ml-5">
                            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" value="female" checked>
                            <label class="custom-control-label" for="defaultChecked">female</label>
                        </div>
                    </div>

                     <div class="text-right">
                         <button type="submit" href="" class="btn-mr th-gradient pill slideInLeft" style="margin: left 5px;" data-toggle="modal"
                         {{-- data-target="#moddialog" --}}
                         >
                            Calculate
                        </button>
                    </div>
          <!-- Modal -->



                </form>
            </div><!-- end messurment -->
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
