<?php

$phrase = "Repetition is the mother of retention";
$word = "mother";
$q = strpos($phrase, $word);
$text = substr($phrase, 0, $q);
$text2 = substr($phrase, $q + strlen($word), strlen($phrase));

var_dump($q);
var_dump($text);
var_dump($text2);

?>