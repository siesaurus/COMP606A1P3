<?php

include("header.php");
require_once("dbconnect.php");
error_reporting(E_ALL);
ini_set('display_errors',1);

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];
$therapist = $_POST['Therapist'];
$motivation = $_POST['Reason'];
$massagetype = $_POST['MassageType'];
$date = $_POST['dov'];

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
    else {
        $SELECT1 = "SELECT booking_starttime from booking where booking_starttime = ? LIMIT 1";
        $INSERT1 = "INSERT INTO booking (cust_email,therapist_firstname,booking_starttime,booking_type_name,motivation) values (?,?,?,?,?)";

        $stmt = $mysqli->prepare($SELECT1);
        $stmt->bind_param("s", $date);
        $stmt->execute();
        $stmt->bind_result($date);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();
            $stmt = $mysqli->prepare($INSERT1);
            $stmt->bind_param('sssss', $email, $therapist, $date, $massagetype, $motivation);
            $stmt->execute();
            $stmt->close();
            Echo "<div class=formContainer>";
            echo "Thank you for booking!";
            Echo "</div>";
            
           } else {
              Echo "<div class=formContainer>";
              echo "We're sorry, someone has already booked using this time.<br>";
              echo "Please try again.<br>";
              Echo "&nbsp &nbsp<a href=makeBooking.php><button>Try Again</button></a>";
              Echo "</div>";
            $stmt->close;
           }
           
          }
      
      ?>