<?php 
	
	include 'header.php';
	require 'handelers/tourism_handeler.php';
	if(isset($_SESSION['reg_character']))	
	{
 	$city=$_SESSION['reg_character'];
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tourism_add_things</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/entertainmentsc.css">
</head>
<body >

<div class="wrraper">
	<form action="tourism.php" method="post">
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
	<input id="namebox" name="name" type="text" placeholder="Name of tourist place" value="<?php 
			if(isset($_SESSION['name'])){
				echo $_SESSION['name'];
			} 
			?>">	

		<!-- email entry -->
	<input id="placebox" name="cost" type="text" placeholder="Average cost per person" value="<?php 
			if(isset($_SESSION['cost'])){
				echo $_SESSION['cost'];
			} 
			?>">
	<input id="typebox" name="duration" type="text" placeholder="Duration to complete tour" value="<?php 
			if(isset($_SESSION['duration'])){
				echo $_SESSION['duration'];
			} 
			?>">
	<!--Sign up button  -->
	<input id="register" type="submit" name="register_button" value="Add item"><br>
	<a id="link" href="<?php echo $city.".explore";?>">Go back</a>
</form>
</div>
</div>
</body>
</html>