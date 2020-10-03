<?php 
require 'config/config.php';
require 'handelers/indexhandeler.php';
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
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<form action="index.php" method="POST" style="position: absolute;
    width: 90%;
    left: 5%;
    top: 15%;
    height:70%">
					<div class="login100-form-avatar">
						<img src="images/logo.jpg" alt="AVATAR">
					</div>
					<span class="login100-form-title p-t-20 p-b-45">
						TCS-ILP
					</span>
					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php 
								if(isset($_SESSION['email'])){
									echo $_SESSION['email'];
								} 
								?>" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "City is required">
						<span class="focus-input100"></span>
						<select name="reg_character" value="<?php 
								if(isset($_SESSION['reg_character'])){
								echo $_SESSION['reg_character'];
								} 
								?>" style="  font-family: Montserrat-Bold;
								    z-index: -1;
									font-size: 15px;
									line-height: 1.2;
									color: #333333;
									padding-left:5%;
									display: block;
									width: 100%;
									background: #fff;
									height: 50px;
									border-radius: 5px;
									box-shadow: 0px 0px 0px 0px;
									 "required>
								
						<option class="input100" value=""selected disable>City</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Chennai">Chennai</option>
						<option value="Guwahati">Guwahati</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Trivandrum">Trivandrum</option>
						</select>
						<br>
					</div>
						<input type="submit" name="register_button" value="Lets-Rock-It-Associates"     style="position: absolute;
    width: 80%;
    background-color: #fff;
    border-radius: 15px;
    left: 10%;
    height: 40px;
    font-family: Montserrat-Bold;
    border: 1px solid #292525;
    padding: 5px 10px 5px 10px;
    color: #292525;">
				</form>
			</div>
		</div>

	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>