<?php

//Usada nas versões do PHP 7.2.0 para cima

define('SECRET_IV', pack('a16', 'password'));
define('SECRET', pack('a16', 'password'));

$data = [
    "nome"=>"John"
];

$openssl = openssl_encrypt (
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true));

?>