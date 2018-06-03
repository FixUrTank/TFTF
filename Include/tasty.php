<?php

session_start();

include 'dbh.php';

        $sql = "SELECT * FROM vehicles";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)){
            while ($row = mysqli_fetch_assoc($result)){
                echo "shit = " . $row['vehicle_id'] . " Name " . $row['vehicle_name'] . "<br>";
            }
        }
        
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        
        echo "-ALL REGISTERED USERS-<br>";
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['user_uid'] . " AS " . $row['user_first'] . $row['user_last'] . "<br>";
            }
        }

        $sql = "SELECT * FROM vehicles";
        $result = mysqli_query($conn, $sql);
        
        echo "ALL OUR VEHICLES <br>";
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
                echo "Vehicle ID: " . $row['vehicle_id'] . " Type: " . $row['vehicle_type'] . " NAME: " . $row['vehicle_name'] . " PRICE: $" . $row['vehicle_price'] . "<br>";
            }
        }

    ?>

    <table id="checkout" style="width:100%">
        <tr>
            <th>ITEM</th>
            <th>PRICE</th>
        </tr>

        <tr>
        <?php
            if(isset($_SESSION['buggy1']) || isset($_SESSION['buggy2']) || isset($_SESSION['buggy3']) || 
            isset($_SESSION['atv1']) || isset($_SESSION['atv2']) || isset($_SESSION['atv3']) || 
            isset($_SESSION['tour'])){

                unset($_SESSION['EMPTY']);  
            
                if(isset($_SESSION['buggy1'])){
                    echo $_SESSION['buggy1'];
                }
                if(isset($_SESSION['buggy2'])){
                    echo $_SESSION['buggy2'];
                }
                if(isset($_SESSION['buggy3'])){
                    echo $_SESSION['buggy3'];
                }
                if(isset($_SESSION['atv1'])){
                    echo $_SESSION['atv1'];
                }
                if(isset($_SESSION['atv2'])){
                    echo $_SESSION['atv2'];
                }
                if(isset($_SESSION['atv3'])){
                    echo $_SESSION['atv3'];
                }    
            } else {
                echo $_SESSION['EMPTY'];
            }              
        ?>
        </tr>
    </table>