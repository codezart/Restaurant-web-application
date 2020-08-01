<?php
  require_once 'sessionStart.php';
  require 'config.php';
  $message = '';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) ||empty($_POST['phone']) || empty($_POST['fname']) ||empty($_POST['lname'])){
      $message = "Please Enter All the Fields";
      header("Location:".$_SESSION['previous_location']."?message=".$message);
    }
    else{
        //defining username and Password email, phone, fname, lname
        $username =  mysqli_real_escape_string( $connection, $_POST['username'] );
        $password =  mysqli_real_escape_string( $connection, $_POST['password'] );
        $email =  mysqli_real_escape_string( $connection, $_POST['email'] );
        $phone =  mysqli_real_escape_string( $connection, $_POST['phone'] );
        $fname =  mysqli_real_escape_string( $connection, $_POST['fname'] );
        $lname =  mysqli_real_escape_string( $connection, $_POST['lname'] );

        //we need to check if the provided username or password is alrady in the db or not.
        //retrieve all username and email from db
        $queryusername = "SELECT * FROM customer where username ='$username'";
        $queryemail = "SELECT * FROM customer where email ='$email'";
        $resultusername = mysqli_query($connection, $queryusername);
        $resultemail = mysqli_query($connection, $queryemail);

        if((mysqli_num_rows($resultusername)==1)){    //checks if username already exists
          $message = "The username is already selected!";
          header('location: sign_up.php?message='.$message);
        }
        elseif((mysqli_num_rows($resultusername)==1) && (mysqli_num_rows($resultemail)== 1)){//checks if username & email already exists
          $message = "The username and email already exist!";
          header("location: sign_up.php?message=".$message);
        }
        elseif((mysqli_num_rows($resultemail)== 1)){
          $message = "Email already exists, would you like to login?";  // checks if the email is already selected, if yes show msg
          header("Location:sign_up.php?message=".$message);
        }
        else{
          $_SESSION['email']= $email;
          $_SESSION['username']= $username;
          $_SESSION['phone']= $phone;
          $_SESSION['fname']= $fname;
          $_SESSION['lname']= $lname;



          $insertQuery = "INSERT INTO customer (username,email,phone,password,fname,lname,statusID)  values
          ('$username','$email',$phone,'$password','$fname','$lname',11)";
          $result = mysqli_query($connection, $insertQuery);


          if($result){
            $message = "You have successfully signed up";
            header("location:".$_SESSION['previous_location']."?message=".$message);
          }
        }
  }
}
 ?>
