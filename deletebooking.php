<?php
/* Deletes the bookings from the customer with the correct email */
include("header.php");
include("dbconnect.php");

$email = $_POST['Email'];
$pwd = $_POST['Password'];
$sql = "DELETE FROM booking where cust_email = ?";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>