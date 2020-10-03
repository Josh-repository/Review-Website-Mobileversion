<?php  
include("../config/config.php");
include("../classes/User.php");
include("../classes/Posttour.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Posttour($con, $_REQUEST['city']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>