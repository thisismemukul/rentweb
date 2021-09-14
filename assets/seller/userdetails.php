<?php
   session_start();
include '../../db/db.php';

mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];

$profile = $_POST['save'];
$phone = $_POST['phone'];

// $dp = stripcslashes($dp);
// $dp = mysqli_real_escape_string($con,$dp);


    if (isset($profile)) {
        // echo "<pre>", print_r($_POST),"</pre>";
        // echo "<pre>", print_r($_FILES),"</pre>";
        // echo "<pre>", print_r($_FILES['profileImage']),"</pre>";
        echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";
         $product_names = md5(time(). mt_rand(1,99));
        $profileImageName = $username . '_' . $product_names . '_' . $_FILES['profileImage']['name'];

        $path = 'assets/seller/user/'. $username .'/profile/';
        if (!file_exists($path)) {
            # code...
            mkdir($path, 0777,true);
        }else{
            $files = glob($path.'/*'); 
            // Deleting all the files in the list 
            foreach($files as $file){ 
                if(is_file($file)) 
            // Delete the given file 
            unlink($file); 
        }
} 

         $target = 'assets/seller/user/'.$username.'/profile/'. $profileImageName;
                 
        
        move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);

            mysqli_query($con,"update rentwebusers set profile = '$profileImageName', phone='$phone' where username = '$username'") or die("failed to query database".mysqli_error());
    echo '<script type ="text/javascript"> alert("Profile Updated Successfully");window.location= "seller.php"</script>';

}
    

?>