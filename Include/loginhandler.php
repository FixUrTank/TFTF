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
            $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
            $result = mysqli_query($conn, $sql);

            //queries the password
            $sql = "SELECT * FROM users WHERE user_pwd = '$pwd'";
            $result = mysqli_query($conn, $sql);
            
            //checks if row exists with corresponding username and password
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['USER'] = $uid;
                $_SESSION['EMPTY'] = "Your Cart Is Empty";
                header("Location: ../homepage.php?login=succes");
                //user logs in and is sent to the homepage
            } else {
                header("Location: ../login.php?login=error");
                exit();
            }
        } 
    }       
                

?>