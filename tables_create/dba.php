<?php
// CREATE Table USING PHP PDO 
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
   // sql statement to create table
   $sql = "CREATE TABLE persons ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   department VARCHAR(30),
   age INT(4),
   reg_date TIMESTAMP
   )";
    $ret = $pdo->exec($sql);

    // Check if table is successfully created
    if ($ret === false) {
        $error = $pdo->errorInfo();
        echo $error[2];
        } else {
        $id = $pdo->lastInsertId();
        echo 'New employee with id: ' . $id . ' added.';
        }
    
?>