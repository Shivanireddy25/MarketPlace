<?php

function cookieFunc($cookie_name) {
	
   setcookie($cookie_name, isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1);
}
?>
