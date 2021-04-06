<?php
	include('_db.php');
  if($_GET['cid']){
	$id=$_GET['cid'];
   echo $id;
	$sql = "UPDATE `tbl_contact` SET `is_active`=1 WHERE `cid`=$id ";
    if ($conn->query($sql) === TRUE) {
        $msg="Record has been successfully deleted...";
        header("location: ../contact.php?msg=$msg && err=false");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
}
?>