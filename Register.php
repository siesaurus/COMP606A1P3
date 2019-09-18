<!-- 
    Register.php page - connects to the database and displays error message if connection fails.
    Gets required parameters from POST (Registration.php).
    Sets SQL statements - first to check if the email address already exists, second to insert into user table.
    Statements - prepares, binds parameters, executes the query, binds and stores the result and sets rnum based on whether or not the email was found.
    If the email was not found, the first query closes and the insert statement begins with the parameters for firstname, lastname, email and password.
    Password is then hashed using PASSWORD_DEFAULT(bcrypt).
    Execute inserts the values into the user table and then displays success message for registering users.
 -->
<?php 
include("header.php");
require_once("dbconnect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fname = $_POST['FirstName'];
$lname =$_POST['LastName'];
$email = $_POST['Email'];
$mobile = $_POST['CustNum'];
$pwd = $_POST['Passwd'];
$username = $_POST['Username'];
$cust_motivation = $_POST['CustMotivation'];

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
    else {
$SELECT = "SELECT Cust_username FROM customer WHERE Cust_username = ? LIMIT 1";
$INSERT = "INSERT INTO Customer (cust_firstname, cust_lastname, cust_username, cust_password, cust_email, cust_number, cust_motivation) values (?,?,?,?,?,?,?)";


$stmt = $mysqli->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     
     if ($rnum==0) {
      $stmt->close();
      $stmt = $mysqli->prepare($INSERT);
      $stmt->bind_param('sssssis', $fname, $lname, $username, $parampwd, $email, $mobile, $cust_motivation);
      $parampwd = password_hash($pwd,PASSWORD_DEFAULT);
      $stmt->execute();
      $stmt->close();

      Echo "<div class=formContainer>";
      echo "Thank you for registering! Please login.<br>";
      Echo "&nbsp &nbsp<a href=Registration.php><button>Register</button></a>";
      Echo "</div>";
      
     } else {
        Echo "<div class=formContainer>";
        echo "We're sorry, someone has already registered using this email.<br>";
        echo "Please try again.<br>";
        Echo "&nbsp &nbsp<a href=Registration.php><button>Try Again</button></a>";
        Echo "</div>";
      $stmt->close;
     }
     
      //https://www.codeandcourse.com/2018/03/how-to-connect-html-register-form-to-mysql-database-with-php/
      //got stuck on correct way to insert into database
    }

?>