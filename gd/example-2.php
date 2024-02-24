<?php

$image = imagecreatefromjpeg("certificate.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICATE", $titleColor);
imagestring($image, 5, 440, 350, "John Doe", $titleColor);
imagestring($image, 3, 440, 370, "Finished date: ".date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);
imagedestroy($image);

?>