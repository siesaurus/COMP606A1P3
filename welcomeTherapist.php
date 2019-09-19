<?php

// As per https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php welcome.php
//Uses session info from login.php to display user email as confirmation
//Provides logout option
include ("header.php");
include ("dbconnect.php");
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome, <?php echo $_SESSION['Email'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Welcome, <?php echo $_SESSION['Username'] ?></h1>
    </div>
    
    <?php 
    $sql = "SELECT * FROM booking";
    $result = mysqli_query($mysqli, $sql);
    
    while($row = mysqli_fetch_array($result)){
            echo ($result);
        }
    ?>    
    
    
    
    
    
    
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>

