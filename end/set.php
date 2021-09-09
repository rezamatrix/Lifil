<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");
include("../model/api_send_sms.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);

 }

 else{
    header("location:../login.php");

 }

 include("header.php");
         $idusefr=$_SESSION['idb'];
?>

      <?php
           $cp=intval($_GET['cp']);
          if($cp==16){
                               $rezalt = mysqli_query($con,"select tarikhsabtenam,avatar,email,api,acc2,tell,phacc,phcode,emailacc,timesms,cartmeli from user WHERE user = '".$_SESSION['user']."' ");
     $eedt=mysqli_fetch_assoc($rezalt) ;
         $eedtt=$eedt['tarikhsabtenam'];
         $email=$eedt['email'];
         $avatar=$eedt['avatar'];
         $api=$eedt['api'];
         $acc2=$eedt['acc2'];
         $acc3=$eedt['emailacc'];
         $tell=$eedt['tell'];
        @ $phacc=$eedt['phacc'];
         @$phcode=$eedt['phcode'];
         @$timesms=$eedt['timesms'];
         @$cartmeli=$eedt['cartmeli'];
                         $b1=1;
                         $b2=1;
                         $b3=0;
                        if(isset($_POST['send1']) and isset($_FILES["pic1"]["name"])){
                            $rand1=rand(9999,99999999);
                        $pic1=explode(".",$_FILES["pic1"]["name"]) ;

               $pic1e=$rand1."s.".end($pic1) ;
                 $uesr=$_SESSION['user'];
                @ $fileSize = $_FILES["pic1"]["size"];

                 if($fileSize<= 1000000 and mb($con)+$fileSize7 <= 1073741824)         {
              if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){
                if(move_uploaded_file($_FILES["pic1"]["tmp_name"],"../imguser/$uesr/" . $pic1e)){
            @uploadsql($pic1e,$fileSize,end($pic1),$_FILES["pic1"]["name"],$con);

            mysqli_query($con,"UPDATE `user` SET avatar = '$pic1e' WHERE `id` ='$idusefr';");
            }else{$b3=1;}

            }else{$b2==0;}

            }
            else{
              $b1=0;

            }
            }
           if(isset($_POST['send'])){
            if(md5(base64_encode(base64_encode($_POST['pps'])))==$_SESSION['pass']){
             if(md5(base64_encode(base64_encode($_POST['nps'])))==md5(base64_encode(base64_encode($_POST['tnps'])))){
               $npas=md5(base64_encode(base64_encode($_POST['tnps'])));
               chengpass($npas,$con);

               ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
             }
            }
           }
                      if(isset($_POST['sendemail'])){
            if(md5(base64_encode(base64_encode($_POST['pps'])))==$_SESSION['pass']){
                $emailn=mysqli_real_escape_string($con,$_POST['em']);
                if(preg_match( "/^[^@]+@[a-zA-Z0-9._-]+\\.[a-zA-Z]+\$/", $emailn )){

             mysqli_query($con,"UPDATE `user` SET email = '$emailn' WHERE `id` ='$idusefr';");
             mysqli_query($con,"UPDATE `user` SET emailacc = '0' WHERE `id` ='$idusefr';");

                             ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php

            } }
           }
           if(isset($_POST['sendreph'])){
               if($phacc != 1 and $timesms <= time()){
             function fanum($text) {

$en_numbrers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
$fa_numbrers = array('٠', '١', '٢', '٣', '۴', '۵', '۶', '٧', '٨', '٩');

return str_replace($en_numbrers, $fa_numbrers, $text);
}

               $times=time()+86400;
             $numb=rand(10000,99999)    ;
              mysqli_query($con,"UPDATE `user` SET phcode = '$numb' WHERE `id` ='$idusefr';");
              mysqli_query($con,"UPDATE `user` SET timesms = '$times' WHERE `id` ='$idusefr';");
$num=fanum($numb);

  $tell2='0'.$tell;
if (($result = Send_SMS('reza-m', 'reza@1375', '100002972', $tell2, 'کد فعال سازی اکانت شما در سایت بیت سافتور:'.$num, 0, false)) === '0')
{
    echo 'انجام شد';
}
else if ($result !== '')
{
    echo "خطا";
}
          }  }
            if(isset($_POST['sendrephc'])){

               if($phcode==$_POST['cph'] and is_numeric($_POST['cph'])){
                   mysqli_query($con,"UPDATE `user` SET phacc = '1' WHERE `id` ='$idusefr';");
               }
            }
                                if(isset($_POST['sendph'])){
            if(md5(base64_encode(base64_encode($_POST['pps'])))==$_SESSION['pass']){
                $ph=$_POST['ph'];
                if(is_numeric($ph) and strlen($ph)>9){

             mysqli_query($con,"UPDATE `user` SET tell = '$ph' WHERE `id` ='$idusefr';");
             mysqli_query($con,"UPDATE `user` SET phacc = '0' WHERE `id` ='$idusefr';");
                             ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            } }
           }
                                           if(isset($_POST['sendre'])){
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
    
         mysqli_query($con,"UPDATE `user` SET activecode = '$activecode' WHERE `id` ='$idusefr';");
 $to =$email;
  $subject = "لینک فعال سازی ایمیل";
  $message = "سلام \n برای انتخاب شما متشکریم \بر روی این لینک کلیک کنید: \n http://bitsoftware.ir/active.php?id=$activecode";
  $from = "noreplays@bitsoftware.ir";
  $headers = "From:" . $from    ;
 @mail ( $to , $subject , $message , $headers ) ;
               echo"با موفقیت انجام شد";

           }
           if(isset($_GET['ab'])){
            if($_GET['ab']=="active"){
            activeblog("1",$con);
            $_SESSION['activeblog']=1;
                                         ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
             if($_GET['ab']=="deactive"){
             activeblog("0",$con);
             $_SESSION['activeblog']=0;
                                          ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
          }
          if(isset($_GET['an'])){
            if($_GET['an']=="active"){
            activenazarat("1",$con);
                                         ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
             if($_GET['an']=="deactive"){
             activenazarat("0",$con);
                                          ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
          }
                    if(isset($_GET['bn'])){
            if($_GET['bn']=="active"){
        mysqli_query($con,"UPDATE `user` SET dev = '1' WHERE `id` ='$idusefr';");
        $_SESSION['dev']=1;
                                     ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
             if($_GET['bn']=="deactive"){
         mysqli_query($con,"UPDATE `user` SET dev = '0' WHERE `id` ='$idusefr';");
         $_SESSION['dev']=0;
                                      ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }
          }
           if(isset($_POST['api'])){
            $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<32){
    $text1.=$text[rand(0,35)];
    $i++;
       }
           mysqli_query($con,"UPDATE `user` SET api = '$text1' WHERE `id` ='$idusefr';");
           }
           if(isset($_POST['cart'])){
              $sh=htmlspecialchars(mysqli_real_escape_string($con,$_POST['sh']));
              $ir=htmlspecialchars(mysqli_real_escape_string($con,$_POST['ir']));
              $bname=htmlspecialchars(mysqli_real_escape_string($con,$_POST['bname']));
if($sh>0 and !preg_match( "/[:,\\. ^ ? ; & | ' ! . # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $ir ) and is_numeric($sh)){
            mysqli_query($con,"INSERT INTO `cart` (`cart`, `ircart`, `bname`, `iduser`, `acc`) VALUES ('$sh', '$ir', '$bname', '$idusefr', '0');");
             }
           }                  if($acc2==0){
                                if(isset($_POST['prsend']) and isset($_FILES["pr"]["name"])){
                            $rand1=rand(9999,99999999);
                        $pic1=explode(".",$_FILES["pr"]["name"]) ;

               $pic1e=$rand1."s.".end($pic1) ;
                 $uesr=$_SESSION['user'];
                @ $fileSize = $_FILES["pr"]["size"];

                 if($fileSize<= 1000000)         {
              if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){
                if(move_uploaded_file($_FILES["pr"]["tmp_name"],"../imguser/$uesr/" . $pic1e)){

            mysqli_query($con,"UPDATE `user` SET cartmeli = '$pic1e' WHERE `id` ='$idusefr';");
            mysqli_query($con,"UPDATE `user` SET acc2 = '0' WHERE `id` ='$idusefr';");
                                        ?>
                                                     <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong>با موفقیت انجام شد
</div>
               <?php
            }

            }

            }

            }  }
          ?>
               <?php


                ?>

           <div class="row  no-gutter"  dir="rtl">
                 <div class="col-sm-3 col-lg-2">
    <div class="p-y">
      <div class="nav-active-border left b-primary">
        <ul class="nav nav-sm flex-column">
          <li class="nav-item">
            <a class="nav-link block active" href data-toggle="tab" data-target="#tab-1">پرفایل</a>
          </li>
          <li class="nav-item">
            <a class="nav-link block" href data-toggle="tab" data-target="#tab-2">تنظیمات اکانت </a>
          </li>
          <li class="nav-item">
            <a class="nav-link block" href data-toggle="tab" data-target="#tab-3">وبلاگ و محصولات</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link block" href data-toggle="tab" data-target="#tab-4">Api</a>
          </li>
                             <li class="nav-item">
            <a class="nav-link block" href data-toggle="tab" data-target="#tab-5">حساب بانکی </a>
          </li>
              <li class="nav-item">
            <a class="nav-link block" href data-toggle="tab" data-target="#tab-6"> تایید هویت </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
    <div class="col-sm-9 col-lg-10 light lt">
    <div class="tab-content pos-rlt">
                                     <div class="tab-pane" id="tab-6">
                         <div class="p-a-md dker _600 primary"> تایید هویت </div>

                            <?php if($acc2==0){echo ""; ?>
                            <div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>برای تایید هویت کارت ملی یا صفحه اول شناس نامه شما کافی است</strong>
  </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                               <input name="pr" value="" type="file" class="form-control">
                               <input name="prsend" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;">
                            </form>
                               <?php }if(strlen($cartmeli)>1 and $acc2==0){echo ""; ?>
                                                                                                  <div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>اطلاعات شما برای بررس ارسال شده</strong>
</div>
                            <?php }if($acc2==1){echo ""; ?>
                                                                    <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>اکانت شما تایید هویت شده هست</strong>
</div>
                            <?php }
                            if($acc2==0){
                              ?>                                                                                                 <div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>درحال بررسی</strong>
</div>
                            <?php } ?>
                         </div>
                  <div class="tab-pane" id="tab-2">
                         <div class="p-a-md dker _600 primary">تنظیمات اکانت </div>
               <form action="" method="POST">
                   <br>   تاریخ ثبت نام :<?php echo jdate("H:i:s j/n/Y",$eedtt);  ?>  <br>
               تغییر رمز عبور       <br><br>
               <input name="pps" type="password" placeholder="رمز فعلی "  class="form-control">   <br>
               <input name="nps" type="password" placeholder="رمز جدید"  class="form-control">   <br>
               <input name="tnps" type="password" placeholder="تکرار رمز جدید"  class="form-control">  <br>
               <input name="send" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form>
                                 <form action="" method="POST">
                                ایمیل فعلی:<?php echo $email;  ?> <br>
            ایمیل      <br><br>
               <input name="pps" type="password" placeholder="رمز فعلی " class="form-control">   <br>
               <input name="em" type="email" placeholder="ایمیل جدید" class="form-control">   <br>
               <input name="sendemail" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form>
                                                <form action="" method="POST">
                              شماره:<?php echo $tell;  ?> <br>
            شماره      <br><br>
               <input name="pps" type="password" placeholder="رمز فعلی " class="form-control">   <br>
               <input name="ph" type="text" placeholder="شماره" class="form-control">   <br>
               <input name="sendph" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form>
                                                  <div class="row p-5">   <div class="col-sm-4">
                                                               <form action="" method="POST">
                              ارسال دوباره ایمیل فعال سازی:<?php echo $email;  ?> <br>

                   <input name="sendre" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form> </div>  <div class="col-sm-4">
                                                                <form action="" method="POST">
                              ارسال دوباره شماره فعال سازی:<?php echo $tell;  ?> <br>

                   <input name="sendreph" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form>  </div>

           </div>
                                                        <form action="" method="POST">
                             کد فعال سازی شماره تلفن همراهتان را وارد کنید:<?php echo $tell;  ?> <br>
                       <input name="cph" value="" placeholder="کد فعال سازی" style=" background: transparent; border-radius: 50px; border: solid #BDBDBD 1px; font-family:'BYekan+ Bold'; ">
                   <input name="sendrephc" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>
               </form>
                     </div>
                                 <div class="tab-pane" id="tab-4">
                         <div class="p-a-md dker _600 primary">Api</div>

                                 <form action="" method="POST">
            Api key      <br><br>
               <input name="apikey" type="text" placeholder="" class="form-control" value="<?php echo $api;  ?>">   <br>
                   <input name="api" type="submit" value="دریافت" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>

               </form>

                     </div>
                                                 <div class="tab-pane" id="tab-5">
                         <div class="p-a-md dker _600 primary">حساب بانکی </div>

                                 <form action="" method="POST">
            شماره کارت     <br><br>
               <input name="sh" type="text" placeholder="شماره کارت" class="form-control" value="" style="font-family: Tahoma;">   <br>
               <input name="ir" type="text" placeholder="شماره شبا" class="form-control" value="" style="font-family: Tahoma;">   <br>
               <input name="bname" type="text" placeholder="نام بانک" class="form-control" value="" style="font-family: Tahoma;">   <br>
                   <input name="cart" type="submit" value="ثبت" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>

               </form>

                                   <div class="table-responsive" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >
              <th><p style="text-align: right">#</p></th>
            <th><p style="text-align: right">شماره کارت </p></th>
            <th><p style="text-align: right">شماره شبا</p></th>
            <th><p style="text-align: right">بانک</p></th>
            <th><p style="text-align: right">وضعیت</p></th>
          </tr>
        </thead>
        <tbody>
            <?php

         $i=1;
     $sel=mysqli_query($con,"SELECT *FROM `cart` WHERE `iduser` ='$idusefr' ORDER BY `id` DESC ");
         while($dd=mysqli_fetch_array($sel)){
          $e1=$dd['acc'];
          $e2=$dd['bname'];
          $e3=$dd['cart'];
          $e4=$dd['ircart'];

          if($e1==1){
           $hh="<span class=\"label light-green\"> تایید شده </span>"  ;
          } if($e1==2){
             $hh="<span class=\"label red\"> رد شده </span>"  ;
          }
          if($e1==0){
             $hh="<span class=\"label blue\">در دست بررسی </span>"  ;
          }
           ?>

                       <tr>
            <td><?php echo$i; ?></td>
            <td>   <?php echo  $e3; ?> </td>
            <td><?php echo $e4; ?></td>
            <td><?php echo  $e2  ; ?></td>
            <td><?php echo  $hh  ; ?></td>
        </tr>
          <?php
          $i++;
          }
            ?>
             </tbody>
      </table>
    </div>
                     </div>

                     <div class="tab-pane" id="tab-3">
                             <div class="p-a-md dker _600 primary"> وبلاگ و محصولات </div>
               فعال یا غیر فعال بودن وبلاگ کوچک خود را تعیین کنید    ؟
               <form action="" method="POST">
                   <table>
                       <tr>
                           <td>فعال</td>
                           <td>   <label class="md-switch">
                <input name="blog"  type="radio" value="1" <?php if($_SESSION['activeblog']==1){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&ab=active';">
                <i class="green"></i>
              </label> </td>
                       </tr>

                              <tr>
                           <td>غیر فعال       </td>
                           <td>              <label class="md-switch">
                <input name="blog" type="radio" value="0" <?php if($_SESSION['activeblog']==0){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&ab=deactive';">
                <i class="red"></i>
              </label>
          </td>
                       </tr>
                   </table>
               </form>
                            حالت ثبت نظرات کاربران
               <form action="" method="POST">



                   <table>
                       <tr>
                           <td>  نیاز به تایید نویسنده نظر</td>
                           <td>   <label class="md-switch">
                <input name="blog"  type="radio" value="1"<?php if($_SESSION['nazarat']==1){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&an=active';">
                <i class="green"></i>
              </label> </td>
                       </tr>

                              <tr>
                           <td>   بدون نیاز به تایید         </td>
                           <td>              <label class="md-switch">
                <input name="blog" type="radio" value="0" <?php if($_SESSION['nazarat']==0){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&an=deactive';">
                <i class="red"></i>
              </label>
          </td>
                       </tr>
                   </table>
                        </form>

                      </div>
                       <div class="tab-pane active" id="tab-1">
        <div class="p-a-md dker _600 primary"> پرفایل</div>

             آواتار خود را انتخاب کنید        !

               <form action="" method="POST" enctype="multipart/form-data">
                             <?php

                             if($avatar==""){$avatar="../img/q.jpg";

                  } else{
                      $avatar= "../imguser/".$_SESSION['user']."/".$avatar;
                  }
               if($b1==0){    ?>
                                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> حجم غیر مجاز
</div>     <?php
               }                if($b2==0){    ?>
                                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> یک تصویر انتخاب کنید
</div>     <?php
               }
                      if($b3==1){    ?>
                                        <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong> اواتار شما تغییر کرد!
</div>     <?php
               }
               ?>


               <script>
               function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#pic').attr('src', e.target.result);
            $('#pic3').attr('src', e.target.result);
            $('#pic2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#pic1").change(function(){
    readURL(this);
});
               </script>
                <img src="<?php echo $avatar;  ?>" alt=""  width="184" height="184" class=" img-thumbnail" id="pic"/>
                <img src="<?php echo $avatar;  ?>" alt=""  height="64" width="64" class=" img-thumbnail" id="pic3"/>
                <img src="<?php echo $avatar;  ?>" alt=""  height="42" width="42" class=" img-circle" id="pic2"/> <br>

  <input name="pic1" type="file" class="form-control" id="pic1">
     <input name="send1" type="submit" value="بارگذاری" class="btn btn-fw primary" style="font-family: Tahoma;"> <br>

               </form>
                                       من یک برنامه نویس هستم
               <form action="" method="POST">



                   <table>
                       <tr>
                           <td>  بله</td>
                           <td>   <label class="md-switch">
                <input name="blog"  type="radio" value="1"<?php if($_SESSION['dev']==1){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&bn=active';">
                <i class="green"></i>
              </label> </td>
                       </tr>

                              <tr>
                           <td> خیر    </td>
                           <td>              <label class="md-switch">
                <input name="blog" type="radio" value="0" <?php if($_SESSION['dev']==0){echo"checked=\"checked\"";} ?> onclick="window.location.href = '?cp=16&bn=deactive';">
                <i class="red"></i>
              </label>
          </td>
                       </tr>
                   </table>
                        </form>
                        وضعیت اکانت:  <br>
                       <?php

                       if($acc3==1){
                           echo "  <span class=\"label light-green\">ایمیل فعال</span>";
                       }  else{  echo "<span class=\"label light-red\">ایمیل غیر فعال</span>";            }

                       ?>     <br>
                             <?php

                       if($phacc==1){
                           echo "  <span class=\"label light-green\">شماره فعال</span>";
                       }  else{  echo "<span class=\"label light-red\">شماره غیر فعال</span>";            }

                       ?>
               </div>





                 </div>
               </div>
               </div>


          <?php


         }
         mysqli_close($con) ;
         ?>





   <?php
    include("footer.php");
            ?>