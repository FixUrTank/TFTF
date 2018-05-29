<?php
    session_start();

    if(isset($_SESSION['USER'])){
        
        if(isset($_GET['atv1'])){
            $_SESSION['atv1'] = "Nagasaki Blazer";
            header("Location: ../cart.php");
            exit();
        }
        if(isset($_GET['atv2'])){
            $_SESSION['atv2'] = "Nagasaki Rogue";
            header("Location: ../cart.php");
            exit(); 
        }
        if(isset($_GET['atv3'])){
            $_SESSION['atv3'] = "Shitzu Sanchez";
            header("Location: ../cart.php");
            exit(); 
        }
    } else {
        header("Location: ../login.php?please_log_in_or_sign_up");
        exit();
    }
?>