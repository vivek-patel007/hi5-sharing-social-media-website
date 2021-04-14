<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>HI5 Sharing-Home</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
    
   <style>
.content-page {
    min-height: 100vh;
    overflow: hidden;
    padding: 20px 15px 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 15px;
    transition: all 0.3s ease-out 0s;
}
.content-page {
    overflow: hidden;
    padding: 15px 15px 0;
    min-height: 100vh;
}
   </style>
   </head>
   <body>
   <?php
// if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
//     header("location: dashboard.php?login=true"); 
// session_start();
// if (!isset($_SESSION['login']) && $_SESSION['login'] !== true) {
//    header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false');  
//   }else{
    
   //  header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
//  } 


?>
   <?php
include("partial/_header.php");
include("partial/_sidebar.php");
?>

<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card position-relative inner-page-bg bg-primary" style="height: 150px;">
                        <div class="inner-page-title">
                           <h3 class="text-white">Pricing-1 Page</h3>
                           <p class="text-white">lorem ipsum</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body border text-center rounded">
                           <span class="font-size-16 text-uppercase">Basic</span>
                           <h2 class="mb-4 display-3 font-weight-bolder ">$26<small class="font-size-14 text-muted">/ Month</small></h2>
                           <ul class="list-unstyled line-height-4 mb-0">
                              <li>Lorem ipsum dolor sit amet</li>
                              <li>Consectetur adipiscing elit</li>
                              <li>Integer molestie lorem at massa</li>
                           </ul>
                           <a href="#" class="btn btn-primary mt-5">Start Starter</a>
                        </div>
                     </div>
                  </div>

                       <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
</body>
</html>