<?php
  require_once 'sessionStart.php';
  $_SESSION['previous_location']='sign_up.php';
 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign up | Aggressive Burgers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">>

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


        <!-------------------Sign up--------------------------->
        <div class="sign-container">
            <h1>Sign up</h1>
            <div class="social-sign-container">
                <a class="sign-with-google">
                    <img src="images/google-logo.png">
                    Sign up with google
                </a>
                <a class="sign-with-twitter">
                    <img src="images/twitter-logo.png">
                </a>
                <a class="sign-with-facebook">
                    <img src="images/facebook-logo.png">
                </a>
            </div>
            <div class="or">Or</div>
            <div class="regular-sign-container">
              <?php
                require 'errorMessage.php';
               ?>
                <form method="POST" action="registration.php">
                    <div class="form-fields">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" value="Sign up" class="signin-button"></input>
                </form>
            </div>
        </div>
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

    <!-- javascript Files -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/actions.js"></script>
</body>

</html>
