
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>socimo | Dashboard</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<div class="page-loader" id="page-loader">
	 <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
	  <span>Loading...</span>
  </div><!-- page loader -->
<div class="theme-layout gray-bg vh-100">
	
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
                <div class="logo-up">
                    <figure class="logo"><img alt="" src="images/logo.png"><span>HI5 ADD USER</span></figure>
                </div>
                <div class="box">
                <!-- <div class="page-wrapper bg-dark p-t-100 p-b-50"> -->
        <!-- <div class="wrapper wrapper--w900"> -->
        <form method="post" action="add.php" class="form-inline"  enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" name="fn" id="validationDefault01" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" name="ln" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault10">E-Mail Address</label>
      <div class="input-group">
        <!-- <div class="input-group-prepend"> -->
          <!-- <span class="input-group-text" id="inputGroupPrepend2">@</span> -->
        <!-- </div> -->
        <input type="text" name="mail" class="form-control" id="validationDefaultUsername" placeholder="jon@gmail.com" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationDefault04">Mobile No</label>
      <input type="text" class="form-control" name="mno" id="validationDefault04" placeholder="+91 (123)-444-555" required>
    
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationDefault03">Password</label>
      <input type="password" class="form-control" name="pass" id="validationDefault03" placeholder="Password" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault05">Confirm Password</label>
      <input type="password" class="form-control" name="cpass" id="validationDefault05" placeholder="Confirm Password" required>
    </div>
  </div>

  <div class="form-row">
  <div class="col-md-6 mb-3">
      <label for="validationDefault05">city</label>
      <input type="password" name="city" class="form-control" id="validationDefault05" placeholder="Confirm Password" required>
    </div>
  <div class="col-md-3 mb-3">
  <div class="form-group">
    <label for="exampleFormControlFile1">user image</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <!-- <div class="form-group"> -->
  <!-- <div class="name">Upload CV</div> -->
                            <!-- <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file mx-5" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file"> Image</label>
                                   
                                    <span class="input-file__info">No file chosen</span>
                                </div> -->
                                <!-- </div> -->
                               
                            <!-- </div> -->
</div>
</div>

<div class="col-md-6 mb-3">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="add" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

<div class="col-md-6 mb-3">
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>




<!-- <div class="col-md-6 mb-3">
<div class="form-group">
<select name="gender" class="form-control">

<option value="select gender">select gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
  </div>
</div>
</div> -->
<div class="form-row">
<div class="col-md-6 mb-3">
  <button class="btn btn-primary ml-5" name="submit" type="submit">Submit form</button>
  </div>
  </div>
</form>
        <!-- </div>
    </div> -->

	
	<script src="js/main.min.js"></script>
	<script src="js/vivus.min.js"></script>
	<script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	    <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>


<!-- Main JS-->
<script src="js/global.js"></script>

</body>	
</html>