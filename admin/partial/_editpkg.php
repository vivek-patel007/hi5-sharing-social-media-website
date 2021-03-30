<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include('_db.php');
    $id=$_POST['id'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $size=$_POST['size'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $dur=$_POST['dur'];
    $desc=$_POST['desc'];
    echo $id;
$sql = "UPDATE `tbl_packages` SET `package_price`='$price',
`package_description`='$desc',`package_title`='$title',`package_size`='$size',
`package_start`='$start',`package_end`='$end',`duration`='$dur',`timestamp`=now(),
`is_active`='0' WHERE package_id='$id'";

if ($conn->query($sql) === TRUE) {
    $msg="Edit Package Successfully....";
    header("location:/hi5-sharing-social-media-website/admin/packages.php?err=false&&msg=$msg");
  
} else {
  echo "Error updating record: " . $conn->error;
}
}

$conn->close();
?>