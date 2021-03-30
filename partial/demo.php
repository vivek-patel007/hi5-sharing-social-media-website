<?php

  if($_SERVER['REQUEST_METHOD']=="POST"){
    include('_db.php'); 
    $lemail=$_POST['lemail'];
    $lpass=$_POST['lpass'];
    
    // $sql="SELECT * FROM `tbl_User` WHERE Email_ID='$lemail' AND Password='$lpass'";
    $sql="SELECT * FROM `tbl_login` WHERE Email_ID='$lemail' AND Password='$lpass'";
    // $res2=$conn->query($sql2);
    // $row2=$res2->num_rows;
    $res=$conn->query($sql);
    $row=$res->num_rows;
        if($row >=1){
                while($row=$conn->fetch_assoc($res)){
                  $type= $row['Type'];
                  if(($type=="admin")||($type=='Admin')){
                  $_SESSION['user'] = $user;
                  header('location: http://localhost/hi5-sharing-social-media-website/admin/index.php?login=true'); 
                  }elseif(($type=="user")||($type=='User')){
                  $_SESSION['user'] = $user;
                  // echo "<script language='javascript'>window.location.href='user/index.php';</script>";
                  header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
          
                 }else{
                 // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
                 header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false');         
          
                  }
                }
             
 }
       
}      
    
      
?>





<?php

  if($_SERVER['REQUEST_METHOD']=="POST"){
    include('_db.php'); 
    $lemail=$_POST['lemail'];
    $lpass=$_POST['lpass'];
    
    $sql="SELECT * FROM `tbl_User` WHERE Email_ID='$lemail' AND Password='$lpass'";
    $res=$conn->query($sql);
    $row=$res->num_rows;
        if($row >=1){
            $row=$res->fetch_assoc();
            $nm=$row['First_Name'];
            // $sno=$row['sr_no'];
            // if(password_verify($lpass,$row['Password'])){
            //   if()
                session_start();
                $_SESSION['login']=true;
                $_SESSION['email']=$lemail;
                $_SESSION['name']=$nm;
                // $_SESSION['sno']=$sno;

              
              echo "success";
                // echo "<script>window.top.location='/vivekpatel.cf/forums.php?login=true'</script>"; 
                header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
           
            }else{
              // echo "<script>window.top.location='/vivekpatel.cf/about.php?login=false'</script>"; 
        //  echo "fail";
                header("location: http://localhost/hi5-sharing-social-media-website/login.php?login=false'"); 
                
           
            }

            $sql2="SELECT * FROM `tbl_login` WHERE Email_ID='$lemail' AND Password='$lpass'";
            $res2=$conn->query($sql2);
            $row2=$res2->num_rows;
            if($row2>=1){
              while($row2=$conn->fetch_assoc($res2)){
                $type= $row['Type'];
                if(($type=="admin")||($type=='Admin')){
                $_SESSION['user'] = $user;
                header('location: http://localhost/hi5-sharing-social-media-website/admin/index.php?login=true'); 
                }elseif(($type=="user")||($type=='User')){
                $_SESSION['user'] = $user;
                // echo "<script language='javascript'>window.location.href='user/index.php';</script>";
                header('location: http://localhost/hi5-sharing-social-media-website/dashboard.php?login=true'); 
        
               }else{
               // echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
               header('location: http://localhost/hi5-sharing-social-media-website/login.php?login=false');         
        
                }
              }
             
 }
       
}      
    
      
?>