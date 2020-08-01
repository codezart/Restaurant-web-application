<?php 
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_offer"])){
        $foodItemID = $_POST["food-item"];
        $old_price = $_POST["old-price"];
        $new_price = $_POST["new-price"];

        $query = "INSERT INTO offer (foodItemID, oldPrice, newPrice) VALUES ('$foodItemID', '$old_price', '$new_price')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Offer added successfully";
            header("Location: offers.php");
        } else{
            $_SESSION["error"] = "Offer not added";
            header("Location: offers.php");
        }

    }
?>