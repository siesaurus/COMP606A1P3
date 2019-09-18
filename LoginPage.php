<!-- 
    Login page form
    Has user inputs for email address and password - submit button actions login.php
 -->
<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head>
<body>
<title>Login</title>
<div class ="container col-md-4">

    <div class ="formContainer">
        <h2>Enter your details to login</h2>

        <form action="Login.php" method="POST">
        <table>
        <tr>
        <td>Username: </td>
        <td><input type ="text" placeholder="Username" name = "Username"> </td>
        </tr>
        <tr>
        <td>Password: </td>
        <td><input type = "password" placeholder="Password" name = "Password"></td>
        </tr>   
        <tr>
            <td></td>
        <td><input type = "submit" value ="Login"></td>
        </tr>
        </table>
        </form>
    </div>

</div>



</body>
</html>