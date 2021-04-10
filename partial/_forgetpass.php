<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
include('_db.php');
$email_id = $_POST['email'];
$sql = "select * from tbl_login where Email_ID = '$email_id' and is_active = 0";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0)
{
while($row = mysqli_fetch_array($result))
{
$pass= $row['Password'];
}
include ("../class.phpmailer.php"); // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
/*$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "mail.gmail.com";*/
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "hifive.sharing@gmail.com";
$mail->Password = "8401444005a";
$mail->SetFrom("hifive.sharing@gmail.com");
$mail->Subject = "Forgot Password Details";
$mail->Body = "<html>
																	<body>
																		<br> Dear User <br> <br> 
																		You have requested to send the password for login. 
																		So according to your requirement your Password is $pass. <br> 
																		Kindly requsting to you to use this details for further login. <br> <br> 
																		Thank you for Contacting us. <br>tour my gujarat.<br>
																	</body>
																</html>";
$mail->AddAddress($email_id);
if(!$mail->Send())
{
echo "<script language='javascript'>alert('" . $mail->ErrorInfo . "');</script>";
}
else
{
echo "<script language='javascript'>alert('Mail has been sent');</script>";
echo "<script language='javascript'>window.location.href='dashboard.php';</script>";
}
}
else
{
echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
}
}
?>