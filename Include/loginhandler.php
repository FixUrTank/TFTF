<?php
    session_start();
    
    include 'dbh.php'; //establishes connection with database
    
    //checks if submit button is clicked
    if(isset($_POST['submit'])){
        
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        //error handler
        //checks if either login fields are empty
        if(empty($uid) || empty($pwd)){
            header("Location: ../login.php?login=empty");
            exit();
        } else {
            //queries the username
            $sql = "SELECT * FROM users WHERE user_uid = '$uid' AND user_pwd = '$pwd'";
            $result = mysqli_query($conn, $sql);

            //checks if row exists with corresponding username and password
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['USER'] = $uid;
                $_SESSION['EMPTY'] = "Your Cart Is Empty";
                header("Location: ../homepage.php?login=succes");
                //user logs in and is sent to the homepage
            }
                
            //checks if admin account logging in
            $sql = "SELECT * FROM users WHERE user_uid = 'ADMIN' AND user_pwd = '$pwd'";
            $result = mysqli_query($conn, $sql);

            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['ADMIN'] = "ADMIN";
                header("Location: ../admin.php?welcome_admin");
            }
            
            else {
                header("Location: ../login.php?login=error");
                exit();
            }
        } 
    }       
                

?>