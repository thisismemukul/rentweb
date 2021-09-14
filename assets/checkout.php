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
$productid = $_SESSION['productid'];
$result_liked = mysqli_query($con,"SELECT * FROM `$username` WHERE liked ='Y';") or die(header('location:../signup.php'));
$row_liked = mysqli_fetch_array($result_liked);
  $total_likes=mysqli_num_rows($result_liked);
  mysqli_free_result($result_liked);

$result_cart = mysqli_query($con,"SELECT * FROM `$username` WHERE cart ='Y';") or die(header('location:../signup.php'));
$row_cart = mysqli_fetch_array($result_cart);
  $total_cart=mysqli_num_rows($result_cart);
  mysqli_free_result($result_cart);
$resultphone = mysqli_query($con,"select * from rentwebusers where username='$username'") or die(header('location:../signup.php'));
$rowphone = mysqli_fetch_array($resultphone);

$result = mysqli_query($con,"select * from signup where username='$username'") or die(header('location:../signup.php'));
$row = mysqli_fetch_array($result);

$resultuser = mysqli_query($con,"select * from $username where product_id = '$productid'") or die(header('location:../signup.php'));
$rowuser = mysqli_fetch_array($resultuser);
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
    <title>Checkout | Rentweb</title>

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
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_cart; ?> </span></a></li>
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
                <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                <li><a href="aboutus.php" target="_blank">About Us</a></li> 
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
                <li>Sell or rent your items here</li>
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
                                <li>Sell or rent your items here</li>
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
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="../aboutus.php" target="_blank">About Us</a></li> 
                            <li><a href="../contact.php" target="_blank">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_cart; ?> </span></a></li>
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
                    <!-- Portfolio Item 1-->
             <?php 
                         $results = mysqli_query($con,"SELECT * FROM productdetails where product_id = '$productid'") or die("failed to query database".mysqli_error());
                          $row_username = mysqli_fetch_array($results);
                       
                                    $imageURL = 'seller/assets/seller/user/admin/items/'.$row_username["product_image"];
                                      $pname =$row_username["product_name"];
                                      $pdisc =$row_username["description"];
                                    $perday =$row_username["day_charge"];

                    ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $imageURL;  ?>">
                            <form id="liked" class="login100-form validate-form" action="useritems.php" method="post" enctype="multipart/form-data" >
                            <ul class="featured__item__pic__hover">
                             <input type="hidden" name="productid" value="<?php echo $productid;  $_SESSION['product_id']=$productid; ?>">
                             <input type="hidden" name="cos" value="<?php echo $cos;  $_SESSION['day_charge']=$cos;  ?>">
                                <li><a><button type="submit" name="liked" style="border: none; background-color: transparent;"><i class="fa fa-heart"></i></button></a></li>
                                <li><a><button type="submit" name="view" style="border: none; background-color: transparent;"><i class="fa fa-info-circle"></i></button></a></li>
                                <li><a><button type="submit" name="cart" style="border: none; background-color: transparent;"><i class="fa fa-shopping-cart"></i></button></a></li>
                            </ul>
                        </form>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $pname;  ?></a></h6>
                            <h5>Rs. <?php echo $perday;  ?>/day</h5>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 30px;" >
                        <p>YOUR NAME :  <?php echo $row["name"]; ?></p> 
                        <p>YOUR EMAIL :  <?php echo $row["email"]; ?></p>
                        <?php

                            if($rowphone["phone"] == NULL){ 
                            ?>
                             <form id="myFormmobile" method="post" action="useritems.php"></form>
                            <?php 
                            }else{ ?>
                        <p>YOUR PHONE NUMBER : <?php echo ($rowphone["phone"]); ?></p>
                            <?php } ?> 
                            <form id="myForm" method="post" action="useritems.php">
                        <label for="time">NUMBER OF DAYS : </label>
                        <input type="number" id="time_rent" name="time_rent" min="1" max="30" placeholder="Days" value="<?php echo ($rowuser["rent_days"]); ?>" oninput="submitform();" title="You can rent product for only <=30 days" id="time" required>
                        </form>

                        <script type="text/javascript">
                            function submitform(){
                              var VALUECHECK = document.getElementById('time_rent').value;
                                if (VALUECHECK >30) {
                                    alert("Product is availabe for max 30 days only");
                                }else{
                                document.getElementById('myForm').submit();
                                }
                            }
                        </script>
                        <?php

                            if($rowuser["charge"] <=0){ 
                            ?>
                            <input type="hidden" name="hidden">
                            <?php 
                            }else{ ?>
                        <p>CHARGE : <?php echo ($rowuser["charge"]);  ?></p>
                            <?php } ?> 

                        <form action="checkoutmail.php" method="post">

                            <?php

                            if($rowphone["phone"] == NULL){ 
                            ?>
                            <label for="mobile">Mobile Number</label>
                                <input class="input100" type="tel" pattern="[0-9]{10}"  name="phone" placeholder="Whatsapp,paytm Number*" value="" title="Must contain 10 digit mobile number" form="myFormmobile" required>
                                <button type="submit" id="postphone" name="postphone" class="btn btn-primary" form="myFormmobile">Submit</button>
                                <br>
                            <?php 
                            }else{ ?>
                        <input type="hidden" name="hiddenphone">
                            <?php } ?>

                            <input type="checkbox" name="placeholdercheck" required><label>Send me a mail </label><br>
                            <button type="submit" id="cancel" name="cancel" class="btn btn-secondary" form="Cancelform">Cancel</button>
                            <?php
                            if($rowuser["rent_days"] >0){ 
                            ?>
                            <button type="submit" name="placeorder" class="btn btn-secondary">Place Order</button>
                            <?php 
                            }else{ ?>
                                <label>Please Enter Number Of Days</label>
                            <?php } ?>
                        </form><br>
                         <form id="Cancelform"  method="post" action="useritems.php"></form>
                    </div>
                </div>
     <!--         </div>
         </div> -->

       
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