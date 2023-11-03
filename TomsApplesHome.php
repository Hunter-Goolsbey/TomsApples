<!DOCTYPE html>
<html>
  
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="TomsApplesStylesheet.css">
	<title>Tom's Apples</title>
</head>

<body>
	<div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
	  <a href = TomsApplesHome.php>Home</a>
	  <a href = TomsApplesViewOurApples.php>View our Apples</a>
	  <a href = TomsApplesTourOurOrchard.php>Tour our Orchards</a>
	  <a href = TomsBio.php>Our Story</a>
	  <a href = TomsApplesCommunityHours.php>Community Hours</a>
	</div>
  </div>
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

  <div class = main>
    <form action="test2.php" method="POST">
 	  <label for="fname">First name:</label><br>
  	    <input type="text" id="fname" name="fname" value="John"><br>
  	  <label for="lname">Last name:</label><br>
  		<input type="text" id="lname" name="lname" value="Doe"><br><br>
  		<input type="submit" value="Submit">
	</form> 
  </div>
	
  <script type="text/javascript" src="TomsApplesMenuBar.js"></script>
</body>

</html>