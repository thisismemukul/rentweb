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
    <title>Rentweb | About Us</title>

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
                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>₹1150.00</span></div>
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
                <li><a href="cart.php">Cart</a> </li>
                <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                <li class="active"><a href="#">About Us</a></li> 
                <li><a href="contact.php">Contact</a></li>
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
                                        <li><a href="./seller/login.php">LogIn</a></li>
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
                            <li><a href="cart.php">Cart</a> </li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li class="active"><a href="#">About Us</a></li> 
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->



    <!-- Contact Section Begin -->
    <section class="contact spad">
            <div class="section-title">
          <h2 data-aos="fade-in">About US</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-8 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-info-circle fa-2x"></i></span>
                        <h4>About Rentweb</h4>
                        <p>Rentweb is a online product renting website for a local user of a society. This website will be designed to maximize the efficiency of E-commerce market by providing tools to assist users to be friendly with the online interface rather then process, which would otherwise have to be performed manually. By maximizing the user’s work efficiency and production the website will meet the user’s needs while remaining easy to understand and use. More specifically, this website is designed to allow an user to buy or Rent products with a group of individuals and sellers to simply the problem of lack of product availability of items in the digital market.</p><br>
                        <p>Rentweb facilitate communication between sellers, buyers, and the Shopkeepers by mobile messaging. Preformatted reply forms are used in every stage of the procedure , progress through the website to provide a uniform review process; the location of these forms is configurable via the website maintenance options. We also contains a relational database containing a list of user, product, shopkeepers etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
     <!-- Blog Section Begin -->
    <section id="founders" class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Founders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="left: 8%;" class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="../img/founders/mj.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><a href="https://www.instagram.com/mohit_jangid111" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.twitter.com/mohit_jangid097" target="_blank"><i class="fa fa-twitter"></a></i></li>
                            </ul>
                            <h5><a href="https://www.instagram.com/mohit_jangid111" target="_blank">Mohit Jangid</a></h5>
                            <h6>COO</h6>
                            <p>Computer Science and Engineer(Student)<br>Front-End Developer </p>
                        </div>
                    </div>
                </div>
                <div style="left: 8%;" class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="../img/founders/thisisme.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><a href="https://www.instagram.com/thisismemukul" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.twitter.com/thisisme_mukul" target="_blank"><i class="fa fa-twitter"></a></i></li>
                            </ul>
                            <h5><a href="https://www.instagram.com/thisismemukul" target="_blank">Mukul Saini</a></h5>
                            <h6>CEO</h6>
                            <p>Computer Science and Engineer(Student)<br>Full Stack Web Developer || Graphic Designer </p>
                        </div>
                    </div>
                </div>
                <div style="left: 8%;" class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="../img/founders/mg.jpeg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><a href="https://www.instagram.com/mohitguptagenius" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.twitter.com/MohitGu89282550" target="_blank"><i class="fa fa-twitter"></a></i></li>
                            </ul>
                            <h5><a href="https://www.instagram.com/mohitguptagenius" target="_blank">Mohit Gupta</a></h5>
                            <h6>CFO</h6>
                            <p>Computer Science and Engineer(Student)<br>Front-End Developer </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
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
                            <li><a href="#founders">About Founders</a></li>
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

















   