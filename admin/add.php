<?php
if (isset($_POST["submit"])){
	include('partial/_db.php');
    $fn=$_POST["fn"];
    $ln=$_POST["ln"];
    $mail=$_POST["mail"];
    $mno=$_POST["mno"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];
    $img=trim($_FILES["image"]["name"]);
    $add=$_POST["add"];
    $city=$_POST["city"];
    $gender=$_POST["gender"];




  if(isset($_FILES['image']))
{
  //file coading start
if(!is_dir('user images')){
  mkdir('user images');
}

   
  
// end of file
  $allowed = array("image/jpeg", "image/gif", "image/png");
  $file_type = $_FILES['image']['type'];
    $file_name0 = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
   // echo $file_size;
	 if(!in_array($file_type, $allowed)) {
     $error=true;
    $msg = 'Only jpg, gif, and png files are allowed.';
    header("location:/hi5-sharing/admin?err=true&&msg=$msg");    
    exit();
   }
    if($_FILES['image']['size'] > 10485760){
      $error=true;
        $msg= "Photo size is greater";
        header("location:/hi5-sharing/admin?err=true&&msg=$msg");   
        exit();
  }
    if(move_uploaded_file($file_tmp,'user images/'.$file_name0)){
  
      $sql = "INSERT INTO tbl_user(First_Name, Last_Name, Email_ID, Mobile_NO, Post, Password,
      City, Address, OTP, Timestamp, User_image,gender, is_active)
       VALUES
       ('$fn','$ln','$mail',$mno,0,'$pass','$city','$add',000000,now(),'$img','$gender',0)";
      
      if ($conn->query($sql) === TRUE) {
        $msg="Added User Successfully....";
        header("location:/hi5-sharing/admin?err=false&&msg=$msg"); 
    }

}
}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>