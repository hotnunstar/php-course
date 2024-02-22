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

echo json_encode($persons);

?>