<?php
    session_start();

    if(!isset($_SESSION['ADMIN'])){
        header("Location: ../homepage.php?thou_doest_not_have_permission_ye_peasant");
        exit();
    }
?>
    
<html>
    <head>
        <title>TFTF</title>
        <link rel="stylesheet" type="text/css" href="CSS\layout.css">
        <link rel="stylesheet" type="text/css" href="CSS\dropdown.css">
    </head>

    <body>
        <header>
            <a href="admin.php">TFTF</a>
        </header>
        
        <nav>
            <ul>
                <li><a href="users.php">Users</a><li>
                <li><a href="vehicles.php">Vehicles</a><li>
                <li><a href="rented.php">Rented</a><li>
                <li><a href="Include\logout.php">Log Out</a><li>
            </ul>
        </nav>
        
        <?php
            include 'Include/dbh.php';

            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            
            echo "-ALL REGISTERED USERS-<br><br>";
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['user_uid'] . " AS " . $row['user_first'] . " " . $row['user_last'] . "<br>";
                }
            }
        ?>

        <form action="Include/userhandler.php" method="POST">
            <input type="text" name="delete" placeholder="delete user"><br>
            <button type="submit" name="submit">Delete</button>
        </form>

        <footer>
            <p>Welcome our Lord and Savior</p>
        </footer>
       
    </body>
</html>  

