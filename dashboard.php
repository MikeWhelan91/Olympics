<?php
require('db.php'); // this connects to the database 
include("auth.php"); //needs to be included on all secure pages
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>

<?php
include("styling.php"); //links the bootstrap, css, fonts etc.
?>
<?php
include("nav.php"); // I added my navbar in a seperate folder to save some time
?>


<!-- This masthead class is used on most of the pages, it allows me to
            place my form & text boxes over the image
                a overlay is there too to darken the bg image so the text
                    is easier to read -->

<header class="masthead text-white text-center">
   <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
             
             <h3>Sign up or view all events here!</h3>
              <br>
               <br>
          </div>
          
        </div>
      </div>
        <div class="btn-group">

            <a href="insert.php" type="button" class="btn btn-primary">Event Sign Up</a>
                 <div class="divider"> </div><!-- This class was used to just add space between the buttons -->
             <a href="view.php" type="button" class="btn btn-primary" >View Events</a>
                 <div class="divider"> </div>
            <a href="logout.php" type="button" class="btn btn-primary" >Logout</a>
        </div> 
</header>

</head>
<body>

<!-- This is also on most other pages, I wanted a consistent piece across 
        every page -->
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
 