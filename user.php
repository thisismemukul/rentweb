<?php
session_start();
include 'db/db.php';
$database = mysqli_select_db($con,'rentweb');
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$username = stripcslashes($username);
$email = stripcslashes($email);
$pass = stripcslashes($pass);

$username = mysqli_real_escape_string($con,$username);
$email = mysqli_real_escape_string($con,$email);
$pass = mysqli_real_escape_string($con,$pass);

$result = mysqli_query($con,"select * from signup where username = '$username'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if (($row['username'] !== $username)) {
    // code...
    echo '<script type ="text/javascript"> alert("Username does nor exists.\nPlease Make Your account first.");window.location= "signup.php"</script>';
    die();

}
if (($row['otp'] == 0) || ($row['otp'] >1)) {
    // code...
    echo '<script type ="text/javascript"> alert("Your Username is not confirmed yet.\nPlease Confirm Your username via Email Confirmation.");window.location= "confirm.php"</script>';
    die();

}

$result = mysqli_query($con,"select * from signup where username = '$username' and pass = '$pass'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);

if ($row['username'] == $username && $row['pass'] == $pass) {
    $_SESSION['username']=$username;

if (mysqli_query($con,"CREATE TABLE rentwebusers (
    ID int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    username varchar(255),
    name varchar(255),
    active varchar(255),
    profile varchar(255),
    phone varchar(255),
    liked varchar(255),
    cart varchar(255)

)")) {
    # code...
echo "string";
}

if (mysqli_query($con,"INSERT INTO rentwebusers (
    ID,
    username,
    name,
    active
    )
    SELECT
    ID,
    username,
    name,
    otp
    FROM
    signup
    WHERE 
    username='$username'")) {
echo "done";
}

    echo '<script type ="text/javascript"> alert("login Successfully!! welcome ");window.location= "home.php"</script>';

}else{
    // code...
    echo '<script type ="text/javascript"> alert("Either Username or Password is incorrect");window.location= "signin.php"</script>';
}
 ?>