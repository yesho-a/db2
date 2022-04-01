<?php

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
    
?>