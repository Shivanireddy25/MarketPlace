<?php
// SILENT NOTIFICATIONS
error_reporting(E_ALL & ~E_NOTICE);

// PATH - AUTOMATIC
// ! CHANGE IF YOU GET PATH ISSUES !
//define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);

/* Database credentials. */
/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'chittp');
define('DB_PASSWORD', 'hoatimvo');
define('DB_NAME', 'cmpe272');
define('DB_CHARSET', 'utf8');*/

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'cmpe272');
define('DB_CHARSET', 'utf8');

 
/* Attempt to connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    
    die("ERROR: Can not connect to your DB. " . mysqli_connect_error());
}
?>