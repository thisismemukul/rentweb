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
        <title>Email-Confirmation ||Rentweb</title>
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
    <body id="page-top">
        <!--LOGO-->
        <div class="logo">
            <a href="index.php"><span class="logo-txt">RENTWEB</span></a>
        </div>
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form"  method="post">
                <span class="login100-form-title p-b-37">
                    Email-Confirmation
                </span>
<!-- first_box -->
                <div class="wrap-input100 validate-input m-b-20 first_box" data-validate="Enter email">
                    <input id="email" class="input100" type="email" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Must contain @ and at least 2 or more characters like .co, .in, .com, etc.">
                    <span id="email_error"></span>
                    <span class="focus-input100"></span>
                </div>
                
                <div class="container-login100-form-btn first_box">
                    <button class="login100-form-btn" onclick="send_otp()">
                        Send OTP
                    </button>
                </div>
<!-- second_box -->
                <div class="wrap-input100 validate-input m-b-20 second_box" data-validate="Enter valid OPT">
                    <input id="otp" class="input100" type="text" name="otp" placeholder="OTP" pattern="[0-9]{6}" title="OTP must be of 6 digits please try again.">
                    <span class="focus-input100"></span>
                </div>
                
                <div id="s_box" class="container-login100-form-btn second_box">
                    <button class="login100-form-btn second_box" onclick="submit_otp()">
                        SUBMIT
                    </button>
                </div>

                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        Or
                    </span>
                </div>

                <div class="text-center">Forgot
                    <a onclick="forgot();" href="#" class="txt2 hov1">
                     Email?
                    </a>
                </div>


                <div class="text-center">Want to sell items?
                    <a href="./assets/seller/login.php" class="txt2 hov1">
                     Log In
                    </a>
                </div>
                <div class="text-center">Alrady have an account?
                    <a href="signin.php" class="txt2 hov1">
                     Sign In
                    </a>
                </div>
                <div class="text-center">Don’t have an account?
                    <a href="signup.php" class="txt2 hov1">
                     Sign Up
                    </a>
                </div>
            </form>

            
        </div>
    </div>
    <script type="text/javascript">
        function forgot(){
        alert("Yaad Rakha Karooo :#");
        }
        function social(){
            alert("Rukoo Zara!!! Sabar Karoo");
        }
        function send_otp(){
            var email = jQuery('#email').val();
            alert("Please do not press the SEND OTP button again\nand check your Email you will recieve an OTP this may take few minutes.");
            jQuery.ajax({
                url:'send_otp.php',
                type:'post',
                data:'email='+email,
                success:function(result){
                    if (result=='yes') {
                        jQuery('.second_box').show();
                        jQuery('.second_box').css('{"display": "-webkit-box","justify-content": "center","align-items": "center"}');
                        jQuery('.first_box').hide();
                    }
                    if (result=='not_exist') {
                        alert("This Email does not exist.");
                        jQuery('.first_box').show();
                        jQuery('.second_box').hide();
                    }
                    if (result=='reg') {
                        alert("This Email is already registered.\nYou can SignIn now to continue.");
                        window.location="signin.php"
                    }
                }
            });
        }

         function submit_otp(){
            var otp = jQuery('#otp').val();
            jQuery.ajax({
                url:'check_otp.php',
                type:'post',
                data:'otp='+otp,
                success:function(result){
                    if (result=='yes') {
                       window.location="signin.php";
                    }
                    if (result=='not_exist') {
                        alert("Please Enter Valid OTP");
                    }
                }
            });
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