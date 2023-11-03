<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "db001";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];

  $query = "INSERT INTO Apples (fname, lname) 
  VALUES ('$fname', '$lname')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your review.";
    }

}
?>

<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="TomsApplesStylesheet.css">
  <title>Redirecting</title>
</head>
<body>
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
    <div class="overlay-content">
      <a href = TomsApplesHome.html>Home</a>
	  <a href = TomsApplesViewOurApples.php>View our Apples</a>
	  <a href = TomsApplesTourOurOrchard.php>Tour our Orchards</a>
	  <a href = TomsBio.php>Our Story</a>
	  <a href = TomsApplesCommunityHours.html>Community Hours</a>
	  <a href = TomsApplesExtra.html>Extra</a>
	</div>
  </div>
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  
  <script type="text/javascript" src="TomsApplesMenuBar.js"></script>
</body>
</html>