<?php 
if(isset($_POST["order_summery"])){
    include("database_connection.php");
    $order_summery = $_POST["order_summery"];
    $total_price = $_POST["total_price"];

    //Make the transaction
    $date = date('y-m-d');
    $query = "INSERT INTO transaction (date, totalPrice, statusID,type) VALUES ('$date', '$total_price', 6,'Local')";
    $query_count = "SELECT COUNT(*) FROM transaction";
    $query_result = mysqli_query($connection, $query);
    $count_result = mysqli_query($connection, $query_count);
    
    if($query_result){
        $row = mysqli_fetch_assoc($count_result);
        $transication_id = $row['COUNT(*)'];
        //Store the orders related to the transication. 
        foreach($order_summery as $item){
            $food_id = $item["id"];
            $food_quantity = $item["quantity"];
            $food_price = $item["price"] * $food_quantity;
            $query = "INSERT INTO `order` (transactionID, foodItemID, quantity, price) VALUES ('$transication_id', '$food_id', '$food_quantity', '$food_price')";
            mysqli_query($connection, $query);
        }
    }
}
?>