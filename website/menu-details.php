<?php
  require_once "sessionStart.php"
 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menu Details | Aggressive Burgers</title>
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
        <div class="ht__breadcrumb__area bg-image--5">
            <div class="ht__breadcrumb__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="breadcrumb__inner text-center">
                                <h2 class="breadcrumb-title">Menu Details</h2>
                                <nav class="breadcrumb-inner">
                                    <a class="breadcrumb-item" href="index.php">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                    <span class="breadcrumb-item active">Menu Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------/Breadcrumb ----------------------------------->

        <!-----------------------Food Details------------------------>
        <section class="food__list__view section-padding--lg menudetails-right-sidebar bg--white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-12 col-sm-12">
                      <div id="show_message">
                      </div>
                        <div class="food__menu__container">
                            <div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                              <?php
                                  if(isset($_POST["order"])){
                                      $foodname = $_POST["foodName"];
                                      $price = $_POST["price"];
                                      $image = $_POST["image"];
                                        ?>
                                <div class="food__menu__thumb">
                                    <img class="image" src="<?php echo "$image" ?>" alt="images">
                                </div>
                                          <div class="food__menu__details">
                                              <div class="food__menu__content">
                                                  <h2 class="foodName"><?php echo $foodname ?></h2>
                                                  <ul class="food__dtl__prize d-flex">
                                                      <li class="price"><?php echo $price." SR" ?></li>
                                                  </ul>
                                          <?php
                                        }
                             
                                ?>
                                        <ul class="rating" style="display: inline-block">
                                            <li style="display: inline-block"><i class="fa fa-star"></i></li>
                                            <li style="display: inline-block"><i class="fa fa-star"></i></li>
                                            <li style="display: inline-block"><i class="fa fa-star"></i></li>
                                            <li style="display: inline-block"><i class="fa fa-star"></i></li>
                                            <li style="display: inline-block"><i class="fa fa-star"></i></li>
                                        </ul>
                                        <p><?php

                                          if(isset($_POST["order"])){
                                                $description = $_POST['description'];
                                                echo "$description";
                                        } ?></p>
                                        <div class="product-action-wrap">
                                            <div class="product-quantity">
                                                    <div class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box quantity" type="text"
                                                                name="qtybutton" value="1">
                                                            <div class="add__to__cart__btn">
                                                                <button class="btn button food__btn add-to-cart"  name="add-to-cart">Add To Cart</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu__description__area">
                                <div class="menu__nav nav nav-tabs" role="tablist">
                                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all"
                                        role="tab">Description</a>
                                    <a data-toggle="tab" href="#nav-reviews" role="tab">Reviews</a>
                                </div>

                                <!-----------Description------------------>
                                <div class="menu__tab__content tab-content" id="nav-tabContent">

                                    <div class="single__dec__content fade show active" id="nav-all" role="tabpanel">
                                        <p><?php

                                          if(isset($_POST["order"])){
                                                $description = $_POST['description'];
                                                echo "$description";
                                        } ?></p>

                                    </div>
                                    <div class="single__dec__content fade" id="nav-reviews" role="tabpanel">
                                        <!-----------/Description------------------>
                                        <!------------------Reviews-------------->
                                        <div class="review__wrapper">
                                            <!----------Review---------->
                                            <div class="single__review d-flex">
                                                <div class="review__thumb">
                                                    <img src="images/unknown.jpg" alt="review images">
                                                </div>
                                                <div class="review__details">
                                                    <h3>Marwan Mohammed</h3>
                                                    <div class="rev__meta d-flex justify-content-between">
                                                        <span>Admin - November 21, 2019</span>
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>This is a our food Item that is made by our chiefs with an
                                                        aggressive touch that will change your mode.This is a our food
                                                        Item that is made by our chiefs with an aggressive touch that
                                                        will change your mode.</p>
                                                </div>
                                            </div>
                                            <!----------/Review---------->
                                            <!----------Review---------->
                                            <div class="single__review d-flex">
                                                <div class="review__thumb">
                                                    <img src="images/unknown.jpg" alt="review images">
                                                </div>
                                                <div class="review__details">
                                                    <h3>Marwan Mohammed</h3>
                                                    <div class="rev__meta d-flex justify-content-between">
                                                        <span>Admin - November 21, 2019</span>
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>This is a our food Item that is made by our chiefs with an
                                                        aggressive touch that will change your mode.This is a our food
                                                        Item that is made by our chiefs with an aggressive touch that
                                                        will change your mode.</p>
                                                </div>
                                            </div>
                                            <!----------/Review---------->
                                        </div>
                                    </div>

                                </div>

                            </div>
                          </form>
                        </div>
                        <!-------- Popular Menu --------------->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="popupal__menu">
                                    <h4>Popular Menu</h4>
                                </div>
                            </div>
                        </div>
                        <!-------- popular items --------------->
                        <div class="row mt--30">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.php">
                                            <img src="images/special-offer/1.jpg">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><a href="menu-details.php">Food Item</a></h4>
                                        <ul class="beef__prize">
                                            <li class="old__prize">30SR</li>
                                            <li>30SR</li>
                                        </ul>
                                        <p>This is a our food Item that is made by our chiefs with an aggressive touch
                                            that will change your mode.</p>
                                        <div class="beef__cart__btn">
                                            <a href="cart.php">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------- /popular item -------------->
                            <!-------- popular item --------------->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.php">
                                            <img src="images/special-offer/2.jpg">
                                        </a>
                                    </div>
                                    <div class="beef__details">
                                        <h4><a href="menu-details.php">Food Item</a></h4>
                                        <ul class="beef__prize">
                                            <li class="old__prize">30SR</li>
                                            <li>30SR</li>
                                        </ul>
                                        <p>This is a our food Item that is made by our chiefs with an aggressive touch
                                            that will change your mode.</p>
                                        <div class="beef__cart__btn">
                                            <a href="cart.php">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------- /popular item -------------->
                            <!-------- popular item -------------->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="beef_product">
                                    <div class="beef__thumb">
                                        <a href="menu-details.php">
                                            <img src="images/special-offer/3.jpg">
                                        </a>
                                    </div>
                                    <div class="beef__hover__info">
                                        <div class="beef__hover__inner">
                                            <span>Special</span>
                                            <span>offer</span>
                                        </div>
                                    </div>
                                    <div class="beef__details">
                                        <h4><a href="menu-details.php">Food Item</a></h4>
                                        <ul class="beef__prize">
                                            <li class="old__prize">30SR</li>
                                            <li>30SR</li>
                                        </ul>
                                        <p>This is a our food Item that is made by our chiefs with an aggressive touch
                                            that will change your mode.</p>
                                        <div class="beef__cart__btn">
                                            <a href="cart.php">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------- /popular item -------------->
                        </div>
                        <!-------- /Popular Menu --------------->
                    </div>
                    <!--------Aside offers------------->
                    <div class="col-lg-4 col-md-12 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="food__sidebar">
                            <!-- offer------>
                            <div class="mt--60">
                                <div class="popular__food">
                                    <div class="pp_food__thumb">
                                        <a href="menu-details.php">
                                            <img src="images/popular/5.jpg" alt="popular food">
                                        </a>
                                        <div class="pp__food__prize">
                                            <span>40SR</span>
                                        </div>
                                    </div>
                                    <div class="pp__food__inner">

                                        <div class="pp__food__details">
                                            <h4><a href="menu-details.php">Food Item</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                            <p>Free Delivery</p>
                                            <div
                                                class="pp__food__bottom d-flex justify-content-between align-items-center">
                                                <div class="pp__btn">
                                                    <a class="food__btn btn--transparent btn__hover--theme"
                                                        href="#">Order now</a>
                                                </div>
                                                <ul class="pp__meta d-flex">
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------/offer------>

                            <!-------offer---- -->
                            <div class="mt--60">
                                <div class="popular__food">
                                    <div class="pp_food__thumb">
                                        <a href="menu-details.php">
                                            <img src="images/popular/6.jpg" alt="popular food">
                                        </a>
                                        <div class="pp__food__prize">
                                            <span>40SR</span>
                                        </div>
                                    </div>
                                    <div class="pp__food__inner">

                                        <div class="pp__food__details">
                                            <h4><a href="menu-details.php">Food Item</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                            <p>Free Delivery</p>
                                            <div
                                                class="pp__food__bottom d-flex justify-content-between align-items-center">
                                                <div class="pp__btn">
                                                    <a class="food__btn btn--transparent btn__hover--theme"
                                                        href="#">Order now</a>
                                                </div>
                                                <ul class="pp__meta d-flex">
                                                    <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------/offer-------->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------------- /Food Details  -------------------->
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
    <script src="js/addToCart.js"></script>
</body>

</html>
