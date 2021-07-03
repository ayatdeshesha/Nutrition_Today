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





    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
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
                    <h3>food calculator</h3>
                   
                </div>
            </div>
        </div>
    </section>


    <!--
 Blog section Start
 -->

 <div class="blog-area  page-blog">

<form action="search" method="GET" enctype="multipart/form-data">
    @csrf

    <div class="input-group sm-form form-sm form-2 pl-0 w-75 mx-auto">


        <div class="input-group mb-3">


            <select name="food" class="custom-select nameid" id="inputGroupSelect02">
                @foreach ($items as $item)
                @if ($loop->last)
                @isset($selected)
        <option  value="{{$selected_id}}" selected >{{$selected}}</option>
        @endisset
        @endif
                <option  value="{{$item->id}}">{{$item->name}}</option>
              @endforeach

            </select>

          </div>

    </div>
                 <br>
    <div class="mx-auto w-75">
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Number of grmas</label>
                    <input type="number" class="form-control" placeholder="enter numbers of grams " required name="grams" min="1" max="1000"

                    @isset($grams)

                    value="{{$grams}}"

        @endisset
                    >
                </div>
                
<div class="col-lg-6">
                <button type="submit" class="input-group-text lime lighten-2" style="margin-top:6%;" id="basic-text1" >
        <i class="fas fa-search text-grey"></i>
</button>
</div>
</div>
 <div class="row">
                <div class="col-lg-6">
                    <label for="">Result</label>
                    <input type="text" class="form-control" disabled placeholder="number of calories" required


                    @isset($calories)
                    value="{{$result}}"
                    @endisset
                    >
                </div>
            </div>
    </div>



</form>

        </div>


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




    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $(".nameid").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>


</body>

</html>
