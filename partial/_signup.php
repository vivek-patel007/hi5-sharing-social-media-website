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




                                       <script language="Javascript" type="text/javascript">

function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;

    }
    catch (err) {
        alert(err.Description);
    
    }
}

</script>



                                          <div class="form-group col-md-6">
                                             <label class="control-label">First Name</label>
                                             <input  maxlength="100" type="text"   onKeyPress="return onlyAlphabets(event,this);" required="required" name="fn" class="form-control" placeholder="First name(Input only alphabets)"  />
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="control-label">Last Name</label>
                                             <input maxlength="100" type="text" onKeyPress="return onlyAlphabets(event,this);" required="required" name="ln" class="form-control" placeholder="Last name(Input only alphabets)" />
                                          </div>
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
                                          <div class="col-md-6 form-group">
                                             <label for="cno" class="control-label">Contact Number: *</label>
                                             <input type="text" minlength="10" maxlength="10"  onkeypress="return IsNumeric(event);" 
							ondrop="return false;" onpaste="return false;" class="form-control" required="required" id="cno" name="cno" placeholder="Contact Number">
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
                                             <textarea name="add" class="form-control" id="add" rows="1" required="required"></textarea>
                                                 </div>
                                                 <div class="col-md-12 mb-3 form-group mt-3">
                                                 <div class="custom-file">
                                                       <input type="file" name="image" class="custom-file-input" id="customFile">
                                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                                   
                                          </div>
                                       </div>
                                       </div>
                                       <button class="btn btn-primary mt--10 pull-right" type="submit"  >Sign Up</button>
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