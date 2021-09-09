<?php
include("config/conf.php");
include("model/countonline.php");
?>

 <html>
  <head>
  <title>فعال سازی اکانت</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>*{font-family: Tahoma, Geneva, sans-serif ;}</style>
  <meta name="theme-color" content="#3074AE">

  </head>
  <body>


<?php
if(isset($_GET['id2'])){
   $re2= mysqli_real_escape_string($con,$_GET['id2'])  ;
    if(!preg_match( "/[:,\\. ^ ? ; & | ' !  # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $re2 )){
              $re=mysqli_query($con,"SELECT id FROM `repass`WHERE `code` = '$re2'");
$num=mysqli_num_rows($re);
if($num==1){
                        $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<8){
    $text1.=$text[rand(0,35)];
    ++$i;
       }
                          $red=mysqli_query($con,"SELECT email FROM `repass`WHERE `code` = '$re2'");
$numd=mysqli_fetch_assoc($red);
$em=$numd['email'];
      $pass=md5(base64_encode(base64_encode($text1)));
      $to =$em;
  $subject = "پسورد جدید";
  $message = "پسورد جدید شما:".$text1;
  $from = "noreplays@bitsoftware.ir";
  $headers = "From:" . $from    ;
 @mail ( $to , $subject , $message , $headers ) ;

     mysqli_query($con,"UPDATE `user` SET `password` = '$pass' WHERE email = '$em';");
     mysqli_query($con,"DELETE FROM `repass` WHERE `code`= '$re2';");
     ?>
   <div class="container" dir="rtl">
    <div class="col-sm-4"> </div>
    <div class="col-sm-4">
      <h2 ><p style="text-align: center">  پیام سیستم     </p></h2>
  <div class="panel panel-success" >

    <div class="panel-heading">وضعیت</div>
    <div class="panel-body"><br><p style="text-align: center">با موفقیت تغییر کرد و به ایمیل شما ارسال شد</p><br></div>
  </div>  </div>
  <div class="col-sm-4"> </div>
</div>
<?php
     } }
}
if(isset($_GET['id'])){
   $re= mysqli_real_escape_string($con,$_GET['id'])  ;
 if(!preg_match( "/[:,\\. ^ ? ; & | ' !  # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $re )){
     mysqli_query($con,"UPDATE `user` SET `active` = '1' WHERE activecode = '$re';");
     mysqli_query($con,"UPDATE `user` SET `emailacc` = '1' WHERE activecode = '$re';");
?>
   <div class="container" dir="rtl">
    <div class="col-sm-4"> </div>
    <div class="col-sm-4">
      <h2 ><p style="text-align: center">  پیام سیستم     </p></h2>
  <div class="panel panel-success" >

    <div class="panel-heading">وضعیت</div>
    <div class="panel-body"><br><p style="text-align: center">ایمیل اکانت شما فعال شد!</p><br></div>
  </div>  </div>
  <div class="col-sm-4"> </div>
</div>
<?php
 }
}
?>

</body>
</html>