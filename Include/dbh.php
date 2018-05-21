<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "TFTF";
$port = 8889;

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname, $port);

echo "connection succeful";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());   
}

?>   
    
