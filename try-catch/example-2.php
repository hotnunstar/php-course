<?php

function name($name) {
    if(!$name) throw new Exception("Name not found.", 1);
    echo ucFirst($name)."<br>";
}

try {
    name("John");
    name("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Try was executed";
}


?>