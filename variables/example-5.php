<?php

$name = 'John';

function test(){
    global $name;
    echo $name;
}

function test2(){
    $name = "Doe";
    echo $name;
}

test();
test2();

?>