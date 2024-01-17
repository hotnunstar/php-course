<?php

$json = '[{"name":"John","age":20},{"name":"Doe","age":25}]';

$data = json_decode($json, true);

var_dump($data);

?>