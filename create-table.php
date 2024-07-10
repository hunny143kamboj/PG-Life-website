<?php

//create a table with php and SQL

require "database.php";

$sql = "CREATE TABLE userss(
      
      name VARCHAR(30) NOT NULL,
      email VARCHAR(30) NOT NULL,
      contact INT(30) NOT NULL,
      gender VARCHAR(30)
      
)";
 if($connection->query($sql) === TRUE) {
    echo "Database table created successfully";
 }else{
    echo"Table not created".$connection->error;
 }

?>