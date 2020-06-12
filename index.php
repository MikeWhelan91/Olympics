<?php
include("auth.php"); //included on all pages that are secure

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">		
<title>Welcome!</title>

<?php include ("styling.php"); ?> <!-- Includes the bootstrap, css etc. -->
<?php include ("nav.php"); ?> <!-- the navbar which is the same across all pages -->

<!-- This class is seen on other pages, it has an image which text/forms over it -->
<header class="masthead text-white text-center">
	<div class="overlay"></div>
      <div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
            <h1>Welcome <?php echo $_SESSION['name']; ?>!</h1><!-- This part takes the name that's currently logged
                                                                   in and echos it out after welcome -->
				<br>
					<h2>This site lets you manage your events!</h2>
						<br>
			</div>
        </div>
      </div>
    <div class="btn-group">
		<a href="dashboard.php" type="button" class="btn btn-primary">Overview</a> <!--some css buttons-->
			<div class="divider"> </div>     
				<a href="logout.php" type="button" class="btn btn-primary" >Logout</a>
     </div> 
</header>
</head>

<body>
<!-- this container contains the small svg images on the bottom of all pages -->
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