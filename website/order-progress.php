<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order Progress | Aggressive Burgers</title>
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
                                <h2 class="breadcrumb-title">Order Progress</h2>
                                <nav class="breadcrumb-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Order Progress</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------/Breadcrumb ----------------------------------->

        <!--------------------Progress Bar-------------------->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="row">
                    <div class="container px-1 px-md-4 py-5 mx-auto">
                        <div class="card">
                            <div class="row d-flex justify-content-between px-3 top">
                                <div class="d-flex">
                                    <h5>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
                                </div>
                                <div class="d-flex flex-column text-sm-right">
                                    <p class="mb-0">Expected Arrival <span>20 Minutes</span></p>
                                    <p>Phone <span class="font-weight-bold">0543433393</span></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <ul id="progressbar" class="text-center">
                                        <li class="active step0"></li>
                                        <li class="active step0"></li>
                                        <li class="active step0"></li>
                                        <li class="step0"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row justify-content-between top">
                                <div class="row d-flex icon-content"> <img class="icon"
                                        src="https://i.imgur.com/9nnc9Et.png">
                                    <div class="d-flex flex-column">
                                        <p class="font-weight-bold">Order<br>Processed</p>
                                    </div>
                                </div>
                                <div class="row d-flex icon-content"> <img class="icon"
                                        src="images/fork.png">
                                    <div class="d-flex flex-column">
                                        <p class="font-weight-bold">Order<br>Ready</p>
                                    </div>
                                </div>
                                <div class="row d-flex icon-content"> <img class="icon"
                                        src="https://i.imgur.com/TkPm63y.png">
                                    <div class="d-flex flex-column">
                                        <p class="font-weight-bold">Order<br>En Route</p>
                                    </div>
                                </div>
                                <div class="row d-flex icon-content"> <img class="icon"
                                        src="https://i.imgur.com/HdsziHP.png">
                                    <div class="d-flex flex-column">
                                        <p class="font-weight-bold">Order<br>Arrived</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------Progress Bar-------------------->

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

</body>

</html>
