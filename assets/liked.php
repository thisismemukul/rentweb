<?php 
   session_start();
if (!isset($_SESSION['username'])) {
   header('location:../signup.php');
   die();
}
include '../db/db.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];
$result_liked = mysqli_query($con,"SELECT * FROM `$username` WHERE liked ='Y';") or die(header('location:../signup.php'));
$row_liked = mysqli_fetch_array($result_liked);
  $total_likes=mysqli_num_rows($result_liked);
  mysqli_free_result($result_liked);

$result_cart = mysqli_query($con,"SELECT * FROM `$username` WHERE cart ='Y';") or die(header('location:../signup.php'));
$row_cart = mysqli_fetch_array($result_cart);
  $total_cart=mysqli_num_rows($result_cart);
  mysqli_free_result($result_cart);

    $result_rent = mysqli_query($con,"SELECT * FROM `$username` WHERE rent ='Y';") or die(header('location:../signup.php'));
$row_rent = mysqli_fetch_array($result_rent);
  $total_rent=mysqli_num_rows($result_rent);
  mysqli_free_result($result_rent);


$result = mysqli_query($con,"select * from rentwebusers where username='$username'") or die(header('location:../signup.php'));
$row = mysqli_fetch_array($result);
 ?>
 <!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rentweb Product Rental Website" />
    <meta name="keywords" content="Rent, Rentweb, Mukul Saini, e-commerce, Product Rental Website, electronics rental, rent to own smartphones, rent a computer, rent to buy furniture, refrigerator rental near me, short term appliance rental, rent to own mobile" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Product Rental Website Rentweb" />
    <meta name="author" content="Mukul Saini" />
    <title>Liked Products | Rentweb</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a class="logotxt" href="../home.php"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span><?php echo $total_cart; ?> </span></a></li>
                <li><a href="myproducts.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_rent; ?> </span></a></li>
            </ul>
            <div class="header__cart__price">Min rate: <span>₹100.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>Became a Seller</div>
                <ul>
                    <li><a href="./assets/seller/login.php">LogIn</a></li>
                    <li><a href="../signup.php">SignUp</a></li>
                </ul>
        </div>
            <div class="header__top__right__auth">
                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> SignOut</a>
              
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li class="active"><a href="liked.php">Liked</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                <li><a href="contact.php" target="_blank">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
            <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> rentwebhost@gmail.com</li>
                <li>All your liked products are here</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> rentwebhost@gmail.com</li>
                                <li>All your liked products are here</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
                                <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Became a Seller</div>
                                    <ul>
                                        <li><a href="./assets/seller/login.php">LogIn</a></li>
                                        <li><a href="../signup.php">SignUp</a></li>
                                    </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> SignOut</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a class="logotxt" href="../home.php"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="../home.php">Home</a></li>
                            <li class="active"><a href="liked.php">Liked</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="contact.php" target="_blank">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span><?php echo $total_cart; ?> </span></a></li>
                            <li><a href="myproducts.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_rent; ?> </span></a></li>
                        </ul>
                        <div class="header__cart__price">Min: <span>₹100.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
 


    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
             
                <?php 
                      $tableseller = 'seller_'. $username;
                        $results = mysqli_query($con,"SELECT * FROM $username WHERE liked ='Y'") or die("failed to query database".mysqli_error());
                       // $rows = mysqli_fetch_array($results);
                            if($results->num_rows > 0){
                                while($rows = $results->fetch_assoc()){
                                    $imageURL = 'seller/assets/seller/user/admin/items/'.$rows["product_image"];
                                      $pname =$rows["product_name"];
                                    $cos =$rows["day_charge"];
                                    $productid = $rows['product_id'];

                    ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Smartphones">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $imageURL;  ?>">
                            <form id="liked" class="login100-form validate-form" action="useritems.php" method="post" enctype="multipart/form-data" >
                            <ul class="featured__item__pic__hover">
                             <input type="hidden" name="productid" value="<?php echo $productid;  $_SESSION['product_id']=$productid; ?>">
                             <input type="hidden" name="cos" value="<?php echo $cos;  $_SESSION['day_charge']=$cos;  ?>">
                                <li><a><button type="submit" name="liked" style="border: none; background-color: transparent;"><i class="fa fa-heart"></i></button></a></li>
                                <li><a><button type="submit" name="view" style="border: none; background-color: transparent;"><i class="fa fa-info-circle"></i></button></a></li>
                                <li><a><button type="submit" name="cart" style="border: none; background-color: transparent;"><i class="fa fa-shopping-cart"></i></button></a></li>
                                <li><a><button type="submit" name="delete" style="border: none; background-color: transparent;"><i class="fa fa-trash"></i></button></a></li>
                            </ul>
                        </form>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $pname;  ?></a></h6>
                            <h5>Rs. <?php echo $cos;  ?>/day</h5>
                        </div>
                    </div>
                </div>
                 <?php }
                    }else{ ?>
                        <p style="margin-top: 8%"><i class="fa fa-camera"></i> Upload Your Item</p>
                    <?php } ?>
                </div>
       
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Banner End -->

    <!-- Latest Product Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a class="logotxt"  href="#"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                        </div>
                        <ul class="foot">
                            <li>Address: Poornima Institute Of Engineering and Technology,<br>ISI-2,RIICO Institutional Area, Gonar Road, Sitapura,<br>Jaipur-302022</li>
                            <li><a class="ah" href="tel:+91 8769506494">Phone: +91 8769506494</a></li>
                            <li><a class="ah" href="mailto: rentwebhost@gmail.com"> rentwebhost@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="aboutus.php">About Founders</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Social Links</h6>
                        <p>Get regular updates about our latest shop and special offers.</p>
                        <div class="footer__widget__social">
                            <a href="https://join.skype.com/invite/UZ6pb0L5L3Jm"  target="_blank"><i class="fa fa-skype"></i></a>
                            <a href="https://www.instagram.com/rentweb.in"  target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="http://www.linkedin.com/in/rentweb"  target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://pin.it/3zLjrRV"  target="_blank"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Rentweb Inc. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>



</body>

</html>