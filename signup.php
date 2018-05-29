<?php
    session_start();

    if(isset($_SESSION['USER'])){
        header("Location: ../homepage.php?Logged_In_Already");
        exit();
    }
?>

<html>
    <head>
        <title>TFTF</title>
        <link rel="stylesheet" type="text/css" href="CSS\layout.css">
        <link rel="stylesheet" type="text/css" href="CSS\dropdown.css">
        <link rel="stylesheet" type="text/css" href="CSS\form.css">
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
        
        <form action="Include/signuphandler.php" method="POST">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="text" name="first" placeholder="First Name"><br>
            <input type="text" name="last" placeholder="Last Name"><br>
            <input type="text" name="email" placeholder="E-Mail"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" name="submit">Sign Up</button>
        </form>            

       <footer>
            <p><a href="contact.php">Contact Us!</a></p>
            <a href="cart.php"><img src="JEPG\shopping-cart.jpg"></a>
       </footer>
       
    </body>
</html>  