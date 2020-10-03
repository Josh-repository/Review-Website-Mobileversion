<?php  
include("../config/config.php");
include("../classes/User.php");
include("../classes/Postentain.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postentain($con, $_REQUEST['city']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>