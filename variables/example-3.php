<?php

$name = "Hcode";
$site = 'www.hcode.com.br';

$year = 1990;
$salary = 5500.99;
$locked = false;

///////////

$fruits = array("pineapple", "orange", "mango");
echo $fruits[2];

$birthDate = new DateTime();
var_dump($birthDate);

////////////

$file = fopen("example-3.php", "r");
var_dump($file);

$null = NULL;
$empty = "";
?>