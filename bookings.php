<?php
include_once("dbconnect.php");
$sqlBookings = "SELECT cust_email, booking_starttime, booking_type_name 
FROM booking b join therapist t ON b.therapist_firstname = t.therapist_firstname where t.therapist_email = '$_SESSION[TherEmail]'";

$resultset = mysqli_query($mysqli, $sqlBookings) or die("database error:". mysqli_error($mysqli));
$calendar = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
// convert date to milliseconds
$start = strtotime($rows['booking_starttime']) * 1000;
$calendar[] = array(
'cust_email' => $rows['cust_email'],
'booking_type_name' => $rows ['booking_type_name'],
"class" => 'event-important'
);
}
$calendarData = array(
"success" => 1,
"result"=>$calendar);
echo json_encode($calendarData);
?>