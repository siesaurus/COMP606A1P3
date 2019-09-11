<!-- 
    Logout feature which is available on the welcome page 
    Should also include on other pages
 -->

<?php
session_start();

if(session_destroy()){
    header("Location: Home.php");
}

?>