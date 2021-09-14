<?php
session_start();
//remove lines 3 to 8
 //$con = mysqli_connect('localhost','root');
// if ($con) {
//  echo "Connection Successful";
// }else{
//  echo "No Connection";
// }

include '../../db/db.php';
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
    echo '<script type ="text/javascript"> alert("Username does nor exists.\nPlease Make Your account first.");window.location= "../../signup.php"</script>';
    die();

}
if (($row['otp'] == 0) || ($row['otp'] >1)) {
    // code...
    echo '<script type ="text/javascript"> alert("Your Username is not confirmed yet.\nPlease Confirm Your username via Email Confirmation.");window.location= "../../confirm.php"</script>';
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

//create table username_seller(product_id int(10) primary key,product_name varchar(100),product_image varchar(50),discription varchar(500),cost int(9),revenue decimal(),days int(20),add_date date,exp_date date);
// create table username_seller(product_id int(10) primary key,product_name varchar(100),product_image varchar(50),discription varchar(500),cost int(9),revenue decimal(),days int(20),add_date date,exp_date date);
$tableseller = 'seller_'. $username;
if (mysqli_query($con,"CREATE TABLE $tableseller (
        ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_id varchar(255), 
        product_name varchar(255),
        product_image varchar(255),
        product_category varchar(255),
        discription varchar(500),
        cost int(10),
        day_charge decimal(10),
        revenue decimal(10),
        days int(20),
        add_date date,
        exp_date date
)")) {
    echo "done";
}
    echo '<script type ="text/javascript"> alert("login Successfully!! welcome ");window.location= "seller.php"</script>';

}else{
    // code...
    echo '<script type ="text/javascript"> alert("Either Username or Password is incorrect");window.location= "login.php"</script>';
}
 ?>