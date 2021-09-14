<?php 
   session_start();
if (!isset($_SESSION['username'])) {
   header('location:signup.php');
   die();
}
include 'db/db.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];
$result_liked = mysqli_query($con,"SELECT * FROM `$username` WHERE liked ='Y';") or die(header('location:signup.php'));
$row_liked = mysqli_fetch_array($result_liked);
  $total_likes=mysqli_num_rows($result_liked);
  mysqli_free_result($result_liked);

$result_cart = mysqli_query($con,"SELECT * FROM `$username` WHERE cart ='Y';") or die(header('location:signup.php'));
$row_cart = mysqli_fetch_array($result_cart);
  $total_cart=mysqli_num_rows($result_cart);
  mysqli_free_result($result_cart);

    $result_rent = mysqli_query($con,"SELECT * FROM `$username` WHERE rent ='Y';") or die(header('location:../signup.php'));
$row_rent = mysqli_fetch_array($result_rent);
  $total_rent=mysqli_num_rows($result_rent);
  mysqli_free_result($result_rent);


$result = mysqli_query($con,"select * from signup where username='$username'") or die(header('location:signup.php'));
$row = mysqli_fetch_array($result);
 ?>
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
    <title>Rentweb | Product Rental Website</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a class="logotxt" href="#"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="./assets/liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span><?php echo $total_cart; ?> </span></a></li>
                <li><a href="./assets/myproducts.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_rent; ?> </span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>₹1150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
          <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Became a Seller</div>
                    <ul>
                        <li><a href="./assets/seller/login.php">LogIn</a></li>
                        <li><a href="signup.php">SignUp</a></li>
                    </ul>
            </div>
            <div class="header__top__right__auth">
                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> SignOut</a>
              
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="./assets/cart.php">Cart</a> </li>
                <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                <li><a href="./assets/aboutus.php">About Us</a></li> 
                <li><a href="./assets/contact.php">Contact</a></li>
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
                <li>Free Shipping for all Order of ₹199</li>
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
                                <li>Free Shipping for all Order of ₹199</li>
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
                                        <li><a href="signup.php">SignUp</a></li>
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
                        <a class="logotxt" href="#"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="./assets/cart.php">Cart</a> </li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="./assets/aboutus.php">About Us</a></li> 
                            <li><a href="./assets/contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./assets/liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <span><?php echo $total_cart; ?> </span></a></li>
                            <li><a href="./assets/myproducts.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_rent; ?> </span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>₹1150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="./assets/appliances.php">HOME APPLIANCES</a></li>
                            <li><a href="./assets/electronics.php">ELECTRONICS</a></li>
                            <li><a href="./assets/computers.php">COMPUTERS</a></li>
                            <li><a href="./assets/furniture.php">FURNITURE</a></li>
                            <li><a href="./assets/automobiles.php">AUTOMOBILES</a></li>
                            <li><a href="./assets/fitness.php">FITNESS</a></li>
                            <li><a href="./assets/office.php">OFFICE NEEDS</a></li>
                            <li><a href="./assets/offers.php">OFFERS </a></li>
                            <li><a href="#filter"></a></li>
                            <li><a href="#filter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="tel:+91 8769506494"> <h5>CALL NOW</h5></a><
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
<!--CAROUSEL-->

        <div class="carouseldiv">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://image.freepik.com/free-photo/property-market-with-house-mini-house-shopping-cart_1150-17827.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.freepik.com/free-vector/season-sale_62951-24.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.freepik.com/free-photo/girlfriends-going-shopping-concept_53876-86016.jpg" alt="Third slide">
                    </div>
                    <div class="hero__text">
                            <span class="logotxt">RENTWEB</span>
                            <p>you need we provide</p>
                            <h2>Order Now <br />100% Trustable</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#filter" class="primary-btn">SHOP NOW</a>
                            <a href="logout.php" class="primary-btn">SIGN OUT</a>
                        </div>
             </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

         </div>
    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/smart-devices.png">
                            <h5><a href="#">Smart Devices</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/TV-Units.png">
                            <h5><a href="#">TV Units</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/smartphones.png">
                            <h5><a href="#">smartphones</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/laptops.png">
                            <h5><a href="#">laptops</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/baby-furniture.png">
                            <h5><a href="#">baby-furniture</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/dining.png">
                            <h5><a href="#">dining</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section id="filter" class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Electronics"><a style="color: #121212;" href="./assets/electronics.php">Electronics</a></li>
                            <li data-filter=".Computers"><a style="color: #121212;" href="./assets/computers.php">Computers</a></li>
                            <li data-filter=".Furniture"><a style="color: #121212;" href="./assets/furniture.php">Furniture</a></li>
                            <li data-filter=".Smartphones"><a style="color: #121212;" href="./assets/electronics.php">Smartphones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                    <!-- Portfolio Item 1-->
             <?php 
                        $results = mysqli_query($con,"SELECT * FROM productdetails WHERE avalable = 'Y' ORDER BY ID DESC") or die("failed to query database".mysqli_error());
                       // $rows = mysqli_fetch_array($results);
                            if($results->num_rows > 0){
                                while($rows = $results->fetch_assoc()){
                                    $imageURL = 'assets/seller/assets/seller/user/admin/items/'.$rows["product_image"];
                                      $pname =$rows["product_name"];
                                    $cos =$rows["day_charge"];
                                    $productid = $rows['product_id'];

                    ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $imageURL;  ?>">
                            <form id="liked" class="login100-form validate-form" action="assets/useritems.php" method="post" enctype="multipart/form-data" >
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
                            <h5>Rs. <?php echo $cos;  ?>/day</h5>
                        </div>
                    </div>
                </div>
                 <?php }
                    }else{ ?>
                        <p style="margin-top: 8%"><i class="fa fa-error"></i> Server Error</p>
                    <?php } ?>
                </div>


    

            <!-- <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Computers">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/HP-desktop.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">
