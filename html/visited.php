<!DOCTYPE html>
<?php
$arr = array();
if(isset($_COOKIE["acad"])) {
echo "Value is: " . $_COOKIE["acad"];
$acadcount = $_COOKIE["acad"];
if ($acadcount > 0)
$arr["acadcount"] = $acadcount;
}

$mostvisited = array();
$mostvisited["acadcount"] = 'Academic Excellence';

if (count($arr) > 0) {
arsort($arr);
$i = 1;
foreach ($arr as $key => $value) {
 echo $mostvisited[$key]."   ".$value."<br/>";
 $i++;
 if ($i > 5)
 break;
}
} else {
    echo "<h3>No search results</h3>";
}	

?>


<?php
$cookie_name = "acad";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


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
      <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="./home.php">Home</a>
      <a class="navbar-brand" href="./visited.php">History</a>
	 <a class="navbar-brand" href="./mostvisited.php">Most Visited</a>
    </nav>
    <h1>Sunshine School</h1>
    <h2>Last Visited Pages</h2>
<?php
$cookie_name = 'homepage';



?>
</body>
</html>
