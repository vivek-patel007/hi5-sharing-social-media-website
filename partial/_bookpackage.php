<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include('_db.php');
    $id=$_POST["package_id"];
    $mail=$_POST["usermail"];
    $rs=$_POST["price"];
    $duration=$_POST["duration"];
    $sdate=date('Y-m-d');
    $expiry_date=date("Y-m-d",strtotime("+$duration days"));
  
       $sql = "INSERT INTO `tbl_packagebooking`(`Amounts`, `Payment_Status`, `Timestamp`, `Package_ID_id`, `user_email`, `is_active`,'start_date', 'end_date', duration)
        VALUES ('$rs','pending',now(),'$id','$mail',1,'$sdate','expiry_date', 'duration')";
      
      if ($conn->query($sql) === TRUE) {
        $msg="booked your Package Successfully....";
        header("location:../dashboard.php?err=false&&msg=$msg"); 
    }


}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>