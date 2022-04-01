<?php
// INSERT VALUES TO DATABASE TABLE  USING MySQLi PHP Object Orient Style 
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


  // SQL QUERY TO INSERT VALUES

  $sql = "INSERT INTO persons (firstname, lastname,email,department,age) VALUES ('Anan','Peter','test45@gmail.com',
  'IT','25')";

  // check if values inserted to database
if ($conn->query($sql) === TRUE) {
    $id = $conn -> insert_id;
    echo 'New person with id: ' . $id . ' added.';
  }
  else {
   echo 'Error: '. $conn->error;
  }


// close connection
mysqli_close($conn);


?>