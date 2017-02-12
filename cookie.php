<?php

$strValue = "This is our 1st Cookie test";
setcookie("PHP_B45_COOKIE", $strValue, time()+86400*15);

echo "PHP_B45_COOKIE successfully created!<br>";
echo $_COOKIE['PHP_B45_COOKIE'];
