
<?php


/*** set the content type header ***/
/*** Without this header, it wont work ***/


	require_once "config.php";
	require_once "rating_lib.php";

	$starLib = new Rating();


	// (2) FETCH THE TOP RATING, AND TOP  REVIEW
	$top_rating = $starLib->top_rating();
	$top_review = $starLib->top_review();
				
				
// Display result

    echo "<h2 align = 'center'>Top Reviewed Services</h2>";
for ($row = 0; $row < count($top_review) && $row <= 5; $row++) {

	$product_image = $top_review[$row]["product_image"];
	$product_id = $top_review[$row]["product_id"];
	$product_url = $top_review[$row]["product_url"];
	$review_number =  $top_review[$row]["ReviewNumber"];
	//print("Top Review Product " .$product_id."-" .$product_image. "-" //.$product_url. "-" .$review_number. "<br/>");
	echo '<div class="post"  align = "center">
            <a href="'; echo $product_url; echo '"><img src="'; echo $product_image; echo'"/></a></div>';
            echo "<h2 align = 'center'>Click on above image to explore</h2>";
    }
    
	?>
	

	<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-image: radial-gradient(lightblue, grey);">



</body>
</html>