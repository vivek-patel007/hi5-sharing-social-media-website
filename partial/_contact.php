<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include("_db.php");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $sub=$_POST["subject"];
    $msg=$_POST["message"];
   
    $sql = "INSERT INTO tbl_contact (`name`, `subject`, `email`, `massage`) 
    VALUES ('$name','$sub','$email','$msg')";


  if ($conn->query($sql) === TRUE) {
 echo "success";
  
  $msg=('added contact success...... ');
  header("location: ../dashboard.php?err=false&&msg=$msg");
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

    
?>