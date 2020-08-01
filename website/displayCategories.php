<?php
    require_once 'sessionStart.php';//start session
    require 'config.php';           //make db connection

    //retrieve all food categories
    $queryFC = "SELECT * FROM foodcategory";
    $resultFC = mysqli_query($connection, $queryFC);

    if(mysqli_num_rows($resultFC)>0){
      echo '<a class="active" id="nav-All-tab" data-toggle="tab" href="#nav-All" role="tab" aria-selected="true">All</a>';
      while( $row = mysqli_fetch_array($resultFC)){
        if($row["name"] != "All"){
            echo '<a id="nav-'.$row['name'].'-tab" data-toggle="tab" href="#nav-'.$row['name'].'" role="tab" aria-selected="false">'.$row['name'].'</a>';
        }
      }
    }
 ?>
