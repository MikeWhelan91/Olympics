<?php
//this delete page takes the event number in the url, deletes it and brings you immediately back to the view.php page
require('db.php');
$event_no=$_REQUEST['event_no'];
$query = "DELETE FROM events WHERE event_no=$event_no";
$result = mysqli_query($con, $query) or die(mysqli_error());
header("Location: view.php");

?>