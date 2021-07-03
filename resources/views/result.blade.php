<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ration | Diet & Nutrition Html Template</title>
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



 <div>

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="elModalLabel">Your Result</h5>

            </div>
         <div class="modal-body">

            <div class="text-center row">
            <div class="text-center col-md-4" >

                    <div class="text-center card text-white bg-success mb-3" style="max-width: 18rem;">
                     <div class="text-center card-header">Body Mass</div>
                         <div class="card-body">
                              <h2 class="card-title"> 
                              {{$body_mass}} <br> {{$weight}}
                              </h2>
                             </div>
                    </div>
            </div>
            <div class="col-md-4"> <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">perfect weight</div>
                    <div class="card-body">

                         <h2 class="card-title"> 
                         {{$perfect_weight}} kg
                         </h2>
                    </div>
               </div>
            </div>
            <div class="col-md-4"> <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Ideal Calories</div>
                    <div class="card-body">
                         <h2 class="card-title">
                         {{$suggested_calories}}
                         <br>
                         Calories
                         </h2>
                    </div>
               </div></div>
          </div>

             <div class="modal-footer">
                 <div class="pill slideInLeft" data-mdb-dismiss="modal">
                    Since your weight is ({{$weight}}), We suggest you go to the page ({{$page}})
                 </div>
                <a href="{{route($page)}}" type="button" class="btn-mr th-gradient pill slideInLeft" data-mdb-dismiss="modal">
             Go
                </a>
             <a href="{{route('bmi')}}" type="button" class="btn-mr th-gradient pill slideInLeft ">
                Back
             </a>
              </div>
   </div>
</div>







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




















