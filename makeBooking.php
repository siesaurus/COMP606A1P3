<?php include("header.php");?>

<link ref style.css>
<!DOCTYPE html>
<title>Make a Booking</title>
<html>
    <body>

<div class="formContainer">
<h2>Make a booking</h2>

<form action="processBooking.php" method="POST">

<table>
                <tr>
                    <td>First name: </td>
                    <td><input type="text" name="FirstName"></td>
                </tr>
                <tr>
                    <td>Last name: </td>
                    <td><input type="text" name="LastName"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="Username"></td>
                </tr>
                <tr>
                    <td>Email address:</td>
                    <td><input type="text" name="Email"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="Passwd"></td>
                </tr>
                <tr>
                    <td>Reason for Appointment:</td>
                    <td><textarea rows="4" cols="50" maxlength="256">
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value = "Submit"></td>
                </tr>
                
</table>
</form>
</div>

</body>
</html>