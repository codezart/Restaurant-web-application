<?php
  require_once 'sessionStart.php';
  require 'config.php';
  $message = '';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['username']) || empty($_POST['password'])){
      $message = "Username or password is invalid";
      header("Location:login.php?message=".$message);
    }
    else{

        //defining username and Password
        $username =  mysqli_real_escape_string( $connection, $_POST['username'] );
        $password =  mysqli_real_escape_string( $connection, $_POST['password'] );


        $query = "SELECT id,statusID FROM customer where username ='$username'AND password ='$password'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result)>=1 ){
          $row = mysqli_fetch_array($result);
          if($row['statusID']==10){
            $message = "you are BLOCKED!";
          header('location:login.php?message='.$message);
          return;
          }
          $_SESSION['username'] = $username;
          if($_SESSION['previous_location'] =="checkout.php"){
            $message = "you have successfully logged in, Kindly choose your billing information and payment method";
          header('location:'.$_SESSION['previous_location'].'?message='.$message);
        }else {
          header('location: menu-list.php');
        }
        }
        else{
          $message = "Incorrect Username or Password";
          header("Location:login.php?message=".$message);
        }
  }
}

 ?>
