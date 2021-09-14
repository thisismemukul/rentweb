<?php 
session_start();
include 'db/db.php';
mysqli_select_db($con,'rentweb');
$email =$_POST['email'];
 $result = mysqli_query($con,"select * from mail");
 $rows = mysqli_fetch_array($result);

$res = mysqli_query($con,"select * from signup where email = '$email'") or die("failed to query database".mysqli_error());
$count = mysqli_num_rows($res);

// $result = mysqli_query($con,"select * from thisisme where username='$username'") or die(header('location:signup.php'));
$row = mysqli_fetch_array($res);

if ($row['otp']==1) {
	echo "reg";
	die();
}

if ($count>0) {
	$otp=rand(111111,999999);
	mysqli_query($con,"update signup set otp='$otp' where email = '$email'") or die("failed to query database".mysqli_error());
	// $html="Your OTP Verification code is ".$otp;
	// smtp_mailer($email,'OTP Verification',$html);
	$_SESSION['EMAIL']=$email;
		echo "yes";
}else{
	echo "not_exist";
	die();
}


require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	// $mail->SMTPDebug = 1; 
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Port = 587; 
	// $mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = $rows['uname'];
	$mail->Password = $rows['pass'];
	$mail->SetFrom("rentwebhost@gmail.com");
	// $mail->addAttachment("dummy.pdf");
	$mail->Subject = "OTP Verification";
	$mail->SetFrom("rentwebhost@gmail.com");
	$mail->isHTML(true);
	$mail->Body ="<h1>Welcome To Rentweb</h1><br>Confirm your account by confirming your email address using following OTP<br><h2>Your OTP Verification code is ".$otp."</h2><br><h5>Have a nice day<br>Rentweb<h5/>";
	$mail->AddAddress($email);
	if($mail->Send()){
		return 1;
	}else{
		return 0;
	}
	$mail->smtpClose();

 ?>