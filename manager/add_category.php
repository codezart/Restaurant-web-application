<?php
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_category"])){
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $status = $_POST["status"];

        $query = "INSERT INTO foodcategory (name, `desc`, statusID) VALUES ('$name', '$desc', '$status')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Category added successfully";
            header("Location: food_categories.php");
        } else{
            $_SESSION["error"] = "Category not added";
            echo $connection->error;
            header("Location: food_categories.php");
        }

    }
?>
