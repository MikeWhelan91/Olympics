<!--This is linked to all the pages that require a log in
    It basically says if there is no name in the session 
    currently to redirect the user to the login page -->
<?php
session_start();
if(!isset($_SESSION["name"])){
header("Location: login.php");
exit(); }
?>
