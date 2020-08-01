<?php
  require_once 'sessionStart.php';
  $_SESSION['previous_location']="index.php";
  $_SESSION['cart']= Array();
  $_SESSION['order-total']=0;
 ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>Home | Aggressive Burgers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--------------- Stylesheets ---------------------->
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
                                        <li class=""><a href="index.php">Home</a></li>
                                        <li class=""><a href="menu-list.php">Menu</a></li>
                                        <li><a href="offers.php">Offers</a></li>
                                        <li class=""><a href="order-tracking.php">Order Tracking</a></li>
                                        <li><a href="branches.php">Branches</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="login.php"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="cart.php"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03/span>
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

        <!------------------------------------Slider ---------------------------->
        <div class="slider__area">
            <div>
                <div class="slide slider__fixed--height bg-image--3 poss--relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <h2>We Are,</h2>
                                        <h1>“Aggressive Burgers”</h1>
                                        <div class="slider__btn__container">
                                            <div class="slider__btn">
                                                <a class="food__btn" href="branches.php"><img
                                                        src="images/Local-Pickup.png">Pickup</a>
                                            </div>
                                            <div class="slider__btn">
                                                <a class="food__btn" href="menu-list.php"><img src="images/shipped.png">Delivery</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------/Slider------------------------------>

        <!-------------------------Special Offer---------------------------------------------->
        <section class="food__special__offer bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2 class="title__line">Our Special Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <!--------Offer------>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="food__offer text-center foo">
                            <div class="offer__thumb poss--relative">
                                <img src="images/offer-product/1.jpg">
                                <div class="offer__product__prize">
                                    <span>25SR</span>
                                </div>
                            </div>
                            <div class="offer__details">
                                <h2><a href="menu-details.php">Food Item</a></h2>
                                <p>This is a our food Item that is made by our chiefs with an aggressive touch that will
                                    change your mode.</p>
                                <div class="offer__btn">
                                    <a class="food__btn grey--btn mid-height" href="menu-details.php">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------/Offer------>
                     <!--------Offer------>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="food__offer text-center foo">
                            <div class="offer__thumb poss--relative">
                                <img src="images/offer-product/2.jpg" alt="offer images">
                                <div class="offer__product__prize">
                                    <span>25SR</span>
                                </div>
                            </div>
                            <div class="offer__details">
                                <h2><a href="menu-details.php">Food Item</a></h2>
                                <p>This is a our food Item that is made by our chiefs with an aggressive touch that will
                                    change your mode.</p>
                                <div class="offer__btn">
                                    <a class="food__btn grey--btn mid-height" href="menu-details.php">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--------/Offer------>
                     <!--------Offer------>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="food__offer text-center foo">
                            <div class="offer__thumb poss--relative">
                                <img src="images/offer-product/3.jpg" alt="offer images">
                                <div class="offer__product__prize">
                                    <span>25SR</span>
                                </div>
                            </div>
                            <div class="offer__details">
                                <h2><a href="menu-details.php">Food Item</a></h2>
                                <p>This is a our food Item that is made by our chiefs with an aggressive touch that will
                                    change your mode.</p>
                                <div class="offer__btn">
                                    <a class="food__btn grey--btn mid-height" href="menu-details.php">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--------/Offer------>
                     <!--------Offer------>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="food__offer text-center foo">
                            <div class="offer__thumb poss--relative">
                                <img src="images/offer-product/4.jpg" alt="offer images">
                                <div class="offer__product__prize">
                                    <span>25SR</span>
                                </div>
                            </div>
                            <div class="offer__details">
                                <h2><a href="menu-details.php">Food Item</a></h2>
                                <p>This is a our food Item that is made by our chiefs with an aggressive touch that will
                                    change your mode.</p>
                                <div class="offer__btn">
                                    <a class="food__btn grey--btn mid-height" href="menu-details.php">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--------/Offer------>
                </div>
            </div>
        </section>
       <!-------------------------Special Offer--------------------------->

        <!-------------Footer--------------->
        <footer class="footer__area footer--1">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
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

    <!------------ javascript files --------------->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/actions.js"></script>
</body>
</html>
