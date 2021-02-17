<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>socimo | Dashboard</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

</head>

    <?php
include("partial/_header.php");
include("partial/_sidebar.php");

	$sql = "SELECT * FROM `tbl_user`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
                    <h4 class="main-title">Users Management</h4>
                    <!-- <div class="row merged20 mb-4">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-widget soft-red">
                                <div class="d-widget-title">
                                    <h5>Realtime Users</h5>
                                </div>
                                <div class="d-widget-content">
                                    <span class="realtime-ico pulse"></span>
                                    <h6>Updating live</h6>
                                    <h5></h5>
                                    <i class="icofont-users-alt-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-widget soft-blue">
                                <div class="d-widget-title">
                                    <h5>Realtime Watch</h5>
                                </div>
                                <div class="d-widget-content">
                                    <span class="realtime-ico pulse"></span>
                                    <h6>Updating live</h6>
                                    <h5>5016</h5>
                                    <i class="icofont-optic"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="d-widget soft-green">
                                <div class="d-widget-title">
                                    <h5>Realtime Posts</h5>
                                </div>
                                <div class="d-widget-content">
                                    <span class="realtime-ico pulse"></span>
                                    <h6>Updating live</h6>
                                    <h5>5.3K</h5>
                                    <i class="icofont-computer"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row merged20 mb-4">
                        <div class="col-lg-12">
                            <div class="d-widget">
                                <div class="d-widget-title">
                                    <h5>Manage Users</h5>
                                </div>
                                <div class="d-widget-content">
                                    <table class="table manage-user table-default table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>View profile</th>
                                                <th>Chat History</th>
                                                <th>Post</th>
                                                <th>Mobile NO</th>
                                                <th>Email</th>
                                                <th>OTP</th>
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
 $first=$row["First_Name"];
 $last=$row["Last_Name"];
 $email=$row["Email_ID"];
 $mobile=$row["Mobile_NO"];
 $post=$row["Post"];
 $otp=$row["OTP"];
 $xender=$row["xender"];
?>
	<tr>
	<td>
		<figure><img src="images/resources/user.png" alt=""></figure>
  <input type="text" class="input-group input-group-sm" id="inlineFormInput" placeholder="Jane Doe">
	</td>
	<td><a class="mini-btn" href="#" title="">view</a></td>
	<td><a class="mini-btn" href="#" title="">view</a></td>
	<td>
		
        <h5><?php echo $post; ?></h5>
		
	</td>    
	<td>
		
        <h5><?php echo $mobile; ?></h5>
		
	</td>
    <td>
		
    <h5><?php echo $email; ?></h5>
    
</td>
	<td>
    <h5><?php echo $otp; ?></h5>
	</td>
	<td>
		<div class="button soft-danger"><a href="hello.php"><i class="icofont-trash"></i><a></div>
		<div class="button soft-primary"><a href=""><i class="icofont-pen-alt-1"></i></a></div>	
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
                    <script src="js/main.min.js"></script>
    <script src="js/vivus.min.js"></script>
    <script src="js/script.js"></script>

    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="js/graphs-scripts.js"></script>



</body>

</html>