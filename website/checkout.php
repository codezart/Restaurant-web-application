<?php

require_once 'sessionStart.php';

$_SESSION['previous_location']="checkout.php";


 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Checkout | Aggressive burgers</title>
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
                            <div class="breadcrumb__inner text-center">
                                <h2 class="breadcrumb-title">Checkout</h2>
                                <nav class="breadcrumb-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------/Breadcrumb -------------------------------------------->

        <!----------------------Checkout------------------------------------->
        <section class="htc__checkout bg--white section-padding--lg">
            <div class="checkout-section">
                <div class="container">
                  <?php
                    echo "<h3>Welcome,".$_SESSION['username']."</h3>";
                    require 'errorMessage.php';
                   ?>
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-30">
                            <div id="checkout-accordion">
                                <!---------- Checkout Method ------------------->
                                <div class="single-accordion">
                                    <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion"
                                        href="#checkout-method">1. checkout method</a>

                                    <div id="checkout-method" class="collapse show">
                                        <div class="checkout-method accordion-body fix">

                                            <ul class="checkout-method-list">
                                                <li class="active" data-form="checkout-login-form">Login</li>
                                                <li data-form="checkout-register-form">Register</li>
                                            </ul>

                                            <form action="loginConfirmation.php" Method="POST" class="checkout-login-form">
                                                <div class="row">
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="text"
                                                          name ='username'  placeholder="username"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="password"
                                                          name = "password"  placeholder="Password"></div>
                                                    <div class="input-box col-12"><input type="submit" value="Login">
                                                    </div>
                                                </div>
                                            </form>
                                            <form action="registration.php"  method = "POST" class="checkout-register-form">
                                                <div class="row">
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="text"
                                                          name="fname"  placeholder="First Name"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="text"
                                                          name="lname"  placeholder="Last Name"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="tel"
                                                            name="phone" pattern="[0-9]{10}"placeholder="Mobile Number"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="email"
                                                          name="email"  placeholder="Email Address"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="text"
                                                          name="username"  placeholder="Username"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="password"
                                                          name="password"  placeholder="Password"></div>
                                                    <div class="input-box col-md-6 col-12 mb--20"><input type="password"
                                                            placeholder="Confirm Password"></div>
                                                    <div class="input-box col-12"><input type="submit" value="Register">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!------------------- /Checkout Method ------------------------->
                                <!---------------------------- Shipping Method -------------------->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse"
                                        data-parent="#checkout-accordion" href="#shipping-method">3. shipping
                                        information</a>
                                    <div id="shipping-method" class="collapse">
                                        <div class="accordion-body shipping-method fix">

                                            <h5>shipping address</h5>
                                            <p><span>address&nbsp;</span>KFUPM, Building 816, Room 328</p>

                                            <button class="shipping-form-toggle">Ship to a different address?</button>

                                            <form action="#" class="shipping-form checkout-form">
                                                <div class="row">
                                                    <div class="col-12 mb--20">
                                                        <select>
                                                            <option value="1">Select a country</option>
                                                            <option value="2">Saudi Arabia</option>
                                                            <option value="3">Bharain</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="First Name">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="Last Name">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Street address" type="text">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)"
                                                            type="text">
                                                    </div>
                                                    <div class="col-12 mb--20">
                                                        <input placeholder="Town / City" type="text">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input type="text" placeholder="State / County">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb--20">
                                                        <input placeholder="Postcode / Zip" type="text">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input type="email" placeholder="Email Address">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <input placeholder="Phone Number" type="text">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!---------------------------- /Shipping Information -------------------->
                                <!------------------------ Payment Method----------------------------->
                                <div class="single-accordion">
                                    <a class="accordion-head collapsed" data-toggle="collapse"
                                        data-parent="#checkout-accordion" href="#payment-method">4. Payment method</a>
                                    <div id="payment-method" class="collapse">
                                        <div class="accordion-body payment-method fix">

                                            <ul class="payment-method-list">
                                                <li class="active">Cash</li>
                                                <li class="payment-form-toggle">credit card</li>
                                            </ul>

                                            <form action="#" class="payment-form">
                                                <div class="row">
                                                    <div class="input-box col-12 mb--20">
                                                        <label for="card-name">Name on Card *</label>
                                                        <input type="text" id="card-name" />
                                                    </div>
                                                    <div class="input-box col-12 mb--20">
                                                        <label>Credit Card Type</label>
                                                        <select>
                                                            <option>Please Select</option>
                                                            <option>Credit Card Type 1</option>
                                                            <option>Credit Card Type 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box col-12 mb--20">
                                                        <label for="card-number">Credit Card Number *</label>
                                                        <input type="text" id="card-number" />
                                                    </div>
                                                    <div class="input-box col-12">
                                                        <div class="row">
                                                            <div class="input-box col-12">
                                                                <label>Expiration Date</label>
                                                            </div>
                                                            <div class="input-box col-md-6 col-12 mb--20">
                                                                <select>
                                                                    <option>Month</option>
                                                                    <option>Jan</option>
                                                                    <option>Feb</option>
                                                                    <option>Mar</option>
                                                                    <option>Apr</option>
                                                                    <option>May</option>
                                                                    <option>Jun</option>
                                                                    <option>Jul</option>
                                                                    <option>Aug</option>
                                                                    <option>Sep</option>
                                                                    <option>Oct</option>
                                                                    <option>Nov</option>
                                                                    <option>Dec</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-box col-md-6 col-12 mb--20">
                                                                <select>
                                                                    <option>Year</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!------------------------ /Payment Method----------------------------->
                            </div>
                        </div>

                        <!------------------------ Order Details------------------------->
                        <div class="col-lg-6 col-12 mb-30">
                            <div class="order-details-wrapper">
                                <h2>your order</h2>
                                <div class="order-details">
                                    <form action="transaction.php" method="POST">
                                        <ul>
                                            <li class="product">
                                                <p class="strong">product</p>
                                                <p class="strong">total</p>
                                            </li>

                                            <ul class="orderSummary" id = "orderSumamry">

                                            </ul>

                                            <li>
                                                <p class="strong">cart subtotal</p>
                                                <p class="strong">190.98 SR</p>
                                            </li>

                                            <li>
                                                <p class="strong">shipping</p>
                                                <p class="strong" id="shippingPrice">7 SR</p>
                                            </li>

                                            <li>
                                                <p class="strong">order total</p>
                                                <p class="strong order-total"><?php echo $_SESSION['order-total'] ?> SR</p>
                                                <input type="hidden" name="orderTotal" value='<?php echo $_SESSION['order-total'] ?>' >
                                            </li>

                                            <li>
                                                <p class="strong">Coupon</p>
                                                <p class="strong">
                                                    <div class="input-box"><input placeholder="Enter coupon"></div>
                                                </p>
                                            </li>

                                            <li>
                                                <button type="submit" class="food__btn">place order</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!------------------------ /Order Details------------------------->
                    </div>
                </div>
            </div>
        </section>
        <!----------------------/Checkout------------------------------------->
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
    <script src="js/script.js"></script>
</body>

</html>
