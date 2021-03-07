<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->


    
   </head>
   <body>
<?php
include("partial/_header.php");

// include("partial/_sidebar.php");
?> 
 <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card position-relative inner-page-bg bg-primary" style="height: 150px;">
                        <div class="inner-page-title">
                           <h3 class="text-white">Sign Up Page</h3>
                           <!-- <p class="text-white">lorem ipsum</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Sign Up</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="stepwizard mt-4">
                        
                                 <!-- </div>
                              </div>
                           </div> -->
                           <form class="form" method="post" action="partial/_handleSignup.php" enctype="multipart/form-data">
                              <div class="row setup-content" id="user-detail">
                                 <div class="col-sm-12">
                                    <div class="col-md-12 p-0">
                                       <h3 class="mb-4">User Information:</h3>
                                       <div class="row">
                                          <div class="form-group col-md-6">
                                             <label class="control-label">First Name</label>
                                             <input  maxlength="100" type="text" required="required" name="fn" class="form-control" placeholder="Enter First Name"  />
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="control-label">Last Name</label>
                                             <input maxlength="100" type="text" required="required" name="ln" class="form-control" placeholder="Enter Last Name" />
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="cno" class="control-label">Contact Number: *</label>
                                             <input type="text" class="form-control" required="required" id="cno" name="cno" placeholder="Contact Number">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="emailid" class="control-label">Email Id: *</label>
                                             <input type="email" id="emailid" class="form-control" required="required" name="emailid" placeholder="Email ID">
                                          </div>
                                          <div class="col-md-6 form-group">
                                    
                                             <label for="pwd" class="control-label">Password: *</label>
                                             <input type="password" class="form-control" required="required" id="pwd" name="pwd" placeholder="Password">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="cpwd" class="control-label">Confirm Password: *</label>
                                             <input type="password" class="form-control" id="cpwd" required="required" name="cpwd" placeholder="Confirm Password">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label for="cno" class="control-label">City: *</label>
                                             <input type="text" class="form-control" required="required" id="city" name="city" placeholder="Contact Number">
                                          </div>
                                          <div class="col-md-6 form-group">
                                          <label for="exampleFormControlSelect1">Select Gender</label>
                                                 <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select your Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value = "female">Female</option>
            
                                                 </select>
                                          </div>
                                          <div class="col-md-12 mb-3 form-group">
                                          <label for="address" class="control-label">Address: *</label>
                                             <textarea name="add" class="form-control" id="add" rows="5" required="required"></textarea>
                                                 </div>
                                                 <div class="col-md-12 mb-3 form-group mt-3">
                                                 <div class="custom-file">
                                                       <input type="file" name="image" class="custom-file-input" id="customFile">
                                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                                   
                                          </div>
                                       </div>
                                       </div>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Submit</button>
</form>
                                    </div>
                                 </div>
                              </div>
                            
    
</body>
</html>