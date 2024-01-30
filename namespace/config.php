<?php

spl_autoload_register(function($className){
    $dirClass = "class";
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $filename = $dirClass . DIRECTORY_SEPARATOR . $className . ".php";

    if(file_exists($filename) === true) require_once($filename);
});

?>