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
                        <div class="contact--form" data-form="ajax">
                            <div class="contact--title">
                                <h3 class="h4 text-center">Log In</h3>
                            </div>

                            <div class="contact--subtitle pt--15">
                                <h4 class="h6 fw--400 text-darkest">Don’t worry ! your e-mail address will not published.</h4>
                            </div>

                            <div class="contact--notes ff--primary mt--2">
                                <p>(Required field are marked *)</p>
                            </div>

                            <form action="forms/contact-form.php" method="post">
                                <div class="row gutter--20">
                                  
                                    <div class="col-xs-12 col-xxs-12">
                                        <div class="form-group">
                                            <input type="email" name="email"  placeholder="Enter Your E-mail Address" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-xxs-12">
                                        <div class="form-group">
                                            <input type="password" name="pass" placeholder="Enter Your Password" class="form-control" required>
                                                                    </div>
                                      
                                    </div>
                                   
                                    <div class="col-xs-12 text-center">
                                    <p><b class="mt-5"><a href="forgetpassword.php" class="text-primary">Forget Password</a></b></p>
                                        <button type="submit" class="btn btn-primary mt--10">Send Message</button>
                                    </div>
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <div class="col-xs-12 text-center">
                                    <label class="custom-control-label mt--5" for="customControlInline">Don't Have an Account</label>
                                    <p><strong><a href="#" class="text-primary" data-toggle="modal" data-target="#signupmodal">Sign Up</a></strong></p>
                                     </div>
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
