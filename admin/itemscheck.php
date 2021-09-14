<?php
   session_start();
include '../db/db.php';

    mysqli_select_db($con,'rentweb');
    $username = $_SESSION['username'];

// mysqli_query($con,"INSERT INTO $username (
//     ID
//     )
//     VALUES
//     ='$username'")
$productid = $_POST['productid'];
// $daycost = $_POST['cos'];
$accept = $_POST['accept'];
// $view = $_POST['view'];
// $cart = $_POST['cart'];
$delete = $_POST['delete'];


// $work = $_POST['post'];
// $itemname = $_POST['itemname'];
// $itemcategory = $_POST['itemcategory'];
// $caption = $_POST['caption'];
// $cost = $_POST['cost'];
// $days = $_POST['time_available'];
// $date = date('Y/m/d');
// $time = date('h:i:s');

$tableseller = 'seller_'. $username;

    
    if (isset($accept)) {
        mysqli_query($con,"update productdetails set avalable = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
        echo '<script type ="text/javascript"> alert("Added to Home");window.location= "check.php"</script>';
        die();

    }
    if (isset($delete)) {
        mysqli_query($con,"delete from productdetails where product_id = '$productid'") or die("failed to query database".mysqli_error());
        echo '<script type ="text/javascript"> alert("Product Successfully Deleted.");window.location= "check.php"</script>';
        die();

    }




?>