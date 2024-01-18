<?php

$person = array(
    'name'=>'John',
    'age'=> 20,
);

foreach ($person as &$value){
    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
}

print_r($person);

?>