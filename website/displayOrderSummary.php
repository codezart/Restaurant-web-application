<?php
require_once 'sessionStart.php';
  $item = $_SESSION['cart'];
  foreach ($item as $row) {
    echo "<li>";
    echo "<p class='foodName'>".$row['foodName']."</p>";
    echo "<p class= 'foodPrice' >".$row['totalPrice']."SR</p>";
    echo "</li>";
  }

?>
