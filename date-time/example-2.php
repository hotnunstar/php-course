<?php

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 day +2 hours"); // The function accepts expressions to get timestamp

echo date('l, d/m/Y H:i:s', $ts);

?>