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

@$conn = mysqli_connect($server,$user,$password,$dbname);
// Check connection
if (mysqli_connect_errno()) {
    $error =  mysqli_connect_error();
  echo "Failed to connect to MySQL:<b> $error";
  exit();
}


    // SQL QUERY TO UPDATE TABLE VALUES
  
    $sql = "SELECT * FROM persons";// check if record updated
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($data);
    // foreach ($result as $k) {
    //     echo $k["lastname"]. ": ".$k['age'];
    //     echo '<br>';
    // }
    

// close connection
mysqli_close($conn);


?>