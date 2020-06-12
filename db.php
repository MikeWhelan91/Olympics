<?php
//this page is in the pages that require a connection to the database

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "olympics";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
