<?php

$link = "https://www.google.pt/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?= $basename ?>">