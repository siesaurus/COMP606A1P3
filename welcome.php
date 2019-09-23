<?php

// As per https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php welcome.php
//Uses session info from login.php to display user email as confirmation
//Provides logout option

// Initialize the session
session_start();
?>
 <?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
    
</head>
<body>
    <div class="formContainer">
    <p>
        Head to the homepage to make a booking.
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="Home.php"><button>Home</button></a>
    </p>
</div>
</body>
</html>

