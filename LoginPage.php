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

<h3>Enter your details to login</h3>

<form action="Login.php" method="POST">
<table>
<tr>
<td>Email: </td>
<td><input type ="text" placeholder="Email" name = "Email"> </td>
</tr>
<tr>
<td>Password: </td>
<td><input type = "password" placeholder="Password" name = "Passwd"></td>
</tr>
<tr>
<td><input type = "submit" value ="Login"></td>
</tr>
</table>
</form>



</body>
</html>