<?php
$city="";
$name="";
$place="";
$type="";
$cost="";
$contact="";
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

    $contact=strtolower($_POST['contact']);
    $_SESSION['contact']=$contact;  

    $query=mysqli_query($con,"INSERT INTO food VALUES ('','$city','$name','$place','$type','$cost','$contact','no')"); 
	
	$_SESSION['city']='';
	$_SESSION['name']='';
	$_SESSION['place_name']='';
	$_SESSION['type']='';
	$_SESSION['cost']='';
	$_SESSION['contact']='';
	//lol
	?>
	<script>
		alert("Details are saved.")
		</script>
		<?php
}
?>