<!-- signupmodal -->
<!-- <div class="container"> -->
<div
        class="modal fade"
        id="signupmodal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up Form</h5>
              <!-- <button
                type="button"
                class="btn-close"
                data-mdb-dismiss="modal"
                aria-label="Close"
              ></button> -->
            </div>
            <div class="modal-body p-4">
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
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->

      <!-- signupmodal -->