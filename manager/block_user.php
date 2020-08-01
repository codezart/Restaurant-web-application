<?php
session_start();
include("database_connection.php");


if(isset($_POST["block_user"])){
    $userID = $_POST['id'];
    $query = "SELECT * FROM customer where id=$userID ";
    $result = mysqli_query($connection, $query);


    if(($result) &&(mysqli_num_rows($result)>0)){
      $row = mysqli_fetch_array($result);

      if($row['statusID'] == 11){
        $id = $row['id'];
      $updateQuery = "UPDATE customer SET statusID = 10 WHERE id =$id ";
      $result = mysqli_query($connection, $updateQuery);
      
      $_SESSION["success"] = "User blocked successfully";
   
    }
    elseif($row['statusID'] == 10){
      $id = $row['id'];
      $updateQuery = "UPDATE customer SET statusID = 11 WHERE id =$id ";
      $result = mysqli_query($connection, $updateQuery);
     
      $_SESSION["success"] = "User is Active";

    }
    }
    
    header("Location: users.php");
}
?>
