<?php 
include("header.php");
require_once("dbconnect.php");

$sql = "DELETE FROM booking WHERE cust_email = ?";

header('location: Home.php');   

?>