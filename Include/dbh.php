<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "tftf";
$port = 8889;


// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname, $port);

echo "connection succesful!";


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());   
}

?>   
    
