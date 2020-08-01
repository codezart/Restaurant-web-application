<?php 
session_start();
include("database_connection.php");

if(isset($_POST["update_branch"])){ //for updaing cashier.
    $id= $_POST["id"];
    $name = $_POST["name"];
    $location = $_POST["location"];
    $desc = $_POST["desc"];
    $query = "UPDATE branch SET name='$name', location='$location', `desc`='$desc' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Branch updated successfully";
        header("Location: branch.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_branch"])){ //for deleting cashier.
    $id= $_POST["id"];

    $query = "DELETE FROM branch WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Branch deleted successfully";
        header("Location: branch.php");
    }
}

?>