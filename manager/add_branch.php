<?php 
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_branch"])){
        $name = $_POST["name"];
        $location = $_POST["location"];
        $desc = $_POST["desc"];
        echo $desc;
        $query = "INSERT INTO branch (name, location, `desc`) VALUES ('$name', '$location', '$desc')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Branch added successfully";
            header("Location: branch.php");
        } else{
            $_SESSION["error"] = "Branch not added";
            echo $connection->error;
            //header("Location: branch.php");
        }

    }
?>  