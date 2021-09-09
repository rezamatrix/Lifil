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
       $uesr=$_SESSION['user'];
           $id= $_SESSION['idb'];
               $idse = mysqli_query($con,"SELECT acc2,phacc,emailacc FROM user WHERE id='$id'");
$bid=mysqli_fetch_assoc($idse) ;
             $idh=$bid['emailacc'];
             $active1=$bid['phacc'];
             $active2=$bid['acc2'];
           if($idh==1 and $active1==1 and $active2==1){
?>
      <?php
       $cp=intval($_GET['cp']);
          $e1="";
          $e2="";
          $e3="";
          $e4="";
          $e5="";
          $e6="";
          $e7="";
          $e8="";
          $e9="";
          $e10="";
          if($cp==4){
           $us=$_SESSION['user'];
         if(empty($_GET['id'])){


            ?>                        <div class="box">
  <div class="box-header blue" >ویرایش محصول های اضافه شده


  </div>
                          <div class="btn-group container">
<?php


@$news3=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `user` ='$us'");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a href=\"?cp=13&p=$rows1\" class=\"btn white\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
                                   <div class="table-responsive container" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >
              <th><p style="text-align: right">#</p></th>
              <th><p style="text-align: right">key</p></th>
            <th><p style="text-align: right">آیکن </p></th>
            <th><p style="text-align: right">عنوان</p></th>
            <th><p style="text-align: right">وضعیت</p></th>
            <th><p style="text-align: right">دلیل رد محصول</p></th>
            <th><p style="text-align: right">کنترل</p></th>
          </tr>
        </thead>
        <tbody>
            <?php
                                         @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*20;
   $page=intval($page);
   $i=1+($get*20);

     $sel=mysqli_query($con,"SELECT acc,barchasb,daste,takhfif,ghymat,subgecet,matn,dalil,icon,id,clid FROM `amozsh` WHERE `user` ='$us' ORDER BY `amozsh`.`tarikh` DESC LIMIT $page , 20");
         while($dd=mysqli_fetch_array($sel)){
          $e1=$dd['acc'];
          $e2=$dd['barchasb'];
          $e3=$dd['daste'];
          $e4=$dd['takhfif'];
          $e5=$dd['ghymat'];
          $e6=$dd['subgecet'];
          $e7=$dd['matn'];
          $e8=$dd['dalil'];
          $e9=$dd['icon'];
          $e10=$dd['id'];
          $e1ss=$dd['clid'];
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
            <td><?php echo$e1ss; ?></td>
            <td>   <img src="<?php echo "../img.php?user=$uesr&name=" . $e9; ?>" alt=""  width="84" height="84"   class="img-rounded"> </td>
            <td><?php echo $e6; ?></td>
            <td><?php echo  $hh  ; ?></td>
            <td><?php echo  nl2br($e8)  ; ?></td>
      <td><center><a href="?cp=4&id=<?php echo$e10; ?>" data-toggle="tooltip" title="ویرایش"><button class="btn btn-icon btn-rounded btn-info"><i class="fa fa-edit"></i></button></a>
     </center>
   </td>
        </tr>
          <?php
        $i++;
         }
            ?>
             </tbody>
      </table>
    </div>
    </div>
            <?php
          }

          if(isset($_GET['id'])){
                    ?>

                <div class="row">
        <div class="col-sm-8">
    <div class="box">
  <div class="box-header blue" >ویرایش محصول   </div>
          <?php
             $int=intval($_GET['id']);
          $sel=mysqli_query($con,"SELECT acc,barchasb,daste,takhfif,ghymat,subgecet,matn,dalil,code,id,file,icon,pic5,accfree,lic,uscunt FROM `amozsh` WHERE `id` ='$int' ");
          $dd=mysqli_fetch_array($sel);
          $e1=$dd['acc'];
          $e2=$dd['barchasb'];
          $e3=$dd['daste'];
          $e4=$dd['takhfif'];
          $e5=$dd['ghymat'];
          $e6=$dd['subgecet'];
          $e7=$dd['matn'];
          $e8=$dd['dalil'];
          $e9=$dd['code'];
          $e10=$dd['id'];
          $e11=$dd['file'];
          $e12=$dd['icon'];
          $e13=$dd['pic5'];
          $e14=$dd['daste'];
          $e15=$dd['accfree'];
          $e16=$dd['lic'];
          $e17=$dd['uscunt'];

            $pix=explode(",",$e13);
 $pix1=$pix['0'];
 $pix2=$pix['1'];
 $pix3=$pix['2'];
 $pix4=$pix['3'];
 $pix5=$pix['4'];
 if(isset($_POST['send'])){
            $post1=strip_tags(mysqli_real_escape_string($con,$_POST['sub']));
           $post2=strip_tags(mysqli_real_escape_string($con,$_POST['matn']));
           $post2aw=strip_tags(mysqli_real_escape_string($con,$_POST['matn2']));
           $post2bwq1=intval($_POST['lista']);
           @$post8=$_POST['dlsele'];
           @$post55=intval($_POST['radio1']);
           @$post54=intval($_POST['radio2']);
           @$post10=intval($_POST['free']);
           @$post20=intval($_POST['tkh']);
           @$post11=intval($_POST['fee']);
           $rand1=rand(9999,99999999);
           $rand2=rand(9999,99999999);
           $rand3=rand(9999,99999999);
           $rand4=rand(9999,99999999);
           $rand5=rand(9999,99999999);
           $rand6=rand(9999,99999999);
           $rand7=rand(9999,99999999);
             $uesr= $_SESSION['user'];
            if(isset($post8)){
               $pic7=explode(".",$_FILES["icon"]["name"]) ;
               $pic7e=$rand7."l.".end($pic7) ;
               $fileSize7 = $_FILES["icon"]["size"];

                $pic1=explode(".",$_FILES["pic1"]["name"]) ;
                $pic1e=$rand1."l.".end($pic1) ;
                $fileSize1 = $_FILES["pic1"]["size"];
                 if(strlen(end($pic7))>=3){
              if(end($pic7)=="jpg" or end($pic7)=="png" or end($pic7)=="gif" or end($pic7)=="jpeg"){

             if(mb($con)+$fileSize7 <= 1073741824){
            if(move_uploaded_file($_FILES["icon"]["tmp_name"],"../imguser/$uesr/" . $pic7e)){
            uploadsql($pic7e,$fileSize7,end($pic7),$_FILES["icon"]["name"],$con);
             $ok=1;
             }
             }
             }
             }
                if(strlen(end($pic1))>=3){
                    if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){

                        if(mb($con)+$fileSize1 <= 1073741824){
                            if(move_uploaded_file($_FILES["pic1"]["tmp_name"],"../imguser/$uesr/" . $pic1e)){
                                uploadsql($pic1e,$fileSize1,end($pic1),$_FILES["pic1"]["name"],$con);
                                $ok=1;
                            }
                        }
                    }
                }
             }




            if(strlen(end($pic7))<=2){
             $pic7e=$e12;
            }

           $ds=1;
     $p=$pic1e.",".$ds.",".$ds.",".$ds.",".$ds;
     if(strlen(end($pic1))<=2){
         $p=$e13;
     }
     if($post10==1){
      $post11=0;
     }                       $post8b=explode(',',$post8) ;
             $post8ba1=htmlspecialchars(mysqli_real_escape_string($con,$post8b['0']));
             $post8ba2=htmlspecialchars(mysqli_real_escape_string($con,$post8b['1']));
              if($post8ba1==$e11){
                 mysqli_query($con,"UPDATE `amozsh` SET `filet` = '0' WHERE `id` = $int;");
              } else{
                 mysqli_query($con,"UPDATE `amozsh` SET `filet` = '1' WHERE `id` = $int;");
              }
              $time=time();
             mysqli_query($con,"UPDATE `amozsh` SET `matn` = '$post2' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `subgecet` = '$post1' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `pic5` = '$p' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `file` = '$post8ba1' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `accfree` = '$post10' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `ghymat` = '$post11' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `takhfif` = '$post20' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `icon` = '$pic7e' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `sizefile` = '$post8ba2' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `daste` = '$post2bwq1' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `barchasb` = '$post2aw' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `acc` = '0' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `lic` = '$post55' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `uscunt` = '$post54' WHERE `id` = $int;");
             mysqli_query($con,"UPDATE `amozsh` SET `time2` = '$time' WHERE `id` = $int;");

             }



           ?>
            <form action="" method="POST" enctype="multipart/form-data" >
              <center> <input name="sub" type="text" size="99" value="<?php echo $e6 ; ?>" dir="rtl"  placeholder="عنوان" class="form-control"><br>
               <textarea name="matn" rows="5" cols="75" dir="rtl" placeholder="توضیحات"  class="form-control" style="height:300px;"><?php echo $e7 ; ?></textarea> <br>  <br>

                 <input name="matn2"  dir="rtl" placeholder="برچسب" class="form-control" value="<?php echo $e2 ; ?>"> <br>  <br>
   </center>         <div dir="rtl"> <table dir="rtl">  <div >
                       <tr >
                       <td>تصویر شاخص</td>
                       <td><input name="pic1" type="file" class="form-control"></td>
                          <td><a href="../img.php?user=<?php echo $us; ?>&name=<?php echo $pix1; ?>" target="_blank"> <img src="../img.php?user=<?php echo $us; ?>&name=<?php echo $pix1; ?>" alt=""   width="64" height="64" /></a></td>

                   </tr>

                   <tr>
                       <td> icon 84*84 از محصول</td>
                       <td><input name="icon" type="file" class="form-control"></td>
                       <td><a href="../img.php?user=<?php echo $us; ?>&name=<?php echo $e12; ?>" target="_blank"> <img src="../img.php?user=<?php echo $us; ?>&name=<?php echo $e12; ?>" alt=""   width="64" height="64" /></a></td>
                   </tr>
                   <tr>
                       <td>فایل</td>
                       <td>

                       <select name="dlsele" size="1" class="form-control">

                        <option value="0">فایل  خود را انتخاب کنید</option>

                       <?php
                         $id= $_SESSION['idb'];
                      $dl= mysqli_query($con,"SELECT filename,realname,lenght FROM `upload` WHERE sender =$id and type='zip' ") ;
                       while($gg=mysqli_fetch_array($dl)){
                              $w1=$gg['filename'];
                              $w2=$gg['realname'];
                              $w3=$gg['lenght'];
                              $echo="";
                               if($w1==$e11){$echo="selected=\"selected\"";}  else{$echo="";}
                              echo"<option value=\"$w1,$w3\" $echo >$w2</option> ";
                       }

                       ?>
                         </select>
                       </td>
                   </tr>
                     <tr>
                       <td></td>
                       <td>
                       <label class="md-check">

                 <input name="free" type="checkbox" value="1" <?php if($e15==1){echo"checked=\"checked\"";} ?>  class="has-value">
                <i class="green"></i>
               رایگان
              </label>

                      </td>
                   </tr>
               </table></div> <br>


                        <label class="md-switch">
                <input  class="has-value" type="radio" value="1" name="radio2" <?php if($e17==1){echo"checked=\"checked\"";} ?>>
                <i class="blue"></i>
            استفاده بر روی یک سیستم
              </label>      <br>

                                  <label class="md-switch">
                <input  class="has-value" type="radio" value="2" name="radio2" <?php if($e17==2){echo"checked=\"checked\"";} ?>>
                <i class="blue"></i>
               استفاده بر روی چند سیستم و همزمان یک اجرا
              </label>            <br>

                       <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="1" <?php if($e16==1){echo"checked=\"checked\"";} ?>>
                <i class="green"></i>
                    Early Access
              </label>  <br>
                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="2" <?php if($e16==2){echo"checked=\"checked\"";} ?>>
                <i class="green"></i>
                  Alpha
              </label>    <br>

                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="3" <?php if($e16==3){echo"checked=\"checked\"";} ?>>
                <i class="green"></i>
                Beta
              </label><br>
                                     <label class="md-switch">
                <input name="radio1"  class="has-value" type="radio" value="4" <?php if($e16==4){echo"checked=\"checked\"";} ?>>
                <i class="green"></i>
                 Full
              </label>  <br>
                              <input name="fee" type="text" size="25" value="<?php echo $e5 ; ?>" placeholder="قیمت به تومان" class="form-control"> <br>
               <input name="tkh" type="text" placeholder="تخفیف" size="25" class="form-control" value="<?php echo $e4 ; ?>"><br>
                <div class="form-group">
                    <label for="single">  انتخاب دسته بندی </label>
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
                                    if(@$e14==$ids){$ech="selected";}
                                    ?>
                                    <option value="<?=$ids?>" <?=@$ech?>> <?=$titles?></option>
                                    <?php
                                }

                                ?>
                            </optgroup>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                   <br><br><br>
               <input name="send" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;">
               </form>
           <?php
         ?>
                                 </div>     </div>       <div class="col-sm-4" dir="rtl">
           <div class="box">
    <div  class="box-header blue"><h3>فایل</h3>     <button class="btn btn-icon btn-rounded btn-danger"  onclick="showHint(0)" title="بارگذاری دوباره"    dir="ltr" style="position:  absolute; left: 0px;">
              <i class="glyphicon glyphicon-refresh"></i>
            </button> </div>
   <script>
   //[img]   [/img]
   </script>
     <script src="../js/js2.js"></script>
     <script src="../js/m.js"></script>
              <div id="txtHint" lang="0"></div> <br>
               <div class="btn-group "  dir="ltr">
<?php
              $id= $_SESSION['idb'];
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
           </div>
          <?php
          }


    }


         ?>




       </div>


   <?php
   }else{
       ?>
            <div class="box"><div class="box-header blue">تایید هویت</div>
               <center>   <img src="../img/like.png" class="img-circle w-128">  </center>
            <?php

            if($idh!=1){echo "<p style=\"text-align: center\">ایمیل خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active1!=1){echo "<p style=\"text-align: center\">شماره تلفن همراه خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active2!=1){echo "<p style=\"text-align: center\"> کارت ملی خود را  ارسال کنید برای این کار به بخش تنظیمات بروید</p>";}

            ?>

            </div>
       <?php
   }
       mysqli_close($con) ;
         include("footer.php");
            ?>