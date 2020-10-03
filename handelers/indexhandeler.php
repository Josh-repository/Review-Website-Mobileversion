<?php 
 	$username="";
 	$city="";
 	//if(isset($_POST['register_button']))
 	if(isset($_POST['register_button']))
{
	
	//firstname
	$username=strtolower($_POST['email']);
    $_SESSION['email']=$username;
    //city
    $city=strtolower($_POST['reg_character']);
    $_SESSION['reg_character']=$city;
	$query=mysqli_query($con,"INSERT INTO associates VALUES ('','$username','$city')");
	header("Location:$city.explore");
	$_SESSION['email']='';
	exit();
}