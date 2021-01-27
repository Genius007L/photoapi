<?php

$rand = rand(1,21);
$url = 'https://cdn.jsdelivr.net/gh/Genius007L/photoapi/images/'.$rand.'.png';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>