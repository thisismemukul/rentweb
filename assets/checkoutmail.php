<?php 
  session_start();
include '../db/db.php';
mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];
$placeorder =$_POST['placeorder'];
$date = date('Y/m/d');
// $semail =$_POST['email'];
// $phone =$_POST['phone'];
// $message =$_POST['message'];
$email="rentwebhost@gmail.com";
 $result = mysqli_query($con,"select * from mail");
 $rows = mysqli_fetch_array($result);

  $resultdata = mysqli_query($con,"select * from signup where username='$username'");
 $rowsdata = mysqli_fetch_array($resultdata);
$name = $rowsdata['name']; 
$semail = $rowsdata['email'];
$resultphone = mysqli_query($con,"select * from rentwebusers where username='$username'") or die(header('location:../signup.php'));
$rowphone = mysqli_fetch_array($resultphone);
$phone = $rowphone['phone'];

        if (isset($placeorder)) {
               $productid = $_SESSION['productid'];
                $result_username = mysqli_query($con,"select * from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);
                $exp_date = date('Y-m-d', strtotime($date. ' + '.$row_username['day_charge'].' days')); 
            mysqli_query($con,"update $username set rent_date = '$date', return_date = '$exp_date', rent='Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
            mysqli_query($con,"update productdetails set avalable = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
        }
 
require '../includes/PHPMailer.php';
require '../includes/SMTP.php';
require '../includes/Exception.php';

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
    $mail->Body ="<h3>Recived a mail from ".$name."<br>Email: ".$semail."<br>Phone Number: ".$phone."<br>This user has rented this product <br>ProductId: ".$productid."<br>ProductName: ".$row_username['product_name']."<br>Perday Charge: ".$row_username['day_charge']."<br>Number Of Days: ".$row_username['rent_days']."<br>Total Charge: ".$row_username['charge']."</h3><br><h4>Please Proceed for further payment details<br>Have a nice day<br>RentWeb</h4>";
    $mail->AddAddress($email);
    if($mail->Send()){
        echo '<script type ="text/javascript"> alert("Email has been sent successfully.\n You will recive a mail from Rentweb soon for payment.");window.location= "myproducts.php"</script>';
        return 1;
    }else{
        echo '<script type ="text/javascript"> alert("Error while sending mail.");window.location= "myproducts.php"</script>';
        return 0;
    }
    $mail->smtpClose();

 ?>