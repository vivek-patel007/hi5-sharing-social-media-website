<?php
	ob_start();
	session_start();
	global $user;
	@$user=$_SESSION["user"];			
	if($user == "  ")
	{
		echo "<script language='javascript'>window.location.href='index.php';</script>";							
	}
?>
<?php
include("config.php");
?><?php
			global $name,$email_id;
		
		$sql= "select * from tbl_registration where email_id = '$user' and isdeleted = 0";
				$result=mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				while($row = mysqli_fetch_array($result))
					{
						$name = $row['first_name'];
						$email_id=$row['email_id'];
					}
	?>
    


<?php
include('header.php');
?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Change Password</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<br><br>

    <center> <h2 style="margin-left: 122px;">Welcome! <?php echo $name; ?></h2></center><br>
<br>




<script>
	  
	function pwd()
	{
	var pwd=/^[a-zA-Z0-9@#%$*]{5,8}$/;
    if(document.form1.old.value.search(pwd)==-1)
    {
	 alert("enter maximum 5 to 8 character password");
	 document.form1.old.focus();
	 return false;
	 }
	 }
	
	
	function pwd1()
	{
	var pwd=/^[a-zA-Z0-9@#%$*]{5,8}$/;
    if(document.form1.newp.value.search(pwd)==-1)
    {
	 alert("enter maximum 5 to 8 character password");
	 document.form1.newp.focus();
	 return false;
	 }
	 }
	
	  
	
function validation()
{
 var pwd=/^[a-zA-Z0-9@#%$*]{5,8}$/;
	  
   if(document.form1.old.value.search(pwd)==-1)
    {
	 alert("enter maximum 5 to 8 character password");
	 document.form1.old.focus();
	 return false;
	}
   else if(document.form1.newp.value.search(pwd)==-1)
    {
	 alert("enter maximum 8 character password");
	 document.form1.newp.focus();
	 return false;
	}
	 
	
	 else 
	{
	 return true;
	 }
	 }
	
	 
</script> 



     
     





	<input type="text" name="email_id"  required placeholder="Password " style="margin-top:15px; width:300px; margin-left:-44px;" value="<?php echo $email_id;?>" hidden="hidden" ><br>

    <div class="new">
			<div class="col-md-6 w3_agileits_contact_grid_right" style="margin-left:20%;"><br>
				<h2 class="w3_agile_header" style="width:133%;"><span >Change Here</span></h2>
                    <div class="login-form-grids" style="width:121%;">
				<form name="form1"  method="post" onSubmit="return validation()" enctype="multipart/form-data">
				       



    <span class="input input--ichiro">
	<input class="input__field input__field--ichiro" type="password" id="input-25old" name="old" placeholder=" " onChange="return pwd()"  required>
		<label class="input__label input__label--ichiro" for="input-25old">
			<span class="input__label-content input__label-content--ichiro">Old Password</span>
		</label>
	</span>

   <span class="input input--ichiro">
	<input class="input__field input__field--ichiro" type="password" id="input-26new" name="newp" placeholder=" " onChange="return pwd1()" required>
		<label class="input__label input__label--ichiro" for="input-26new">
			<span class="input__label-content input__label-content--ichiro">New Password</span>
		</label>
	</span>
    

    <span class="input input--ichiro">
	<input class="input__field input__field--ichiro" type="password" id="input-27con" name="con" placeholder=" " required>
		<label class="input__label input__label--ichiro" for="input-27con">
			<span class="input__label-content input__label-content--ichiro">Confirm Password</span>
		</label>
	</span>

<input type="submit" name="change" id="change" value="Change">
				<style>
				.w3_agileits_contact_grid_right input[type="submit"] {
    outline: none;
    width: 100%;
    background: #212121;
    color: #fff;
    padding: 0.8em 0;
    font-size: 1em;
    font-weight: bold;
    border: none;
    text-transform: uppercase;
    margin: 1em 0 0;
    letter-spacing: 5px;
}
.w3_agileits_contact_grid_right input[type="submit"]:hover{
	background:#fe9126;
}</style>

<?php
												if(isset($_POST['change']))
												{
													global $password;
													include("config.php");
													$password = $_POST['old'];
													$new_password = $_POST['newp'];
													$confirm_password = $_POST['con'];
													$sql = "select * from tbl_login where email_id = '$user' and isdeleted = 0";
													$result = mysqli_query($con,$sql);
													$count = mysqli_num_rows($result);
													if($count > 0)
													{
														while($row = mysqli_fetch_array($result))
														{
															$password = $row['password'];
															
														}
														if($password == $password)
														{
															if($new_password == $confirm_password)
															{
																$sql1 = "update tbl_login set password = '$new_password' where email_id = '$user' and isdeleted = 0";
	include ("class.phpmailer.php"); // include the class name
											$mail = new PHPMailer(); // create *a new object
														$mail->IsSMTP(); // enable SMTP
														$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
														$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'tls';
										$mail->Host = 'smtp.gmail.com';
														/*$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
														$mail->Host = "mail.gmail.com";*/
										$mail->Port = 587; // or 587
													$mail->IsHTML(true);
								$mail->Username = "eurjacenter44@gmail.com";
									$mail->Password = "dimpalradhe";
									
									
								$mail->sender = "eurjacenter44@gmail.com";	
									
									
											$mail->SetFrom("eurjacenter44@gmail.com");
				$mail->Subject = "Change Password Details";
				
				
	$mail->Body = "<html><body><br> Dear User <br> <br> You password is changed successfully and 
				 your Password is .$new_password <br> 
																		
		Thank you for Contacting us. <br>e urja center Portal Team.<br></body></html>";
											$mail->AddAddress($email_id);
											if(!$mail->Send())
														{
															
														}
														$result2 = mysqli_query($con,$sql1);
														if($result2)
														{
															echo "<script language='javascript'>alert('Mail has been sent');</script>";
															echo "<script language='javascript'>alert('your password has been changed');</script>";
															
															
															echo "<script language='javascript'>window.location.href='../index.php';</script>";
														}
															}}}
												}?>
                                            
                                            
                                            
                                            
				</style>
                </div>
                
                
                </form>
     			</div></div>
                
                
                </div>
                
                
			<div class="clearfix"> </div>
		</div>
	</div>
<!--//change password-->    
														
													
<?php
include('footer.php');
?>
<!--//footer-->