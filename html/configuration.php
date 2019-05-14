<?php
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'cmpe272');

/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'chi');
define('DB_PASSWORD', 'hoatimvo');
define('DB_NAME', 'cmpe2722019');*/

 
/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    die("ERROR: Can not connect to your DB. " . mysqli_connect_error());
}
?>
