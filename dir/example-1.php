<?php

$name = "images";

if(!is_dir($name)) {
    mkdir($name);
    echo "Directory successful created";
} else {
    rmdir($name);
    echo "Directory successful deleted";
}

?>