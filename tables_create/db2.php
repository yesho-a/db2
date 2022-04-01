<?php
// CREATE Table USING MySQLi PHP Object Orient Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//

// connect to database using object oriented style

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';

$conn = @new mysqli($server,$user,$password,$dbname);
// Check connection
if ($conn -> connect_errno) {

// Do not output specific error code in a live application
    echo ("Connect Error: ".$conn->connect_error);
}

// Create Database 
$sql = "CREATE TABLE people ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
department VARCHAR(30),
age INT(4),
reg_date TIMESTAMP
)";

// check if database created

if ($conn->query($sql) === TRUE) {
    echo 'Table successfully created';
  }
  else {
   echo 'Error: '. $conn->error;
  }


// close connection
mysqli_close($conn);


?>