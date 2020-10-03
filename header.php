<?php 
require 'config/config.php';
if(isset($_SESSION['reg_character']))
{
 	$city=$_SESSION['reg_character'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Know_your_ILP_fellow_associates</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/display.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</head>
<body>
<nav class="nav nav-pills nav-justified" style="background-color: #5ba5d7;">
  <a class="nav-item nav-link" href="<?php echo $city.".explore";?>">About TCS</a>
  <a class="nav-item nav-link" href="entain.php">Entertainment</a>
  <a class="nav-item nav-link" href="food.php">Food</a>
  <a class="nav-item nav-link" href="trans.php">Transport</a>
   <a class="nav-item nav-link" href="tour.php">Tourism</a>
</nav>
</body>
</html>