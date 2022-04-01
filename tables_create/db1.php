<?php
// CREATE Table USING MySQLi PHP Procedural Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="test";
// database user name 
$user = "root";
// database password
$password = "";

@$conn = mysqli_connect($server,$user,$password,$dbname);
// Check connection
if (mysqli_connect_errno()) {
    $error =  mysqli_connect_error();
  echo "Failed to connect to MySQL:<b> $error";
  exit();
}


 // sql statement to create table
 $sql = "CREATE TABLE people ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50),
 department VARCHAR(30),
 age INT(4),
 reg_date TIMESTAMP
 )";

// check if database created
if (mysqli_query($conn, $sql) === TRUE) {
    echo 'Table successfully created';
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>