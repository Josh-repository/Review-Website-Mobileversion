<?php 
	include 'header.php';
	require 'handelers/entertainment_handeler.php';
	if(isset($_SESSION['reg_character']))
	{
 	$city=$_SESSION['reg_character'];
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entain_add_things</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/entertainmentsc.css">
</head>
<body >

<div class="wrraper">
	
	<form action="entertainment.php" method="post">
		<!-- username entry -->
	<div class="dropdown">
		<select name="city" id="citybox" value="<?php 
			if(isset($_SESSION['city'])){
				echo $_SESSION['city'];
			} 
			?>"  required>   
			<option value=""selected disable>Please select a city</option>
			<option value="Ahmedabad">Ahmedabad</option>
			<option value="Chennai">Chennai</option>
			<option value="Guwahati">Guwahati</option>
			<option value="Hyderabad">Hyderabad</option>
			<option value="Trivandrum">Trivandrum</option>
			</select>
			<br>
	</div>
	<input id="namebox" name="name" type="text" placeholder="Name of entertainment place" value="<?php 
			if(isset($_SESSION['name'])){
				echo $_SESSION['name'];
			} 
			?>">	

		<!-- email entry -->
	<input id="placebox" type="text" name="place_name" placeholder="Place name/Location" value="<?php 
			if(isset($_SESSION['place_name'])){
				echo $_SESSION['place_name'];
			} 
			?>"
		required>
			<br>
	<input id="typebox" name="type" type="text" placeholder="Type of entertainment.Eg-Movie,Gaming,etc" value="<?php 
			if(isset($_SESSION['type'])){
				echo $_SESSION['type'];
			} 
			?>">
	<input id="costbox" name="cost" type="text" placeholder="Average cost per person" value="<?php 
			if(isset($_SESSION['cost'])){
				echo $_SESSION['cost'];
			} 
			?>">
	<input id="durationbox" name="duration" type="text" placeholder="Duration to complete tour" value="<?php 
			if(isset($_SESSION['duration'])){
				echo $_SESSION['duration'];
			} 
			?>">
	<!--Sign up button  -->
	<input type="submit" id="register" name="register_button" value="Add item"><br>
	<a id="link" href="<?php echo $city.".explore";?>">Go back</a>
</form>
</div>
</body>
</html>