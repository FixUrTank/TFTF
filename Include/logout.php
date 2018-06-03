<?php
session_start();

//Logging Out
if (isset($_SESSION['USER']) || isset($_SESSION['ADMIN'])){
    session_unset(); //removes all session variables

    session_destroy(); //destroys session and thus logs out user
    header("Location: ../homepage.php"); //sends visitor back to homepage
} else {
    //error handler if visitor is not logged in yet
    header("Location: ../login.php?please_log_in_or_sign_up");
}
?>