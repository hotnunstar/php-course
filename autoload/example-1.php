<?php

function __autoload($className){
    var_dump("$className.php");
    require_once("$className.php");
}

$car = new DelRey();
$car->accelerate(80);

?>