<?php 
session_start();
include("database_connection.php");

if(isset($_POST["update_coupon"])){ //for updaing cashier.
    $id= $_POST["id"];
    $coupon = $_POST["coupon"];
    $start_date = $_POST["end_date"];
    $end_date = $_POST["start_date"];
    $query = "UPDATE coupon SET coupon='$coupon', startDate='$start_date', endDate='$end_date' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Coupon updated successfully";
        header("Location: coupon.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_coupon"])){ //for deleting cashier.
    $id= $_POST["id"];

    $query = "DELETE FROM coupon WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Coupon deleted successfully";
        header("Location: coupon.php");
    }
}

?>