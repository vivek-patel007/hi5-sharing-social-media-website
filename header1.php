<?php
ob_start();
session_start();
?>

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--> 
<!DOCTYPE html>
<html lang="zxx"> 
<!-- Head -->
<head>

<title>Groovy Apparel </title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Groovy Apparel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->


<link rel="shortcut icon" href="images/nnn.ico" type="image/x-icon">
<link rel="icon" href="images/nnn.ico" type="image/x-icon">




<!-- Custom-StyleSheet-Links -->
<!-- Bootstrap-CSS -->	   <link rel="stylesheet" href="css/bootstrap.css"					type="text/css" media="all">
<!-- Index-Page-CSS -->	   <link rel="stylesheet" href="css/style.css"						type="text/css" media="all">
<!-- Header-Slider-CSS --> <link rel="stylesheet" href="css/fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
<!-- //Custom-StyleSheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.css" 		 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!-- Supportive-Modernizr-JavaScript --><script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<!-- Default-JavaScript --><script src="js/jquery-2.2.3.js"></script>

</head>
<!-- //Head -->



<!-- Body -->
<body>



	<!-- Header -->
	<div class="agileheader" id="agileitshome">

		<!-- Navigation -->
		<nav class="navbar navbar-default w3ls navbar-fixed-top">
			<div class="container">
				<div class="navbar-header wthree nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand agileinfo" href="index.php"><span>GROOVY</span> APPAREL</a> 
					<ul class="w3header-cart">
						<li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-notify my-cart-badge"></span></span></li>
					</ul>
				</div>
				<div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						
<li><a href="all.php?category_id=1">MEN</a></li>
<li><a href="all.php?category_id=2">WOMEN</a></li>
<li><a href="all.php?category_id=3">WOMEN ACCESSORIES</a></li>
<li><a href="all.php?category_id=4">MEN ACCESSORIES</a></li>

						
						
						
						
						
						
						
						
						
						<li class="wthreesearch">
							<form action="search.php" method="GET">
							
							
							<select name="user_query" id="search" class="form-control" placeholder="Search Our Product" required>
		<?php
global $id;
include('config.php');
$sql="select * from tbl_category where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$row['category_id'];
?>
<option value="<?php echo $row['category_name'];?>" style="font-weight:bold; font-size:16px;"><?php echo $row['category_name'];?></option>
<?php

$sql1="select * from tbl_product where category_id=$id and status=0";
$result1=mysqli_query($con,$sql1);
while($row1=mysqli_fetch_array($result1))
{
?>
<option value="<?php echo $row1['pro_name'];?>"><?php echo $row1['pro_name'];?></option>
<?php
}
?>
<?php
}
?>
                    </select>
								 &nbsp; 
								<button type="submit" style="margin-left: 157px;
    margin-top: -55px;
}" name="search" class="btn btn-default search" >
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</li>
						
					</ul>
				</div>

			</div>
		</nav>
		<!-- //Navigation -->



		<!-- Header-Top-Bar-(Hidden) -->
		<div class="agileheader-topbar">
			<div class="container">
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">
					
				</div>
				<div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">
					<ul>
					<li><a class="popup-with-zoom-anim" href="#small-dialog1">LOGIN</a></li>
						<li><a class="popup-with-zoom-anim" href="#small-dialog2">SIGN UP</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="faq.php">FAQ</a></li>
						
						
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>


<?php
include('config.php');
	if(isset($_POST['login']))
	{
		
		$user = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from tbl_login where email_id = '$user' and password = '$password' and status=0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
					$type= $row['type'];
			}
			if(($type=="admin")||($type=='Admin'))
			{
			$_SESSION['user'] = $user;								
	echo "<script language='javascript'>window.location.href='admin/index.php';</script>";
			}
			elseif(($type=="user")||($type=='User'))
			{
			$_SESSION['user'] = $user;
			echo "<script language='javascript'>window.location.href='user/index.php';</script>";
			}
			}
		else
		{
	echo "<script language='javascript'>alert('Your Emailid  or Password is wrong');</script>";
				
				
		}
		}
	?>
							  



				<!-- Popup-Box -->
				<div id="popup1">
					<div id="small-dialog1" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form action="#" method="post">
								<h3>LOGIN</h3>
								<input type="text" name="username" placeholder="Username" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<ul class="tick w3layouts agileinfo">
									
									<li>
										<a href="forgot.php">Forgot Password?</a>
									</li>
								</ul>
								<div class="send-button wthree agileits">
									<input type="submit"  name="login" value="LOGIN">
								</div>
							</form>
						</div>
					</div>
					
					
					
					
					
					
					
					
					
					<?php
				
