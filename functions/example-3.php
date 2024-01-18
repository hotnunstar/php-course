<?php

function hello($text, $greeting = "Good morning"){ // Required parameters must be on the left
    return "Hello $text, $greeting! <br>";
}

echo hello("World", "");
echo hello("John", "Good evening");
echo hello("", "Good night");
echo hello();

?>