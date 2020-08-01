<?php
include("database_connection.php");
if(isset($_POST["food_item_id"])){
    $food_item_id = $_POST["food_item_id"];
    $query = "SELECT price FROM fooditem WHERE id='$food_item_id'";
    $query_result = mysqli_query($connection, $query);

    if($query_result && mysqli_num_rows($query_result) == 1){
        $row = mysqli_fetch_assoc($query_result);
        $price = $row["price"];
        echo $price;
    }
}
?>
