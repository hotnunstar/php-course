<?php

require_once('config.php');

session_unset($_SESSION['name']);

echo $_SESSION['name'];

session_destroy($_SESSION['name']);

?>