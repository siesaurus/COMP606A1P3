<!-- 
    Login page form
    Has user inputs for email address and password - submit button actions login.php
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
    <!--<div class ="container col-md-4"> -->
        <div class ="LoginFormContainer">
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
     <!--</div> -->
</div>
<div id = "tabs-2">
<title>Login</title>
<!--<div class ="container col-md-4"> -->
    <div class ="TherapistFormContainer">
        <h2>Enter your details to login</h2>

        <form action="therapistlogin.php" method="POST">
        <table>
        <tr>
        <td>Username: </td>
        <td><input type ="text" placeholder="Username" name = "TherUsername"> </td>
        </tr>
        <tr>
        <td>Password: </td>
        <td><input type = "password" placeholder="Password" name = "TherPassword"></td>
        </tr>   
        <tr>
            <td></td>
        <td><input type = "submit" value ="Login"></td>
        </tr>
        </table>
        </form>
    </div>
<!--</div> -->
</div>

</div>



</body>
</html>