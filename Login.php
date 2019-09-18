<!-- 
    Takes user input using POST from the login page/login nav feature and checks it using sql statement
    First checks that the email entered does exist within the database; if not, prompts error message.
    If the email address is found, verifies the entered password against the stored hashed password.
    If the password is correct, changes session state to logged in and directs to welcome.php
    otherwise, prompts password incorrect message
 -->
<?php
include("header.php");
include("dbconnect.php");

$username = $_POST['Username'];
$pwd = $_POST['Password'];
$sql = "SELECT cust_username, cust_password from customer where cust_username = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("s", $username);
    
    if($stmt->execute()) {
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->bind_result($username, $hashed_password);
            
            if ($stmt->fetch()) {

                if(password_verify($pwd, $hashed_password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['Username'] = $username;
                    header('location: welcome.php');     
                } else{ 
                        Echo "<div class=formContainer>";
                        Echo "The password you entered was incorrect! ";
                        Echo "Press this button to try again<br>";
                        Echo "&nbsp &nbsp<a href=LoginPage.php><button>Try Again</button></a>";
                        Echo "</div>";
                    }
                }
        } else{ 
            Echo "<div class=formContainer>";
            Echo "Sorry, no account with that email found! Please make sure you have registered.<br>";
            Echo "Press this button to Register now!<br>";
            Echo "&nbsp &nbsp<a href=Registration.php><button>Register</button></a>";
            Echo "</div>";
        }
    } else{ 
        echo "Oops! Something went wrong. Please try again later"; 
    }
}
$stmt->close();

//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php 
//Understood the process of what I was trying to do but was struggling to get the password verify to work correctly.
//Referred to the above URL.
?>
