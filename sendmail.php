<?php 
include 'db/db.php';
mysqli_select_db($con,'rentweb');
$name =$_POST['name'];
$semail =$_POST['email'];
$phone =$_POST['phone'];
$message =$_POST['message'];
$email="rentwebhost@gmail.com";
 $result = mysqli_query($con,"select * from mail");
 $rows = mysqli_fetch_array($result);
 // $res = mysqli_query($con,"select * from signup where email = '$email'") or die("failed to query database".mysqli_error());
 // $count = mysqli_num_rows($res);
 // $row = mysqli_fetch_array($res);
// if ($row['otp']==1) {
//  echo "reg";
//  die();
// }
// if (isset($sentMail)) {
// }else{
//  echo "Something Went Wrong";
//  die();
// }
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
    $mail->Subject = "Email From RentWeb";
    $mail->SetFrom("rentwebhost@gmail.com");
    $mail->isHTML(true);
    $mail->Body ="<h3>Recived a mail from ".$name."<br>Email: ".$semail."<br>Phone Number: ".$phone."<br>Message: ".$message."</h3><br><h4>Have a nice day<br>RentWeb</h4>";
    $mail->AddAddress($email);
    if($mail->Send()){
        echo '<script type ="text/javascript"> alert("Your Email has been sent successfully.");window.location= "contact.php"</script>';
        return 1;
    }else{
        return 0;
    }
    $mail->smtpClose();

 ?>