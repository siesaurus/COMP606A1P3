<?php
//displays the bookings associated with the logged in therapist
//Uses session info from login.php to display user email as confirmation
//Provides logout option
include ("header.php");
include ("dbconnect.php");

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
    $sql = "SELECT booking_starttime,cust_email FROM booking b join therapist t ON b.therapist_firstname = t.therapist_firstname where t.therapist_email = '$_SESSION[TherEmail]'";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            Echo "<div class=bkingsContainer>";
            echo "Customer Email: " . $row["cust_email"]. "<br>Booking Start Time: " . $row["booking_starttime"]. "<br><br>";
        Echo "</div>";
        }
    }
    ?>    



</body>
</html>

