<?php
setcookie("loggedIn", "", time()-3600);
header ("Location: index.php?page=logout");
exit;
?>