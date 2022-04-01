<?php
// Delete TABLE VALUES USING PHP PDO 
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

    // SQL QUERY TO DELETE TABLE VALUES
  
    $sql = "DELETE FROM persons WHERE id = 3";

    // Execute sql statement above

    $pdo->exec($sql);
    echo 'Record deleted';
    } 
    
    catch (PDOException $e) {
    die("ERROR: Could not create table: " . $e->getMessage());
    }

?>