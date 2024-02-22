<?php

require_once('config.php');

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "SESSIONS ARE DISABLED";
        break;

    case PHP_SESSION_NONE:
        echo "SESSIONS ARE ENABLED BUT NONE EXIST";
        break;

    case PHP_SESSION_ACTIVE:
        echo "SESSIONS ARE ACTIVE";
        break;
}

?>