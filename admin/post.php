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
?>
<?php
                    $sql2 = "SELECT * FROM `tbl_post` WHERE is_active=0";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {

    ?>
        <div class="container-fluid">
        <div class="row">
        <!-- <div class="col-lg-12"> -->
                <div class="panel-content">
                    <!-- <h4 class="main-title">Users Management</h4> -->
                    <div class="row merged20 mb-4">
                        <div class="col-lg-12">
                            <div class="d-widget">
                                <div class="d-widget-title">
                                    <h5>Latest user Posts</h5>
                                </div>
                                <table class="table-default table table-striped table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Post#</th>
                                            <th>Post Title</th>
                                            <th>Post Caption</th>
                                            <th>Post Type</th>
                                            <th>Post</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
// 	$sql = "SELECT * FROM `tbl_user`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  
  while($row2 = $result2->fetch_assoc()) {
 $id=$row2["Post_ID"];
 $type=$row2["type"];
 $title=$row2["Post_Title"];
 $caption=$row2["Post_Caption"];
 $post=$row2["Post"];
 $timestamp=$row2["Timestamp"];
?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td> <?php echo $title; ?></td>
                                            <td><?php echo $caption; ?></td>
                                            <td><?php echo $type; ?></td>

                                            <td>  <figure><img src="../partial/user posts/<?php echo $post ; ?>" alt="..." class="img-fluid img-thumbnail w-100"></figure></td>
                                            <td><?php echo $timestamp; ?></td>
                                         
                                            <td>
                                            <div class="button soft-danger"><a class="delete" href="deletepost.php?post_id=<?php echo $id; ?>">
                                            <i class="icofont-trash"></i><a></div>
                                                <!-- <div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div> -->
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
     
    <!-- main content -->

	
	<script src="js/main.min.js"></script>
	<script src="js/vivus.min.js"></script>
	<script src="js/script.js"></script>
	<script src="plugins/apex/apexcharts.min.js"></script>
	<script src="js/graphs-scripts.js"></script>

	

</body>	
</html>