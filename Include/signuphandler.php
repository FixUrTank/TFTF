<?php

if (isset($_POST['submit'])) {
    
    include_once "dbh.php";

    $uid = $_POST["uid"];
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO users(user_uid, user_first, user_last, user_email, user_pwd) 
        VALUES('$uid','$first','$last','$email','$pwd')"; 
    
    $result = msql_query($conn, $sql);

    header("Location: login.php");
    
?>

