<?php
   session_start();
include '../../db/db.php';

    mysqli_select_db($con,'rentweb');
    $username = $_SESSION['username'];

// mysqli_query($con,"INSERT INTO $username (
//     ID
//     )
//     VALUES
//     ='$username'")
$productid = $_POST['productid'];
$daycost = $_POST['cos'];
$liked = $_POST['liked'];
$view = $_POST['view'];
$cart = $_POST['cart'];
$delete = $_POST['delete'];


$work = $_POST['post'];
$itemname = $_POST['itemname'];
$itemcategory = $_POST['itemcategory'];
$caption = $_POST['caption'];
$cost = $_POST['cost'];
$days = $_POST['time_available'];
$date = date('Y/m/d');
$time = date('h:i:s');

$tableseller = 'seller_'. $username;

    if (isset($liked)) {

//    if (mysqli_query($con,"CREATE TABLE $username (
//         ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         product_id varchar(255), 
//         product_name varchar(255),
//         liked char(1),
//         cart char(1),
//         day_charge decimal(10),
//         charge decimal(10),
//         rent_days int(9), 
//         rent_date date,
//         return_date date,
//         rent char(1)
// )")) {
//     echo "done";
// }

        $result_username = mysqli_query($con,"select * from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);

        if($row_username['product_id'] == $productid) {
             echo '<script type ="text/javascript"> alert("This product is already added to liked products");window.location= "seller.php"</script>';
        die();
        }
          mysqli_query($con,"INSERT INTO $username (
    product_id,
    product_name,
    product_image
    )
    SELECT
    product_id,
    product_name,
    product_image
    FROM
    $tableseller
    WHERE 
    product_id='$productid'") or die("failed to query database".mysqli_error());
    mysqli_query($con,"update $username set liked = 'Y', cart = 'N',day_charge = '$daycost', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    
     echo '<script type ="text/javascript"> alert("Added to liked products");window.location= "seller.php"</script>';
    die();
    }
    // if (isset($view)) {
    //       $_SESSION['productid']=$productid;
    //             header('location:disc.php');
    //     die();
    // }


    if (isset($cart)) {

//    if (mysqli_query($con,"CREATE TABLE $username (
//         ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         product_id varchar(255), 
//         product_name varchar(255),
//         liked char(1),
//         cart char(1),
//         day_charge decimal(10),
//         charge decimal(10),
//         rent_days int(9), 
//         rent_date date,
//         return_date date,
//         rent char(1)
// )")) {
//     echo "done";
// }
        //insert into username_product(product_id,like,cart,rent) values(1,'Y','Y','77','N');
        $result_username = mysqli_query($con,"select * from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);

        if($row_username['product_id'] !== $productid) {
                      mysqli_query($con,"INSERT INTO $username (
    product_id,
    product_name,
    product_image
    )
    SELECT
    product_id,
    product_name,
    product_image
    FROM
    $tableseller
    WHERE 
    product_id='$productid'") or die("failed to query database".mysqli_error());
                       mysqli_query($con,"update $username set liked = 'Y', cart = 'Y',day_charge = '$daycost', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
     echo '<script type ="text/javascript"> alert("Added to cart");window.location= "seller.php"</script>';

        die();
        }

   // mysqli_query($con,"update $username set liked = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    mysqli_query($con,"update $username set cart = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    //  echo '<script type ="text/javascript"> alert("Added to cart");window.location= "seller.php"</script>';
             echo '<script type ="text/javascript"> alert("Added to cart");window.location= "seller.php"</script>';

    die();



    }

    if (isset($delete)) {

//    if (mysqli_query($con,"CREATE TABLE $username (
//         ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         product_id varchar(255), 
//         product_name varchar(255),
//         liked char(1),
//         cart char(1),
//         day_charge decimal(10),
//         charge decimal(10),
//         rent_days int(9), 
//         rent_date date,
//         return_date date,
//         rent char(1)
// )")) {
//     echo "done";
// }
        //insert into username_product(product_id,like,cart,rent) values(1,'Y','Y','77','N');000
        mysqli_query($con,"delete from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
        mysqli_query($con,"delete from $tableseller where product_id = '$productid'") or die("failed to query database".mysqli_error());
        mysqli_query($con,"delete from productdetails where product_id = '$productid'") or die("failed to query database".mysqli_error());
    
        
       
     echo '<script type ="text/javascript"> alert("Product Successfully Deleted.");window.location= "seller.php"</script>';

        die();

    }

     if (isset($view)) {
         $_SESSION['productid']=$productid;
        header('location:product.php');
           // $productid = $rows['product_id'];
 
     die();
     }




if (isset($work)) {
        echo "<pre>", print_r($_FILES['itemimage']['name']),"</pre>";
           $product_names = md5(time(). mt_rand(1,999));
        $profileImageName = $username . '_' . $product_names . '_' . $_FILES['itemimage']['name'];
        // $profileImageName = $username . '_' . $_FILES['itemimage']['name'];

        $path = 'assets/seller/user/admin/items/';
        if (!file_exists($path)) {
            # code...
            mkdir($path, 0777,true);
        }
        // else{
        //     $files = glob($path.'/*'); 
        //     // Deleting all the files in the list 
        //     foreach($files as $file){ 
        //         if(is_file($file)) 
        //     // Delete the given file 
        //     unlink($file); 
        // }
} 

         $target = 'assets/seller/user/admin/items/'. $profileImageName;
                 
        
        move_uploaded_file($_FILES['itemimage']['tmp_name'], $target);

            // if (!empty($_POST["language"])) {
            //     foreach($_POST["language"] as $language){
        // insert into username_seller values(1,'Samsung Galaxy M30','M30.png','HD Dispaly,8GB Ram 128Gb Storage',15490,0.0,now(),now());
            $exp_date = date('Y-m-d', strtotime($date. ' + '.$days.' days')); 
            $product_id = $username . md5(time(). mt_rand(1,1000000));

            $refund =($cost*35)/100;
            $day_charge=($cost*.5)/100;


                       mysqli_query($con,"insert into $tableseller (product_id, product_name, product_image, product_category, discription, cost, day_charge, revenue, days, add_date, exp_date) 
        values ('$product_id', '$itemname', '$profileImageName', '$itemcategory', '$caption', '$cost', '$day_charge', '0', '$days', '$date', '$exp_date')") or die("failed to query database".mysqli_error());

                       // update product_details set refund=(cost*35)/100 , day_charge=(cost*.5)/100; 

                       mysqli_query($con,"insert into productdetails (product_id, product_name, product_image, product_category, description, cost, refund, day_charge, rent_date, return_date, earn, add_date, exp_date, avalable) 
        values ('$product_id', '$itemname', '$profileImageName', '$itemcategory', '$caption', '$cost', '$refund', '$day_charge', '0', '0', '0', '$date', '$exp_date', 'N')") or die("failed to query database".mysqli_error());

                   // mysqli_query($con,"insert into productdetails (product_name, product_image, discription, cost, refund, day_charge, rent_date, return_date, earn, add_date, exp_date, avalable) values ('$itemname', '$profileImageName', '$caption', '$cost', '0', '0', '2020-12-06', '2020-12-06', '0', '$date', '$exp_date', 'Y')") or die("failed to query database".mysqli_error());
                
    echo '<script type ="text/javascript"> alert("Item Uploaded Successfully, Your product will be visible to users after varification after few hours!");window.location= "seller.php"</script>';
        
?>