<?php
session_start();
if (!isset($_SESSION['EMAIL'])) {
   header('location:signup.php');
   die();
}
include 'db/db.php';
mysqli_select_db($con,'rentweb');
$email = $_SESSION['EMAIL'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if ($pass==$cpass) {
        mysqli_query($con,"update signup set pass='$pass',passc='$cpass' where email = '$email'") or die("failed to query database".mysqli_error());
    session_destroy();
    echo '<script type ="text/javascript"> alert("Password Updated Successfully.");window.location= "signin.php"</script>';
}else{
       echo '<script type ="text/javascript"> alert("Password Not Matched.Please try again.");window.location= "changepassword.php"</script>';
}
?>