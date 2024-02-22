<?php

/*
$birthYear = 1990;
$fullName = "";
*/

// In the line above we have a variable with number on the name
$name1 = "John";
$lastName = "Doe";

$fullName = $name1 . " " . $lastName;

echo $fullName;

exit; // Stop code execution

echo $name1;
echo "<br/>";

unset($name1); // Remove variable from memory

if(isset($name1)) echo $name1; // Check if variable is assigned

?>