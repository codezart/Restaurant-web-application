<?php 
include("database_connection.php");
if(isset($_POST["category_id"])){
    $category_id = $_POST["category_id"];
    $query = "SELECT id,name FROM fooditem WHERE foodCategoryID='$category_id'";
    $query_result = mysqli_query($connection, $query);

    if($query_result && mysqli_num_rows($query_result) > 0){
        $foodItems = "<option value=-1 disabled selected> Select food Item</otion>";
        while($row = mysqli_fetch_assoc($query_result)){
            $foodItems .="<option value=".$row["id"].">".$row["name"]."</option>";
        }
        echo $foodItems;
    }
}
?>