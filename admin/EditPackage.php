<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Dashboard</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include("partial/_header.php");
include("partial/_sidebar.php");
$gid=$_GET['pkg_id'];
	$sql = "SELECT * FROM `tbl_packages` WHERE package_id='$gid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
 <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
<div class="row merged20 mb-4">
                        <div class="col-lg-12">
                            <div class="d-widget">
                                <div class="d-widget-title">
                                    <h5>Edit Package</h5>
									
                                </div>
                                <table class="table-default table table-striped table-responsive-md">
                                    <!-- <thead> -->
                                    <?php
// 	$sql = "SELECT * FROM `tbl_user`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  
  $row = $result->fetch_assoc(); 
 $id=$row["package_id"];
 $price=$row["package_price"];
 $title=$row["package_title"];
 $size=$row["package_size"];
 $start=$row["package_start"];
 $end=$row["package_end"];
 $duration=$row["duration"];
 $desc=$row["package_description"];
 $timestamp=$row["timestamp"];
 
?>
                                        <tr>
                                        <tbody>
                                        <form action="partial/_editpkg.php" method="post">
                                            <th>Package ID</th>
                                            <td><input type="text" name="id" value= "<?php echo $id; ?>" readonly></td>
                                            <tr>
                                            <th>Package Title</th>
                                            <td> <input type="text" name="title" value= "<?php echo $title; ?>" id=""></td>
                                            </tr>
                                            <tr>
                                            <th>Package Price</th>
                                            <td> <input type="text" name="price" value= "<?php echo $price; ?>" id=""></td>
                                            </tr>
                                            <tr>
                                            <th>Package Size</th>
                                            <td> <input type="text" name="size" value= "<?php echo $size; ?>" id=""></td>
                                            </tr>
                                            <tr>
                                            <th>Package Start Date</th>
                                            <td> <input type="text" name="start" value= "<?php echo $start; ?>" id="TextBox1"></td>
                                            </tr>
                                            <tr>
                                            <th>Package End Date</th>
                                            <td> <input type="text" name="end" value= "<?php echo $end; ?>" id="TextBox2"></td>
                                            </tr>
                                            <tr>
                                            <th>Package Totle Duration</th>
                                            <td> <input type="text" name="dur" value= "<?php echo $duration; ?>" id="TextBox3"></td>
                                            </tr>
                                            <tr>
                                            <th>Package Description</th>
                                            <td> <input type="text" name="desc" value= "<?php echo $desc; ?>" id=""></td>
                                            </tr>
                            
  <tr>
  <td colspan=2 class="text-center">
                                               <input type="submit" class="btn btn-success btn-lg btn-block" value="EDIT" name="submit">
                                            </form>
                                        </td>
                                        </tr>
 <?php          
    //   }
} else {
  echo "0 results";
}
$conn->close();
?>   

                                    </tbody>
                                    
                                </table>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div><!-- main content -->

	
	<script src="js/main.min.js"></script>
	<script src="js/vivus.min.js"></script>
	<script src="js/script.js"></script>
	<script src="plugins/apex/apexcharts.min.js"></script>
	<script src="js/graphs-scripts.js"></script>
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