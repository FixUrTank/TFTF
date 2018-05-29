<?php
    session_start();

    if(isset($_SESSION['USER'])){
        
        if(isset($_GET['buggy1'])){
            $_SESSION['buggy1'] = "Standard Buggy";
            header("Location: ../cart.php");
            exit();
        }
        if(isset($_GET['buggy2'])){
            $_SESSION['buggy2'] = "Power Buggy";
            header("Location: ../cart.php");
            exit(); 
        }
        if(isset($_GET['buggy3'])){
            $_SESSION['buggy3'] = "4-Seater Buggy";
            header("Location: ../cart.php");
            exit(); 
        }
    } else {
        header("Location: ../login.php?please_log_in_or_sign_up");
        exit();
    }
?>