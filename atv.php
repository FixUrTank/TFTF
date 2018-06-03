<?php
    session_start();
?>

<html>
    <head>
        <title>TFTF</title>
        <link rel="stylesheet" type="text/css" href="CSS\layout.css">
        <link rel="stylesheet" type="text/css" href="CSS\dropdown.css">
        <link rel="stylesheet" type="text/css" href="CSS\article.css">
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
                   
                   <footer>
                        <p><a href="contact.php">Contact Us!</a></p>
                        <a href="cart.php"><img src="JPEG\shopping-cart.jpg"></a>
                   </footer>
            
    
            <div class="article">
                <p>
                <img src="JPEG\redatv.jpg"/>
                "Nagasaki Blazer"<br>
                This is our standard issue buggy perfect for your off-roading experience.
                Overcomes any obstacle on all rough terrain with ease. 
                Easy to handle and steer. Automatic transmission. Reaches speeds of 60 km/h. Capacity for 2 people, possibility for carrying baggage<br>
                Great for on-road as well. hola
                </p> 
                <form action="Include/itemhandler.php" method="GET"><button class="addcart" type="submit" name="atv1">Add to Cart</button></form>
                
            </div>
            
            <div class="article">
                <p>
                <img src="JPEG\camoatv.jpg"/>
                "Nagasaki Rogue"<br>
                For those who want the extra power and speed this is for you. Comes with 20000hp, no joke...seriously the orange paint does a lot.
                </p>
                <form action="Include/itemhandler.php" method="GET"><button class="addcart" type="submit" name="atv2">Add to Cart</button></form>
            </div>

            <div class="article">
                <p>
                <img src="JEPG\sanchez.jpg"/>
                "The Sanchez"<br>
                Limited Time Offer!
                A perfect buggy for group touring or just for your family.
                </p>
                <form action="Include/itemhandler.php" method="GET"><button class="addcart" type="submit" name="atv3">Add to Cart</button></form>
            </div>           
    
    </body>
</html>    