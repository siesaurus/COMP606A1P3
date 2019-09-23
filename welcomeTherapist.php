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
<script type='text/javascript' src ="bookings.js"></script>
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
<div class="container">
    <div class="page-header">
        <div class="pull-right form-inline">
            <div class="btn-group">
                <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
                <button class="btn btn-default" data-calendar-nav="today">Today</button>
                <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-warning" data-calendar-view="year">Year</button>
                <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                <button class="btn btn-warning" data-calendar-view="week">Week</button>
                <button class="btn btn-warning" data-calendar-view="day">Day</button>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-9">
        <div id="showEventCalendar"></div>
    </div>
    <div class="col-md-3">
<h4>All Events List</h4>
<ul id="eventlist" class="nav nav-list"></ul>
</div>
</div>
</div>
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script> 
    

</body>
</html>

