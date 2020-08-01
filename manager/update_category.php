<?php
session_start();
include("database_connection.php");
echo $connection->error;
if(isset($_POST["update_category"])){ //for updaing category.
    $id= $_POST["id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $status = $_POST["status"];
    $query = "UPDATE foodcategory SET name='$name', `desc`='$desc', statusID='$status' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Category updated successfully";
        header("Location: food_categories.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_category"])){ //for deleting category.
    $id= $_POST["id"];

    //Keep history

    $query = "DELETE FROM foodCategory WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Category deleted successfully";
        header("Location: food_categories.php");
    }
}

?>
