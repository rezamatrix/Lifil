<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);

 }

 else{
    header("location:login.php");

 }

 include("header.php");
    $id= $_SESSION['idb'];
               $idse = mysqli_query($con,"SELECT acc2,phacc,emailacc FROM user WHERE id='$id'");
$bid=mysqli_fetch_assoc($idse) ;
             $idh=$bid['emailacc'];
             $active1=$bid['phacc'];
             $active2=$bid['acc2'];
           if($idh==1 and $active1==1 and $active2==1){
?>

    <div class="row">   
        <div class="col-sm-8">
    <div class="box">
  <div class="box-header blue" > افزودن محصول جدید</div>
      <?php
                       $rrt1="";
                 $rrt2="";
                 $rrt3="";
                 $rrt4="";
                 $post10true="";
      $cp=intval($_GET['cp']); 
          if($cp==3){

         if(isset($_POST['send'])){
           $post1=strip_tags($_POST['sub']);
           $post2=strip_tags($_POST['matn']);
           $post2aw=strip_tags($_POST['matn2']);
           $post2bwq1=intval($_POST['lista']);
           $post2bwq2=intval($_POST['listb']);
           $post2bwq3=intval($_POST['listc']);
           $post2bwq4=intval($_POST['listd']);
           if($post2bwq1>0){
               $post2bw=$post2bwq1;
           }
           if($post2bwq2>0){
               $post2bw=$post2bwq2;
           }
           if($post2bwq3>0){
               $post2bw=$post2bwq3;
           }
           if($post2bwq4>0){
               $post2bw=$post2bwq4;
           }

           @$post8=$_POST['dlsele'];

           @$post55=intval($_POST['radio1']);
           @$post54=intval($_POST['radio2']);
           @$post10=intval($_POST['free']);
           @$post11=intval($_POST['fee']);
           $rand1=rand(9999,99999999);
           $rand2=rand(9999,99999999);
           $rand3=rand(9999,99999999);
           $rand4=rand(9999,99999999);
           $rand5=rand(9999,99999999);
           $rand6=rand(9999,99999999);
           $rand7=rand(9999,99999999);
           $uesr=$_SESSION['user'];
           if($post2bw>0){
           if(strlen($post2aw)>=3){
            if($post11 > 99 or $post10==1){
           if(strlen($post2)>=15){
             if(strlen($post1)>=3){
            if(isset($post8)){

                $pic1=explode(".",$_FILES["pic1"]["name"]) ;
                $pic1e=$rand7."l.".end($pic1) ;
                $fileSize1 = $_FILES["pic1"]["size"];
               $pic2=1;
               $pic2e=1;
               $fileSize2 =1;
               $pic3=1;
               $pic3e=1;
               $fileSize3 =1;
               $pic4=1;
               $pic4e=1;
               $fileSize4 =1;
               $pic5=1;
               $pic5e=1;
               $fileSize5 = 1;
               $pic7=explode(".",$_FILES["icon"]["name"]) ;
               $pic7e=$rand7."l.".end($pic7) ;
               $fileSize7 = $_FILES["icon"]["size"];

                if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){

                    if(mb($con)+$fileSize1 <= 1073741824){


                        if(move_uploaded_file($_FILES["pic1"]["tmp_name"],"../imguser/$uesr/" . $pic1e)){
                            uploadsql($pic1e,$fileSize1,end($pic1),$_FILES["pic1"]["name"],$con);
                            $ok=1;

                        }else{

                            ?>
                            <div class="alert alert-warning alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong> خطا!</strong> مشکل در بارگذاری ایکن اصلی
                            </div>
                            <?php

                        } }else{
                        ?>

                        <div class="alert alert-warning alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong> خطا!</strong> حجم فایل بیش از حد مجاز آپلود اکانت شما می باشد
                        </div>

                        <?php


                    }   }

              if(end($pic7)=="jpg" or end($pic7)=="png" or end($pic7)=="gif" or end($pic7)=="jpeg"){

             if(mb($con)+$fileSize7 <= 1073741824){


            if(move_uploaded_file($_FILES["icon"]["tmp_name"],"../imguser/$uesr/" . $pic7e)){
            uploadsql($pic7e,$fileSize7,end($pic7),$_FILES["icon"]["name"],$con);
             $ok=1;

             }else{

                        ?>
                 <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong> مشکل در بارگذاری ایکن اصلی
</div>
            <?php

                 } }else{
                 ?>

                                  <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong> حجم فایل بیش از حد مجاز آپلود اکانت شما می باشد
</div>

                 <?php


                 }   }
             }

            $post1true= $post1;
           }else {
                        ?>
                             <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong>تعداد کارکتر های عنوان باید بیشتر از 5 عدد باشد
</div>      <?php
           }

             $post2true= $post2;
           }   else {

                                     ?>
                             <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong>تعداد حروف متن باید بیشتر از 15 باشد
</div>      <?php
           }

             $post11true= $post11;
           } else {
                                                  ?>
                             <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong>قیمت محصول شما باید بیشتر از 100 تومان باشد
</div>      <?php
           }
            } else{
                                                 ?>
                             <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong>تعدادی برچسب یا تگ وارد کنید
</div>      <?php
            }
            }else{
                                                  ?>
                             <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong>دسته بندی را انتخاب کنید
</div>      <?php
            }

           if($post10 == 1){
             $post10true= $post10;
           }
                 $rrt1="";
                 $rrt2="";
                 $rrt3="";
                 $rrt4="";

           if(strlen($post2aw)>=3){$rrt4=$post2aw;}
            if($post11 > 99){ $rrt3=$post11; }
           if(strlen($post2)>=15){$rrt2=$post2; }

             if(strlen($post1)>=3){$rrt1=$post1; }


             $post8b=explode(',',$post8) ;
             $post8ba1=htmlspecialchars(mysqli_real_escape_string($con,$post8b['0']));
             $post8ba2=htmlspecialchars(mysqli_real_escape_string($con,$post8b['1']));
              // echo $post11true,"<br>",$post1true,"<br>",$post2true,"<br>",$pic7e,"<br>",$post8,"<br>",$ok,"<br>",$post2bw,"<br>",$post2aw;
             if(isset($post11true) and isset($post1true) and isset($post2true) and isset($pic7e) and isset($post8) and @$ok==1 and isset($post2bw) and isset($post2aw)){

           amozesh($post1,$post2,$pic1e,$pic2e,$pic3e,$pic4e,$pic5e,$post8ba1,$pic7e,$post10,$post11,$post8ba2,$post2aw,$post2bw,$con,$post55,$post54);
            ?>
                 <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong> محصول شما جهت بررسی ارسال شد.
</div>
            <?php

           }
           else{

            ?>
                 <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong> خطا نا مشخص.
</div>
            <?php

           }
         }
          ?>
               <br><br>

               <div class="container">
               <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
              <center> <input name="sub" type="text" size="99" value="<?php echo $rrt1 ; ?>" dir="rtl" placeholder="عنوان" class="form-control"><br>
               <textarea name="matn" rows="5" cols="75" dir="rtl" placeholder="توضیحات"  class="form-control" style="height:300px;" ><?php echo $rrt2 ; ?></textarea> <br>  <br>
               <input name="matn2"  dir="rtl" placeholder="برچسب" class="form-control"> <br>  <br>
   </center>         <div dir="rtl">
                       <div >
                       تصویر شاخص 640*640
                       <input name="pic1" type="file" class="form-control" style="width: 250px;" >
                        </div>
                         <br>
                        icon 64*64 از محصول
                       <input name="icon" type="file" class="form-control" style="width: 250px;">


                       فایل

                       <select name="dlsele" size="1"  class="form-control">

                        <option value="0">فایل  خود را انتخاب کنید</option>

                       <?php
                         $id= $_SESSION['idb'];
                      $dl= mysqli_query($con,"SELECT filename,realname,lenght FROM `upload` WHERE sender =$id and type='zip' ") ;
                       while($gg=mysqli_fetch_array($dl)){
                              $w1=$gg['filename'];
                              $w2=$gg['realname'];
                              $w3=$gg['lenght'];
                              echo"<option value=\"$w1,$w3\">$w2</option> ";
                       }

                       ?>
                         </select>       <br>


                                             <label class="md-check">

                 <input name="free" type="checkbox" value="1" <?php if($post10true==1){echo"checked=\"checked\"";} ?>  class="has-value">
                <i class="green"></i>
               رایگان
              </label>   <br>  <br>
                        تعداد کاربران<br>
                    <label class="md-switch">
                <input  class="has-value" type="radio" value="1" name="radio2">
                <i class="blue"></i>
               استفاده بر روی یک سیستم
              </label>      <br>

                                  <label class="md-switch">
                <input  class="has-value" type="radio" value="2" name="radio2">
                <i class="blue"></i>
        استفاده بر روی چند سیستم و همزمان یک اجرا
              </label>            <br>    <br>
                          نوع محصول        <br>
                       <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="1">
                <i class="green"></i>
          Early Access
              </label>  <br>
                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="2">
                <i class="green"></i>
                 Alpha
              </label>    <br>

                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="3">
                <i class="green"></i>
                Beta
              </label><br>
                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="4">
                <i class="green"></i>
              Full
              </label>  <br>

               </div> <br>
               <input name="fee" type="text" size="25" value="<?php echo $rrt3 ; ?>" placeholder="قیمت به تومان"  class="form-control"> <br>
               <input name="tkh" type="text" placeholder="تخفیف" size="25" class="form-control"><br>
                   <div class="form-group">
                       <label for="single">  انتخاب  دسته بندی</label>
                       <select id="single" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" name="lista">
                           <option value="0">منو مادر را انتخاب کنید</option>
                           <?php
                           $mother=mysqli_query($con,"SELECT * FROM `web_menu` where `parent`IS NULL;") ;
                           while ($res=mysqli_fetch_array($mother)){
                               $id=$res['id'];
                               $title=$res['title'];
                               ?>
                           <optgroup label="<?=$title?>">
                               <?php
                               $mu=mysqli_query($con,"SELECT * FROM `web_menu` where `parent`='$id' ORDER BY `web_menu`.`id` DESC;") ;
                               while ($resmu=mysqli_fetch_array($mu)){
                                   $ids=$resmu['id'];
                                   $titles=$resmu['title'];
                               ?>
                               <option value="<?=$ids?>"> <?=$titles?></option>
                               <?php
                               }

                               ?>
                           </optgroup>
                               <?php
                           }
                           ?>
                       </select>
                   </div>


                   <input name="send" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;" >
               
                   <br><br><br>
               </form>
               </div>

          <?php

         }
      

         ?>


       </div>    </div>
                         <div class="col-sm-4" dir="rtl">
           <div class="box">
    <div  class="box-header blue ">
    <span>فایل</span>
    <button class="btn btn-icon btn-rounded btn-danger"   onclick="showHint(0)" title="بارگذاری دوباره"    dir="ltr" style="position:  absolute;left: 6px;top: 5px;">
              <i class="glyphicon glyphicon-refresh"></i>
            </button>
     </div>

     <script src="../js/js2.js"></script>
     <script src="../js/m.js"></script>

              <div id="txtHint" lang="0"></div> <br>
                    <div class="btn-group container"  dir="ltr">
