<?php

function resizeImage($file, $width, $height){

    list($orgWidth, $orgHeight) = getimagesize($file);

    $resizedImage = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($file);

    imagecopyresampled($resizedImage, $image, 0,0,0,0,$width, $height, $orgWidth, $orgHeight);
    imagejpeg($resizedImage, "resized_letter_a.jpeg");

}   


$file = "uploads/letter_a.jpg";
resizeImage($file, 100, 100);

?>