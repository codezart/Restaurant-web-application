<?php
  require_once("sessionStart.php");
  require 'config.php';
  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    //UPDATing the transaction entity
    $date = date("Y-m-d");

    $orderTotal = $_POST['orderTotal'];
    $query = "INSERT INTO transaction (id,date,totalPrice) values (NULL,date('Y-m-d'),$orderTotal)";
    mysqli_query($connection, $query);

    //updating each order
    foreach ($_SESSION['cart'] as $food){
      $query = "SELECT max(id) FROM transaction";
      $transactionID = mysqli_fetch_array(mysqli_query($connection, $query));
      $transactionID = $transactionID[0];

      $foodName = $food['foodName'];
      $foodPrice = $food['price'];
      $quantity = $food['quantity'];

      $query = "SELECT id,price from fooditem WHERE name = '$foodName'";
      $food = mysqli_query($connection, $query);
      if(mysqli_num_rows($food)>0){
        while($fooditem = mysqli_fetch_array($food)){
          $foodID = $fooditem['id'];
          $originalPrice = $fooditem['price'];
        }
      }


      $query = "INSERT INTO `order` (`id`,`transactionID`, `fooditemID`, `quantity`, `price`) VALUES (NULL,$transactionID,$foodID,$quantity,$foodPrice)";
      mysqli_query($connection,$query);
    }
    header('location: order-recieved.php');
  }

 ?>
