<?php 
session_start();
include("database_connection.php");

if(isset($_POST["update_offer"])){ //for updaing offer.
    $id= $_POST["id"];
    $new_price = $_POST["new-price"];
    $query = "UPDATE offer SET newPrice='$new_price' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Offer updated successfully";
        header("Location: offers.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_offer"])){ //for deleting offer.
    $id= $_POST["id"];
    echo $id;
    $query = "DELETE FROM offer WHERE id='$id' ";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Offer deleted successfully";
        header("Location: offers.php");
    }
}

?>