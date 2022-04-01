<?php
// UPDATE TABLE VALUES  USING MySQLi PHP Procedural Style 
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
  
    $sql = "UPDATE persons SET firstname = 'Jon', lastname= 'bill',age ='44' WHERE id = 4";
// check if record updated
if (mysqli_query($conn, $sql) === TRUE) {

    echo  "Record update";
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>