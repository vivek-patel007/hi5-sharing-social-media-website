<?php
	ob_start();
  session_start();
  if(!$_SESSION['login'])
  {
    header("Location: login.php");
  }
global $user,$id;
@$user=$_SESSION["user"];			
if($user == "")
{
   header("location: login.php");
}

                              include("_db.php");
                              // $sql="select usr.stream_name,lgn.* from tbl_subject lgn INNER JOIN tbl_stream pl ON pl.stream_id=lgn.stream_id where lgn.status=0";
                              $sql = "SELECT * FROM `tbl_User` WHERE Email_ID='$user'";
                              $result = $conn->query($sql);
                              $result->num_rows;
                           
                                $row = $result->fetch_assoc();
                                @$id=$row['User_ID'];

?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include("_db.php");
    $pt=$_POST["pt"];
    $pc=$_POST["pc"];
    // $img1=$_POST['post'];
    $post=trim($_FILES["post"]["name"]);
    // $gender = array('male','female');
    // $selected_key = $_POST['gender'];
    // $selected_val = $gender[$_POST['gender']];



  if(isset($_FILES['post']))
{
  //file coading start
if(!is_dir('user posts')){
  mkdir('user posts');
}

   
  

  $file_type = $_FILES['post']['type'];
    $file_name0 = $_FILES['post']['name'];
    $file_tmp = $_FILES['post']['tmp_name'];
    $file_size = $_FILES['post']['size'];

    if($_FILES['post']['size'] > 10485760){
      $error=true;
        $msg= "Photo size is greater";
        header("location:/hi5-sharing/signup.php?err=true&&msg=$msg");   
        exit();
  }

    if(move_uploaded_file($file_tmp,'user posts/'.$file_name0)){
    $post=trim($_FILES["post"]["name"]);
    // $ext = pathinfo($filename, PATHINFO_EXTENSION);
      $sql = "INSERT INTO `tbl_post`(`type`, `Post`, `Post_Title`, `Post_Caption`, `Timestamp`, `User_ID_id`) 
        VALUES
       ('$file_type','$post','$pt','$pc',now(),'$id')";

// $result1=mysqli_query($con,$sql1);
    
// $sql2=("INSERT INTO tbl_login (Email_ID, Password, Type) VALUES ('$mail','$pass','user')");
// $result2=mysqli_query($conn,$sql2);
// if(mysqli_affected_rows($conn)>0)

  

// if(mysqli_affected_rows($conn)>0)
// {
  if ($conn->query($sql) === TRUE) {
 
  
  // $msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=BXRkhawSnsUm03tHzxCy16P9JFuqQYjrZOW74Lg5oeTAldDI8VT84LgBM7AvH9ae0WItNX1wOCKhcJdi&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['contact_no']);
  $msg=urlencode('added post success...... ');
  header("location:/hi5-sharing/dashboard.php?err=false&&msg=$msg");  
} 
// if ($conn->query($sql) === TRUE) {
//   $msg="Added User Successfully....";
//   header("location:/hi5-sharing/dashboard.php?err=false&&msg=$msg");  
// }
}
      
    //   if ($conn->query($sql) === TRUE) {
    //     $msg="Added User Successfully....";
    //     header("location:/hi5-sharing/dashboard.php?err=false&&msg=$msg");  
    // }

    
}
}
?>