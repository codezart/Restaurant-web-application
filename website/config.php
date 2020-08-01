<?php

  require_once 'sessionStart.php';
  //assign session database name
  $_SESSION['databaseName'] = "id11949669_aggressiveburgers";

  //create connection
  $connection = mysqli_connect("localhost","root","","aggressiveburgers"); //mysqli_connect("localhost","id11949669_root","AGburgers","id11949669_aggressiveburgers");

  //if connection fails...
  if(!$connection)
    die("Error connecting with the server ".mysqli_connect_error);
  else {
    mysqli_select_db($connection, $_SESSION['databaseName']);
    //WRITE CODE FOR A CASE WHERE THE DB SELECTION FAILS............
  }

 ?>
