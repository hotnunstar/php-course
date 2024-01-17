<?php

session_id('rsto416af0oeequkjeh5rc863p');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>