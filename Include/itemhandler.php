<?php
    session_start();

    if(isset($_SESSION['USER'])){
        
        if(isset($_GET['atv1'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Nagasaki Blazer' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['atv1'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }
        }
        if(isset($_GET['atv2'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Nagasaki Rogue' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['atv3'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }    
        }
        if(isset($_GET['atv3'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Shitzu Sanchez' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['atv3'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }    
        }
        if(isset($_GET['buggy1'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Bravado Dirt' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['buggy1'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }
        }
        if(isset($_GET['buggy2'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Bravado Dirt X' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['buggy2'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }
        }
        if(isset($_GET['buggy3'])){
            $sql = "SELECT * FROM vehicles WHERE vehicle_name = 'Shitzu Sanchez' AND IsVehicleInStorage = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['buggy3'] = $row['vehicle_name'];
                header("Location: ../cart.php");
                exit();
            }
        }
        if(isset($_GET['tour'])){
            $sql = "SELECT * FROM tours WHERE tour_name = 'Full Tour'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            
            if(mysqli_fetch_assoc($result)){
                $_SESSION['tour'] = $row['tour_name'];
                header("Location: ../cart.php");
                exit();
            }
        }
    } else {
        header("Location: ../login.php?please_log_in_or_sign_up");
        exit();
    }
?>