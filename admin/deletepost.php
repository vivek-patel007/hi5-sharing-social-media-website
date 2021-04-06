<?php
	include('partial/_db.php');
  if($_GET['post_id']){
	$id=$_GET['post_id'];
   echo $id;
	$sql = "UPDATE `tbl_post` SET `is_active`=1 WHERE `Post_ID`=$id ";
    if ($conn->query($sql) === TRUE) {
        $msg="Record has been successfully deleted...";
        header("location:index.php?msg=$msg && err=false");
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
}
?>