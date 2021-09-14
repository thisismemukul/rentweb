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
        <title>SignUp||Rentweb</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!--BOOTSTRAP-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--FONTAWESOME-->
    <link rel="stylesheet" type="text/css" href="css/fa/css/all.css">
     <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
    <body id="page-top">
        <!--LOGO-->
        <div class="logo">
            <a href="index.php"><span class="logotxt">RENTWEB</span></a>
        </div>
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="accounts.php" method="post">
                <span class="login100-form-title p-b-37">
                    Sign Up
                </span>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Full Name">
                    <input class="input100" type="text" name="name" placeholder="Full Name" pattern="[A-Z a-z]{1,32}" title="Must contain alphabatic characters." required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="username" pattern="^[a-z\d._]{3,}$" title="Must contain at least 3 or more alphabatic or numeric characters,Capital letters not acceptable." required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
                    <input class="input100" type="email" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Must contain @ and at least 2 or more characters like .co, .in, .com, etc." required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="pass" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "password don't match">
                    <input class="input100" type="password" name="passc" placeholder="confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign Up
                    </button>
                </div>

                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        Or continue with
                    </span>
                </div>

                <div class="flex-c p-b-22">
                    <a href="#" onclick="social();" class="login100-social-item">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" onclick="social();" class="login100-social-item">
                        <img src="img/icons/icon-google.png" alt="GOOGLE">
                    </a>
                </div>

                <div class="text-center">Alrady have an account?
                    <a href="signin.php" class="txt2 hov1">
                     Sign In
                    </a>
                </div>
            </form>

            
        </div>
    </div>
    <script type="text/javascript">
        function social(){
            alert("Rukoo Zara!!! Sabar Karoo");
        }
    </script>
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main1.js"></script>
</body>
</html>