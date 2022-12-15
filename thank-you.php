<?php

echo "<style>";
include "styles.css";
echo "</style>";
?>
<!DOCTYPE html>
<html>       
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halifax Canoe and Kayak | Thank You!</title>
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
    
    <?php
    
      $email = $_GET["email"];
      $location = $_GET["location"];
      $tripDate = $_GET["tripDate"];
    
    echo "<br>";
    
    echo "<div id='resultsPage'> <h1 id='thanks'>Thank You</h1><br>";
    
    echo "<div id='details'>Thank you: $email<br><br>";
    
    echo "We will contact you about the $location trip on $tripDate</div></div>";
   
    
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
    </main>

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

