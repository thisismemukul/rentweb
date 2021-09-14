<?php 
   session_start();
if (!isset($_SESSION['adminusername'])) {
   header('location:index.php');
   die();
}
include '../db/db.php';
// require 'includes/classes/init.php';
mysqli_select_db($con,'rentweb');
$adminusername = $_SESSION['adminusername'];
$check = mysqli_query($con,"SELECT * FROM `signup_admin`")  or die(header('location:../signup.php'));
// $row_check = mysqli_fetch_array($result_check);
//   $total_check=mysqli_num_rows($result_check);
//   mysqli_free_result($result_check);
// if ($total_check>0) {
    
// $result_liked = mysqli_query($con,"SELECT * FROM `$adminusername` WHERE liked ='Y';") or die(header('location:signup.php'));
// $row_liked = mysqli_fetch_array($result_liked);
//   $total_likes=mysqli_num_rows($result_liked);
//   mysqli_free_result($result_liked);

// $result_cart = mysqli_query($con,"SELECT * FROM `$adminusername` WHERE cart ='Y';") or die(header('location:signup.php'));
// $row_cart = mysqli_fetch_array($result_cart);
//   $total_cart=mysqli_num_rows($result_cart);
//   mysqli_free_result($result_cart);
// }

// $result = mysqli_query($con,"select * from rentwebusers where adminusername='$adminusername'") or die(header('location:../../signup.php'));
// $row = mysqli_fetch_array($result);
// if ($row['profile']==NULL) {
//     # code...
//     header('location:complete.php');
// }
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
    <title>Become A Seller || Rentweb</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="../css/style.css" type="text/css">
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
                <li><a href="liked.php"><i class="fa fa-heart"></i> <span><?php echo $total_likes; ?> </span></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span><?php echo $total_cart; ?> </span></a></li>
            </ul>
            <div class="header__cart__price">Min rate: <span>₹100.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Settings</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="complete.php">Profile</a></li>
                    <li><a href="complete.php">Mobile</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a class="sign_acc" style="display: inline-block;" href="logout.php"><i class="fa fa-user"></i> LogOut</a>
              
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Seller</a></li>
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
                                <div>Settings</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="complete.php">Profile</a></li>
                                    <li><a href="complete.php">Mobile</a></li>
                                </ul>
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
                        <a class="logotxt" href="#"><!-- <img src="img/logo.png" alt=""> -->RENTWEB</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="#">Seller</a></li>
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
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Your Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="featured__filter mx-auto" data-toggle="modal" data-target="#portfolioModal1work">
                            <img style="display: block;margin-left: 20%;" class="img-fluid" src="../assets/seller/assets/seller/user/default.svg" width="200" height="200" alt="upload" />
                        </div>
                    </div>
             <?php 
                    //   $tableseller = 'seller_'. $username;
                        $results = mysqli_query($con,"SELECT * FROM productdetails WHERE avalable = 'N' ORDER BY ID DESC") or die("failed to query database".mysqli_error());
                       // $rows = mysqli_fetch_array($results);
                            if($results->num_rows > 0){
                                while($rows = $results->fetch_assoc()){
                                    $imageURL = '../assets/seller/assets/seller/user/admin/items/'.$rows["product_image"];
                                      $pname =$rows["product_name"];
                                    $cos =$rows["day_charge"];
                                    $productid = $rows['product_id'];

                    ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix Electronics Smartphones">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $imageURL;  ?>">
                            <form id="liked" class="login100-form validate-form" action="itemscheck.php" method="post" enctype="multipart/form-data" >
                            <ul class="featured__item__pic__hover">
                             <input type="hidden" name="productid" value="<?php echo $productid;  $_SESSION['product_id']=$productid; ?>">
                             <input type="hidden" name="cos" value="<?php echo $cos;  $_SESSION['day_charge']=$cos;  ?>">
                                <li><a><button type="submit" name="accept" style="border: none; background-color: transparent;"><i class="fa fa-check-circle"></i></button></a></li>
                                <!-- <li><a><button type="submit" name="view" style="border: none; background-color: transparent;"><i class="fa fa-info-circle"></i></button></a></li>
                                <li><a><button type="submit" name="cart" style="border: none; background-color: transparent;"><i class="fa fa-shopping-cart"></i></button></a></li> -->
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


      <!--   <div class="portfolio-modal modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Product Details</h2>
                           
                            <?php 
                          // echo $productid;
                      //  $results = mysqli_query($con,"SELECT * FROM productdetails where product_id = '$view'") or die("failed to query database".mysqli_error());
                       // $row_username = mysqli_fetch_array($results);
                        
                       
                                  //  $imageURL = 'assets/seller/user/'.$_SESSION['username'].'/items/'.$row_username["product_image"];
                                   //   $pname =$row_username["product_name"];
                                  //  $perday =$row_username["day_charge"];

                    ?>  



                          <img class="img-fluid" src="<?php // echo $imageURL;  ?>" alt="" />
                            

                            <h6 class="mb-5"><?php //echo $pname;  ?></h6>
                            <h5>Rs. <?php //echo $perday;  ?>/day</h5>
                             

                 
                                    <button class="btn btn-secondary" data-dismiss="modal">
                                        <i class="fa fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div> --> 

        <div class="portfolio-modal modal fade" id="portfolioModal1work" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Upload Your Item Details</h2>
                                   <form class="login100-form validate-form" action="useritems.php" method="post" enctype="multipart/form-data" >
                                        <div class="wrap-input100 validate-input m-b-20">
                                            <label for="itemimage">Upload Image/Gif</label>
                                            <input type="file" name="itemimage" id="itemimage" class="form-control" required>
                                        </div>
                                    <!-- Portfolio Modal - Text-->
                                    <div class="form-group">
                                            <label for="itemname">Item Name</label>
                                            <input type="text" name="itemname" id="itemname" placeholder="Example:Samsung Galaxy" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="itemcategory">Item category</label>
                                            <!-- <input type="submit" name="itemcategory" id="itemcategory" placeholder="Example:Samsung Galaxy" class="form-control" required> -->
                                            <!-- <label for="itemcategory">Choose category:</label> -->
                                              <select  id="itemcategory" name="itemcategory" required>
                                                <option value="" disabled selected>Select item category</option>
                                                <option value="appliances">Home Appliances</option>
                                                <option value="electronics">Electronics</option>
                                                <option value="computers">Computers</option>
                                                <option value="furniture">Furniture</option>
                                                <option value="fitness">Fitness</option>
                                                <option value="automobiles">Automobiles</option>
                                                <option value="fitness">FITNESS</option>
                                                <option value="other">OTHER</option>
                                              </select>
                                        </div><br>


                                          





                                        <div class="form-group">
                                            <label for="discription">Discription</label>
                                            <textarea maxlength="500" rows="5" name="caption" id="caption" placeholder="Product name, Model name, Colour, etc." class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="itemcost">Item Cost</label>
                                            <input type="number" name="cost" id="cost"  min="399" placeholder="Enter cost of product" title="Minimunm cost should be INR 399" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="time">Sell for number of days</label>
                                            <input type="number" name="time_available" min="1" max="30" placeholder="Enter number of days" title="You can rent product for only <=30 days" id="time" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="post" class="btn btn-primary btn-black"><i class="fa fa-upload fa-fw"></i>Upload</button>
                                        </div>
                                    </form>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fa fa-times fa-fw"></i>
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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