<?php
session_start();
include '../db/db.php';
$database = mysqli_select_db($con,'rentweb');
// if (!$database) {
//    echo '<script type ="text/javascript"> alert("Server Down.\nPlease try again later.");window.location= "signin.php"</script>';
//   die();
// }

if (mysqli_query($con,"CREATE TABLE signup_admin (
    ID int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    adminusername varchar(255),
    email varchar(255),
    pass varchar(255)
)")) {
    # code...
echo "string";
// mysqli_query($con,"insert into signup_admin (adminusername, email, pass) 
// values ('admin_rentweb', 'rentwebhost@gmail.com', 'Rentweb_admin_password@0987654321')" or die("failed to query database".mysqli_error());
mysqli_query($con,"insert into signup_admin (adminusername, email, pass) values ('admin_rentweb', 'rentwebhost@gmail.com', 'Rentweb_admin_password@0987654321')") or die("failed to query database".mysqli_error());


}



$adminusername = $_POST['adminusername'];
// $email = $_POST['email'];
$pass = $_POST['pass'];

$adminusername = stripcslashes($adminusername);
// $email = stripcslashes($email);
$pass = stripcslashes($pass);

$adminusername = mysqli_real_escape_string($con,$adminusername);
// $email = mysqli_real_escape_string($con,$email);
$pass = mysqli_real_escape_string($con,$pass);

$result = mysqli_query($con,"select * from signup_admin where adminusername = '$adminusername'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if (($row['adminusername'] !== $adminusername)) {
    // code...
    echo '<script type ="text/javascript"> alert("Username does nor exists.\nPlease Make Your account first.");window.location= "index.php"</script>';
    die();

}
$result = mysqli_query($con,"select * from signup_admin where adminusername = '$adminusername' and pass = '$pass'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);

if ($row['adminusername'] == $adminusername && $row['pass'] == $pass) {
    $_SESSION['adminusername']=$adminusername;
    echo '<script type ="text/javascript"> alert("login Successfully!! welcome ");window.location= "check.php"</script>';

}else{
    // code...
    echo '<script type ="text/javascript"> alert("Either Username or Password is incorrect");window.location= "index.php"</script>';
}
 ?>