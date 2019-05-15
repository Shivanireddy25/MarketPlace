<?php
// (1) Include rating library and DB connection
	require_once "configuration.php";
	require_once "rating_lib.php";

	$starLib = new Rating();


	// (2) FETCH THE TOP RATING, AND TOP  REVIEW
	$top_rating = $starLib->top_rating();
	$top_review = $starLib->top_review();
				
				
// Display result
for ($row = 0; $row < count($top_rating) && $row <= 5; $row++) {

	$product_image = $top_rating[$row]["product_image"];
	$product_id = $top_rating[$row]["product_id"];
	$product_url = $top_rating[$row]["product_url"];
	$rating_point =  $top_rating[$row]["RatingPoint"];
	//print("Top Rating Product " .$product_id. "-" .$product_image. "-" //.$product_url. "-" .$rating_point. "<br/>");

	echo '<div class="post">
			<a href="'; echo $product_url; echo '"><img src="'; echo $product_image; echo'"/></a></div>';
	}


for ($row = 0; $row < count($top_review) && $row <= 5; $row++) {

	$product_image = $top_review[$row]["product_image"];
	$product_id = $top_review[$row]["product_id"];
	$product_url = $top_review[$row]["product_url"];
	$review_number =  $top_review[$row]["ReviewNumber"];
	//print("Top Review Product " .$product_id."-" .$product_image. "-" //.$product_url. "-" .$review_number. "<br/>");
	echo '<div class="post">
			<a href="'; echo $product_url; echo '"><img src="'; echo $product_image; echo'"/></a></div>';
    }
    
    ?>