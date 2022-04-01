<?php 

$server = 'localhost2';
$user = 'root';
$password = '';

@$conn = mysqli_connect($server,$user,$password);
// Check connection
if (mysqli_connect_errno()) {
    $error =  mysqli_connect_error();
  echo "Failed to connect to MySQL:<b> $error";
  exit();
}

?>