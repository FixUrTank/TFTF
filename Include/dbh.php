<?php

//database credentials
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "tftf";
$port = 8889;

//create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname, $port);

//error message if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());   
}

?>   
    
