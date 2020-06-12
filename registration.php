<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<?php include ("styling.php"); ?>
<?php include ("nav.php"); ?>


</head>
<body>
<?php
    require('db.php');
    //isset used same as in the log in page
	 if (isset($_REQUEST['name'])){

		$name = ($_REQUEST['name']); 
		
		$country = ($_REQUEST['country']);
		
		$gender = ($_REQUEST['gender']);
		
		$password = ($_REQUEST['password']);
		
        //the query adds the users information into the database
        $query = "INSERT into users (name, country, gender, password) VALUES ('$name', '$country' , '$gender', '$password')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='regsuccess'><p>You have registered successfully.<br/>Click here to</p><a href='login.php'>Login</a></div>";
            //echos a text box if successful allowing you to log in
        }
    }else{
?>


<!-- this page is styled differently from the secure pages as I had done login and
         register before deciding to use bootstrap-->

<div class="bg-image">
<p class=regtext>Register to see and sign up for events</p>


<div class="log">

<h1>Sign Up Today!</h1>
<h4>This gives you access to the members only area!</h4>
<!-- This form is the same as the log in one, the values 
    from here are entered above and the query above is run on them-->
<form name="registration" action="" method="post">
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="gender" placeholder="Gender" required />
<input type="text" name="country" placeholder="Country" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>



</div>


<?php } ?>

</div>
<!-- same container as on the previous page-->
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
