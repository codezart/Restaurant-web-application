<?php
  require_once 'sessionStart.php';
  require_once 'config.php';

  $foodName = $_POST['foodName'];
  $query = "SELECT * FROM fooditem where name ='$foodName'";
  $result = mysqli_query($connection, $query);

  if(($result) && (mysqli_num_rows($result)>0)){
    $foodItemRow = mysqli_fetch_array($result);
    echo '<form method="post" action="menu-details.php" style="margin-bottom:10px">';
    echo '<input type="hidden" value='. $foodItemRow["id"] .'/>';
    echo '<div class="single__food__list d-flex wow fadeInUp col-12">';
    echo '<div class="food__list__thumb">';
    echo '<a href="menu-details.php"><input type="hidden" name="image" value= "'. $foodItemRow['image'].'"><img src="'.$foodItemRow['image'].'" alt="list food images"></a>';               //MAY NEED TO CHANGE IF WE GET IMAGES FOR EACH ITEM.ALSO THE LINK
    echo '</div>';
    echo '<div class="food__list__inner d-flex align-items-center justify-content-between">';
    echo '<div class="food__list__details">';
    echo '<h2><a class="food_Name"> <input type="hidden" name="foodName" value= "'. $foodItemRow['name'].'">'. $foodItemRow['name'].'</a></h2>';                    //MAY NEED TO CHANGE FOR THE HREF PART
    echo '<p><input type="hidden" name="description" value= "'. $foodItemRow['desc'].'">'. $foodItemRow['desc'].'</p>';
    echo '<div class="list__btn">';
    echo '<button type="submit" name="order" class="btn button food__btn grey--btn theme--hover order_btn">Order Now</button>';              //MAY NEED TO CHANGE FOR THE HREF PART
    echo '</div>';
    echo '</div>';
    echo '<div class="food__rating col-4">';
    echo '<div class="list__food__prize">';
    echo '<span class="price" ><input type="hidden" name=price value="'.$foodItemRow['price'].'">' .$foodItemRow['price']. 'SR</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</form>';

  }
?>
