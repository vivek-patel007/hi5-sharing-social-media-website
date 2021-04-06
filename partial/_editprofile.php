<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	include('_db.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $User_image = trim($_FILES['User_image']['name']);
    if($_FILES["User_image"]["name"] == ''){
        $User_image = $_POST['User_image'];
	}
	else{
		 $User_image = $_FILES['User_image']['name'];
    $city=$_POST['city'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $id=$_POST['id'];

    // $sql = "UPDATE `tbl_user` SET `First_Name`='$fname',`Last_Name`='$lname',
    // `Mobile_NO`='$mobile',`City`='$city',`Address`=$address,`User_image`=[value-12],`gender`='$gender' WHERE 1";
    
    
	target=""
 if(move_uploaded_file($User_image,,$User_image){
        $sql = "UPDATE `tbl_user` SET `First_Name`='$fname',`Last_Name`='$lname',
        `Mobile_NO`='$mobile',`City`='$city',`Address`='$address',`User_image`='$User_image',`gender`='$gender'
         WHERE `User_ID`='$id'";
 
    
    if ($conn->query($sql) === TRUE) {
        $msg="Edit profile Successfully....";
        header("location:../profiledit.php?err=false&&msg=$msg");
  
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
}
}
$conn->close();

?>

$image = trim($_FILES['image']['name']);
if($_FILES["image"]["name"] == ''){
		 $image = $_POST['image'];
	}
	else{
		 $image = $_FILES['image']['name'];
	}
 move_uploaded_file($image,'tutorimage/'.$image);