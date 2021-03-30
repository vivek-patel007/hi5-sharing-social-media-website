<?php

  if($_SERVER['REQUEST_METHOD']=="POST"){
    include('_db.php'); 
    $lemail=$_POST['lemail'];
    $lpass=$_POST['lpass'];
    $_SESSION['login'] = false;
      // $sql="SELECT * FROM `tbl_User` WHERE Email_ID='$lemail' AND Password='$lpass'";
      $sql="SELECT * FROM `tbl_login` WHERE Email_ID='$lemail' AND Password='$lpass'";
      // $res2=$conn->query($sql2);
      // $row2=$res2->num_rows;
      $res=$conn->query($sql);
      $row=$res->num_rows;
          if($row >=1){
                  while($row=$res->fetch_assoc()){
                    $type= $row['Type'];
                    if(($type=="admin")||($type=='Admin')){
                    // $_SESSION['user'] = $user;
                    $_SESSION['login'] = true;
                    // $msg="invelid email or password";

                    // header('location: http://localhost/hi5-sharing-social-media-website/admin/index.php?login=true'); 
                    }elseif(($type=="user")||($type=='User')){
                    // $_SESSION['user'] = $user;
                    $_SESSION['login'] = true;
                    
                    // echo "<script language='javascript'>window.location.href='user/index.php';</script>";
                    header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
            
                   }else{
                   // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
                   $msg="invelid email or password";
                   $_SESSION['login'] = false;
                   $_SESSION['msg'] = $msg;
                   header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false&&msg=$msg');         
            
                    }
                  }
                }else{
                  $msg="invelid email or password";
                  $_SESSION['login'] = false;
                  $_SESSION['msg'] = $msg;
                  // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
                  header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false&&msg=$msg');         
           
                   } 
   }
            
   if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
   }else{
    header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false');  

   }
      
?>