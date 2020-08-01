<?php 
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_cashier"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO cashier (username, email, password) VALUES ('$username', '$email', '$password')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Cashier added successfully";
            header("Location: cashiers.php");
        } else{
            $_SESSION["error"] = "Cashier not added";
            header("Location: cashiers.php");
        }

    }
?>