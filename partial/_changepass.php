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
			global $name,$email_id;
      include("_db.php");
		$sql= "select * from tbl_User where Email_ID = '$user' and is_active = 0";
				$result=$conn->query($sql);
				$count = $result->num_rows;
				while($row = $result->fetch_array())
					{
						$name = $row['First_Name'];
						$email_id=$row['Email_ID'];
					}
	?>
    




<?php
												if($_SERVER['REQUEST_METHOD']=='POST')
												{
													global $password;
													include("_db.php");
													$password = $_POST['old'];
													$new_password = $_POST['newp'];
													$confirm_password = $_POST['con'];
													$sql = "select * from tbl_login where Email_ID = '$user' and is_active = 0";
													$result = mysqli_query($conn,$sql);
													$count = mysqli_num_rows($result);
													if($count > 0)
													{
														while($row = mysqli_fetch_array($result))
														{
															$password = $row['Password'];
															
														}
														if($password == $password)
														{
															if($new_password == $confirm_password)
															{
																$sql1 = "update tbl_login set Password = '$new_password' where Email_ID = '$user' and is_active = 0";
	include ("../class.phpmailer.php"); // include the class name
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
								// $mail->Username = "pvivek093@gmail.com";
								// 	$mail->Password = "9574852586a";
									$mail->Username = "hifive.sharing@gmail.com";
$mail->Password = "8401444005a";
$mail->SetFrom("hifive.sharing@gmail.com");
									
								$mail->sender = "hifive.sharing@gmail.com";	
									
									
											// $mail->SetFrom("pvivek093@gmail.com");
				$mail->Subject = "Change Password Details";
				
				
	$mail->Body = "<html><body><br> Dear User <br> <br> You password is changed successfully and 
				 your Password is .$new_password <br> 
																		
		Thank you for Contacting us. <br>Hi5 Sharing Team.<br></body></html>";
											$mail->AddAddress($user);
											if(!$mail->Send())
														{
															
														}
														$result2 = mysqli_query($conn,$sql1);
														if($result2)
														{
															echo "<script language='javascript'>alert('Mail has been sent');</script>";
															echo "<script language='javascript'>alert('your password has been changed');</script>";
															
															
															echo "<script language='javascript'>window.location.href='../dashboard.php';</script>";
														}
															}}}
												}?>
                                            
                                            
   
