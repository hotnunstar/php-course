<?php

$total = 150;
$discount = 0.9;

do{
    $total *= $discount;
} while ($total > 100);

echo $total;

?>