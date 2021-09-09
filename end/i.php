<?php
  include("config/conf.php");
  include("model/jdf.php");
  include("model/functionlogin.php");
  include("model/countonline.php");
include("bb/SBBCodeParser.php");
include("header.php");

 if(!isset($_GET['id'])){
$i1=0;
$i2=-20;
 ?>


 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">




     <?php

   $ity=1;
$blog = mysqli_query($con,"SELECT dt,id,dt,img,link FROM `slider` WHERE acc='1'  ORDER BY id  DESC ");
while( $blogname=mysqli_fetch_array($blog) and $ity<5){
       $q1=$blogname['dt'];
       $q12=$blogname['id'];
       $q2=$blogname['dt'];
       $qd=$blogname['link'];
       $qdd=$blogname['img'];


     ?>
                <div class="carousel-item <?php if($ity==1){echo "active"; } ?>">

        <a href="<?php echo $qd; ?>">
        <img src="<?php echo $qdd; ?>" alt="<?php echo $q2; ?>" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3><?php echo $q1; ?></h3>
          <p><?php echo $q1; ?></p>
        </div>
        </a>

    </div>
     <?php
++$ity;
 }

 ?>


    </div>
           <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php
      $ity2=$ity-2;
       $ity3=1;
      while($ity2>0){ ?>
     <li data-target="#myCarousel" data-slide-to="<?php echo $ity3; ?>"></li>
      <?php
       --$ity2;
        ++$ity3;
       }
      ?>
    </ol>
    <!-- Left and right controls -->
    <a  href="#myCarousel" class="carousel-control-prev"  role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>  <br>
   <div class="row">
   <div class="col-xs-6 col-sm-4">
   <div class="box p-a">
                  <div class="pull-left m-r">
                <span class="w-48 rounded primary">
                  <i class="material-icons"><b>U</b></i>
                </span>
              </div>
                           <div class="clear">
                <h4 class="m-0 text-lg _300"><a href> <span class="text-sm">تعداد کاربران:   <?php

                $rte=mysqli_query($con,"SELECT id FROM `user`  ");
 $nummas=mysqli_num_rows($rte);
 echo  "",$nummas; ?></span></a></h4>
                <small class="text-muted">تعداد کاربران ثبت نام کرده در سایت</small>
              </div>
   </div>

   </div>
   <div class="col-xs-6 col-sm-4">
      <div class="box p-a">
                      <div class="pull-left m-r">
                <span class="w-48 rounded primary">
                  <i class="material-icons"><b>P</b></i>
                </span>
              </div>
                             <div class="clear">
                <h4 class="m-0 text-lg _300"><a href> <span class="text-sm">تعداد محصول :    <?php

                $rte=mysqli_query($con,"SELECT id FROM `amozsh`  ");
 $nummas=mysqli_num_rows($rte);
 echo  "",$nummas; ?>


                </span></a></h4>
                <small class="text-muted">تعداد محصول های تایید شده</small>
              </div>
      </div>

   </div>
   <div class="col-sm-4  ">
        <div class="box p-a">
                         <div class="pull-left m-r">
                <span class="w-48 rounded primary">
                  <i class="material-icons"><b>B</b></i>
                </span>
              </div>
                               <div class="clear">
                <h4 class="m-0 text-lg _300"><a href> <span class="text-sm">تعداد نوشته وبلاگ:    <?php

                $rte=mysqli_query($con,"SELECT id FROM `blog`  ");
 $nummas=mysqli_num_rows($rte);
 echo  "",$nummas; ?></span></a></h4>
                <small class="text-muted">تعداد مطالب ارسال شده برای وبلاگ ها</small>
              </div>
        </div>

   </div>


 </div>
 <div class="row">
 <div class="col-sm-12">

 <div class="box">
    <div class="blue"> <center><b><span style="line-height: 2">بیت سافتور</span></b></center> </div>
    <div class="row">
    <div class="col-sm-1"><img src="img/1.png" alt=""  height="250" /></div>
    <div class="col-sm-5">
<span style="line-height: 2">     بیت سافتور چیه؟<br>
     یک وب سایت فروشگاه نرم افزار<br>
     یک فروشگاه دانلود فایل<br>
     یک سرویس ارائه دهنده وبلاگ<br>
      یک وب سایت شخصی<br>
      و یا یک روزمه کاری برای شما<br>
      باید بگیم تقریبا نه<br>
     </span>

    </div>

         <div class="col-sm-5" >
<span style="line-height: 2;"   id="tx1">
بیت سافتور<br>
یک سرویس کامل و جامع برای نویسندگان و سازندگان نرم افزار,بازی ,کتاب و فیلم های آموزشی می باشد<br>
قابلیت های فعلی بیت سافتور:<br>
ارائه یک وبلاگ به شما با امکانات کافی جهت استفاده در زمینه های آموزشی و ارائه لاگ های آپدیت محصولات شما<br>
بخش پروفایل توضیحات در باره شما و ارائه اطلاعات لازم   و رتبه شما در بیت سافتور و مدال های کسب شده در بیت سافتور <br>
وب سرویس یا API برای ایجاد لایسنس و کپی رایت بر روی نرم افزار یا بازی ساخته شده توسط شما<br>
همین طور حالت دونیت برای افرادی که محصول آنها در نسخه ابتدایی هست و نیاز دارند محصولشان را در نسخه Alpha یا Beta  به فروش برسانند و یا نیاز به رفع باگ های احتمالی دارند<br>
<a href="wb.php">توضیحات بیشتر ...</a>
</span>

    </div>
      <div class="col-sm-1 "><img src="img/2.png" alt=""  height="250" class="pull-left" /></div>
     </div> </div>


 </div>
  </div>
  <div class="row">
<div class="col-md-9  box grey-100">    <br>
    <div class="row">
   <?php


   $eeeg="";
    if(isset($_POST['sher'])){
      $my=$_POST['sher'];
   $mt=mysqli_real_escape_string($con,$my);
      $eeeg="and `subgecet`  LIKE '%$mt%'";
    }
   @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*20;
   $page=intval($page);

   @$grtp=intval($_GET['s']);

       if($grtp>0){

$sqlqurey=mysqli_query($con,"SELECT id,subgecet,accfree,ghymat,takhfif,icon,user FROM `amozsh` WHERE `daste`='$grtp' and `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC LIMIT $page , 20");
 }else{

 $sqlqurey=mysqli_query($con,"SELECT id,subgecet,accfree,ghymat,takhfif,icon,user FROM `amozsh` WHERE `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC LIMIT $page , 20");
}
while($qw=mysqli_fetch_array($sqlqurey)){
 $ma1=$qw['id'];
 $ma5=$qw['subgecet'];
 $ma6=$qw['accfree'];
 $ma7=$qw['ghymat'];
 $ma8=$qw['takhfif'];
 $ma9=$qw['icon'];
 $ma10=$qw['user'];
?>
                    <div class="col-xs-5 col-sm-4 col-md-3">
              <div class="box p-a-xs">
                     <a href="index.php?id=<?php echo $ma1; ?>" target="_blank" title="<?php echo $ma5; ?>" data-html="true" data-toggle="tooltip" ><center><img src="img.php?name=<?php echo $ma9; ?>&user=<?php echo $ma10; ?>" alt=""  height="128" width="128"></center></a>
                <div class="p-a-sm">
                  <div class="text-ellipsis"><center><?php echo  htmlspecialchars($ma5) ; ?></center></div>
                  <div class="text-ellipsis"><center><?php if($ma6==1){echo"رایگان";}else{echo $ma7,"&nbsp;تومان";} ?></center></div>
              <center>    <a href="index.php?id=<?php echo $ma1; ?>" class="md-btn md-raised m-b-sm w-xs blue">مشاهده</a>   </center>
                </div>
              </div>
            </div>
<?Php


}
?>
 </div>
 </div> <div  class="col-sm-3">

 <div class="p-a-md box-color r box-shadow-z1 text-color m-a">

      <div class="m-b text-sm">
    <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
<a class="navbar-brand">
<img src="img/b.png" alt="BIT">
 <span class="hidden-folded inline">BIT</span>
</a>
<!-- / brand -->
      </div>
    </div>      </div>
    <?php
     if(!isset($_SESSION['pass']) and !isset($_SESSION['user'])){
    ?>
      <form name="form" method="post" action="login.php">
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.text" required="" type="text" name="user">
          <label>نام کاربری</label>
        </div>
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.password" required="" type="password" name="password">
          <label>گذرواژه</label>
        </div>
        <div class="m-b-md">
          <label class="md-check">
            <input class="has-value" type="checkbox"><i class="primary"></i> مرا به خاطر بسپار
          </label>
        </div>
         <input type="hidden" name="key" value="<?php echo loginkey() ; ?>">
        <button type="submit" class="btn primary btn-block p-x-md" name="send" style="font-family: 'BYekan+ Bold'; cursor: pointer;">ورود</button>
        <br>
        <center>یا</center>
        <br>
            <a  class="btn primary btn-block p-x-md"  style="font-family: 'BYekan+ Bold';"   href="register.php">ثبت نام</a>

      </form>
          <?php
        } else {




   $idsesss = mysqli_query($con,"SELECT name,avatar FROM user WHERE user='$user' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssa2=$bidsss['avatar'];
                  if($idhsssa2==""){$idhsssa2="img/q.jpg";

                  } else{
                      $idhsssa2= " img.php?name=".$idhsssa2."&user=".$user;
                  }

    ?>
                      <div class="navbar">

        <!-- brand -->

  <center >
       <img src="<?php echo $idhsssa2;   ?>" alt="BIT" class="w-128 img-circle">
<!-- / brand -->
      </center>
    </div>
                          <div class="navbar">

        <!-- brand -->
          <center>
<a class="navbar-brand">

 <span class="hidden-folded inline"><?php echo $idhsssa; ?></span>
</a>
<!-- / brand -->
      </center>
    </div>

               <a  class="btn primary btn-block p-x-md"  style="font-family: 'BYekan+ Bold';"   href="op/index.php">ناحیه کاربری</a>
               <a  class="btn primary btn-block p-x-md"  style="font-family: 'BYekan+ Bold';"   href="op/logout.php">خروج</a>

              <?php
        }
    ?>
    </div>

 </div>    </div>


 <nav>
        <ul class="pagination">
          <li class="disabled">
              <?php
                     if(isset($_GET['p'])){
      @$yi=intval($_GET['p']);
    if(isset($_GET['s'])){
  if(empty($yi) or $yi==0){
        $grtp=intval($_GET['s']);
       $yi=0;
       $in="index.php?p=$yi&s=$grtp";
      }
      else{
          --$yi;
         $in="index.php?p=$yi&s=$grtp";

      }
    } else{

      if(empty($yi) or $yi==0){
      @$grtp=intval($_GET['s']);
       $yi=0;
       $in="index.php?p=$yi";
      }
      else{
          --$yi;
         $in="index.php?p=$yi";

      }
    }
    }
              ?>
            <a href="<?php echo @$in; ?>" aria-label="Previous">
              <span aria-hidden="true">«</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

<?php
           $eeeg="";
    if(isset($_POST['sher'])){
      $my=$_POST['sher'];
   $mt=htmlspecialchars(mysqli_real_escape_string($con,$my));
        $eeeg="and `subgecet`  LIKE '%$mt%'";
    }
 if(isset($_GET['s'])){
  $grtp=intval($_GET['s']);
$news3=mysqli_query($con,"SELECT id FROM `amozsh`WHERE `daste`='$grtp'and `acc` =1 $eeeg ORDER BY `amozsh`.`id` DESC ");
 }else{$news3=mysqli_query($con,"SELECT id FROM `amozsh`WHERE `acc` ='1' $eeeg ORDER BY `amozsh`.`id` DESC ");
}
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;

  while ($rows1 > -1){
   $rows2=$rows1+1;
   $accg="";
       if(@intval($_GET['p'])==$rows1){
      $accg="active";
    }
   if(isset($_GET['s'])){

   // echo"&nbsp;<a href=\"\" id=\"c5\"><span style=\"font-size: 8pt;\">&nbsp;<u>  </u>&nbsp;</span></a>&nbsp;";
     echo " <li class=\"$accg\"><a href=\"index.php?p=$rows1&s=$grtp\">$rows2</a></li>   ";
   }else{
     //  echo"&nbsp;<a href=\"index.php?p=$rows1\" id=\"c5\"><span style=\"font-size: 8pt;\">&nbsp;<u> $rows2 </u>&nbsp;</span></a>&nbsp;";
           echo " <li class=\"$accg\"><a href=\"index.php?p=$rows1\">$rows2</a></li>   ";
       }


  --$rows1;
   }
   ?>
                 <?php
                     if(isset($_GET['p'])){
      $yi=intval($_GET['p']);
    if(isset($_GET['s'])){
  if(empty($yi) or $yi==0){
        $grtp=intval($_GET['s']);
       $yi=0;
       $in="index.php?p=$yi&s=$grtp";
      }
      else{
          ++$yi;
         $in="index.php?p=$yi&s=$grtp";

      }
    } else{

      if(empty($yi) or $yi==0){
      @$grtp=intval($_GET['s']);
       $yi=0;
       $in="index.php?p=$yi";
      }
      else{
          ++$yi;
         $in="index.php?p=$yi";

      }
    }
    }
              ?>
          <li>
            <a href="<?php echo @$in; ?>" aria-label="Next">
              <span aria-hidden="true">»</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
       <div class="row">

 <div class="col-sm-4">
<div class="box"><div class="blue">  &nbsp;<b><span style="line-height: 2">آخرین مطالب وبلاگ </span></b> &nbsp;</div>
                         <div class="table-responsive" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >

            <th><p style="text-align: right">تصویر شاخص</p></th>
            <th><p style="text-align: right">عنوان</p></th>
          </tr>
        </thead>
        <tbody>
                     <?php


         $rezal = mysqli_query($con,"select subgect,pic,idsender,id from bloga  ORDER BY id  DESC LIMIT 0 , 5");
         while( $blogname=mysqli_fetch_array($rezal)){
       $sub=$blogname['subgect'];
                $idbo=$blogname['id'];
            $q5=$blogname['pic'];


          ?>
                   <tr>

            <td>   <img src="<?php echo "imguser/blog/" . $q5; ?>" alt=""  width="32" height="32"   class="img-rounded"> </td>
            <td><a href="wb.php?idb=<?php echo $idbo; ?>" data-toggle="tooltip" title="مشاهد"  target="_blank"><?php echo $sub; ?></a>   </td>
        </tr>
            <?php
  }
           ?>      </tbody>
      </table>
    </div>
 </div>
 </div>
 <div class="col-sm-4">
 <div class="box"><div class="blue"> &nbsp; <b><span style="line-height: 2">آخرین مطالب وبلاگ کاربران  </span></b> &nbsp;    </div>

                      <div class="table-responsive" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >

            <th><p style="text-align: right">تصویر شاخص</p></th>
            <th><p style="text-align: right">عنوان</p></th>
          </tr>
        </thead>
        <tbody>
                     <?php


         $rezal = mysqli_query($con,"select subgect,idmnue,idsender,id from blog  ORDER BY id  DESC LIMIT 0 , 5");
         while( $blogname=mysqli_fetch_array($rezal)){
       $sub=$blogname['subgect'];
                $idbo=$blogname['id'];
            $q5=$blogname['idmnue'];
            $qd=$blogname['idsender'];
            @$id=intval($qd) ;
$idsedddddd = mysqli_query($con,"SELECT * FROM user WHERE id='$id' ");
$bidas=mysqli_fetch_assoc($idsedddddd) ;
$uesr=$bidas['user'];

          ?>
                   <tr>

            <td>   <img src="<?php echo "img.php?user=$uesr&name=" . $q5; ?>" alt=""  width="80" height="22"   class="img-rounded"> </td>
            <td><a href="blog.php?id=<?php echo $id; ?>&idb=<?php echo$idbo; ?>" data-toggle="tooltip" title="مشاهد"  target="_blank"><?php echo $sub; ?></a>   </td>
        </tr>
            <?php
  }
           ?>      </tbody>
      </table>
    </div>
 </div>
 </div>
 <div class="col-sm-4">
  <div class="box"><div class="blue">&nbsp; <b><span style="line-height: 2">آخرین نظرات برای محصول  </span></b>&nbsp;      </div>
   <div class="table-responsive" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >

            <th><p style="text-align: right">تصویر شاخص</p></th>
            <th><p style="text-align: right">عنوان</p></th>
          </tr>
        </thead>
        <tbody>
                     <?php


         $rezal = mysqli_query($con,"select idamozesh from coment  ORDER BY id  DESC LIMIT 0 , 5");
         while( $blogname=mysqli_fetch_array($rezal)){
                $idbo=$blogname['idamozesh'];
            @$id=intval($qd) ;
$idsedddddd = mysqli_query($con,"SELECT user FROM user WHERE id='$id' ");
$bidas=mysqli_fetch_assoc($idsedddddd) ;
$uesr=$bidas['user'];
  $sel=mysqli_query($con,"SELECT subgecet,icon,id,user FROM `amozsh` WHERE `id` ='$idbo'");
       $dd=mysqli_fetch_array($sel) ;
          $e6=$dd['subgecet'];
          $e9=$dd['icon'];
          $e10=$dd['id'];
          $e11=$dd['user'];

          ?>
                   <tr>

            <td>   <img src="<?php echo "img.php?user=$e11&name=" . $e9; ?>" alt=""  width="32" height="32"   class="img-rounded"> </td>
            <td><a href="index.php?id=<?php echo $e10; ?>" data-toggle="tooltip" title="مشاهد"  target="_blank"><?php echo $e6; ?></a>   </td>
        </tr>
            <?php
  }
           ?>      </tbody>
      </table>
    </div>
 </div>
 </div>

 </div>
<?php
}


else{

 $idm=intval($_GET['id']) ;
  $sqlqurey=mysqli_query($con,"SELECT idsender,id,tarikh,matn,subgecet,pic5,file,accfree,ghymat,takhfif,icon,sizefile,user,pos,neg,acc,dled,uscunt,lic,time2 FROM `amozsh` WHERE `id` =$idm");
  $qw=mysqli_fetch_assoc($sqlqurey);
  $w1=$qw['idsender'];
  $w0=$qw['id'];
  $w12=$qw['tarikh'];
  $w2=$qw['matn'];
  $w3=$qw['subgecet'];
  $w4=$qw['pic5'];
  $w5=$qw['file'];
  $w6=$qw['accfree'];
  $w7=$qw['ghymat'];
  $w8=$qw['takhfif'];
  $w9=$qw['icon'];
  $w10=$qw['sizefile'];
  $w11=$qw['user'];
  $w13=$qw['file'];
  $w14=$qw['pos'];
  $w15=$qw['neg'];
  $w20=$qw['acc'];
  $w55=$qw['dled'];
  $w56=$qw['uscunt'];
  $w5ss=$qw['time2'];
  $w57=$qw['lic'];
  if(($w20==1 ) or ($_SESSION['lvl']==2 and $w20==0)){
  $rezal = mysqli_query($con,"select token,id from upload WHERE filename = '$w13' ");
            $eed=mysqli_fetch_assoc($rezal);
            $eedrow1=$eed['token'];
            $eedrow2=$eed['id'];
?>


<div class="row" onload="showHint()">

  <div class="col-sm-2"></div>


  <div class="col-sm-7">   <div class="box"><div class="box-header blue"><?php echo $w3; ?></div>

  <?php

         $parser = new \SBBCodeParser\Node_Container_Document();

$parser->add_emoticons(array(
	':)' => 'https://bitsoftware.ir/emoticons/smile.png',
	'8-)' => 'https://bitsoftware.ir/emoticons/cool.png',
	':angry:' => 'https://bitsoftware.ir/emoticons/angry.png',
	':angel:' => 'https://bitsoftware.ir/emoticons/angel.png',
	":'(" => 'https://bitsoftware.ir/emoticons/cwy.png',
	":ermm:" => 'https://bitsoftware.ir/emoticons/ermm.png',
	":alien:" => 'https://bitsoftware.ir/emoticons/alien.png',
	":blink:" => 'https://bitsoftware.ir/emoticons/blink.png',
	":blush:" => 'https://bitsoftware.ir/emoticons/blush.png',
	":cheerful:" => 'https://bitsoftware.ir/emoticons/cheerful.png',
	":devil:" => 'https://bitsoftware.ir/emoticons/devil.png',
	":dizzy:" => 'https://bitsoftware.ir/emoticons/dizzy.png',
	":getlost:" => 'https://bitsoftware.ir/emoticons/getlost.png',
	":happy:" => 'https://bitsoftware.ir/emoticons/happy.png',
	":kissing:" => 'https://bitsoftware.ir/emoticons/kissing.png',
	":ninja:" => 'https://bitsoftware.ir/emoticons/ninja.png',
	":pinch:" => 'https://bitsoftware.ir/emoticons/pinch.png',
	":sick:" => 'https://bitsoftware.ir/emoticons/sick.png',
	":sideways:" => 'https://bitsoftware.ir/emoticons/sideways.png',
	":silly:" => 'https://bitsoftware.ir/emoticons/silly.png',
	":sleeping:" => 'https://bitsoftware.ir/emoticons/sleeping.png',
	":unsure:" => 'https://bitsoftware.ir/emoticons/unsure.png',
	":woot:" => 'https://bitsoftware.ir/emoticons/w00t.png',
	":wassat:" => 'https://bitsoftware.ir/emoticons/wassat.png',
	":pouty:" => 'https://bitsoftware.ir/emoticons/pouty.png',
	":D" => 'https://bitsoftware.ir/emoticons/grin.png',
	":(" => 'https://bitsoftware.ir/emoticons/sad.png',
	":O" => 'https://bitsoftware.ir/emoticons/shocked.png',
	":P" => 'https://bitsoftware.ir/emoticons/tongue.png',
	";)" => 'https://bitsoftware.ir/emoticons/wink.png',
	'<3' => 'https://bitsoftware.ir/emoticons/heart.png'
));
 $sdd=  htmlspecialchars_decode($w2);
echo $parser->parse($sdd)
    ->detect_links()
    ->detect_emails()
    ->detect_emoticons()
	->get_html();

                ?>

<?php
$pix=explode(",",$w4);
 $pix1=$pix['0'];
 $pix2=$pix['1'];
 $pix3=$pix['2'];
 $pix4=$pix['3'];
 $pix5=$pix['4'];
?>

   <?php
   if(strlen($pix['0'])>4){
                              ?>
                     <br><a href="imguser/<?php echo $w11; ?>/<?php echo $pix1; ?>"  target="_blank"><img src="imguser/<?php echo $w11; ?>/<?php echo $pix1; ?>" alt="" onclick="img('imguser/<?php echo $w11; ?>/<?php echo $pix1; ?>')"  height="84" width="84" /></a>

                              <?php
      }
      if(strlen($pix['1'])>4){
                              ?>
                             <a href="imguser/<?php echo $w11; ?>/<?php echo $pix2; ?>"  target="_blank"><img src="imguser/<?php echo $w11; ?>/<?php echo $pix2; ?>" alt="" onclick="img('imguser/<?php echo $w11; ?>/<?php echo $pix2; ?>')"  height="84" width="84"/> </a>

                              <?php
      }
      if(strlen($pix['2'])>4){

                              ?>
                               <a href="imguser/<?php echo $w11; ?>/<?php echo $pix3; ?>"  target="_blank"><img src="imguser/<?php echo $w11; ?>/<?php echo $pix3; ?>" alt="" onclick="img('imguser/<?php echo $w11; ?>/<?php echo $pix3; ?>')"  height="84" width="84"/> </a>


                              <?php
                              }
      if(strlen($pix['3'])>4){

                             ?>
                               <a href="imguser/<?php echo $w11; ?>/<?php echo $pix4; ?>"  target="_blank"><img src="imguser/<?php echo $w11; ?>/<?php echo $pix4; ?>" alt="" onclick="img('imguser/<?php echo $w11; ?>/<?php echo $pix4; ?>')"  height="84" width="84"/>  </a>


                              <?php

                                }
      if(strlen($pix['4'])>4){
                               ?>

                                <a href="imguser/<?php echo $w11; ?>/<?php echo $pix5; ?>"  target="_blank"><img src="imguser/<?php echo $w11; ?>/<?php echo $pix5; ?>" alt="" onclick="img('imguser/<?php echo $w11; ?>/<?php echo $pix5; ?>')"  height="84" width="84"/> </a>

                              <?php
      }
      if(isset($_SESSION['pass']) and isset($_SESSION['user'])){

      ?>


 <div style="height: 200; width: 440; border: ridge 3px #DBDBDB; border-radius: 10px;">
   <div style="height: 25; width: 430; border: ridge 3px #DBDBDB; border-radius: 50px; background-image: linear-gradient(to bottom, #E8E8E8, #C2C2C2);">
   <span style="font-size: 10pt"><center>ارسال نظر    </center></span>
 </div>
 <form action=""  method="post"><br>
   <textarea name="com" rows="4" cols="50" class="form-control no-border" placeholder="نظرتون رو بنویسید"></textarea><br>
   <div class="g-recaptcha" data-sitekey="6Ledbi0UAAAAAGM37r6hc1NXRSorXDeZ8PrA-b5r"></div>
   <input name="send" type="submit" value="تایید " class="btn btn-fw primary" style="font-family: 'BYekan+ Bold';">
 </form>
 </div>
 <?php
 } else{

 ?>
 <div style="height: 25; width: 430; border: ridge 3px #DBDBDB; border-radius: 50px; background-image: linear-gradient(to bottom, #E8E8E8, #C2C2C2);">
   <span style="font-size: 10pt"><center>برای ارسال نظر وارد حساب کاربری خود شوید</center></span>
 </div>

 <?php

 } ?>
  <br> <hr>
    <div class="col-sm-8 col-lg-9">
        <div class="tab-content">
          <div class="tab-pane p-v-sm active" id="tab_1">
            <div class="streamline b-l m-b m-l">
   <?php
     $ife=0;
    $tttt=mysqli_query($con,"SELECT * FROM `coment` WHERE `idamozesh` ='$w0' and `active`=1 ORDER BY `coment`.`id` DESC");
     while($ysq=mysqli_fetch_array($tttt)){
        $ysqs1=$ysq['name'];
        $ysqs2=$ysq['tarikh'];
        $ysqs3=$ysq['matn'];
                $ysqsr=$ysq['idsender'];
            $idseq = mysqli_query($con,"SELECT user,avatar,name FROM user WHERE id='$ysqsr' ");
$bidq=mysqli_fetch_assoc($idseq) ;
             $idh2q=$bidq['user'];
             $idh7q=$bidq['avatar'];
                    $idh1q=$bidq['name'];
                        if($idh7q==""){$avatarq="img/q.jpg";

                  } else{
                      $avatarq= "img.php?user=".$idh2q."&name=".$idh7q;
                  }
       ++$ife;
      if($ife>0){
  ?>

                 <div class="sl-item">
                <div class="sl-left">
                  <img src="<?php echo $avatarq; ?>" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted"><?php echo jdate("j/n/Y H:i:s",$ysqs2);      ?></div>
                  <div class="sl-author">
                    <a href><?php echo $idh1q; ?></a>
                  </div>
                  <div>
                    <p><?php echo $ysqs3; ?></p>
                  </div>
                  <div class="sl-footer">
                    <hr>
                  </div>

                </div>
              </div>
  <?php }
     }
        ?>
                    </div>
          </div>



        </div>
      </div>
     </div>
 </div>
   <div class="col-sm-4 col-lg-3">

          <nav class="navside white r box-shadow-z0 m-b">
          <div class="navbar">
              <a class="navbar-brand">
	<div ui-include="'img/b.png'"></div>
	<img src="img/b.svg" alt="." class="hide">
	<span class="hidden-folded inline">BIT</span>
</a>

       </div>
       <div flex-no-shrink>
       <div class="nav-fold">
	<a href="#" ui-sref="app.page.profile">
	    <span class="pull-left">
	      <img src="<?php echo "img.php?user=$w11&name=$w9"; ?>" alt="..." class="w-40 img-circle">
	    </span>
	    <span class="clear hidden-folded p-x">
	      <span class="block _500">&nbsp;</span>
	      <small class="block text-muted">فعال</small>
	    </span>
	</a>
</div>
</div>
     <div flex>
         <ul class="nav" ui-nav>
  <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"> شناسنامه محصول</span>
  </li>
    <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted">تاریخ: <?php echo jdate("j/n/Y",$w12); echo "&nbsp;".jdate("H:i:s",$w12);      ?></span>
  </li>
      <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted">تاریخ آخرین تغییرات: <?php echo jdate("j/n/Y",$w5ss); echo "&nbsp;".jdate("H:i:s",$w5ss);      ?></span>
  </li>
      <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis">نام: <?php echo $w3;     ?></div></span>
  </li>
        <li>
             <a href="profile.php?id=<?php echo $w1; ?>">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis">  برنامه نویس یا منتشر کننده      : <?php echo " $w11";     ?></div></span>
  </a>
  </li>

                 <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis"><?php if($w6!=1){?>قیمت:<?php echo $w7;}else{echo"رایگان";}?></div></span>
  </li>
            <li class="nav-header hidden-folded">

            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis">  تا به حال  <?php echo "$w55";     ?>بار دانلود شده است</div></span>

  </li>
              <li class="nav-header hidden-folded">

            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis"> نوع لایسنس:<?php if($w57==1){echo "Early Access";}elseif($w57==2){echo "Alpha";}elseif($w57==3){echo "Beta";}elseif($w57==4){echo "Full";}     ?></div></span>

  </li>
                <li class="nav-header hidden-folded">

            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs text-muted"><div class="text-ellipsis">  نوع کاربری:<?php if($w56==1){echo "قابل اجرا بر روی یک سیستم";}elseif($w56==2){echo "قابل اجرا بر روی چند سیستم همزمان یک سیستم";}    ?></div></span>

  </li>
        <li class="nav-header hidden-folded">
            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs "><div class="text-ellipsis">            <?php
        if($w6==1){
echo"<a href=\"dlfree.php?md5=$eedrow1.$eedrow2\" class=\"md-btn md-raised m-b-sm w-xs orange\">دانلود</a>";

}else{

echo"<a href=\"pay.php?id=$w0\" class=\"md-btn md-raised m-b-sm w-xs green\">خرید</a>";
  }

        ?></div></span>
  </li>

       <li class="nav-header hidden-folded">

            <span class="nav-icon">
                        <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
    <span class="text-xs"><span style="font-size: 8pt">نظر شما چیست؟  </span> <br>
   <div  class="row">
       <div class="col-sm-4">
           <button   class="md-btn md-fab m-b-sm green " onclick="window.location.href = '?id=<?php echo $w0;?>&pn=1';"><h3><?php echo $w14+0; ?>+</h3> </button>
       </div><div class="col-sm-4"><span  style="text-align: center;"> رای دهندگان: <?php echo $w14+$w15; ?></span></div><div class="col-sm-4"><span class="pull-left">
               <button  class="md-btn md-fab m-b-sm red"onclick="window.location.href = '?id=<?php echo $w0;?>&pn=0';"><h3><?php echo $w15+0; ?>-</h3></button></span></div>
</div>
</span>

  </li>


     <li>
    <a href="blog.php?id=<?php echo $w1; ?>">
      <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
      <span class="nav-text">وبلاگ</span>
    </a>
  </li>

                  <li >
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>

                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">گزراش تخلف این صفحه.</span>
                  </a>
                  <ul class="nav-sub">
                    <li >

                        <span class="nav-text"><form action="" method="POST">
  <textarea name="send1" rows="3" cols="35" class="form-control"></textarea>
  <script src="js/ajcode.js">
</script>
  <center><img src="code.php" alt="" class="img-thumbnail" id="hint"><button name="ref" type="button" value="ref" id="ref" onclick="showHint()" class="md-btn md-fab m-b-sm blue"><i class="glyphicon glyphicon-refresh"></i></button></center>
  <input name="code" type="text" id="reg1" placeholder="کد امنیتی"  class="form-control">    <br>

<input name="send222" type="submit" value="ارسال"  class="btn btn-fw warn" style=" font-family: 'BYekan+ Bold';">

</form></span>

                    </li>
                  </ul>
                </li>
                     <li>
    <a href="op/pm.php?cp=22&p=3&n=<?php echo $idh2q; ?>">
      <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'assets/images/i_1.svg'"></span>
                      </i>
      </span>
      <span class="nav-text">پشتیبانی محصول</span>
    </a>
  </li>
</ul>

     </div>
       </nav>

   </div>
     </div>
 <?php
    if(isset($_POST['send'])){
        if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Ledbi0UAAAAACeEBupzOF0o1Zpso8FwoeuKsaA3';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
         if($responseData->success){
        $uyt=htmlspecialchars(mysqli_real_escape_string($con,$_POST['com']));
        if(strlen($uyt)>3){
             $id= $_SESSION['idb'];
             $us=$_SESSION['user'];
             $ann=$_SESSION['nazarat'];
             $time=time();
             $ech="";
             if($ann==1){$ann2s=0; }
             if($ann==0){$ann2s=1;}

        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 1 WHERE `id` =$id;");
        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 1 WHERE `id` =$w1;");
     mysqli_query($con,"INSERT INTO `coment` (`idsender`, `idamozesh`, `name`, `tarikh`, `matn`, `active`, `s`) VALUES ('$id', '$w0', '$us', '$time', '$uyt', '$ann2s', '$w1');");
       mysqli_query($con,"UPDATE `user` SET `newcom` = `newcom`+'1' WHERE `id` =$w1;") ;
                     $time=jdate("H:i:s j/n/Y",time());
            if(strlen(chatid($w1,$con))>1){
           $textin2=urlencode("یک دیدگاه جدید
        نام محصول:  $w3
        تاریخ:$time
        ");

            text($textin2,$token,chatid($w1,$con)) ;
    echo $ech;
   } }} }} }
  ?>


<?php

if(isset($_POST['send222'])){
$matn=htmlspecialchars(mysqli_real_escape_string($con,$_POST['send1']));
$id=intval($_GET['id']);
@$idcode=htmlspecialchars(mysqli_real_escape_string($con,$_POST['code']));
$time=time();
           if($_SESSION['code']==$idcode){
mysqli_query($con,"INSERT INTO `tkhalof` (`matn`, `id2`, `time` , `ok`) VALUES ('$matn', '$id','$time' , '0');");
} }

?>

<?php

if(isset($_GET['pn']) and isset($_GET['id'])){ if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
$get1=intval($_GET['pn']);
$get2=intval($_GET['id']);
$us=$_SESSION['user'];
 if($get1==1){

   $rezalwoy = mysqli_query($con,"select id from `posneg` WHERE `name` = '$us' and `idkala`=$get2");
            $counteedwoy=mysqli_num_rows($rezalwoy);
         if($counteedwoy==0){
 mysqli_query($con,"iNSERT INTO `posneg` (`name` ,`onezero` ,`idkala`)VALUES ('$us', '1', '$get2');");
  mysqli_query($con,"UPDATE `amozsh` SET `pos` = `pos`+'1' WHERE `amozsh`.`id` =$get2;") ;
 }


 }
 if($get1==0){
   $rezalwoy = mysqli_query($con,"select id from `posneg` WHERE `name` = '$us' and `idkala`=$get2");
            $counteedwoy=mysqli_num_rows($rezalwoy);
         if($counteedwoy==0){
 mysqli_query($con,"iNSERT INTO `posneg` (`name` ,`onezero` ,`idkala`)VALUES ('$us', '0', '$get2');");
  mysqli_query($con,"UPDATE `amozsh` SET `neg` = `neg`+'1' WHERE `amozsh`.`id` =$get2;") ;

 }
}
}
}

  }
}
?>

 <?php
          include("footer.php");
            ?>

