<?php  
include("../config/config.php");
include("../classes/User.php");
include("../classes/Postfood.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postfood($con, $_REQUEST['city']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>