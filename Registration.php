<!-- 
-Registration form
-Takes user input and processes with POST 
"Submit" button action accesses Register.php
 -->

<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head>
<body>
<title>Registration</title><div class ="container col-md-4">
    <h1>Register Now</h1>
    <p> Please enter your details below</p>
<form action="Register.php" method="POST">
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
            <td>Email address:</td>
            <td><input type="text" name="Email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td> <input type="password" name="Passwd"></td>
        </tr>
        <tr>
        <td><input type="submit" value = "Submit"></td>
        </tr>
        </table>
        </form>
</body>
</html>