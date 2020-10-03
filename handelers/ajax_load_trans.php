<?php  
include("../config/config.php");
include("../classes/User.php");
include("../classes/Posttrans.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Posttrans($con, $_REQUEST['city']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>