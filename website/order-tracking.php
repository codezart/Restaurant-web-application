<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order Tracking || Aggressive Burgers</title>
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

        <!--------------------Breadcrumb --------------------------->
        <div class="ht__breadcrumb__area bg-image--7">
            <div class="ht__breadcrumb__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="breadcrumb__inner text-center brad__white">
                                <h2 class="breadcrumb-title">Order Tracking</h2>
                                <nav class="breadcrumb-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Order Tracking</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------/Breadcrumb --------------------------->

        <!------------------ Order trackig box--------------- -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="subscribe__inner subscribe--3">
                            <h2>Enter you phone number to track your order</h2>
                            <div id="mc_embed_signup">
                                <div id="enter__email__address">
                                    <form action="order-progress.php" method="post" id="mc-embedded-subscribe-form"
                                        name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                                    placeholder="Enter your phone number" required>
                                            </div>
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                    tabindex="-1" value=""></div>
                                        </div>
                                </div>
                                <div class="clearfix subscribe__btn"><input type="submit" value="Track" name="subscribe"
                                        id="mc-embedded-subscribe" class="sign__up food__btn">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------ /Order trackig box--------------- -->
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

    <!-- Javascript Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/actions.js"></script>
</body>

</html>
