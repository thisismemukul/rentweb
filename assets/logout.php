<?php

// $con = mysqli_connect('localhost','root');
// #include 'db/db.php';
// mysqli_select_db($con,'contact');
// if (mysqli_query($con,"DROP TABLE thisisme")) {
//     # code...
// echo "Logout successfully";
// }
session_start();
session_destroy();
header('location:../signin.php');
?>