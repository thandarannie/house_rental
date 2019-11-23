<!DOCTYPE html>
<html lang="en">
<head>
    <title>House Rental Mandalay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/animate.css">
    
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="frontend/css/aos.css">

    <link rel="stylesheet" href="frontend/css/ionicons.min.css">

    <link rel="stylesheet" href="frontend/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="frontend/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="frontend/css/flaticon.css">
    <link rel="stylesheet" href="frontend/css/icomoon.css">
    <link rel="stylesheet" href="frontend/css/style.css">

    <!-- backend -->
    <link href="backend/css/font-face.css" rel="stylesheet" media="all">
    <link href="backend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="backend/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="backend/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="backend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="backend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="backend/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="backend/css/theme.css" rel="stylesheet" media="all">

</head>
<body>

@include('frontend.frontend_layouts.nav')

 @include('backend.backend_layouts.sidemenu')
<!-- END nav -->

@yield('content')   

@include('frontend.frontend_layouts.footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="frontend/js/jquery.min.js"></script>
<script src="frontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="frontend/js/popper.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/jquery.easing.1.3.js"></script>
<script src="frontend/js/jquery.waypoints.min.js"></script>
<script src="frontend/js/jquery.stellar.min.js"></script>
<script src="frontend/js/owl.carousel.min.js"></script>
<script src="frontend/js/jquery.magnific-popup.min.js"></script>
<script src="frontend/js/aos.js"></script>
<script src="frontend/js/jquery.animateNumber.min.js"></script>
<script src="frontend/js/bootstrap-datepicker.js"></script>
<script src="frontend/js/jquery.timepicker.min.js"></script>
<script src="frontend/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="frontend/js/google-map.js"></script>
<script src="frontend/js/main.js"></script>

<!-- backend -->

 <!-- Jquery JS-->
    <script src="backend/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="backend/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="backend/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="backend/vendor/slick/slick.min.js">
    </script>
    <script src="backend/vendor/wow/wow.min.js"></script>
    <script src="backend/vendor/animsition/animsition.min.js"></script>
    <script src="backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="backend/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="backend/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="backend/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="backend/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="backend/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="backend/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="backend/js/main.js"></script>

</body>
</html>