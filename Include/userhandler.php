<?php
    session_start();

    if(isset($_SESSION['ADMIN'])){
        include 'dbh.php';
        
        if(isset($_POST['submit'])){
            
            $uid = $_POST['delete'];
            $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_fetch_assoc($result)){
                $sql = "DELETE FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);

                header("Location: ../users.php?deletion=succes!");
        } else {
            header("Location: ../users.php?user=inexistent");
        }
    }  
} else {
        header("Location: ../homepage.php?lolz");
    }
?>