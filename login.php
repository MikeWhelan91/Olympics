<?php
 
require('db.php'); //links to the database

//the auth.php file is not required here as it's not a secure page

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<?php include("styling.php"); ?>
<?php include("nav.php"); ?>
<header>

</header>
</head>
<body>
<?php
    
    session_start();
    // I used isset to make sure that all the variables are set.
    if (isset($_POST['name'])) {
        $name = stripslashes($_REQUEST['name']); // removes backslashes (probably not needed but I watched a video about SQL injections and wanted to add them in)
        $name = mysqli_real_escape_string($con, $name); //escapes special characters in a string (added for the same reason as above)

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password); 

        
        //Running the query to make sure the user exists
        $query = "SELECT * FROM `users` WHERE name='$name' and password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error()); //will display the error if cannot run the query
        $rows = mysqli_num_rows($result);
        if ($rows==1) {
            $_SESSION['name'] = $name; //the username is used in the session - if you aren't signed in you cannot access the index or other secure pages
            header("Location: index.php"); // Redirects user to index.php
        } else {
            echo "<div class='form' style='text-align:center;' ><h3 style='color:#FF0000;'>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Try Again</a></div>";
            //if statement is used, if username is incorrect the user is asked to try again
        }
    } else {
        ?>


<div class="bg-image">
<div class="log">

<h1>Log In</h1>
<!-- This form needs to be filled out, the isset function above will run to check this-->
    <form action="" method="post" name="login">
        <input type="text" name="name" placeholder="Name" required />
        <input type="password" name="password" placeholder="Password" required />
        <input name="submit" type="submit" value="Login" />
   </form>
        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
	</div>

        </div>
	</div>



    </div>
    
    <!-- Contains the svgs seen across the bottom of most pages-->
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


        <p id="loginpart"><strong>SIGN IN IS REQUIRED TO ACCESS OUR COMPETITOR ONLY AREA!</strong></p>
	
   
   
        <?php } ?>







    <p id="loginpart"> Here's a sneak peek at our current events and competitors!<p>
    <div class="flex-container">

    <!-- Table is displayed from the database showing whats in it
            this table cannot be edited unless the user is logged in-->
    <table width="50%" border="1" style="border-collapse:collapse; margin:1em auto;">
        <thead>
            <tr>
                <th><strong>Event Name</strong></th>
                <th><strong>Event Venue</strong></th>
                <th><strong>Competitor</strong></th>
            </tr>
        </thead>
    
        <tbody>
    <?php
        $sel_query="Select * from events ORDER BY event_name desc;";
        $result = mysqli_query($con, $sel_query);
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td align="center"><?php echo $row["event_name"]; ?></td>
                <td align="center"> <?php echo $row["venue"]; ?></td>
                <td align="center"> <?php echo $row["submittedby"]; ?></td>
            </tr>

<?php } ?>
        </tbody>
    </table>
    </div>




    </body>
    </html>
