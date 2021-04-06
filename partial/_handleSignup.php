<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include("_db.php");
    $fn=$_POST["fn"];
    $ln=$_POST["ln"];
    $mail=$_POST["emailid"];
    $mno=$_POST["cno"];
    $pass=$_POST["pwd"];
    $cpass=$_POST["cpwd"];
    // $img1=$_POST['image'];
    $img=trim($_FILES["image"]["name"]);
    $add=$_POST["add"];
    $city=$_POST["city"];
    $gender=$_POST["gender"];
    // $gender = array('male','female');
    // $selected_key = $_POST['gender'];
    // $selected_val = $gender[$_POST['gender']];



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
    header("location:index.php?err=true&&msg=$msg");    
    exit();
   }
    if($_FILES['image']['size'] > 10485760){
      $error=true;
        $msg= "Photo size is greater";
        header("location:login.php?err=true&&msg=$msg");   
        exit();
  }
  if($pass !== $cpass && $pass <=6){
    $msg= "Password are not match or is to much sort !!";
    header("location:index.php?err=true&&msg=$msg");  
    $conn->close();
  }
  //start otp sys

  //end otp sys
    if(move_uploaded_file($file_tmp,'user images/'.$file_name0)){
      $sql=("SELECT `Mobile_NO` FROM `tbl_user` WHERE `Mobile_NO`='".$_POST['Mobile_NO']."'");
      $result=mysqli_query($con,$sql);
      if(mysqli_affected_rows($con)>0)
      {
      
        $_SESSION['error']="Mobile Number Already Exist";
        $error=$_SESSION['error'];
        echo "<script language='javascript'>alert(".$error.")</script>";
        
        
      }
      else
      {
        $otp=rand(0000,9999);
        $_SESSION['OTP']=$otp;

      $sql = "INSERT INTO tbl_user(First_Name, Last_Name, Email_ID, Mobile_NO, Post, Password,
      City, Address, OTP, Timestamp, User_image,gender, is_active)
       VALUES
       ('$fn','$ln','$mail',$mno,0,'$pass','$city','$add',$otp,now(),'$img','$gender',1)";

$result1=mysqli_query($con,$sql1);
    
$sql2=("INSERT INTO tbl_login (Email_ID, Password, Type) VALUES ('$mail','$pass','user')");
$result2=mysqli_query($conn,$sql2);
// if(mysqli_affected_rows($conn)>0)

  

// if(mysqli_affected_rows($conn)>0)
// {
  
  
  
// }
// else
// {
//   echo "<script>alert('Error creating account');</script>";
//   echo "<script>window.location.href='index.php';</script>";
  
  
// }
}
      
      if ($conn->query($sql) === TRUE) {
        $msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=BXRkhawSnsUm03tHzxCy16P9JFuqQYjrZOW74Lg5oeTAldDI8VT84LgBM7AvH9ae0WItNX1wOCKhcJdi&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST["cno"]);

          echo "<script>alert('we have send OTP to your mobile number,pl enter that to verify your account');</script>";
        
          echo "<script>window.location.href='verify.php?contact_no=".$mno."';</script>";
        // $msg="Added User Successfully....";
        // header("location:/hi5-sharing/verify.php?err=false&&msg=$msg"); 
    }

}
}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>