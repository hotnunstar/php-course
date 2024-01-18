<?php

$a = 10;

function changeValue(&$b){
    $b += 50;
    return $b;
}

echo changeValue($a);
echo "<br>";
echo $a;

?>