<?php 
session_start();
include("database_connection.php");
if(isset($_POST["update_local_order"])){ //for updaing food item.
    $id= $_POST["id"];
    $totalPrice = $_POST["totalPrice"];
    $status = $_POST["status"];

    $query = "UPDATE transaction SET totalPrice='$totalPrice',statusID='$status' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Local order updated successfully";
        header("Location: local_orders.php");
    }
    echo $connection->error;
}

?>
