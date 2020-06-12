<?php

require('db.php'); //included on all pages using the database
include("auth.php"); //included on all session pages

    /* Select query to choose which record to update */
    $event_no=$_REQUEST['event_no'];
    $query = "SELECT * from events where event_no='".$event_no."'";
    $result = mysqli_query($con, $query) ;
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

    <title>Update Entry</title>

<?php include("styling.php"); //points to the bootstrap, fonts etc.?> 
<?php include("nav.php"); //same navbar used on all pages?>

<!-- This class is on most pages also, it adds a large image with an overlay that dims it -->
<header class="mastheader text-white text-center">
	<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<div class="insert">       
						<div class="form">
			
			
		<h1>Edit a Selection!</h1>
		<?php
        $status = "";
        //isset is used again to check that the variables have all been entered, if they have
        //the update query is run
        if (isset($_POST['new']) && $_POST['new']==1) {
            $event_no=$_REQUEST['event_no'];
            $event_name =$_REQUEST['event_name'];
            $venue =$_REQUEST['venue'];
            //this variable isn't neccessary but I wanted to practice session variables a bit
            $submittedby = $_SESSION["name"];
                
            $update="UPDATE events SET  event_name='".$event_name."', venue='".$venue."', submittedby='".$submittedby."' WHERE event_no='".$event_no."'";
            mysqli_query($con, $update);
            $status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
            } else {
                ?>
			<div>
            <!-- This form echos the current event name and venue in it that you want to update -->
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<input name="event_no" type="hidden" value="<?php echo $row['event_no']; ?>" />
				<p><input type="text" name="event_name" placeholder="Enter Event" required value="<?php echo $row['event_name']; ?>" /></p>
				<p><input type="text" name="venue" placeholder="Enter Venue" required value="<?php echo $row['venue']; ?>" /></p>
				<p><input name="submit" type="submit" value="Update" /></p>
			</form>
<?php
 } ?>
			</div>
			</div>
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
