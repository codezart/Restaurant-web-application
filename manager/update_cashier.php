<?php 
session_start();
include("database_connection.php");

if(isset($_POST["update_cashier"])){ //for updaing cashier.
    $id= $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "UPDATE cashier SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["updated"] = "Cashier updated successfully";
        header("Location: cashiers.php");
    }
    echo $connection->error;

} else if(isset($_POST["delete_cashier"])){ //for deleting cashier.
    $id= $_POST["id"];

    $query = "DELETE FROM cashier WHERE id='$id'";
    $query_result = mysqli_query($connection, $query);
    if($query_result){
        $_SESSION["deleted"] = "Cashier deleted successfully";
        header("Location: cashiers.php");
    }
}

?>