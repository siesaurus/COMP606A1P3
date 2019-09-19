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
<div id="tabs">
<ul>
    <li><a href="#tabs-1">Customer Login</a></li>
    <li><a href="#tabs-2">Therapist Login</a></li>
</ul>
<div id ="tabs-1">
    <div class="formContainer">
        <h2>Register Now</h2>
        <p>If you're a new customer, enter your details below</p>
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
                    <td>Mobile number:</td>
                    <td><input type="int" name="CustNum"></td>
                </tr>
                <tr>
                    <td>Email address:</td>
                    <td><input type="text" name="Email"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="Username"></td>
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
    </div>
</div>
<div id = "tabs-2">
<div class="formContainer">
        <h2>Register Now</h2>
        <p> Please enter your details below</p>
        <form action="therapistreg.php" method="POST">
            <table>
                <tr>
                    <td>First name: </td>
                    <td><input type="text" name="TherFirstName"></td>
                </tr>
                <tr>
                    <td>Last name: </td>
                    <td><input type="text" name="TherLastName"></td>
                </tr>                
                <tr>
                    <td>Email address:</td>
                    <td><input type="text" name="TherEmail"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="TherUsername"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="TherPassword"></td>
                </tr>
                <tr>
                <td><input type="submit" value = "Submit"></td>
                </tr>
                </table>
        </form>
    </div>
</div>
</body>
</html>