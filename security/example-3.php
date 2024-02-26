<?php

$folder = "files";
$permission = "0775";

if(is_dir($folder)) mkdir($folder);

echo "Folder successful created";

?>