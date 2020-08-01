<?php
require_once 'sessionStart.php';
  $item = $_SESSION['cart'];
  foreach ($item as $row) {
    echo "<tr>";
    echo '<td class="product-thumbnail"><a href="#"><img src="'.$row['image'].'" alt="product img" /></a></td>';
    echo '<td class="product-name"><a href="#">'.$row['foodName'].'</a></td>';
    echo '<td class="product-price"><span class="amount">'.$row['price'].' SR</span></td>';
    echo '<td class="product-quantity"><input type="number" value="'.$row['quantity'].'" /></td>';
    echo '<td class="product-subtotal">'.$row['totalPrice'].' SR</td>';
    echo '<td class="product-remove"><a href="#">X</a></td>';
    echo "</tr>";
    $_SESSION['order-total']=$_SESSION['order-total']+$row['totalPrice'];
  }
  $_SESSION['order-total']=$_SESSION['order-total']+7;
 ?>
