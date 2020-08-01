<?php 
session_start();
include("database_connection.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $query_result = mysqli_query($connection, $query);
    echo $connection->error;
    if($query_result && mysqli_num_rows($query_result) == 1){
        header("Location: manager/dashboard.php");
    } else{
        $query = "SELECT * FROM cashier WHERE email='$email' AND password='$password'";
        $query_result = mysqli_query($connection, $query);
        if($query_result && mysqli_num_rows($query_result) == 1){
            header("Location: cashier/dashboard.php");
        } else{
            $_SESSION["error"] = "Wrong email or password. Please try again.";
            header("location: index.php");
        }
    }
}


?>