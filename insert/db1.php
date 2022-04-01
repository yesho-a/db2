<?php
//  INSERT VALUES TO DATABASE TABLE USING MySQLi PHP Procedural Style 
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


   // SQL QUERY TO INSERT VALUES

   $sql = "INSERT INTO persons (firstname, lastname,email,department,age) VALUES ('Anan','Peter','test45@gmail.com',
   'IT','25')";
// check if database created
if (mysqli_query($conn, $sql) === TRUE) {

   $id =  mysqli_insert_id($conn);
   echo 'New person with id: ' . $id . ' added.';
}
else {
     echo 'Error: '. mysqli_error($conn);

}
// close connection
mysqli_close($conn);


?>