<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "kolokvijumi";

$conn = new mysqli($host, $user, $password, $database);

if($conn -> connect_error){
    echo "Error connecting to database $conn->connect_errno";
}else{
    echo "<script>console.log('Connection success');</script>";
}