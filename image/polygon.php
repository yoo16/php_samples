<?php
header("Content-Type: image/png");
$image = imagecreate(100, 100);

$back = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
imagepolygon($image, array(10, 80, 80, 80, 80, 10), 3, $red);

imagepng($image);
imagedestroy($image);
