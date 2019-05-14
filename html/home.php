<!DOCTYPE html>
<?php
include "trackWeb.php";
cookieFunc("homepage");
?>

<?php
$cookie_name = "homepage";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<script>
 function gameFunc() {
	localStorage.setItem('hello', 'hello');
	window.open('http://www.google.com');

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
      }
      h1 {
        color: green;
      }
      form {
        text-align: center;
      }
    </style>
  </head>
  <body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<div class="fb-share-button" data-href="http://ec2-3-14-79-22.us-east-2.compute.amazonaws.com/home.php" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fec2-3-14-79-22.us-east-2.compute.amazonaws.com%2Fhome.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>


    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="./home.php">Home</a>
      <a class="navbar-brand" href="./visited.php">History</a>
      <a class="navbar-brand" href="./Topvisited.php">Most Visited</a>
     <a class="navbar-brand" href="./logout.php">Logout</a>  
  </nav>


<p> <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mountain" aria-expanded="false" aria-controls="multiCollapseExample2">Mountain Side Tours</button>
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

<div class="collapse multi-collapse" id="mountain" style="background-color:cyan">
    <h1>Super Market</h1>
    <h2>Products</h2>
    <p><a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/"<b><h2> Mountain Side Tours </h2></b></a></p>
<div class="row">
    <div class="col-sm-3">
      <h3>All Inclusive Packages </h3>
      <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/checkpage.php
" class="button">Go to Product Page</a>

    </div>
    <div class="col-sm-3">
      <h3>Customaizable Vacation package</h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/customPackage.php" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Group Discounts</h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/group.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Camping</h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/camp.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row">
    <div class="col-sm-3">
      <h3>Trekking</h3>
      <button onClick="gameFunc()">Go to Product Page</button>
    </div>
    <div class="col-sm-3">
      <h3>HoneyMoon Packages </h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/honeymoon.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Single Day Picnic Packages </h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/singleday.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Sky Diving Packages </h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/skydive.php
" class="button">Go to Product Page</a>


    </div>
  </div>

<div class="row">
    <div class="col-sm-4">
      <h3>Resort Stay And Party </h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/resort.php" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Transportation services</h3>
          <a href="http://ec2-54-193-88-197.us-west-1.compute.amazonaws.com/transport.php" class="button">Go to Product Page</a>


    </div>

  </div>
</div>
<div class="collapse multi-collapse" id="sunshine">
    <p><a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/index.html"><b><h2>Sunshine School </h2></b></a></p>
<div class="row">
    <div class="col-sm-3">
      <h3>Academic Excellence</h3>
      <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/academics.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Notable Alumni</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/alumni.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Sports</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/sports.php
" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Art and Cultural Activities
</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/art.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row">
<div class="col-sm-3">
<h3>Science and Technology
</h3>
      <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/science.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Commerce
</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/commerce.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>History</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/history.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Personality Development
</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/personality.php
" class="button">Go to Product Page</a>


    </div>
  </div>

<div class="row">
    <div class="col-sm-4">
      <h3>Olympiads</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/olympiad.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Computer Science
</h3>
          <a href="http://ec2-18-217-86-188.us-east-2.compute.amazonaws.com/272cookies/computer.php
" class="button">Go to Product Page</a>


    </div>

  </div>
</div>
<div class="collapse multi-collapse" id="hon">
    <p><a href="http://honviet.us/home.html"><b><h2> Hon Viet </h2></b></a></p>

<div class="row">
    <div class="col-sm-3">
      <h3>Beef Noodles</h3>
      <a href="http://honviet.us/beef_noodle.html" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Banh Xeo</h3>
          <a href="http://honviet.us/banhxeo.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3> Beef Salad </h3>
          <a href="http://honviet.us/beef_salad.html" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Chicken Noodles</h3>
          <a href="http://honviet.us/chicken_noodle.html" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row">
    <div class="col-sm-3">
      <h3>Egg roll</h3>
      <a href=http://honviet.us/egg_roll.html" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Shrimp Salad</h3>
          <a href="http://honviet.us/shrimp_salad.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Crab Noodles</h3>
          <a href="http://honviet.us/crab_noodle.html" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Jelly fish salad</h3>
          <a href="http://honviet.us/jelly_salad.html" class="button">Go to Product Page</a>


    </div>
  </div>

