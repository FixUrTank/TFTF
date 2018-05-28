<?php
    session_start();

    if(isset($_GET['buggy1'])){
        header("Location: ../contact.php?wtf?"); 
    }
?>