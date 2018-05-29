<?php
    session_start();

    if(isset($_SESSION['USER'])){
        
        if(isset($_GET['tour1'])){
            $_SESSION['tour1'] = "Full-Day Tour";
            header("Location: ../cart.php");
            exit();
        }
        if(isset($_GET['tour2'])){
            $_SESSION['tour2'] = "Half-Day Tour";
            header("Location: ../cart.php");
            exit(); 
        }
    } else {
        header("Location: ../login.php?please_log_in_or_sign_up");
        exit();
    }
?>