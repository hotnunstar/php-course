<?php

function includeClasses($className){
    if(file_exists($className.".php") === true) require_once($className.".php");
}

spl_autoload_register("includeClasses");

spl_autoload_register(function($className){
    if(file_exists("abstract" . DIRECTORY_SEPARATOR . $className.".php") === true) require_once("abstract" . DIRECTORY_SEPARATOR . $className.".php");
});

$car = new DelRey();
$car->accelerate(80);

?>