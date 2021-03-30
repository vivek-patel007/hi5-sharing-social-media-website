<?php
	include('partial/_db.php');
  if($_GET['pkg_id']){
	$id=$_GET['pkg_id'];
   echo $id;
	$sql = "UPDATE `tbl_packages` SET `is_active`=1 WHERE `package_id`=$id ";
    if ($conn->query($sql) === TRUE) {
        $msg="Record has been successfully deleted...";
        header("location:packages.php?msg=$msg && err=false");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
}
?>