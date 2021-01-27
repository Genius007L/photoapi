<?php

$rand = rand(1,11);
$url = 'https://cdn.jsdelivr.net/gh/Genius007L/photoapi@V-2.0/images'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>