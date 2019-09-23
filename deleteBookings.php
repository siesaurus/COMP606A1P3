<?php
include("header.php");
include("dbconnect.php");

$sql = "DELETE FROM booking where cust_email = '$_SESSION[Email]'";

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
?>