HP 22-C0022DS 21.5" Full HD WLED Intel J4005 4GB 1TB HDD All-in-One PC (Renewed)</a></h6>
                            <h5> 1749/mo </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Smartphones">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/Galaxy.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Galaxy Note 10 (Aura Black)</a></h6>
                            <h5> 2399/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Computers Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/laptop.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">HP 15 Notebook , Intel Core i3 processor , 7th Gen - (4GB / 1TB HDD / Win 10 Home OS / 15.6 inch/ Silver )</a></h6>
                            <h5> 1649/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Computers Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/laptops.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">HP 22-C0022DS 21.5" Full HD WLED Intel J4005 4GB 1TB HDD All-in-One PC (Renewed)</a></h6>
                            <h5> 2949/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/fire_stick.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Amazon Fire TV Stick</a></h6>
                            <h5> 389/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Computers Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/Acer-Aspire-5-Slim-Laptop.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Acer Aspire 5 Slim Laptop, 15.6 inches Full HD IPS Display, AMD Ryzen 3 3200U, Vega 3 Graphics, 4GB DDR4, 128GB SSD, Backlit Keyboard, Windows 10 in S Mode, A515-43-R19L, Silver</a></h6>
                            <h5> 679/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Furniture">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/recliner.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Macedonia Mid Century Modern Tufted Back Fabric Recliner (Light Grey Tweed)</a></h6>
                            <h5> 249/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Furniture">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/study-table.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">CubiCubi Computer Desk 32" Study Writing Table for Home Office, Industrial Simple Style PC Desk, Black Metal Frame, Rustic</a></h6>
                            <h5> 249/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Furniture">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/fitness.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">NordicTrack Commercial Series Treadmills + 1 year iFit membership ($396 value)</a></h6>
                            <h5> 249/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/Samsung-Galaxy-A01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">
Samsung Galaxy A01 (A015M) 16GB, Dual SIM, GSM Unlocked, 5.7” Display Smartphone - International Version - Red</a></h6>
                            <h5> 249/mo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Smartphones Electronics">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/Samsung-Galaxy-A20s.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Samsung Galaxy A20s A207M/DS, 32GB/3GB RAM Dual SIM 6.5''HD+ Snapdragon 450, Factory Unlocked (International Version) - (Red)</a></h6>
                            <h5> 2150/mo</h5>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


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
                            <li><a href="./assets/aboutus.php">About Us</a></li>
                            <li><a href="./assets/aboutus.php">About Founders</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="./assets/contact.php">Contact</a></li>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>