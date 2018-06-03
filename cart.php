<?php
    session_start();
?>

<html>
    <head>
        <title>TFTF</title>
        <link rel="stylesheet" type="text/css" href="CSS\layout.css">
        <link rel="stylesheet" type="text/css" href="CSS\dropdown.css">
    </head>

    <body>
        <header>
            <a href="homepage.php">TFTF</a>
        </header>
        
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbutton">Rentals</a>
                    <div class="dropdown-list">
                        <a href="buggy.php">Buggies</a>
                        <a href="atv.php">ATV's</a>
                    </div>
                </li>
                
                <li><a href="tour.php">Tours</a></li>
                
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbutton">Account</a>
                    <div class="dropdown-list">
                        <a href="signup.php">Sign Up</a>
                        <a href="login.php">Log In</a>
                        <a href="Include\logout.php">Log Out</a>
                    </div>
                 </li>
            </ul>
        </nav>

        
        <table id="checkout" style="width: 100%">
        <tr>
            <th>ITEM</th>
            <th>PRICE</th>
        </tr>

        <tr>
        <td>
        <?php
            if(isset($_SESSION['buggy1']) || isset($_SESSION['buggy2']) || isset($_SESSION['buggy3']) || 
            isset($_SESSION['atv1']) || isset($_SESSION['atv2']) || isset($_SESSION['atv3']) || 
            isset($_SESSION['tour'])){

                unset($_SESSION['EMPTY']);  
            
                if(isset($_SESSION['buggy1'])){
                    echo $_SESSION['buggy1'] . "<br>";
                }
                if(isset($_SESSION['buggy2'])){
                    echo $_SESSION['buggy2'] . "<br>";
                }
                if(isset($_SESSION['buggy3'])){
                    echo $_SESSION['buggy3'] . "<br>";
                }
                if(isset($_SESSION['atv1'])){
                    echo $_SESSION['atv1'] . "<br>";
                }
                if(isset($_SESSION['atv2'])){
                    echo $_SESSION['atv2'] . "<br>";
                }
                if(isset($_SESSION['atv3'])){
                    echo $_SESSION['atv3'] . "<br>";
                }    
            } else {
                echo $_SESSION['EMPTY'];
            }              
        ?>
        </td>
        </tr>
    </table>
        
       <footer>
            <p><a href="contact.php">Contact Us!</a></p>
       </footer>
       
    </body>
</html>  

