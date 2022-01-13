<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://w3css.blueobsidian.repl.co/w3css/w3.css">
    <link rel="icon" href="./favicon.ico">
    <title>Access Api Docs</title>
</head>

<body>



    <link rel="stylesheet" href="https://w3css.blueobsidian.repl.co/w3css/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    </head>
    <style>
        ul {

            margin-right: 20px;
            position: absolute;
            top: 10px;
            right: 0px;
        }

        ul li {
            display: inline-block;
            line-height: 30px;
            margin: 0 10px;



        }

        #open {
            display: none;
        }

        #mySidebar {
            display: none;
        }


        headers {
            position: absolute;
            top: 30px;
        }

        @media (max-width:858px) {

            ul {
                display: none;

            }

            img {
                border-radius: 50%;
            }

            #open {
                display: inline-block;
                margin-right: 20px;
                position: absolute;
                top: 10px;
                right: 0px;
            }

            .w3-sidebar {
                width: 200px;
                padding-right: 10px;

            }

        }
    </style>

    <body>
        <header class="w3-container w3-light-blue">
            <div class="w3-container ">
                <h1>Access Api</h1>
            </div>
            <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" id="open" onclick="openSidebar()">&#9776;</button>
            <ul style="list-style:none;">
              
                <li> <a href="/developer/" class="w3-button w3-hover-blue" style=" margin-left:10px;">Developers</a> </li>
                <li> <a href="./logout.php" class="w3-button w3-red" style=" margin-left:10px;">Logout</a> </li>
            </ul>


            <br>

            <nav class="w3-sidebar  w3-card-8" id="mySidebar">
                <div class="w3-container w3-theme-d2">
                    <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
                    <br>
                    <div class="w3-padding w3-center">
                        <img class="" src="favicon.ico" alt="avatar" style="width:75%">
                    </div>
                </div>
                <div class="w3-container" style="list-style:none;">
                    <li>
                      
                    <li> <a href="/developer/" class="w3-button w3-hover-blue">Developers</a> </li>
                    <li> <a href="./logout.php" class="w3-button w3-red">Logout</a> </li>
                </div>

            </nav>









        </header>

    </body>

</html>