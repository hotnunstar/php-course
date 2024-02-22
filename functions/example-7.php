<?php

function sum(int ...$values){
    return array_sum($values);
}

echo sum(2, 2);
echo '<br>';
echo sum(25, 33);
echo '<br>';
echo sum(1.5, 2);
echo '<br>';

?>