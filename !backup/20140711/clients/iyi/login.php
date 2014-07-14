<?php
setcookie("loggedIn", "User", time()+1800); 
setcookie("zipCode", $_REQUEST['zip'], time()+1800);
$loggedIn = "loggedIn";
header ("Location: index.php?page=logged_in");

exit;

?>