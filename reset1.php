<?php
session_start();
include 'db/db.php';
mysqli_select_db($con,'rentweb');
$otp = $_SESSION['OTP'];
$email = $_SESSION['EMAIL'];

// $res = mysqli_query($con,"select * from signup where email = '$email' and otp = '$otp'") or die("failed to query database".mysqli_error());
// $count = mysqli_num_rows($res);

if ($_POST['otp']==$otp) {
    //mysqli_query($con,"update signup set otp='1' where email = '$email'") or die("failed to query database".mysqli_error());
    echo "yes";
}else{
    echo "not_exist";
}

// if ($count>0) {
// 	mysqli_query($con,"update signup set otp='1' where email = '$email'") or die("failed to query database".mysqli_error());
// 	session_destroy();
// 	echo "yes";
// }else{
// 	echo "not_exist";
// }
?>