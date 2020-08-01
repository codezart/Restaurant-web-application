<?php
  session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menu | Aggressive Burgers </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/Material-Card.css">

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


        <!--------------------Breadcrumb --------------------------->
        <div class="ht__breadcrumb__area bg-image--5">
            <div class="ht__breadcrumb__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="breadcrumb__inner text-center">
                                <h2 class="breadcrumb-title">Menu</h2>
                                <nav class="breadcrumb-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Menu</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------/Breadcrumb ----------------------------------->


        <!----------------- Menu list -------------------->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                      <div class="inline form-fields col-4 mb-2" role="" id="">
                          <label>Search Food Item</label>
                          <input type="text" name="foodName" placeholder="Enter Food Name">
                          <input type="submit" value="Submit" class="searchForFoodButton"></input>
                          <button class="removebutton" >remove</button>
                      </div>
                      <div class="loadedFoodItem">

                      </div>
                  </div>
                    <div class="col-lg-12">
                        <div class="food__nav nav nav-tabs" role="tablist" id="categoryHolder">
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="fd__tab__content tab-content" id="nav-tabContent">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="food__pagination d-flex justify-content-center align-items-center mt--130">
                            <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!----------------- /Menu list -------------------->
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/actions.js"></script>
    <script src="js/script.js"></script>






    </script>
</body>

</html>
