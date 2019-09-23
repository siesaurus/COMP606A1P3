


<!-- 
    Navbar with the available, easily accessible buttons 
    Features navbar login which directs to login.php also
 -->
<div class ="topnav" id="navbarNav">

<div class ="mainbar" id="barMain">

<!--
    Created a logo from this website https://hatchful.shopify.com
    and made it usable as a home page button.
 -->
<div class ="logo" id="logoHome">
<a href="Home.php"><img src="Assets/logo.png" alt="Logo Home-Page link" height="100" width="125"></a>
</div>

<div class ="navbar" id="barNav">
<!--
    Unordered list for the links for nav bar
 -->
<ul>
<li><a href="Home.php">Home</a></li>
<!-- <li><a href="LoginPage.php">Login</a></li> -->
<li><a href="Registration.php">Register</a></li>

<?php
// Check if the user is logged in, if yes show this booking nav
if(isset($_SESSION["loggedin"]) == true){
    echo "<li><a href=\"makeBooking.php\">Make a Booking</a></li>";
} 
?>

<?php
// Check if the user is logged in, if no, show this login nav
if(isset($_SESSION["loggedin"]) == false){
    echo "<li><a href=\"LoginPage.php\">Login</a></li> ";
} 
?>


<li><a href="AboutUs.php">About Us</a></li>
<li><a href="ContactUs.php">Contact Us</a></li>

<?php
//if the user is logged in, show this nav
if(isset($_SESSION["loggedin"])== true){
    echo "<li><a href=\"logout.php\">Logout</a></li>";
}
?>



</ul>
</div>
</div>
<!--
    Commented out for now as we already have a login link? 
    Can always put it back in later.
 -->
<!--
<div class="login-container">
<form action="Login.php" method = "POST">

<input type ="text" placeholder="Email" name = "Email">
<input type = "password" placeholder="Password" name = "Passwd">
<button type = "submit">Login</button>
</form>
</div>
-->
</div>



