<?php
$dir=$_GET['name'];
$dir2=$_GET['user'];

  $file = 'imguser/'.$dir2.'/'.$dir;
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);
exit();
?>