<?php
// DELETE TABLE VALUES  USING MySQLi PHP Procedural Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="employees";
// database user name 
$user = "root";
// database password
$password = "";

// connect to database
@$conn = mysqli_connect($server,$user,$password,$dbname);
// Check connection
if (mysqli_connect_errno()) {
    $error =  mysqli_connect_error();
  echo "Failed to connect to MySQL:<b> $error";
  exit();
}
// SQL QUERY TO DELETE TABLE VALUES
  
$sql = "DELETE FROM persons WHERE id = 4";

// check if record has been deleted
if (mysqli_query($conn, $sql) === TRUE) {

    echo  "Record deleted";
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>