<div class="row">
    <div class="col-sm-4">
      <h3>Chicken Salad</h3>
          <a href="http://honviet.us/chicken_salad.html" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Bread</h3>
          <a href="http://honviet.us/banhmi.html" class="button">Go to Product Page</a>


    </div>

  </div>
</div>

<div class="collapse multi-collapse" id="vision">
    <p><a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/index.html"><b><h2> Vision </h2></b></a></p>



<div class="row">
    <div class="col-sm-3">
      <h3>KnowBe4</h3>
      <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/LastPass.php" class="button">Go to Product Page</a>     
    </div>
    <div class="col-sm-3">
      <h3>LastPass</h3>
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/LastPass.php" class="button">Go to Product Page</a>
      
     
    </div>
    <div class="col-sm-3">
      <h3>Proofpoint 3</h3>  
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/ProofPoint.php" class="button">Go to Product Page</a>
      
      
    </div>
     <div class="col-sm-3">
      <h3>Jamf</h3>   
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Jamf.php" class="button">Go to Product Page</a>
      
      
    </div>
  </div>
  <div class="row">
  <div class="col-sm-3">
      <h3>Zoom</h3>
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Zoom.php" class="button">Go to Product Page</a>
      
    </div>
    <div class="col-sm-3">
      <h3>Atlassian</h3>
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Atlassian.php" class="button">Go to Product Page</a>
      
    </div>
    <div class="col-sm-3">
      <h3>Freshservice</h3> 
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Freshservice.php" class="button">Go to Product Page</a>
     
    </div>
     <div class="col-sm-3">
      <h3>Ring Central</h3>    
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/RingCentral.php" class="button">Go to Product Page</a>
      
     
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Teem</h3>
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Teem.php" class="button">Go to Product Page</a>
     
     
    </div>
    <div class="col-sm-4">
      <h3>Sophos</h3>
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Sophos.php" class="button">Go to Product Page</a>
      
     
    </div>
    <div class="col-sm-4">
      <h3>Workday</h3>   
          <a href="http://ec2-18-221-59-200.us-east-2.compute.amazonaws.com/Workday.php" class="button">Go to Product Page</a>
      
    </div>
  </div>    
</div>
<div class="collapse multi-collapse" id="science">
<p><a href="./science.php"><b><h2>Science and Technology</h2></b></a></p>
<div class="row">
    <div class="col-sm-3">
      <h3>Car Cleaning Service
</h3>
      <a href="http://thevirtualworks.net/car-cleaning.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Carpet Cleaning Service</h3>
          <a href="http://thevirtualworks.net/carpet-cleaning.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Car Repair Service</h3>
          <a href="http://thevirtualworks.net/car-repair.php
" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Laundry Service
</h3>
          <a href="http://thevirtualworks.net/laundry-service.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row">
    <div class="col-sm-3">
      <h3>Window Cleaning Service</h3>
      <a href="http://thevirtualworks.net/window-cleaning.php
" class="button">Go to Product Page</a>
    </div>
    <div class="col-sm-3">
      <h3>Bike Repair Service</h3>
          <a href="http://thevirtualworks.net/bike-repair.php
" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-3">
      <h3>Camera Repair Service</h3>
          <a href="http://thevirtualworks.net/camera-repair.php" class="button">Go to Product Page</a>


    </div>
     <div class="col-sm-3">
      <h3>Carpentry Service
</h3>
          <a href="http://thevirtualworks.net/carpentry-service.php
" class="button">Go to Product Page</a>


    </div>
  </div>
<div class="row">
    <div class="col-sm-4">
      <h3>Painting Service</h3>
          <a href="http://thevirtualworks.net/painting-service.php" class="button">Go to Product Page</a>


    </div>
    <div class="col-sm-4">
      <h3>Computer Repair Service</h3>
          <a href="http://thevirtualworks.net/computer-repair.php
" class="button">Go to Product Page</a>


    </div>
  </div>
</div>
  </body>
</html>

