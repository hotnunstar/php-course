<?php

session_start();

//After verify login and password, restart session ID
session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>