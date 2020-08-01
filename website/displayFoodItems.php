<?php
    require_once 'sessionStart.php';                                                                                    //start session
    require 'config.php';                                                                                               //make db connection

    echo '<div class="food__list__tab__content tab-pane fade show active" id="nav-All" role="tabpanel">';               //display ALL items in all foods section
    respectiveFoodItem('All');
    echo '</div>';
                                            //retrieve all food categories
    $queryFC = "SELECT * FROM foodcategory";
    $resultFC = mysqli_query($connection, $queryFC);
                                                                                                                        //This is a nested loop which prints divs of each categories and food items belonging to these categories
    if(mysqli_num_rows($resultFC)>0){
      while($categoryRow = mysqli_fetch_array($resultFC)){
          echo '<div class="food__list__tab__content tab-pane fade" id="nav-'.$categoryRow['name'].'" role="tabpanel">';
          respectiveFoodItem($categoryRow['name']);
          echo '</div>';
      }
    }

    function respectiveFoodItem($categoryName){
      require_once 'sessionStart.php';                                                                                    //start session
      require 'config.php';                                                                                               //make db connection

                                                                                                                          //retrieve all food items
      $queryFI = "SELECT * FROM fooditem";
      $resultFI = mysqli_query($connection, $queryFI);

                                                                                                                          //retrieve the category id for $categoryName provided
      $categoryID = "select id from foodcategory where name = '$categoryName'";                                           // get corersponding food category id for a category name
      $categoryID = mysqli_query($connection, $categoryID);
      $categoryID = $categoryID->fetch_assoc();
      $categoryID = $categoryID['id'];                                                                                    //GET THE CATEGORY ID

                                                                                                                          //loop through each food item and get all the food items belonging to a particular categoryName and id
      if(mysqli_num_rows($resultFI)>0){
        while($foodItemRow = mysqli_fetch_array($resultFI)){
          if($foodItemRow['foodCategoryID'] == "$categoryID"){
             displayitem($foodItemRow);
          }
          if($categoryName == 'All'){
            displayitem($foodItemRow);
          }

        }
      }
    }
    function displayitem($foodItemRow){



      echo '<form method="post" action="menu-details.php">';
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
