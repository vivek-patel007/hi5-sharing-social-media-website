
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
<div class="theme-layout gray-bg vh-300">
	
	<div class="container" style="height: 100%;">
		<div class="row justify-content-md-center">
			<div class="col-lg-8">
                <div class="logo-up mb-10">
                    <figure class="logo"><img alt="" src="../img/ico/apple-icon-76x76.png"><span>SHARING Add Package</span></figure>
                </div>
                <div class="container"style="    height: 75%;
    display: flex;
    justify-content: center;
    align-items: center;">
    <div class="col-md-9 mt-10" style="box-shadow: 0px 0px 10px gray;">
                <!-- <div class="page-wrapper bg-dark p-t-100 p-b-50"> -->
        <!-- <div class="wrapper wrapper--w900"> -->
        <form method="post" class="mt-5" action="partial/_add-package.php">
     
  <div class="row">

    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Package Title</label>
      <input type="text" class="form-control" name="ptitle" id="validationDefault01" placeholder="Enter Package Title" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Package Price</label>
      <input type="text"  class="form-control" name="pprice" id="validationDefault02" placeholder="Enter Package Price" required>
    </div>
  </div>

  <div class="row">

    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="text-right">Package Start</label>
      <input type="text" id="TextBox1"  class="form-control" name="pstart" placeholder="DD/MM/YYYY" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Package End</label>
      <input type="text"  class="form-control" name="pend" id="TextBox2" placeholder="DD/MM/YYYY" required>
    </div>
  </div>
  <div class="row">
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Package Duration</label>
      <input type="text"  class="form-control"   name="pduration" id="TextBox3" placeholder="DD/MM/YYYY" readonly>
    </div>
</div>
  <div class="row">
<div class="col-md-12 mb-3">
<div class="form-group">
      <label for="inputState">Package Size</label>
      <select id="inputState" name="psize" class="form-control">
        <option selected>Choose Package Size...</option>
        <option>8 GB</option>
        <option>16 GB</option>
        <option>64 GB</option>
        <option>128 GB</option>
       
      </select>
    </div>
</div>
</div>


  <div class="row">
<div class="col-md-12 mb-3">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Package Description</label>
    <textarea  class="form-control" name="pdesc" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div>

  <div class="row">
<div class="col-md-6 mb-3">
  <button class="btn btn-primary" style="margin-left: 950%;"  name="submit" type="submit">Submit</button>

  </div>
</form>
        </div>
    </div>
        </div>
    </div>
    </div>

	
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




<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
$("#TextBox1").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#TextBox2").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
</script>

</body>	
</html>