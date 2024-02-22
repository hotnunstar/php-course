<?php

$yourAge = 28;
$childrenAge = 12;
$adultAge = 18;
$oldAge = 65;

if($yourAge < $childrenAge) {
    echo "Baby";
} else if ($yourAge < $adultAge) {
    echo "Young";
} else if ($yourAge < $oldAge) {
    echo "Adult";
} else {
    echo "Old";
}

echo "<br>";

echo ($yourAge < $adultAge)? "Underage" : "Adult";

?>