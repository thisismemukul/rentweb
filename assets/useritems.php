<?php
   session_start();
   include '../db/db.php';

    mysqli_select_db($con,'rentweb');
    $username = $_SESSION['username'];
  

$postphone = $_POST['postphone'];
$phone = $_POST['phone'];

$time_rent = $_POST['time_rent'];
$cancel = $_POST['cancel'];
$proceed = $_POST['proceed'];
$productid = $_POST['productid'];
$daycost = $_POST['cos'];
$liked = $_POST['liked'];
$view = $_POST['view'];
$cart = $_POST['cart'];
$delete = $_POST['delete'];
$tableseller = 'seller_'. $username;


        
        if (isset($postphone)) {
               $productid = $_SESSION['productid'];
            // echo $productid; 
         mysqli_query($con,"update rentwebusers set phone = '$phone' where username= '$username'") or die("failed to query database".mysqli_error());
         header('location:checkout.php');
         die();
        }

        
        if (isset($time_rent)) {
               $productid = $_SESSION['productid'];
            // echo $productid;
              $result_username = mysqli_query($con,"select * from productdetails where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);
        
        $tot_charge = $time_rent*$row_username['day_charge'];
         mysqli_query($con,"update $username set charge = '$tot_charge', rent_days = '$time_rent' where product_id= '$productid'") or die("failed to query database".mysqli_error());
         header('location:checkout.php');
         die();
        }
        if (isset($cancel)) {
               $productid = $_SESSION['productid'];
               echo $productid;
            mysqli_query($con,"update $username set charge = '', rent_days = '' where product_id= '$productid'") or die("failed to query database".mysqli_error());
         header('location:product.php');
         die();
        }

         if (isset($proceed)) {
              $productid = $_SESSION['productid'];
            $check = mysqli_query($con,"SELECT * FROM `$username`")  or die(header('location:../../signup.php'));
$row_check = mysqli_fetch_array($result_check);
  $total_check=mysqli_num_rows($result_check);
  mysqli_free_result($result_check);
if ($total_check >0) {
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
    mysqli_query($con,"update $username set liked = 'Y', cart = 'N', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    header('location:checkout.php');
    die();
}


                 $result_daycharge = mysqli_query($con,"select * from productdetails where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_daycharge = mysqli_fetch_array($result_daycharge);
        
        $totday_charge = $row_daycharge['day_charge'];



        $result_username = mysqli_query($con,"select product_id from $username") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);

        if(($row_username['product_id']) == $productid) {
     echo '<script type ="text/javascript">window.location= "checkout.php"</script>';
     die();
        }elseif ($row_username['product_id'] !== $productid) {
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
    productdetails
    WHERE 
    product_id='$productid'") or die("failed to query database".mysqli_error());
    mysqli_query($con,"update $username set liked = 'Y', cart = 'N',day_charge = '$totday_charge', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
     echo '<script type ="text/javascript">window.location= "checkout.php"</script>';
     die();
        }

        echo '<script type ="text/javascript">window.location= "checkout.php"</script>';
    die(); 
    } 


    if (isset($liked)) {

        $result_username = mysqli_query($con,"select * from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
        $row_username = mysqli_fetch_array($result_username);

        if($row_username['product_id'] == $productid) {
             echo '<script type ="text/javascript"> alert("This product is already added to liked products");window.history.go(-1);</script>';
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
    productdetails
    WHERE 
    product_id='$productid'") or die("failed to query database".mysqli_error());
    mysqli_query($con,"update $username set liked = 'Y', cart = 'N',day_charge = '$daycost', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    
     echo '<script type ="text/javascript"> alert("Added to liked products");window.history.go(-1);</script>';
    die();
    } 


    if (isset($cart)) { 
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
    productdetails
    WHERE 
    product_id='$productid'") or die("failed to query database".mysqli_error());
                       mysqli_query($con,"update $username set liked = 'Y', cart = 'Y',day_charge = '$daycost', rent = 'N' where product_id= '$productid'") or die("failed to query database".mysqli_error());
     echo '<script type ="text/javascript"> alert("Added to cart");window.history.go(-1);</script>';

        die();
        }

   // mysqli_query($con,"update $username set liked = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    mysqli_query($con,"update $username set cart = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    //  echo '<script type ="text/javascript"> alert("Added to cart");window.location= "seller.php"</script>';
             echo '<script type ="text/javascript"> alert("Added to cart");window.history.go(-1);</script>';

    die();



    }
 

     if (isset($view)) {
         $_SESSION['productid']=$productid;
        header('location:product.php');
           // $productid = $rows['product_id'];
 
     die();
     }
      if (isset($delete)) {
        mysqli_query($con,"delete from $username where product_id = '$productid'") or die("failed to query database".mysqli_error());
       // mysqli_query($con,"delete from $tableseller where product_id = '$productid'") or die("failed to query database".mysqli_error());
        mysqli_query($con,"update productdetails set avalable = 'Y' where product_id= '$productid'") or die("failed to query database".mysqli_error());
    
        
       
     echo '<script type ="text/javascript"> alert("Product Successfully Removed.");window.history.go(-1);</script>';

        die();

    }

        
?>