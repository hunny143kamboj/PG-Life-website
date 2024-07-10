<?php

// connecting with the database 

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "user-data";

$connection = new mysqli($server_name, $user_name, $password, $db_name);

if($connection->connect_error){
    die("Can't connected with database".$connection->connect_error);
}else{
    //echo "Connected successfully with database";
}


?>