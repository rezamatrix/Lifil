<?php
if (file_exists('../config/conf.php')) {
include("../config/conf.php");
}
if (file_exists('config/conf.php')) {
include("config/conf.php");

}
function register($name,$user,$pass,$email,$tell,$con){
$times=time();
$user=strtolower($user);
 $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);
   $text1=$text[rand(0,35)];
   $text2=$text[rand(0,35)];
   $text3=$text[rand(0,35)];
   $text4=$text[rand(0,35)];
   $text5=$text[rand(0,35)];
   $text6=$text[rand(0,35)];
   $text7=$text[rand(0,35)];
   $text8=$text[rand(0,35)];
   $text9=$text[rand(0,35)];
   $text10=$text[rand(0,35)];
   $text11=$text[rand(0,35)];
   $text12=$text[rand(0,35)];
   $text13=$text1.$text2.$text3.$text4.$text5.$text6.$text7.$text8.$text9.$text10.$text11.$text12;
$activecode=$text13;
$resdfsza=mysqli_real_escape_string($con,$name);
mysqli_query($con,"INSERT INTO `user` (`name` ,`user` ,`password` ,`tarikhsabtenam` ,`timeonline` ,`email` ,`tell` ,`active` ,`activecode` ,activeblog)VALUES ('$resdfsza', '$user', '$pass', '$times', '0', '$email', '$tell', '0', '$activecode', '1'); ");
  if(file_exists("files/$user")){}else{

  mkdir("files/$user",0700);
  mkdir("imguser/$user",0700);

  file_put_contents("files/$user/index.php","<?php header("."'location:../../login.php'"."); ?>");
  file_put_contents("files/$user/.htaccess","Order Deny,Allow
Deny from all");
  file_put_contents("imguser/$user/.htaccess",'
<files ~ "\.(php|php.*|sphp|php3|php4|php5|phtml|cgi|pl|shtm l|shtml|dhtml|html|htm)$">
deny from all
</files>
<Files ^(*.php|*.phps)>
    order deny,allow
    deny from all
</Files>
<Files ^(*.php|*.phps)>
    order deny,allow
    deny from all
</Files>');
  file_put_contents("imguser/$user/index.php","<?php header("."'location:../../login.php'"."); ?>");
   }
  $to =$email;
  $subject = "لینک فعال سازی ایمیل";
  $message = "سلام \n برای انتخاب شما متشکریم \بر روی این لینک کلیک کنید: \n http://bitsoftware.ir/active.php?id=$activecode";
  $from = "noreplays@bitsoftware.ir";
  $headers = "From:" . $from    ;
 @mail ( $to , $subject , $message , $headers ) ;


}
?>