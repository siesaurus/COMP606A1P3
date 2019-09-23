<?php


/*
This page checks whether the user has any bookings with the website, if they
do it will be displayed on this page, it can also be deleted from this page also.
*/
include ("header.php");
include ("dbconnect.php");
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>

<title>Welcome <?php echo $_SESSION['Email'] ?></title>

<body>

<div class ="mainContent" id="mainCon">
<div class="page-header">
<h2> Welcome <?php echo $_SESSION['Email'] ?></h2>
</div>

<?php
    $sql = "SELECT booking_starttime FROM booking b join customer c ON c.cust_email = b.cust_email where c.cust_email = '$_SESSION[Email]'";
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)){
        printf ("booking_starttime = %s (%s)\n", $row['booking_starttime'], gettype($row['booking_starttime']));
    }

    echo "<a href=deleteBooking.php><div class=\"bigButton\"><button style=\"background-color:red;\">DELETE ALL BOOKINGS</button></div></a>"
?>
</div>
</body>