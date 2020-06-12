<?php

require('db.php'); //included on all the database pages
include("auth.php"); //included on all pages that are secure

$status = "";
//again used isset to make sure all variables have been entered before continuing
if (isset($_POST['new']) && $_POST['new']==1) {

    $event_name = $_POST['event_name'];

    $venue = $_POST['venue'];

    $submittedby = $_SESSION ['name']; //takes the name that the user logged in with and adds it to the db

  // Insert Query 
    $ins_query="insert into events (`event_name`, `venue`, `submittedby`) values ('$event_name', '$venue', '$submittedby')";
    mysqli_query($con, $ins_query);
    $status = "New Record Inserted Successfully.</br><a href='view.php'>View Inserted Record</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

    <title>Event Sign Up</title>

<?php include("styling.php"); //the css, fonts etc. ?> 
<?php include("nav.php"); //the navbar seen across all pages ?>

<!-- the class with the image and the overlay seen on most pages -->
<header class="mastheader text-white text-center">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="insert">         
                <h2>Sign up for events here!</h2>
                <!-- This form takes the variables and goes through the isset 
                        functions to check them before executing the query -->
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <p><input type="text" name="event_name" placeholder="Enter Event Name" required /></p>
                <p><input type="text" name="venue" placeholder="Enter Venue Name" required /></p>
                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
                <p style="color:#FF0000;"><?php echo $status; ?></p> <!-- This echos the success alert if the query was run -->
          </div>
        </div>
      </div>
    </div>
</header>
</head>
<body>
<!-- This container is seen on all pages  -->
<div class=container>
<img src="images/barbell.png" alt="barbell ">
<img src="images/ski.png" alt="ski ">
<img src="images/dive.png" alt="diving ">
<img src="images/handball.png" alt="handball ">
<img src="images/bronze.png" alt="bronze ">
<img src="images/gold.png" alt="gold ">
<img src="images/silver.png" alt="silver">
<img src="images/curl.png" alt="curl">
<img src="images/weight.png" alt="weight">

<img src="images/swim.png" alt="swimming">

    </div>


</body>
</html>
