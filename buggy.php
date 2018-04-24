<html>
    <head>
        <title>TFTF</title>
    
        <style>
            
           .article{
                display: inline-block;
                float: left;
                border: 2px solid black;
                margin: 5px;
                width: 99%;

           }

           .article p{
                display: flex;
                width: 99%;
                height: 99%;
                font-size: 20px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-color: rgb(184, 28, 28);
           }

           .article img{
                float: left;
           }
        </style>   
    </head>
    
    <body>
        <?php include 'homepage.php' ;?>

        <div class="article">
            <p>
            <img src="blackbuggy.jpg"/>
            This is some text
            </p> 
        </div>  
    
    </body>
</html>    