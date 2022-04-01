<?php
// CREATE DATABASE USING PHP PDO 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//
//server name
$server = "localhost";
//database name
$dbname ="test";
// database user name 
$user = "root";
// database password
$password = "";

// connect using try-catch 


// attempt a connection
try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname;", "root","");
    } 
    
    catch (PDOException $e) {
    die("ERROR: Could not connect: " . $e->getMessage());
    }

    // sql statement to create table
    $sql     =  "CREATE DATABASE employees";
    $ret = $pdo->exec($sql);

    // Check if table is successfully created
    if ($ret == false) {
        $error = $pdo->errorInfo();
        echo "<span style='color:red'> Error: $error[2]</span>";
    } else {
       echo "Database successfully created";
    }
    
?>