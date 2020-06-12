<?php

session_start();
if (session_destroy()) { // Destroys the session
header("Location: login.php"); // brings you back to the login page
}
