<?php
include("config/conf.php");
$imgh=25;
$imgw=110;
$img=imagecreate($imgw,$imgh);
$bimg1=imagecolorallocate($img,200,200,200);
$bimg2=imagecolorallocate($img,0,0,0);
$bimg3=imagecolorallocate($img,41,41,163);
imageline($img,rand(0,100),rand(0,25),rand(0,100),rand(0,25),$bimg2);
//imageline($img,rand(0,100),rand(0,25),rand(0,100),rand(0,25),$bimg2);
imageline($img,rand(0,100),rand(0,25),rand(0,100),rand(0,25),$bimg2);
 $text='1 2 3 4 5 6 7 8 9 0';
 $text= explode(' ',$text);
   $text1=$text[rand(0,9)];
   $text2=$text[rand(0,9)];
   $text3=$text[rand(0,9)];
   $text4=$text[rand(0,9)];
   $text5=$text[rand(0,9)];
   $text6=$text1.$text2.$text3.$text4.$text5;
   $_SESSION['code']=$text6;
imagestring($img,6,rand(5,15),rand(5,10),$text1,$bimg3);
imagestring($img,6,rand(25,35),rand(5,10),$text2,$bimg3);
imagestring($img,6,rand(45,55),rand(5,10),$text3,$bimg3);
imagestring($img,6,rand(65,75),rand(5,10),$text4,$bimg3);
imagestring($img,6,rand(85,95),rand(5,10),$text5,$bimg3);
//header('content-type: image/png') ;
//imagejpeg($img);
//imagedestroy($img);
ob_start();
imagepng($img);
$image = ob_get_clean();

echo 'data:image/png;base64,'.base64_encode($image);


?>