<?php

@$news3=mysqli_query($con,"select id from upload WHERE  `sender`=$id and type !='zip'");
$rows1 = mysqli_num_rows($news3);

  $rows1= $rows1 / 24;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
      $rows3=$rows1 ;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a  onclick=\"showHint($rows1)\" class=\"btn white\" id=\"r$rows1\" lang=\"$rows3\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
           </div>
                        <div class="box">
    <div  class="box-header blue">
     راهنما:
    </div>
    <div class="container">
    کاربرد برچسب ها   <br>
    به شما در جستو جو بهتر محصولتان در وب سایت و گوگل کمک می کند    <br>
    جهت گذاشتن فیلم از نرم افزار خود می توانید از آپارات استفاده کنید و در ابتدای محصول خود بزارید   <br>
    بهتر است مطلب مورد نظر را از قبل آماده و در اینجا ویرایش کرده و قرار دهید   <br>
    برای استفاده از تصاویر آپلود شده در سمت چپ می توانید تصاویر را کشیده و در محیط ویرایشگر رها کنید<br>
    </div>
    </div>
           </div>

         </div>

   <?php
   }else{
       ?>
            <div class="box"><div class="box-header blue">تایید هویت</div>
               <center>   <img src="../img/like.png" class="img-circle w-128">  </center>
            <?php

            if($idh != 1){echo "<p style=\"text-align: center\">ایمیل خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active1!=1){echo "<p style=\"text-align: center\">شماره تلفن همراه خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active2!=1){echo "<p style=\"text-align: center\"> کارت ملی خود را  ارسال کنید برای این کار به بخش تنظیمات بروید</p>";}

            ?>

            </div>
       <?php
   }
      mysqli_close($con) ;
           include("footer.php");
            ?>