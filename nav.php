<!-- 
    Navbar with the available, easily accessible buttons 
    Features navbar login which directs to login.php also
 -->
<div class ="topnav" id="navbarNav">
<a href="Home.php">Home</a>
<a href="LoginPage.php">Login</a>
<a href="Registration.php">Register</a>
<div class="login-container">
<form action="Login.php" method = "POST">

<input type ="text" placeholder="Email" name = "Email">
<input type = "password" placeholder="Password" name = "Passwd">
<button type = "submit">Login</button>
</form>
</div>
</div>



