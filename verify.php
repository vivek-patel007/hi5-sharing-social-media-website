<?php
if(isset($_POST['submit12']))
{
	$contact_no=$_GET['contact_no'];
	
$user_otp=$_POST['otp'];
$sql="SELECT `otp` FROM `tbl_user` WHERE `Mobille_NO`=$contact_no";


list($otp)=mysqli_fetch_array(mysqli_query($con,$sql));
if($otp==$user_otp)
{
	$sql2="UPDATE `tbl_user` SET `is_active`=0 WHERE `contact_no`=$contact_no";
	
	$result2=mysqli_query($con,$sql2);
	
		
	// $sql3="UPDATE `tbl_login` SET `status`=0 WHERE `status`=1";
	// $result3=mysqli_query($con,$sql3);
	
	
	
	
	
	if(mysqli_affected_rows($con)>0)
	{
		
		echo "<script>alert('your account created successfully..you can now login to your acocount..');</script>";
		echo "<script>window.location.href='./dashboard.php';</script>";
		
		
	}
	else
	{
		
		echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify.php';</script>";
		
	}	
		
}
else
{
	echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify.php';</script>";
}
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Login 01</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!------ Include the above in your HEAD tag ---------->
<!-- <link rel="stylesheet" href="css/login.css"> -->
<style>

</style>
</head>
<body>
<?php
include("partial/_indexHeader.php");

?> 
<div class="container"style="    height: 80%;
    display: flex;
    justify-content: center;
    align-items: center;">
    <div class="col-md-9" style="box-shadow: 0px 0px 10px gray;">
                        <!-- Contact Form Start -->
                        <div class="contact--form" >
                            <div class="contact--title">
                                <h3 class="h4 text-center">Verify Mobile Number</h3>
                            </div>

                            <div class="contact--subtitle pt--15">
                                <h4 class="h6 fw--400 text-darkest">verify Your Mobile Number.</h4>
                            </div>

                            <div class="contact--notes ff--primary mt--2">
                                <p>(OTP Enter *)</p>
                            </div>

                            <form action="" method="post">
                                <div class="row gutter--20">
                                  
                                    <div class="col-xs-12 col-xxs-12">
                                        <div class="form-group">
                                            <input type="password" name="otp" placeholder="Enter OTP" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12 col-xxs-12">
                                        <div class="form-group">
                                            <input type="password" name="pass" placeholder="Enter Your Password" class="form-control" required>
                                                                    </div>
                                      
                                    </div> -->
                                   
                                    <div class="col-xs-12 text-center">
                                    <!-- <p><b class="mt-5"><a href="#" class="text-primary">Forget Password</a></b></p> -->
                                        <button type="submit" name="submit12" class="btn btn-primary mt--10">VERIFY</button>
                                    </div>
                                    <!-- <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <div class="col-xs-12 text-center">
                                    <label class="custom-control-label mt--5" for="customControlInline">Don't Have an Account</label>
                                    <p><strong><a href="#" class="text-primary" data-toggle="modal" data-target="#signupmodal">Sign Up</a></strong></p>
                                     </div> -->
                                </div>
                                </div>
                                <!-- </div> -->

                                <div class="status"></div>
                            </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        <!-- Contact Form End -->
  
<?php
include("partial/_indexFooter.php");

?>

</body>
</html>
