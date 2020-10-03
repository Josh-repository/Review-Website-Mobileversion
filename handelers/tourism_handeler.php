<?php
$city="";
$name="";
$duration="";
$cost="";
//profile picture loading
if(isset($_POST['register_button']))
{
	//firstname
	$city=strtolower($_POST['city']);
    $_SESSION['city']=$city;
    
	$name=strtolower($_POST['name']);
    $_SESSION['name']=$name;

  	$cost=strtolower($_POST['cost']);
    $_SESSION['cost']=$cost;

    $duration=strtolower($_POST['duration']);
    $_SESSION['duration']=$duration;  

    $query=mysqli_query($con,"INSERT INTO tourism VALUES ('','$city','$name','$cost','$duration','no')"); 
	
	$_SESSION['city']='';
	$_SESSION['name']='';
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