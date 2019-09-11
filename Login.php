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

$email = $_POST['Email'];
$pwd = $_POST['Passwd'];

$sql = "SELECT Email, Password from user where email = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("s", $email);
    
    if($stmt->execute()) {
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->bind_result($email, $hashed_password);
            
            if ($stmt->fetch()) {

                if(password_verify($pwd, $hashed_password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['Email'] = $email;
                    header('location: welcome.php');
                } else{ 
                    Echo "The password you entered was incorrect!";
                }
            }
        } else{ 
            Echo "Sorry, no account with that email found! Please make sure you have registered.";
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
