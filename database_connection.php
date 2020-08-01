<?php
    $connection = new mysqli('localhost','root','','aggressiveburgers'); //mysqli('localhost','id11949669_root', 'AGburgers', 'id11949669_aggressiveburgers');
    if($connection->connect_error) die($connection->connect_error);
?>
