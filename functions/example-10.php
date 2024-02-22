<?php

function test($callback){
    $callback();
}

test(function(){
    echo "Finished";
});

echo '<br>';

$fn = function($a){
    var_dump($a);
};

$fn('Hello');

?>