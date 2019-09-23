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

$INSERT1 = "INSERT INTO booking (booking_starttime) values (?)";
$SELECT = "SELECT (cust_id, therapist_id, booking_type_id)
from customer as c JOIN bookings as b
ON c.cust_id = b.cust_id
join therapist as t
ON t.therapist_id = b.therapist_id
join booking_type as bt
on bt.booking_type_id as b.booking_type_id";
"