<?php
  require_once 'sessionStart.php';
  $_SESSION['previous_location']="login.php";
 ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign in | Aggressive Burgers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <!--------------------Header-------------------------------->
        <header class="htc__header bg--white">
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        <li class="drop"><a href="menu-list.php">Menu</a>
                                        </li>
                                        <li><a href="offers.php">Offers</a></li>
                                        <li class="drop"><a href="order-tracking.php">Order Tracking</a>
                                        </li>
                                        <li><a href="branches.php">Branches</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="login.php"><i
                                            class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="cart.php"><i
                                            class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------ Mobile Menu-------------------- -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!---------------------/ Mobile Menu--------------------------->
                </div>
            </div>
            <!-- -------------------/ Mainmenu Area --------------------------->
        </header>
        <!---------------------------- / Header--------------------------------------->

        <!-----------------Sign in---------------------------->
        <div class="sign-container">
          <?php
            require 'errorMessage.php';
           ?>
            <h1>Sign in</h1>
            <div class="regular-sign-container">
                <form method='POST' action = 'loginConfirmation.php'>
                    <div class="form-fields">
                        <label for="username">Username or Email Address</label>
                        <input type="text" name="username">
                        <label for="password">
                            Password
                            <a>Forgot Password?</a>
                        </label>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" value="Sign in"></input>
                </form>
                <p class="not-a-member">Not a member? <a href="sign_up.php">Sign up now</a></p>
            </div>


            <div class="social-sign-container">
                <div class="or">Or</div>
                <a class="sign-with-google">
                    <img src="images/google-logo.png">
                    Sign in with google
                </a>
                <a class="sign-with-twitter">
                    <img src="images/twitter-logo.png">
                </a>
                <a class="sign-with-facebook">
                    <img src="images/facebook-logo.png">
                </a>
            </div>

        </div>
        <!-----------------/Sign in---------------------------->
    </div>

    <!-------------Footer--------------->
    <footer class="footer__area footer--1">
        <div class="copyright bg--theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright__inner">
                            <div class="cpy__right--left">
                                <p>&#169;Aggressive Burgers. All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-------------/Footer--------------->
    </div>

    <!-- javascript Files -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/actions.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

      });
    </script>
</body>

</html>
