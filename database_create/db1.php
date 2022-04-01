<?php
// CREATE DATABASE USING MySQLi PHP Procedural Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="test";
// database user name 
$user = "root";
// database password
$password = "";

@$conn = mysqli_connect($server,$user,$password);
// Check connection
if (mysqli_connect_errno()) {
    $error =  mysqli_connect_error();
  echo "Failed to connect to MySQL:<b> $error";
  exit();
}

// create database 
$sql     =  "CREATE DATABASE employees";
// check if database created
if ($conn->query($sql) === TRUE) {
    echo 'Database successfully created';
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>