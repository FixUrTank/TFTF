<?php
    session_start();

    if(!isset($_SESSION['ADMIN'])){
        header("Location: ..homepage.php?thou_doest_not_have_permission_ye_peasant");
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

       <footer>
            <p>Welcome our Lord and Savior</p>
       </footer>
       
    </body>
</html>  

