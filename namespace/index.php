<?php

require_once("config.php");

use Client\Register;

$reg = new Register();

$reg->setName("John Doe");
$reg->setEmail("john@doe.com");
$reg->setPassword("123");


$reg->registerSale();

?>