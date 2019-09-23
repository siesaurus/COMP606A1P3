<?php

//lets the user know their login was successful and allows them to use a button to 
//go to the homepage or can use the nav page.
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

