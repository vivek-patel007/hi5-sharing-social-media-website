<?php
	include('partial/_db.php');
  if($_GET['User_ID']){
	$id=$_GET['User_ID'];
   echo $id;
	$sql = "UPDATE `tbl_user` SET `is_active`=1 WHERE `User_ID`=$id ";
    if ($conn->query($sql) === TRUE) {
        $msg="Record has been successfully deleted...";
        header("location:/hi5-sharing/admin?msg=$msg && err=false");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>View data</h2>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
		<th>City</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
</div>


</body>
</html>


