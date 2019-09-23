<?php
include_once("dbconnect.php");
$sqlBookings = "SELECT cust_email, booking_starttime, booking_type_name 
FROM booking b join customer c ON b.cust_email = c.cust_firstname where c.cust_email = '$_SESSION[Email]'";

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