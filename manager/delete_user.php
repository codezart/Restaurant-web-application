<?php 
session_start();
include("database_connection.php");

if(isset($_POST["delete_user"])){ //for deleting users
    $id= $_POST["id"];
    $query = "DELETE FROM customer WHERE id='$id' ";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["success"] = "User deleted successfully";
        header("Location: users.php");
    }
}
?>