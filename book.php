<?php

session_start();

echo "<style>";
include "styles.css";
echo "</style>";

$_SESSION["hi"]="hello";

//echo "what". $_SESSION["hi"];
?>

<!DOCTYPE html>
<html lang="en">       
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halifax Canoe and Kayak | Book a Trip</title>
        <link rel="stylesheet" href="styles.css">
       
        <!-- favicon -->
            <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon_b/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon_b/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon_b/favicon-16x16.png">
            <link rel="manifest" href="/assets/favicon_b/site.webmanifest">
      
        <!-- font -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
     
     <style>
            .desktop, .print {
            display: none;
            }

            @media print {
                .mobile, .desktop {
                    display: none;
                }
                .print {
                    display: block;
                }
            }

            @media screen and (min-width: 768px) {
                .mobile {
                    display: none;
                }
                .desktop {
                    display: block;
                }
            }
        </style>
    </head>


<body>
Hello World
    <?php
    
    
    
    
    
    ?>
    
    <header>
        <nav>
            <div id="header">
                <button id="togglebtn">
                    <img src="/assets/hamburger.png" id="hamburgerButton" alt="Button which opens and closes navigation menu">
                </button>

                <p> Halifax Canoe and Kayak </p>
            
                <img src="/assets/paddle-white.png" class="whitePaddle" alt="Image of two white paddles forming an X">

            </div>  
            
            <div id="sideBar" class="hideMenu">
                    <ul class="links">
                        <li><a href="/">Home</a></li>
                        
                        <li><a href="/book.php">Book Trip</a></li>
                        
                        <li><a href="/admin_login.html">Admin Login</a></li>
                    </ul>
                
            </div>
        </nav>
    </header>
  
    <main>
        
        <div id="bookTripTitle">
            <h1>Book a Trip</h1>
        </div>
  
        <form id="bookTripForm" action="thank-you.php" method="GET">
            <div> 
                Just need a few details <br> <br>
            </div>
            
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="inputField" id="emailField" placeholder="example@email.ca" />
            </div>
            
            <div>
                <label for="location" class="form-label">Location</label>
                <select name="location" id="location" class="inputField">
                    <option value="">-- Choose a Trip --</option>
                    <option value="Halifax">Halifax</option>
                    <option value="Sydney">Sydney</option>                                    
                </select>
            </div>	
            
            
            <div>
               <label for="tripDate">Trip Date</label>
               <input type="date" name="tripDate" class="inputField"/>
           
            
            </div>
           
            
            <br>
                    
            
            <!--submit button-->
            <input type="submit" name="submit" value="Submit" id="formSubmitButton">
            
           
        </form>
        
        
    <?php
   
    session_destroy();
    
    ?>
    </main>
    
    
    <!--
   

    <footer>
        <p>
           Halifax Canoe and Kayak 2022 ⓒ
        </p>
        <img src="/assets/paddle-white.png" class="whitePaddle" alt="Image of two white paddles forming an X">

    </footer>

    <script>

        $(document).ready(function() {
            toggleBtn_click();
         });


        function toggleBtn_click() {
            $("#hamburgerButton").click(function() {
                $("#sideBar").toggle(
                    function() {
                        $("#sideBar").removeClass(".hideMenu")
                    }
                )
            });
        };  


    </script>
</body>
</html>

