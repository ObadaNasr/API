<!DOCTYPE html>
<html>

<head>
    <title> Weather </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        // Start the session
        session_start();
    ?>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <div class='header'></div>
    <div class='container'>
        <form method="get" id="weather" action="Script.php">
            <input type="text" name="city" id="cityName" placeholder="city Name">
            <br /><button type="submit">Go</button>
        </form>
        <div class='weather-container'>
            <div class='weather-container'>
                <img width=150px; height=150px; src="<?php if(isset($_SESSION['icon'])) echo $_SESSION['icon'];?>" alt="" />
                <p class='weather'><?php if(isset($_SESSION['desc'])) echo $_SESSION['desc'];?></p>
                <p class='temp'><?php if(isset($_SESSION['temp'])) echo floor($_SESSION['temp']);?></p>
            </div>
        </div>
    </div>
    <div class='footer'></div>
    <script type="text/javascript" src="jq.js"></script>
    <?php 
        session_unset(); 

        // destroy the session 
        session_destroy();
    ?>
</body>

</html>
