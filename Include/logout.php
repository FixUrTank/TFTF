<?php
session_start();

//destroys session variable and logs out user and sends them back to homepage
if (isset($_SESSION['USER'])){
    session_unset();

    session_destroy();

    header("Location: ../homepage.php");
} else {
    //error handler if visitor is not logged in yet
    header("Location: ../login.php?please_log_in_or_sign_up");
}
?>