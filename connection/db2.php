<?php
// connect to database using object oriented style

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';

$conn = @new mysqli($server,$user,$password,$dbname);
// Check connection
if ($conn -> connect_errno) {

// Do not output specific error code in a live application
    echo ("Connect Error: ".$conn->connect_error);
}

else {
    echo "Successfully connected to database";
}
