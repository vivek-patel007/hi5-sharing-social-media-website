<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include('_db.php');
    $ptitle=$_POST["ptitle"];
    $pprice=$_POST["pprice"];
    $pstart=$_POST["pstart"];
    $pend=$_POST["pend"];
    $psize=$_POST["psize"];
    $pduration=$_POST["pduration"];
    $pdesc=$_POST["pdesc"];
  
      
      $sql = "INSERT INTO `tbl_package`
      (package_price, package_description, package_title, package_size, package_start, package_end, duration, timestamp, is_active) 
      VALUES('$pprice','$pdesc','$ptitle','$psize','$pstart','$pend','$pduration',now(),'0')";
      
      if ($conn->query($sql) === TRUE) {
        $msg="Added Package Successfully....";
        header("location:../index.php?err=false&&msg=$msg"); 
    }


}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>