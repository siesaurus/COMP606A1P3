<?php

include("header.php");
require_once("dbconnect.php");
error_reporting(E_ALL);
ini_set('display_errors',1);

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];
$password = $_POST['Passwd'];
$motivation = $_POST['Motivation'];
$massagetype = $_POST['']