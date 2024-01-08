<?php 

//include "inc/example-1.php";  // Include tries to execute even if the archive is incorrect
require_once "inc/example-1.php";    // With require, if the archive doesn't exist or is incorrect, it shows fatal error

$result = sum(10, 20);
echo $result;

?>