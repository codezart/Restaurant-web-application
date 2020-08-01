<?php 
session_start();
include("database_connection.php");
if(isset($_POST["update_food_item"])){ //for updaing food item.
    $id= $_POST["id"];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $desc = $_POST["desc"];
    $status = $_POST["status"];

    $file = $_FILES["image"];
    $image_path = "images/foodItem/".$file["name"];
    move_uploaded_file($file["tmp_name"],$image_path);

    $query = "UPDATE fooditem SET name='$name',foodCategoryID='$category', price='$price', `desc`='$desc', statusID='$status',image='$image_path' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Food item updated successfully";
        header("Location: food_Items.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_food_item"])){ //for deleting food item.
    $id= $_POST["id"];
    $query = "DELETE FROM foodItem WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Food item deleted successfully";
        header("Location: food_items.php");
    } else{
        $_SESSION["deleted"] = $connection->error;
        header("Location: food_items.php");
    }
}

?>