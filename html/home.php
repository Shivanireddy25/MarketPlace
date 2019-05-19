<!DOCTYPE html>ii
<?php
include "trackWeb.php";
cookieFunc("homepage");
?>

<?php
$cookie_name = "homepage";
if(!isset($_COOKIE[$cookie_name])) {
   // echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  //  echo "Cookie '" . $cookie_name . "' is set!<br>";
    //echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<script>
 function gameFunc(cookiename, surl) {
//	console.log("in game func")	
        var cookielist = localStorage.getItem("visited");
	if (cookielist) {
	cookielist = JSON.parse(cookielist);
	}
	else { 
	cookielist = [];
	}
	cookielist.push(cookiename);
	cookielist = cookielist.filter(function(item, index){
	return cookielist.indexOf(item) >= index;
	});
	
//	console.log("cookielist", JSON.stringify(cookielist))
	localStorage.setItem("visited", JSON.stringify(cookielist));
	localStorage.setItem(cookiename, surl);
	window.open(surl, "_self");

}
</script>

<html>
  <head>
    <title>School</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
     
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      body {
        text-align: center;
        background-image: radial-gradient(lightblue, grey);
      }
      h1 {
        color: white;
       
      }
      form {
        text-align: center;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light" style= "background-image: radial-gradient(lightblue, grey)">
      <a class="navbar-brand" href="./home.php">Home</a>
      <a class="navbar-brand" href="./visited.html">History</a>
      <a class="navbar-brand" href="./Topvisited.php">Five Most Visited</a>
     <a class="navbar-brand" href="./TopRateAndReview.php">Five Top Rated Products</a>  
     <a class="navbar-brand" href="./TopRateAndReview.php">Five Top Reviews</a>  
     <a class="navbar-brand" href="./logout.php">Logout</a>  
     <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<div class="fb-share-button" data-href="http://ec2-3-14-79-22.us-east-2.compute.amazonaws.com/home.php" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fec2-3-14-79-22.us-east-2.compute.amazonaws.com%2Fhome.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  </nav>


  <h1> <b>Shoppers Stop </b></h1>
   

<p><b> Click on the category to visit the services provided by them </b> <i class="far fa-hand-point-right"></i>
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mountain" aria-expanded="false" aria-controls="multiCollapseExample2">Mountain Side Tours</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sunshine" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Sunshine School</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hon" aria-expanded="false" aria-controls="multiCollapseExample2">Hon Viet</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#vision" aria-expanded="false" aria-controls="multiCollapseExample2">Vision</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#science" aria-expanded="false" aria-controls="multiCollapseExample2">Science and Technology</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>

<div class="collapse multi-collapse" id="mountain" style="background-color:grey">



    <p><a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/"<b><h2> Mountain Side Tours </h2></b></a></p>
<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-3">
      <h3>All Inclusive Packages </h3>
      <img src="./images/1.jpeg" alt="Smiley face" height="100" width="200">
      
      <a onClick='gameFunc("All Inclusive Packages", "http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/checkpage.php")'  class="button">Go to Product Page</a>

    </div>
    <div class="col-sm-3">
      <h3>Customizable Vacation package</h3>
      <img src="./images/2.jpeg" alt="Smiley face" height="100" width="200">
          <a  onClick='gameFunc("Customizable Vacation package", "http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/customPackage.php")' class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Group Discounts</h3>
      <img src="./images/3.jpeg" alt="Smiley face" height="100" width="200">
          
	 <a  onClick='gameFunc("Group Discounts", "http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/group.php")' class="button">Go to Product Page</a>

    </div>
     <div class="col-sm-3">
      <h3>Camping</h3>
      <img src="./images/4.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/camp.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-3">
      <h3>Trekking</h3>
      <img src="./images/5.jpeg" alt="Smiley face" height="100" width="200">
      <a href="#" onClick="document.write('<?php function hello(){
              setcookie("hello", "hello");
          } ?>');">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>HoneyMoon Packages </h3>
      <img src="./images/6.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/honeymoon.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Single Day Picnic Packages </h3>
      <img src="./images/7.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/singleday.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Sky Diving Packages </h3>
      <img src="./images/8.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/skydive.php
" class="button">Go to Product Page</a>


    </div>
  </div>

<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-4">
      <h3>Resort Stay And Party </h3>
      <img src="./images/9.jpeg" alt="Smiley face" height="100" width="200">
             <a onClick='gameFunc("Resort Stay and Party", "http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/resort.php")'  class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Transportation services</h3>
      <img src="./images/10.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/transport.php" class="button">Go to Product Page</a>


    </div>

  </div>
</div>
<div class="collapse multi-collapse" id="sunshine" style="background-color:grey">
    <p><a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/index.html"><b><h2>Sunshine School </h2></b></a></p>
<div class="row" style= "background-image: radial-gradient(pink, orange)" >
    <div class="col-sm-3">
      <h3>Academic Excellence</h3>
      <img src="./images/11.jpeg" alt="Smiley face" height="100" width="200">
<a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/academics.php")' class="button">Go to Product Page</a>

    </div>
    <div class="col-sm-3">
      <h3>Notable Alumni</h3>
      <img src="./images/12.jpeg" alt="Smiley face" height="100" width="200">
          <a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/alumni.php")' class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Sports</h3>
      <img src="./images/13.jpeg" alt="Smiley face" height="100" width="200">
      <a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/sports.php")' class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Art and Cultural Activities
</h3>
<img src="./images/14.jpeg" alt="Smiley face" height="100" width="200">
<a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/art.php")' class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row" style= "background-image: radial-gradient(pink, orange)">
<div class="col-sm-3">
<h3>Science and Technology
</h3>
<img src="./images/15.jpeg" alt="Smiley face" height="100" width="200">
<a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/science.php")' class="button">Go to Product Page</a>

    </div>
    <div class="col-sm-3">
      <h3>Commerce
</h3>
<img src="./images/16.jpeg" alt="Smiley face" height="100" width="200">
<a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/commerce.php")' class="button">Go to Product Page</a>



    </div>
    <div class="col-sm-3">
      <h3>History</h3>
      <img src="./images/17.jpeg" alt="Smiley face" height="100" width="200">
      <a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/history.php")' class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Personality Development
</h3>
<img src="./images/18.jpeg" alt="Smiley face" height="100" width="200">
<a  onClick='gameFunc("Group Discounts", "http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/personality.php")' class="button">Go to Product Page</a>



    </div>
  </div>

<div class="row" style= "background-image: radial-gradient(pink, orange)">
    <div class="col-sm-4">
      <h3>Olympiads</h3>
      <img src="./images/19.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/olympiad.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Computer Science
</h3>
<img src="./images/20.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/computer.php
" class="button">Go to Product Page</a>


    </div>

  </div>
</div>
<div class="collapse multi-collapse" id="hon" style="background-color:grey">
    <p><a href="http://honviet.us/home.html"><b><h2> Hon Viet </h2></b></a></p>

<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-3">
      <h3>Beef Noodles</h3>
      <img src="./images/21.jpeg" alt="Smiley face" height="100" width="200">
      <a href="http://honviet.us/beef_noodle.html" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Banh Xeo</h3>
      <img src="./images/22.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/banhxeo.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Beef Salad </h3>
      <img src="./images/23.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/beef_salad.html" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Chicken Noodles</h3>
      <img src="./images/24.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/chicken_noodle.html" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-3">
      <h3>Egg roll</h3>
      <img src="./images/25.jpeg" alt="Smiley face" height="100" width="200">
      <a href=http://honviet.us/egg_roll.html" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Shrimp Salad</h3>
      <img src="./images/26.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/shrimp_salad.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Crab Noodles</h3>
      <img src="./images/27.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/crab_noodle.html" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Jelly fish salad</h3>
      <img src="./images/28.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/jelly_salad.html" class="button">Go to Product Page</a>


    </div>
  </div>

<div class="row" style= "background-image: radial-gradient(lightblue, grey)">
    <div class="col-sm-4">

      <h3>Chicken Salad</h3>
      <img src="./images/29.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/chicken_salad.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Bread</h3>
      <img src="./images/30.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://honviet.us/banhmi.html" class="button">Go to Product Page</a>


    </div>

  </div>
</div>

<div class="collapse multi-collapse" id="vision" style="background-color:grey">
    <p><a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/index.html"><b><h2> Vision </h2></b></a></p>



<div class="row" style= "background-image: radial-gradient(skyblue, orange)">
    <div class="col-sm-3">
      <h3>KnowBe4</h3>
      <img src="./images/31.jpeg" alt="Smiley face" height="100" width="200">
      <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/LastPass.php" class="button">Go to Product Page</a>     
    </div>
    <div class="col-sm-3">
      <h3>LastPass</h3>
      <img src="./images/32.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/LastPass.php" class="button">Go to Product Page</a>
      
     
    </div>
    <div class="col-sm-3">
      <h3>Proofpoint 3</h3>
      <img src="./images/33.jpeg" alt="Smiley face" height="100" width="200">  
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/ProofPoint.php" class="button">Go to Product Page</a>
      
      
    </div>
     <div class="col-sm-3">
      <h3>Jamf</h3>   
      <img src="./images/34.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Jamf.php" class="button">Go to Product Page</a>
      
      
    </div>
  </div>
  <div class="row" style= "background-image: radial-gradient(skyblue, orange)">
  <div class="col-sm-3">
      <h3>Zoom</h3>
      <img src="./images/35.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Zoom.php" class="button">Go to Product Page</a>
      
    </div>
    <div class="col-sm-3">
      <h3>Atlassian</h3>
      <img src="./images/36.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Atlassian.php" class="button">Go to Product Page</a>
      
    </div>
    <div class="col-sm-3">
      <h3>Freshservice</h3> 
      <img src="./images/37.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Freshservice.php" class="button">Go to Product Page</a>
     
    </div>
     <div class="col-sm-3">
      <h3>Ring Central</h3>  
      <img src="./images/38.jpeg" alt="Smiley face" height="100" width="200">  
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/RingCentral.php" class="button">Go to Product Page</a>
      
     
    </div>
  </div>
  <div class="row" style= "background-image: radial-gradient(skyblue, orange)">
    <div class="col-sm-4">
      <h3>Teem</h3>
      <img src="./images/39.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Teem.php" class="button">Go to Product Page</a>
     
     
    </div>
    <div class="col-sm-4">
      <h3>Sophos</h3>
      <img src="./images/40.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Sophos.php" class="button">Go to Product Page</a>
      
     
    </div>
   
  </div>    
</div>
<div class="collapse multi-collapse" id="science" style="background-color:grey">
<p><a href="./science.php"><b><h2>Car Services</h2></b></a></p>
<div class="row" style= "background-image: radial-gradient(lightgreen, grey)">
    <div class="col-sm-3">
      <h3>Car Cleaning Service
</h3>
<img src="./images/41.jpeg" alt="Smiley face" height="100" width="200">
      <a href="http://thevirtualworks.net/car-cleaning.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Carpet Cleaning Service</h3>
      <img src="./images/42.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/carpet-cleaning.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Car Repair Service</h3>
      <img src="./images/43.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/car-repair.php
" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Laundry Service
</h3>
<img src="./images/44.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/laundry-service.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row" style= "background-image: radial-gradient(lightgreen, grey)">
    <div class="col-sm-3">
      <h3>Window Cleaning Service</h3>
      <img src="./images/45.jpeg" alt="Smiley face" height="100" width="200">
      <a href="http://thevirtualworks.net/window-cleaning.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Bike Repair Service</h3>
      <img src="./images/46.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/bike-repair.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Camera Repair Service</h3>
      <img src="./images/47.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/camera-repair.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Carpentry Service
</h3>
<img src="./images/48.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/carpentry-service.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row" style= "background-image: radial-gradient(lightgreen, grey)">
    <div class="col-sm-4">
      <h3>Painting Service</h3>
      <img src="./images/49.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/painting-service.php" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Computer Repair Service</h3>
      <img src="./images/50.jpeg" alt="Smiley face" height="100" width="200">
          <a href="http://thevirtualworks.net/computer-repair.php
" class="button">Go to Product Page</a>


    </div>
  </div>
</div>
  </body>
</html>

