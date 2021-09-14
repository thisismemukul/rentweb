<?php 
   session_start();
   if (!isset($_SESSION['username'])) {
   header('location:../../signup.php');
   die();
}
include '../../db/db.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'rentweb');
$username = $_SESSION['username'];

$result = mysqli_query($con,"select * from rentwebusers where username='$username'") or die(header('location:../../signup.php'));
$row = mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Rentweb Product Rental Website" />
    <meta name="keywords" content="Rent, Rentweb, Mukul Saini, e-commerce, Product Rental Website, electronics rental, rent to own smartphones, rent a computer, rent to buy furniture, refrigerator rental near me, short term appliance rental, rent to own mobile" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Product Rental Website Rentweb" />
    <meta name="author" content="Mukul Saini" />
    <title>Complete your profile || Rentweb</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/slicknav.min.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
</head>
<body>
    <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a class="logotxt" href="#">RENTWEB</a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> LogOut</a>
              
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">SetUp Profile</a></li>
                <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                <li><a href="../aboutus.php" target="_blank">About Us</a></li> 
                <li><a href="../contact.php" target="_blank">Contact</a></li>
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
                            <div class="header__top__right__auth">
                                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> LogOut</a>
                            
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
                        <a class="logotxt" href="#">RENTWEB</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="#">SetUp Profile</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="../aboutus.php" target="_blank">About Us</a></li> 
                            <li><a href="./contact.php" target="_blank">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

<main>
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                         <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Setup Profile</h2>
                          <!-- Portfolio Modal - Image-->
                            <div class="container-login100">
                            <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                        <form class="login100-form validate-form" action="userdetails.php" method="post" enctype="multipart/form-data" >
                            <img style="border-radius: 50%; height: 100px; width: 100px;" class="masthead-avatar mb-5" src="assets/seller/user/<?php echo ($_SESSION['username']); ?>/profile/<?php echo ($row['profile']); ?>" alt="Upload Profile" />
                            <div>
                                <label for="profileImage">Profile Image</label>
                                    <input type="file" name="profileImage" id="profileImage" class="form-control" required>
                            </div><br>
                            <div>
                                <label for="mobile">Mobile Number</label>
                                <input class="input100" type="tel" pattern="[0-9]{10}"  name="phone" placeholder="Phone Number*" value="<?php echo ($row['phone']); ?>" title="Must contain 10 digit mobile number" required>
                            </div><br>
                            <p class="mb-5">Please setup your profile by entering proper details.Please provide us your valid mobile number.</p>

                        <div class="form-group">
                        <button type="submit" name="save" class="btn btn-primary btn-black">Save</button>
                        </div>
                        </form>
                        </div>   
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!--  </div> -->
        
</main>

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
                            <li><a href="../aboutus.php">About Us</a></li>
                            <li><a href="#founders">About Founders</a></li>
                            <li><a href="https://rentwebdeals.blogspot.com" target="_blank">Blog</a></li>
                            <li><a href="../contact.php">Contact</a></li>
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
        <!-- Js Plugins -->
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.nice-select.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="../../js/jquery.slicknav.js"></script>
    <script src="../../js/mixitup.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>