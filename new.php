<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
<style>
 body { max-width: 5000px;
  overflow: scroll; 
  .sticky {
  position: fixed;
  top: 0;
  width: 100%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 102px;
} }
</style>
   </head>
   <body style="sticky overflow: scroll;">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
       <?php include("partial/_header.php"); ?>
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div> 
              <div id="circle-xxlarge"></div>
          </div>
            <div class="content container p-0">
                <div class="row no-gutters">
               
                    <div class="col-md-12 bg-white pt-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign Up</h1>
                            <p>Enter your email address and password to access admin panel.</p>
                            <form class="mt-10">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your First Name">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your Last Name">
                                </div>
</div>
<div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter E-Mail">
                                </div>
                             
                                <div class="form-group col-6">
                                <label for="exampleInputPassword1">Contact Number</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Contact Number">
                                  
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-6">
                                <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                    
                                </div>
                                <div class="form-group col-6">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Confirm Password">
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">City</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="City">
                                </div>
                                <div class="form-group col-6">
                                          <label for="exampleFormControlSelect1">Select Gender</label>
                                                 <select class="form-control" class="form-control mb-0" name="gender" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select your Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value = "female">Female</option>
            
                                                 </select>
                                          </div>
                                          </div>
                                          <div class="row">
                                <div class="form-group col-12">
                                <label for="address" class="control-label">Address: *</label>
                                             <textarea name="add" class="form-control mb-0" id="add" rows="3" required="required"></textarea>
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-12">
                                <div class="custom-file">
                                                       <input type="file" name="image" class="custom-file-input" id="customFile">
                                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                                   
                                          </div>
                                </div>
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" id="xyz" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="#">Log In</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
<script>
jQuery(document).ready(function($) {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 130) {
      $(".robig").addClass("fixed-top");
    } else {
      $(".robig").removeClass("fixed-top");
    }  
  });

});
</script>
   </body>
</html>