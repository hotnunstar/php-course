<?php

$dt = new DateTime();

$interval = new DateInterval('P15D');

echo $dt->format('d/m/Y H:i:s');

$dt->add($interval);

echo '<br>';
echo $dt->format('d/m/Y H:i:s');

?>