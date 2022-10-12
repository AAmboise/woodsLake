<?php
$image = new Imagick($_SERVER['DOCUMENT_ROOT'] . '/img.jpg');
echo $image->getImageWidth();
$image->cropThumbnailImage(200,200);
$image->writeImage($_SERVER['DOCUMENT_ROOT'] . '/test_200-200.jpg');
?>