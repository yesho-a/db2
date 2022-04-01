<?php
// CREATE DATABASE Table USING PHP PDO 
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

    // sql statement to create table
    $sql = "CREATE TABLE persons ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    department VARCHAR(30),
    age INT(4),
    reg_date TIMESTAMP
    )";
    
    // Execute sql statement above

    $pdo->exec($sql);
    echo "Table successfully created";
    } 
    
    catch (PDOException $e) {
    die("ERROR: Could not create table: " . $e->getMessage());
    }

?>