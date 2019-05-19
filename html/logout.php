<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.php");
exit;
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-image: radial-gradient(lightblue, grey);">



</body>
</html>

