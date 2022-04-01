<?php
// Fetch TABLE RECORD  USING MySQLi PHP Procedural Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="employees";
// database user name 
$user = "root";
// database password
$password = "";

$conn = @new mysqli($server,$user,$password,$dbname);
// Check connection
if ($conn -> connect_errno) {

// Do not output specific error code in a live application
    echo ("Connect Error: ".$conn->connect_error);
}


    // SQL QUERY TO UPDATE TABLE VALUES
  
    $sql = "SELECT lastname,age FROM persons";// check if record updated
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($data as $k) {
        echo $k["lastname"]. ": ".$k['age'];
        echo '<br>';
    }
    

// close connection
mysqli_close($conn);


?>