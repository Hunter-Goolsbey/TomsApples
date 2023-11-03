<?php
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="TomsApplesStylesheet.css">
  <title>Toms Bio</title>
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
  
  <div class = Col_1>
    <h1>Our Family</h1>
    <p>In 1972, Tom's Apples began as Tom's Family Orchard, serving members of the 
    Pennsylvania country-side for 20 years. Tom Hinster began this family establishment as
     a means to make ends meet through the great depression.  Mr.Hinster recruited his 4 
     brothers to till and harvest their 3 acre apple orchard, while his two sisters owned
      and operated the family's general store</p>
  </div>
  
  <div class = Col_2>
    <h2>Our Story</h2>
    <p>Since 1983, Tom and his family have grown to national markets...</p>
  </div>

<form action="/action_page.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>

<script type="text/javascript" src="TomsApplesMenuBar.js"></script>
</body>

</html>