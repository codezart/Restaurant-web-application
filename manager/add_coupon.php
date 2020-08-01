<?php 
    session_start();
    include("database_connection.php");

    if(isset($_POST["add_coupon"])){
        $coupon = $_POST["coupon"];
        $start_date = $_POST["start_date"];
        $end_date = $_POST["end_date"];

        $query = "INSERT INTO coupon (coupon, startDate, endDate) VALUES ('$coupon', '$start_date', '$end_date')";
        if(mysqli_query($connection, $query)){
            $_SESSION["success"] = "Coupon added successfully";
            header("Location: coupon.php");
        } else{
            $_SESSION["error"] = "Coupon not added";
            header("Location: coupon.php");
        }

    }
?>