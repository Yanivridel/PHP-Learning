<?php
/*
$dims = getimagesize(__DIR__ . '/IMG_0294.jpeg');
$width = $dims[0];
$height = $dims[1];
var_dump($dims);
*/

// [$width, $height] = getimagesize(__DIR__ . '/IMG_0294.jpeg');
[$width2, $height2] = getimagesize("https://cdn2.vectorstock.com/i/1000x1000/23/81/default-avatar-profile-icon-vector-18942381.jpg");
// var_dump($width);
// var_dump($height);
// var_dump($width2);
// var_dump($height2);

$maxDim = 400;
// $scaleFactor = $maxDim / max($width, $height);
$scaleFactor2 = $maxDim / max($width2, $height2);
// var_dump($scaleFactor);

// $newWidth = $width * $scaleFactor;
// $newHeight = $height * $scaleFactor;
$newWidth2 = $width2 * $scaleFactor2;
$newHeight2 = $height2 * $scaleFactor2;
// var_dump("{$newWidth}x{$newHeight}");
// var_dump("{$newWidth2}x{$newHeight2}");

// $im = imagecreatefromjpeg(__DIR__ . '/IMG_0294.jpeg');
// var_dump($im);
$im2 = imagecreatefromjpeg("https://cdn2.vectorstock.com/i/1000x1000/23/81/default-avatar-profile-icon-vector-18942381.jpg");
// var_dump($im2);

// $newImg = imagecreatetruecolor($newWidth, $newHeight);
// imagecopyresampled($newImg, $im, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
$newImg2 = imagecreatetruecolor($newWidth2, $newHeight2);
imagecopyresampled($newImg2, $im2, 0, 0, 0, 0, $newWidth2, $newHeight2, $width2, $height2);

header("Content-Type: image/jpeg");
imagejpeg($newImg2);
imagejpeg($newImg2, 'anonymous.jpg');