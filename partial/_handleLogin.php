
<?php
ob_start();
session_start();
?>

<?php

// We need to use sessions, so you should always start sessions using the below code.



  if($_SERVER['REQUEST_METHOD']=="POST"){
    include('_db.php'); 
    $user=$_POST['lemail'];
    $lpass=$_POST['lpass'];
      // $sql="SELECT * FROM `tbl_User` WHERE Email_ID='$lemail' AND Password='$lpass'";
      $sql="SELECT * FROM `tbl_login` WHERE Email_ID='$user' AND Password='$lpass'";
      // $res2=$conn->query($sql2);
      // $row2=$res2->num_rows;
      $res=$conn->query($sql);
      $row=$res->num_rows;
          if($row >=1){
                  while($row=$res->fetch_assoc()){
                    $type= $row['Type'];
                    if(($type=="admin")||($type=='Admin')){
                    // $_SESSION['user'] = $user;
                    session_regenerate_id();
                    $_SESSION['login'] = true;
                    // $msg="invelid email or password";

                    header('location: ../admin/index.php?login=true'); 
                    }elseif(($type=="user")||($type=='User')){
                    // $_SESSION['user'] = $user;
                    session_regenerate_id();
                    $_SESSION['login'] = True;
                    $_SESSION['user'] = $user;
                    $_SESSION['id'] = $row['User_ID'];
                    
                    // echo "<script language='javascript'>window.location.href='user/index.php';</script>";
                    header('location: ../dashboard.php?login=true'); 
            
                   }else{
                   // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
                   $msg="invelid email or password";
                  
                   $_SESSION['msg'] = $msg;
                   header('location: ../login.php?login=false&&msg=$msg');         
            
                    }
                  }
                }else{
                  $msg="invelid email or password";
               
                  $_SESSION['msg'] = $msg;
                  // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
                  header('location: ../login.php?login=false');         
           
                   } 
   }
 
            

      
?>