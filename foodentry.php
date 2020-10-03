<?php 
	
	include 'header.php';
	require 'handelers/foodentry_handeler.php';
	if(isset($_SESSION['reg_character']))	
	{
 	$city=$_SESSION['reg_character'];
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Food_add_things</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/entertainmentsc.css">
</head>
<body >

<div class="wrraper">
	<form action="foodentry.php" method="post">
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
	<input id="namebox" name="name" type="text" placeholder="Name of restaurant/hotel" value="<?php 
			if(isset($_SESSION['name'])){
				echo $_SESSION['name'];
			} 
			?>" required>	

		<!-- email entry -->
	<input id="placebox" type="text" name="place_name" placeholder="Place name/Exact location" value="<?php 
			if(isset($_SESSION['place_name'])){
				echo $_SESSION['place_name'];
			} 
			?>"
		required>
			<br>
	<input id="typebox" name="type" type="text" placeholder="Type of food.Eg-Non-veg/veg" value="<?php 
			if(isset($_SESSION['type'])){
				echo $_SESSION['type'];
			} 
			?>" required>
	<input id="costbox" name="cost" type="text" placeholder="Average cost per person" value="<?php 
			if(isset($_SESSION['cost'])){
				echo $_SESSION['cost'];
			} 
			?>"
			required>
	<input id="durationbox" name="contact" type="text" placeholder="Contact details" value="<?php 
			if(isset($_SESSION['contact'])){
				echo $_SESSION['contact'];
			} 
			?>" required>
	<!--Sign up button  -->
	<input id="register" type="submit" name="register_button" value="Add item"><br>
	<a id="link" href="<?php echo $city.".explore";?>">Go back</a>
</form>
</div>
</div>
</body>
</html>