<?php
include 'db/db.php';
mysqli_query($con,"CREATE DATABASE rentweb");
mysqli_select_db($con,'rentweb');
if (mysqli_query($con,"CREATE TABLE signup (
    ID int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    username varchar(255),
    email varchar(255),
    pass varchar(255),
    passc varchar(255),
    otp varchar(255)
)")) {
    # code...
echo "string";
}
if (mysqli_query($con,"CREATE TABLE mail (
    uname varchar(255),
    pass varchar(255)
)")) {
    # code...
echo "string";
}

// create table product_details(product_id int(10) primary key,product_name varchar(100),product_image varchar(50),discription varchar(500),cost int(9),refund decimal(10),day_charge decimal(10),rent_date date,return_date date,earn decimal(10),add_date date,exp_date date,avalable char(1));
if (mysqli_query($con,"CREATE TABLE productdetails (
    ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    product_id varchar(255), 
    product_name varchar(255),
    product_image varchar(255),
    product_category varchar(255),
    description varchar(500),
    cost int(10),
    refund decimal(10),
    day_charge decimal(10),
    rent_date date,
    return_date date,
    earn decimal(10),
    add_date date,
    exp_date date,
    avalable char(1)
)")) {
    # code...
echo "string";
}

// if (mysqli_query($con,"INSERT INTO productdetails (
//     ID,
//     product_id,
//     product_name,
//     is_active,
//     description,
//     cost,
//     monthly_charge
//     )
//     SELECT
//     ID,
//     username,
//     name,
//     otp
//     FROM
//     signup
//     WHERE 
//     username='$username'")) {
// echo "done";
// }

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passc = $_POST['passc'];

$email = stripcslashes($email);
$email = mysqli_real_escape_string($con,$email);

$username = stripcslashes($username);
$username = mysqli_real_escape_string($con,$username);


// create table username_product(product_id int() primary key,like char(1),cart char(1),day_charge decimal(10),charge decimal(10),rent_days int(9),rent_date date,return_date date,rent char(1));
if (mysqli_query($con,"CREATE TABLE $username (
        ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_id varchar(255), 
        product_name varchar(255),
        product_image varchar(255),
        liked char(1),
        cart char(1),
        day_charge decimal(10),
        charge decimal(10),
        rent_days int(9),
        rent_date date,
        return_date date,
        rent char(1)
)")) {
    echo "done";
}


$result = mysqli_query($con,"select * from signup where email = '$email'") or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);

if($row['email'] == $email) {
    echo '<script type ="text/javascript"> alert("This email is already registered \n Please try with a different email");window.location= "SignUp.php"</script>';
    die();
}

	$result = mysqli_query($con,"select * from signup where username = '$username'") or die("failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
if ($row["username"] == $username) {
 	echo '<script type ="text/javascript"> alert("This username is taken \n Please try with a different username");window.location= "signup.php"</script>';
 	die();
}elseif (($row['email'] !== $email) && ($_POST["pass"] == $_POST["passc"])) {
    // code...
   $query = mysqli_query($con," insert into signup (name, username, email, pass, passc) 
values ('$name', '$username', '$email', '$pass', '$passc')");
  
echo '<script type ="text/javascript"> alert("Registered Successfully");window.location= "confirm.php"</script>';

}else {
    // code...
    echo '<script type ="text/javascript"> alert("Password Dont match");window.location= "signup.php"</script>';
}
 ?>