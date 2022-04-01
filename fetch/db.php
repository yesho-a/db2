<?php
// Fetch TABLE RECORD USING PHP PDO 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="employees";
// database user name 
$user = "root";
// database password
$password = "";

// connect using try-catch 

try {

    // attempt a connection
    $pdo = new PDO("mysql:host=$server;dbname=$dbname;", "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL QUERY TO RETRIEVE TABLE VALUES
  
    $sql = "SELECT * FROM persons";
    // retrieve record as numeric array
    if ($result = $pdo->query($sql)) {
        foreach( $result as $row ) {
            echo $row["lastname"];
        }

       // $row = $result->fetchAll();
       // print_r($row[1][1]);

  // echo $row[0] . ":" . $row[1] . "\n";
//    echo '<br>';
    // retrieve record as associative array
//    $row = $result->fetch(PDO::FETCH_ASSOC);
//    echo $row['id'] . ":" . $row['lastname'] . "\n";

   // retrieve record as object
// $row = $result->fetch(PDO::FETCH_OBJ);
// echo $row->id . ":" . $row->lastname . "\n";

    } 
}
    catch (PDOException $e) {
    die("ERROR: Could not create table: " . $e->getMessage());
    }

?>