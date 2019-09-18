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