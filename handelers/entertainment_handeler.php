<?php
$city="";
$name="";
$place="";
$type="";
$cost="";
$duration="";
//profile picture loading
if(isset($_POST['register_button']))
{
	//firstname
	$city=strtolower($_POST['city']);
    $_SESSION['city']=$city;
    
	$name=strtolower($_POST['name']);
    $_SESSION['name']=$name;

    $place=strtolower($_POST['place_name']);
    $_SESSION['place_name']=$place;

    $type=strtolower($_POST['type']);
    $_SESSION['type']=$type;

 	$cost=strtolower($_POST['cost']);
    $_SESSION['cost']=$cost;

    $duration=strtolower($_POST['duration']);
    $_SESSION['duration']=$duration;  

    $query=mysqli_query($con,"INSERT INTO entertainment VALUES ('','$city','$name','$place','$type','$cost','$duration','no')"); 
	
	$_SESSION['city']='';
	$_SESSION['name']='';
	$_SESSION['place_name']='';
	$_SESSION['type']='';
	$_SESSION['cost']='';
	$_SESSION['duration']='';
	//lol
	?>
	<script>
		alert("Details are saved.")
		</script>
		<?php
}
?>