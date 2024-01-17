<?php

$persons = array();

array_push($persons, array(
    'name'=>'John',
    'age'=>20,
));

array_push($persons, array(
    'name'=>'Doe',
    'age'=>25,
));

print_r($persons[0]['name']);

?>