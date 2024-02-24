<?php

$pc = "01310100";
$link = "https://viacep.com.br/ws/$pc/json/";
$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($sch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);
print_r($data["cep"]);

?>