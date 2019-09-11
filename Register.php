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

$fname = $_POST['FirstName'];
$lname =$_POST['LastName'];
$email = $_POST['Email'];
$pwd = $_POST['Passwd'];

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
    else {
$SELECT = "SELECT Email FROM user WHERE Email = ? LIMIT 1";
$INSERT = "INSERT INTO user values (?,?,?,?)";


$stmt = $mysqli->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     
     if ($rnum==0) {
      $stmt->close();
      $stmt = $mysqli->prepare($INSERT);
      $stmt->bind_param('ssss',$fname,$lname,$email,$parampwd);
      $parampwd = password_hash($pwd,PASSWORD_DEFAULT);
      $stmt->execute();
      $stmt->close();

      echo "Thank you for registering! Please login.";
     } else {
      echo "Someone already register using this email";
      $stmt->close;
     }
      //https://www.codeandcourse.com/2018/03/how-to-connect-html-register-form-to-mysql-database-with-php/
      //got stuck on correct way to insert into database
    }

?>