<?php

function hello(){

    $args = func_get_args();

    return $args;
    
};

var_dump(hello("Bom dia!"));

?>