include 'config.php';
if(isset($_POST['submit50']))
{
	$sql=("SELECT `contact_no` FROM `tbl_user` WHERE `contact_no`='".$_POST['contact_no']."'");
$result=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{

	$_SESSION['error']="Mobile Number Already Exist";
	$error=$_SESSION['error'];
	echo "<script language='javascript'>alert(".$error.")</script>";
	
	
}
else
{
	$otp=rand(0000,9999);
	$_SESSION['otp']=$otp;
	

	
$full_name=$_POST['full_name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$contact_no=$_POST['contact_no'];
$city=$_POST['city'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$id_proof=trim($_FILES['id_proof']['name']);


	
	

$sql1=("INSERT INTO `tbl_user`(`full_name`,`email_id`, `password`, `gender`, `contact_no`,`city`,`address`,`pincode`,
	`id_proof`,`create_date`,`otp`,`status`) VALUES ('".$_POST['full_name']."','".$_POST['email_id']."','".$_POST['password']."',
	'".$_POST['gender']."','".$_POST['contact_no']."','".$_POST['city']."','".$_POST['address']."','".$_POST['pincode']."','$id_proof',
	now(),'$otp',1)");
	
	
	$result1=mysqli_query($con,$sql1);
	
	$sql2=("INSERT INTO `tbl_login`(`email_id`, `password`, `type`, `status`) VALUES ('".$_POST['email_id']."','".$_POST['password']."','user',1)");
	$result2=mysqli_query($con,$sql2);
	if(mysqli_affected_rows($con)>0)
	
		
	
	if(mysqli_affected_rows($con)>0)
	{
		
		$msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=BXRkhawSnsUm03tHzxCy16P9JFuqQYjrZOW74Lg5oeTAldDI8VT84LgBM7AvH9ae0WItNX1wOCKhcJdi&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['contact_no']);

		echo "<script>alert('we have send OTP to your mobile number,pl enter that to verify your account');</script>";
	
		echo "<script>window.location.href='verify1.php?contact_no=".$contact_no."';</script>";
		
	}
	else
	{
		echo "<script>alert('Error creating account');</script>";
		echo "<script>window.location.href='index.php';</script>";
		
		
}
}}
?>	
		
				
					
					
					
					
					
					<div id="small-dialog2" class="mfp-hide agileinfo">
						<div class="pop_up">
							<form  method="post" enctype="multipart/form-data">
								<h3>SIGN UP</h3>
								
								
								<input type="text" name="full_name" class="form-control name-valid"  placeholder="full name" required="">
								
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
 $('.name-valid').on('keypress', function(e) {
  var regex = new RegExp("^[a-zA-Z ]*$");
  var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
  if (regex.test(str)) {
     return true;
  }
  e.preventDefault();
  return false;
 });
});
</script>  
								
								<input type="text" name="email_id" placeholder="email_id" required="">
								<input type="password" name="password" placeholder="password" required="">
								
							<label>Gender</label>	
					<input type="radio" name="gender" required="" value="male">male
					<input type="radio" name="gender
  required="" value="female">female	
  </br>
  
  
  
  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>                      
                            
                      <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
  
  
  
  
								<input type="text" name="contact_no" placeholder="Contact Number(* Input digits (0 - 9)" minlength="10" maxlength="10" required onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" > 
						
								<input type="text" name="city" placeholder="city" required="">
								<input type="text" name="address" placeholder="address" required="">
								<input type="text" name="pincode" placeholder="PinCode Number(* Input digits (0 - 9)" minlength="6" maxlength="6" required onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" > 
								<br>
								
								
								<?php
if(isset($_FILES['id_proof']))
{
    $file_name0 = $_FILES['id_proof']['name'];
    $file_tmp = $_FILES['id_proof']['tmp_name'];
    $file_size = $_FILES['id_proof']['size'];
   // echo $file_size;
	
    if($_FILES['id_proof']['size'] > 10485760)
    {
        echo "<br><br>Photo size is greater";
        
    }
    else
    {
        if(move_uploaded_file($file_tmp,'userimg/'.$file_name0))
        {
			

        }
    }
}
?>
								
								
								
								
								<label>User Image</label>
								
								<input type="file" name="id_proof" placeholder="id_proof" required="">
								
								</br></br>
						
						
								<div class="send-button wthree agileits">
									<input type="submit" name="submit50" value="SIGN UP">
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- //Popup-Box -->

		</div>
		<!-- //Header-Top-Bar-(Hidden) -->


		<!-- //Header-Top-Bar-(Hidden) -->