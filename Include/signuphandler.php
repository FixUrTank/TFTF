<?php

include_once 'dbh.php'; //establishes connection with database

//checks if submit button is clicked
if(isset($_POST['submit'])){
    
    $uid = $_POST['uid'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    //checks if any fields are empty
    if(empty($uid) || empty($first) || empty($last) || empty($email) || empty($pwd)){
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    
    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    
    if($row = mysqli_fetch_assoc($result)){
        header("Location: ../signup.php?error=username_taken");
        exit();
    }
    
    else { 
    //inserts given values into database and runs query
    $sql = "INSERT INTO users(user_uid, user_first, user_last, user_email, user_pwd) VALUES ('$uid', '$first', '$last', '$email', '$pwd')";
    $result = mysqli_query($conn, $sql);
    
    header("Location: ../login.php?signup=succesful!");
    }
}
?>

