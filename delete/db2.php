<?php
// DELETE TABLE VALUES  USING MySQLi PHP Object Orient Style 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//

// connect to database using object oriented style

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'employees';

$conn = @new mysqli($server,$user,$password,$dbname);
// Check connection
if ($conn -> connect_errno) {

// Do not output specific error code in a live application
    echo ("Connect Error: ".$conn->connect_error);
}


  // SQL QUERY TO DELETE TABLE VALUES
  
  $sql = "DELETE FROM persons WHERE id = 2";

  // check if values deleted
if ($conn->query($sql) === TRUE) {
    echo  "Record updated";
  }
  else {
   echo 'Error: '. $conn->error;
  }


// close connection
mysqli_close($conn);


?>