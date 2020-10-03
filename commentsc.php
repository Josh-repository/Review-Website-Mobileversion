<html>
<head>
	<title></title>
	
</head>
<body>
	<style type="text/css">
		{
			font-size: 12px;
			font-family: Arial,Helvetica,Sans-serif;	
		}
</style>

	<?php  
	require'config/config.php';
	include("classes/User.php");
	include("classes/Posttrans.php");
	
	if (isset($_SESSION['reg_character'])) {
		$city = $_SESSION['reg_character'];
		$user_details_query = mysqli_query($con, "SELECT * FROM transport WHERE city='$city'");
		$user = mysqli_fetch_array($user_details_query);
	}
	else {
		header("Location: login.php");
	}

	?>
	<script>
		function toggle() {
			var element = document.getElementById("comment_section");

			if(element.style.display == "block") 
				element.style.display = "none";
			else 
				element.style.display = "block";
		}
	</script>

	<?php  
	//Get id of post
	if(isset($_GET['post_id'])) {
		$post_id = $_GET['post_id'];
	}
	if(isset($_POST['postComment' . $post_id])) {
		$post_body = $_POST['post_body'];
		$post_body = mysqli_escape_string($con, $post_body);
		$date_time_now = date("Y-m-d H:i:s");
		$insert_post = mysqli_query($con, "INSERT INTO comments VALUES ('','$post_body','','','$post_id','')");
		echo "<p>Review Posted! </p>";
	}
	?>
	<div class="comment_cover"></div>
	<form action="commentsc.php?post_id=<?php echo $post_id; ?>" id="comment_form" name="postComment<?php echo $post_id; ?>" method="POST">
		<textarea name="post_body"></textarea>
		<input type="submit" name="postComment<?php echo $post_id; ?>" value="Post" style="background-color: #5ba5d7;">
	</form>

	<!-- Load comments -->
		<?php 
		$get_comments=mysqli_query($con,"SELECT * FROM comments WHERE  postc='$post_id' ORDER BY sno ASC");
		$count =mysqli_num_rows($get_comments);
		if($count != 0)
		{  
			while($comment=mysqli_fetch_array($get_comments))
			{
				$comment_body=$comment['postbody'];

				?>
		
				<div class="comment_section">
						<?php echo $comment_body; ?>
					<hr>
				</div>			
				<?php
				}
		}
		else
		{
			echo "<center><br><br>No reviews to Show </center>";
		}
?>
</body>
</html>