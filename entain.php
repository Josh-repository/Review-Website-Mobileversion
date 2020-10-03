<?php 
	include("header.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Entertainment</title>
	<!-- java script -->
	<!-- <script src="assests/js/bootbox.min.js"></script>  -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/display.css">
    
</head>

<body >
<div class="connect">
	<p><b style="left: 5%;
    position: absolute;"><h5>To Add Item</h5></b></p><a href="entertainment.php"><img src="images/plus.png" id="picconnect" style="position: absolute;
    cursor: pointer;
    height: 90%;
    right: 0%;
    top: 10%;"></a>
</div>
<div class="posts_area"></div>
	<script>
	var city = '<?php echo $city; ?>';

	$(document).ready(function() {
		//Original ajax request for loading first posts 
		$.ajax({
			url: "handelers/ajax_load_entain.php?city=<?php echo $city; ?>&page=1",
			type: "POST",
			data: "page=1&city=" + city,
			cache:false,

			success: function(data) {
				$('.posts_area').html(data);
			}
		});

		$(window).scroll(function() {	
			var height = $('.posts_area').height(); //Div containing posts
			var scroll_top = $(this).scrollTop();
			var page = $('.posts_area').find('.nextPage').val();
			var noMorePosts = $('.posts_area').find('.noMorePosts').val();

			if (document.documentElement.scrollHeight == (document.documentElement.scrollTop + window.innerHeight) && noMorePosts == 'false')
			 {	
				var ajaxReq = $.ajax({
					url: "handelers/ajax_load_entain.php?city=<?php echo $city; ?>&page="+page,
					type: "POST",
					data: "page=" + page + "&city=" + city,
					cache:false,

					success: function(response) {
						$('.posts_area').find('.nextPage').remove(); //Removes current .nextpage 
						$('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage 
						$('.posts_area').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>
</body>
</html>