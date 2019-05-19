<?php
class Rating {
  private $pdo = null;
  private $stmt = null;

  function __construct () {
  // __construct() : connect to the database

    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USERNAME, DB_PASSWORD,
        [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false ]
      );
      return true;
    } catch (Exception $ex) {
      print_r($ex);
      die();
    }
  }

  function __destruct () {
  // __destruct() : close connection when done

    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  function save ($id, $stars, $product_img, $product_url){
  // save() : save the rating
  // PARAM $user - user ID
  //       $id   - article or product id being rated
  //       $stars - The number odf stars

    try {
      $this->stmt = $this->pdo->prepare(
        "INSERT INTO star_rating (product_id, rating, product_image, product_url) VALUES (?, ?, ?, ?)"
      );
      $this->stmt->execute([$id, $stars, $product_img, $product_url]);
    } catch (Exception $ex) {
      // die($ex->getMessage());
      return false;
    }
    return true;
  }
  
  function avg ($id){
  // avg() : get the average rating for the selected article or product
  // PARAM $id - article or product id

    $this->stmt = $this->pdo->prepare(
      "SELECT AVG(rating) avg FROM star_rating WHERE product_id=?"
    );
    $this->stmt->execute([$id]);
    $average = $this->stmt->fetchAll();
    return is_numeric($average[0]['avg']) ? $average[0]['avg'] : 0 ;
  }
  
  function total_rating ($id){
  // total_rating() : get the total rating for the selected article or product
  // PARAM $id - article or product id

    $this->stmt = $this->pdo->prepare(
      "SELECT COUNT(rating) AS TotalRating FROM star_rating WHERE product_id=?"
    );
    $this->stmt->execute([$id]);
    $total_rating = $this->stmt->fetchAll();
    return is_numeric($total_rating[0]['TotalRating']) ? $total_rating[0]['TotalRating'] : 0 ;
  }
  
  function total_review ($id){
  // total_review() : get the total review for the selected article or product
  // PARAM $id - article or product id

    $this->stmt = $this->pdo->prepare(
      "SELECT COUNT(remark) AS TotalReview FROM product_review WHERE product_id=?"
    );
    $this->stmt->execute([$id]);
    $total_review = $this->stmt->fetchAll();
    return is_numeric($total_review[0]['TotalReview']) ? $total_review[0]['TotalReview'] : 0 ;
  }
	
  function top_rating (){
  // top_rating() : support to get five top rating products
  
    $this->stmt = $this->pdo->prepare(
      //"SELECT COUNT(rating) AS RatingPoint, product_id FROM star_rating GROUP BY product_id");
		"SELECT AVG(rating) AS RatingPoint, product_id, product_image, product_url FROM star_rating GROUP BY product_id order by RatingPoint desc limit 5");
    
    $this->stmt->execute();
    $top_rating = $this->stmt->fetchAll();
	
    // create key array
   /* foreach ($top_rating as $key => $row) {
        $rating[$key]  = $row["RatingPoint"];
    }

    //sort results based on key
    array_multisort($rating, SORT_DESC, $top_rating);

	  $five_top_rating_product = array_slice($rating, 0, 5, true);
	  //loop through the results showing up to 5*/
   
	  
	  return $top_rating;
   
  }
	
  function top_review (){
  // top_review() : support to get five top review products
  
    $this->stmt = $this->pdo->prepare(
      "SELECT COUNT(remark) AS ReviewNumber, product_id, product_image, product_url FROM product_review GROUP BY product_id order by ReviewNumber desc limit 5");
    $this->stmt->execute();
    $top_review = $this->stmt->fetchAll();
	  
    // create key array
   /* foreach ($top_review as $key => $row) {
        $review[$key]  = $row["ReviewNumber"];
    }

    //sort results based on key
    array_multisort($review, SORT_DESC, $top_review);

	  $five_top_review_product = array_slice($review, 0, 5, true);
	  return $five_top_review_product;*/
	  
	  return $top_review;
  }
}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-image: radial-gradient(lightblue, grey);">



</body>
</html>