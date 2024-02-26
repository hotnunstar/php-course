<?php

$data = array(
    "company"=>"Hcode",
);

setcookie("COOKIE_NAME", json_encode($data), time() + 3600);

echo "Cookie saved";

?>