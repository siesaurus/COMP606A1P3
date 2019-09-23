<?php

// As per https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php welcome.php
//Uses session info from login.php to display user email as confirmation
//Provides logout option
include ("header.php");
include ("dbconnect.php");
include ("bookings.php");
// Initialize the session
//session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/calendar.css">
    <meta charset="UTF-8">
    <title>Welcome, <?php echo $_SESSION['TherEmail'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Welcome, <?php echo $_SESSION['TherEmail'] ?></h1>
    </div>
    
    <?php 
    $sql = "SELECT booking_starttime FROM booking b join therapist t ON b.therapist_firstname = t.therapist_firstname where t.therapist_email = '$_SESSION[TherEmail]'";
    $result = mysqli_query($mysqli, $sql);
    
    $row = $result->fetch_assoc();
    printf ("booking_starttime = %s (%s)\n", $row['booking_starttime'], gettype($row['booking_starttime']));
    ?>    



</body>
</html>

