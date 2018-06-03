<?php
    session_start();

    if(!isset($_SESSION['ADMIN'])){
        header("Location: ../homepage.php?thou_doest_not_have_permission_ye_peasant");
        exit();
    }
    include_once 'Include/dbh.php';
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
            
            $sql = "SELECT * FROM vehicles";
            $result = mysqli_query($conn, $sql);
            
            echo "ALL OUR VEHICLES <br><br>";
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    echo  "Vehicle ID: " . $row['vehicle_id'] . " Type: " . $row['vehicle_type'] . " NAME: " . $row['vehicle_name'] . " PRICE: $ " . $row['vehicle_price'] . "<br>";
                }
            }
        ?>

        <footer>
            <p>Welcome our Lord and Savior</p>
        </footer>
       
    </body>
</html>  

