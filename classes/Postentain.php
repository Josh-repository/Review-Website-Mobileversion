<?php
class Postentain
{
	private $user_obj;
		private $con;

		public function __construct($con,$user)
		{
			$this->con=$con;
			
			$this->user_obj= new User($con,$user);
		}
	public function loadPostsFriends($data, $limit) {

		$page = $data['page']; 
		$city=$data['city'];
		//for loading content
		if($page == 1) 
			$start = 0;
		else 
			$start = ($page - 1) * $limit;
		$str = ""; //String to return 
		$data_query = mysqli_query($this->con, "SELECT * FROM entertainment WHERE city='$city' AND deleted='no' ORDER BY sno DESC");
		if(mysqli_num_rows($data_query) > 0) {
			$num_iterations = 0; //Number of results checked (not necasserily posted)
			$count = 1;
			while($row = mysqli_fetch_array($data_query)) {
				$id = $row['sno'];
				$city = $row['city'];
				$name = $row['name'];
				$place = $row['place'];
				$type=$row['type'];
				$cost=$row['cost'];
				$duration=$row['duration'];
				if($num_iterations++ < $start)
						continue; 
				//Once 10 posts have been loaded, break
					if($count > $limit) {
						break;
					}
					else {
						$count++;
					}
					
					?>
					<script>
							function toggle<?php echo $id; ?>() 
						{
							
					var target=$(event.target);
					if(!target.is("a") || !target.is("button"))
					{
						var element = document.getElementById("toggleComment<?php echo $id; ?>");

							if(element.style.display == "block") 
								element.style.display = "none";
							else 
								element.style.display = "block";
						}
					}
					</script>
								
					<?php
					$str .= "
				<div class='outer'>
				<div class='title'><p><b>Entertainment:</b>$id</p></div>
				<div class='main_column4 column4'>
					<div class='status_post'>
						<b>Name of the city:</b>$city
						<br>
						<b>Name of the entertainment place:</b>$name
						<br>
						<b>Name of the location:</b>$place
						<br>
						<b>Type of entertainment:</b>$type
						<br>
						<b>Average cost per person:</b>$cost
						<br>
						<b>Time to explore:</b>$duration
					</div>
				</div>		
						<div class='newsfeedPostOptions'>
							<div class='commentda' onClick='javascript:toggle$id()'><b>Review</b></div>
							<div class='post_comment' id='toggleComment$id' style='display:none;''>
							<iframe src='commentsa.php?post_id=$id' id='comment_iframe' frameborder='0'></iframe>
							
							</div>
							</div>
							<br>
				</div>";				
						} //End while loop
						if($count > $limit) 
				$str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'>
							<input type='hidden' class='noMorePosts' value='false'>";
			else 
				$str .= "<div class='outer'>
			<input type='hidden' class='noMorePosts' value='true'><p style='text-align: centre;'><b> No more post to show!</b> </p>
			</div>";
		}//End of if
		else 
				$str .= "<div class='outer'>
			<input type='hidden' class='noMorePosts' value='true'><p style='text-align: centre;'> <b>No posts to show!</b> </p>
			</div>";
		echo $str;
	}
}