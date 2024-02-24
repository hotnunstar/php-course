<?php

if(isset($_COOKIE["COOKIE_NAME"])) {
    $data = json_decode(($_COOKIE["COOKIE_NAME"]));
    echo $data->company;
}

?>