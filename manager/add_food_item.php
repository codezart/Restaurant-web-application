<?php
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_food_item"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $status = $_POST["status"];
        $category = $_POST["category"];
        $desc = $_POST["desc"];

        $file = $_FILES["image"];
        $image_path = "images/foodItem/".$file["name"];
        move_uploaded_file($file["tmp_name"],$image_path);


        $query = "INSERT INTO fooditem (name, foodCategoryID, price, `desc`, statusID,image) VALUES ('$name', '$category', '$price', '$desc', '$status','$image_path')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Food item added successfully";
            header("Location: food_items.php");
        } else{
            $_SESSION["error"] = "Food item not added";
            echo $connection->error;
            //header("Location: food_items.php");
        }

    }
?>
