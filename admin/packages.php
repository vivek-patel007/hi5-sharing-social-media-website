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

	$sql = "SELECT * FROM `tbl_packages` WHERE is_active='0'";
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
                                    <h5>Latest Transcations</h5>
									<a href="package-form.php" class="float-right btn btn-outline-dark mt-0 mb-2 mx-3" role="button" aria-pressed="true">+ ADD PACKAGES</a>
                                </div>
                                <table class="table-default table table-striped table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Package ID</th>
                                            <th>Package Title</th>
                                            <th>Package Price</th>
                                            <th>Package Size</th>
                                            <th>Package Start Date</th>
                                            <th>Package End Date</th>
                                            <th>Package Totle Duration</th>
                                            <th>Package Description</th>
                                            <th>TimeStamp</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
// 	$sql = "SELECT * FROM `tbl_user`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
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
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $price; ?></td>
                                            
                                            <td><?php echo $size; ?></td>
                                            <td><?php echo $start; ?></td>
                                            <td><?php echo $end; ?></td>
                                            <td><?php echo $duration; ?></td>
                                            <td><?php echo $desc; ?></td>
                                            <td><?php echo $timestamp; ?></td>
                                            <td>
                                            <div class="button soft-danger"><a class="delete" href="DeletePackage.php?pkg_id=<?php echo $id; ?>">
                                            <i class="icofont-trash"></i><a></div>

  </td>
  <td>
                                                <div class="button soft-primary"><a class="delete" href="EditPackage.php?pkg_id=<?php echo $id; ?>">
                                                <i class="icofont-pen-alt-1"></i></div>
                                            </td>
                                        </tr>
 <?php          
      }
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

	

</body>	
</html>