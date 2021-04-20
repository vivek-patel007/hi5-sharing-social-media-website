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
if (!session_id() && !headers_sent()) {
    session_start();
 }  
?>
<?php
	global $user;
	@$user=$_SESSION["user"];			
	if($user == "")
	{
		header("location: login.php");
	}
?>
   <?php
include("partial/_header.php");
include("partial/_sidebar.php");
include("partial/_db.php");
$sql = "SELECT * FROM `tbl_package` WHERE is_active='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
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
                  <?php
                  while($row = $result->fetch_assoc()) {
 $id=$row["package_id"];
 $package_price=$row["package_price"];
 $package_title=$row["package_title"];
 $package_size=$row["package_size"];
 $package_start=$row["package_start"];
 $package_end=$row["package_end"];
 $duration=$row["duration"];
 $package_description=$row["package_description"];
 $timestamp=$row["timestamp"];
 
?>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body border text-center rounded">
                           <span class="font-size-16 text-uppercase"><?php echo $package_title; ?></span>
                           <h2 class="mb-4 display-5 font-light-bolder ">&#8377; <?php echo $package_price; ?><small class="font-size-14 text-muted"><?php echo $duration; ?>/Days</small></h2>
                           <ul class="list-unstyled line-height-4 mb-0">
                           <li><span class="fa-li"></span>Single User</li>
            <li><span></span><?php echo $package_size; ?> Storage</li>
            <li><span></span><?php echo $package_description; ?></li>
                           </ul>
                           <form action="" method="post">
                           <input type="hidden" name="package_id" value="<?php echo $id; ?>">
                           <input type="hidden" name="usermail" value="<?php echo $user; ?>">
                           
<input type="hidden" name='package_price'  value="<?php echo $package_price; ?>">
<input type="hidden" name='package_title'  value="<?php echo $package_title; ?>">
<input type="hidden" name='package_start'  value="<?php echo $package_start; ?>">
<input type="hidden" name='duration' value="<?php echo $duration; ?>">
                           <input type="submit" name="submit1" value="BOOK NOW" class="btn btn-primary mt-5">
                           </form>
                        
                        </div>
                     </div>
                  </div>
                  <?php          
      }
} else {
  echo "0 results";
}
$conn->close();
?>
       <!-- </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       <?php
                    if(isset($_POST['submit1']))
{
	 global $email_id;
    
    include("partial/_db.php");
 
						$user=@$_POST['usermail'];
                    	$package_title=@$_POST['package_title'];
						$package_price=@$_POST['package_price'];
						$duration=@$_POST['duration'];	
						$package_start=@$_POST['package_start'];	
						
						$sdate=date('Y-m-d');
						$package_end=date("Y-m-d",strtotime("+$duration days"));
						
						$Payment_Status=@$_POST['Payment_Status'];			
						
			
						
						
		$sql="insert into tbl_packagebooking(user_email,package_title,package_price,duration,package_start,package_end,Package_ID ,
      Payment_Status)
       values('$user','$package_title','$package_price','$duration','$sdate',
		'$package_end','1','no')";
		//echo $sql;
		$ret=mysqli_query($conn,$sql);
		if($ret)
		{
	 echo "<script language='javascript'>alert('record inserted');</script>";
echo "<script language='javascript'>window.location.href='viewpackage.php';</script>";
		}
}
?>  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
          </div>
       </div> -->
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