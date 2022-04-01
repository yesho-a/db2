<?php
// INSERT VALUES TO DATABASE TABLE USING PHP PDO 
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

    // SQL QUERY TO INSERT VALUES

    $sql = "INSERT INTO persons (firstname, lastname,email,department,age) VALUES ('Yesho','Simon','example@gmail.com',
     'IT','45')";
    // Execute sql statement above

    $pdo->exec($sql);
    $id = $pdo->lastInsertId();
    echo 'New person with id: ' . $id . ' added.';
    } 
    
    catch (PDOException $e) {
    die("ERROR: Could not create table: " . $e->getMessage());
    }

?>