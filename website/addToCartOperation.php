<?php
  require_once 'sessionStart.php';
  if(!isset($_SESSION)){
    $_SESSION['cart']= Array();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $foodName = $_POST['foodName'];
      $price = $_POST['price'];
      $image = $_POST['image'];
      $quantity = $_POST['quantity'];
      $total = $quantity*$price;
      echo $foodName;
      $cart = array(
                    "foodName"=>$foodName,
                    "price"=>$price,
                    "image"=>$image,
                    "quantity"=>$quantity,
                    "totalPrice"=>$total
                  );
      array_push($_SESSION['cart'],$cart);
  }
 ?>
