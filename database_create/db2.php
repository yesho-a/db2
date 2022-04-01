<?php
// CREATE DATABASE USING MySQLi PHP Object Orient Style 
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

else {
    echo "Successfully connected to database";
}

// Create Database 
$sql     =  "CREATE DATABASE employee";

// check if database created
if (mysqli_query($conn, $sql) === TRUE) {
    echo 'Database successfully created';
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>