<?php
 
require('db.php'); //seen across all pages - needed for db connection
include("auth.php"); //seen across secure pages 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>View Records</title>

<?php include("styling.php"); //the font, css, bootstrap etc. ?>
<?php include("nav.php"); //navbar seen on all pages ?>

<!-- The class seen on all pages, the class name is different
     on some as the stylings are slightly different -->
<header class="mastheadest text-white text-center">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="form">
            <h2 class="text-center">Current Events List</h2>
              <br>
              <br>
            <table class="centerTable" width="80%"  style="">
              <thead>
                <tr>
                  <th class="text-center"><strong>Event Name</strong></th>
                  <th class="text-center"><strong>Event Venue</strong></th>
                  <th class="text-center"><strong>Competitor</strong></th>
                </tr>
              </thead>
          </div>
        </div>
      </div>
        <tbody>
          <?php
            $count=1;
            //runs the select query that grabs all the data in the table and displays it
            //I wanted to do it in order of event name as I wanted all the same event names to be grouped together
            $sel_query="Select * from events ORDER BY event_name desc;";
            $result = mysqli_query($con, $sel_query);
            while ($row = mysqli_fetch_assoc($result)) {
           ?>
              <tr>
              <!-- The data is echo'd out and then the count++ goes up until all the data has been echo'd out -->
                <td align="center"><?php echo $row["event_name"]; ?></td>
                <td align="center"><?php echo $row["venue"]; ?></td>
                <td align="center"><?php echo $row["submittedby"]; ?></td>
                <td align="center"><a type="button" class="btn btn-primary btn-sm" href="edit.php?event_no=<?php echo $row["event_no"]; ?>">Edit</a></td>
                <td align="center"><a type="button" class="btn btn-primary btn-sm" href="delete.php?event_no=<?php echo $row["event_no"]; ?>" onclick="return confirm('Are you sure?');">Delete</a></td></tr>
            <?php $count++; 
              } ?>
          </tbody>
            </table>
          </div>
  	   </div>
    </header>
</head>
<body>


<!-- Container seen on all pages -->
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
