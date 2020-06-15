<?php

session_destroy();
setcookie("ageCheck", "true", time()-3600, '/');

header("location:login.php");

?>