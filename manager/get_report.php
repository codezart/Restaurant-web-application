<?php
    $report_type = $_POST["report_type"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    if($report_type == "sales_food_item"){
        getFoodStat($start_date, $end_date);
    } else if($report_type == "sales_food_category"){
        getCategoryStat($start_date, $end_date);

    }

    function getFoodStat($start_date, $end_date){
        include("database_connection.php");
        $query = "SELECT name, totalPrice FROM (
            SELECT foodItemID, SUM(price) as totalPrice
            FROM `order` as o JOIN transaction t ON o.transactionID = t.id
            WHERE `date` BETWEEN '$start_date' AND '$end_date'
            GROUP BY foodItemID) as f JOIN fooditem ON f.foodItemID = foodItem.id";

        $query_result = mysqli_query($connection, $query);
        echo $connection->error;
        if($query_result){
            $result = "";
            while($row=mysqli_fetch_assoc($query_result)){
                $name = $row["name"];
                $total_price = $row["totalPrice"];
                $result .= "<tr><td>$name</td><td>$total_price</td></tr>";
            }
            echo $result;
        }

    }

    function getCategoryStat($start_date, $end_date){
        include("database_connection.php");
        $query = "SELECT name, totalPrice
            FROM (
                SELECT foodCategoryID, SUM(f.FoodTotalPrice) as totalPrice
                FROM (
                    SELECT foodItemID, SUM(price) as FoodTotalPrice
                    FROM `order` as o JOIN transaction t ON o.transactionID = t.id
                    WHERE `date` BETWEEN '$start_date' AND '$end_date'
                    GROUP BY foodItemID) as f JOIN fooditem ON f.foodItemID = foodItem.id
                    GROUP BY foodCategoryID) as fc JOIN foodcategory ON fc.foodCategoryID = foodCategory.id";

        $query_result = mysqli_query($connection, $query);
        echo $connection->error;
        if($query_result){
            $result = "";
            while($row=mysqli_fetch_assoc($query_result)){
                $name = $row["name"];
                $total_price = $row["totalPrice"];
                $result .= "<tr><td>$name</td><td>$total_price</td></tr>";
            }
            echo $result;
        }
    }
?>
