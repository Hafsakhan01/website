<?php


// Database connection
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "website"; 

$conn = new mysqli($host, $user, $password, $dbname);

if (isset($conn)) {
    // echo "connected";
}


?>