<?php
  
   if (!session_id() && !headers_sent()) {
       session_start();
    }  

if(!$_SESSION['login'])
{
	header("Location: login.php");
}
 
global $user;
@$user=$_SESSION["user"];			
if($user == "")
{
   header("location: login.php");
}
                              
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      <script src="https://use.fontawesome.com/a61ba315b6.js"></script>
      <style>
      
      </style>
</head>
<body class="right-column-fixed">
   <div class="container mt-0">
      <div class="iq-top-navbar mt-0">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.html">
                     <img src="img/ico/apple-icon-76x76.png" class="img-fluid" alt="">
                     <span>Sharing</span>
                     </a>
                     <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="fa fa-bars"></i></div>
                     </div>
                  </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="fa fa-search"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
            <?php
              include("_db.php");
              //  $user=$_SESSION['user'];
               $sql = "SELECT * FROM `tbl_user` WHERE Email_ID='$user' AND is_active='0'";
               $result = $conn->query($sql);
               
               if ($result->num_rows > 0) {
               
              // output data of each row
              $row = $result->fetch_array();
            ?>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href="profiledit.php" class="iq-waves-effect d-flex align-items-center">
                              <img src="partial/user images/<?php echo $row['User_image']; ?>" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-0 line-height"><?php echo $row['First_Name']." ".$row['Last_Name']; }?></h6>
                              </div>
                           </a>
                        </li>
                        <li>
                      
                           <a href="dashboard.php" class="iq-waves-effect d-flex align-items-center">
                           <i class="fa fa-home"></i>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="fa fa-users"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lucy Tania</h6>
                                                <p class="mb-0">12  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Manny Petty</h6>
                                                <p class="mb-0">3  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="fal fa-users">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Marsha Mello</h6>
                                                <p class="mb-0">15  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Bni</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-mail"></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bni Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="partial/_logout.php"><i class="fa fa-sign-out"></i></a>
                           </li>
                     </ul>
                     <!-- <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height">Hello Bni Cyst</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-info-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-info">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Account settings</h6>
                                             <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-danger-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-danger">
                                             <i class="ri-lock-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Privacy Settings</h6>
                                             <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul> -->
                  </div>
                  
               </nav>
              
            </div>
  

            <?php
		if(isset($_GET['err']) && $_GET['err']=="false"){
			$msg=$_GET['msg'];
           echo ' <div class="alert text-white bg-success" role="alert" style="height: 60px;">
                              <div class="iq-alert-text"><b>SUCCESS: </b> '.$msg.'</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                           </div>';
                        }
                        if(isset($_GET['err']) && $_GET['err']=="true"){
                         $msg=$_GET['msg'];
                         echo ' <div class="alert text-white bg-danger" role="alert" style="height: 60px;">
                         <div class="iq-alert-text"><b>ERROR: </b> '.$msg.'</div>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                      </div>';
                        }
                      ?>
         </div>
         </div>
      
       </div>
            <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
         </body>
</html>