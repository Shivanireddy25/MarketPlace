
<?php
include "trackWeb.php";
cookieFunc("MountainSide_siteUsers");
?>


<?php
echo "<h2 align = 'center'>Top Visited Services</h2>";
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "cmpe272";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT product, totalvisit,product_name,product_url
FROM visit
ORDER BY totalvisit desc
LIMIT 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo "<table align = 'center' border='1' id= results>
<tr>
<th>Product</th>
<th>Number of Visits</th>
</tr>";

while($row = $result->fetch_assoc()) 
  {
  echo "<tr>"; 
//echo"<td>". $row['page']."</td>";

    echo"<td> <h4><a href=".$row['product_url'].">" . $row['product_name']. "</a></h4></td>";

    echo"<td>". $row['totalvisit']."</td>";
   echo "</tr>";
  }
echo "</table>";
    }

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-image: radial-gradient(lightblue, grey);">



</body>
</html>
