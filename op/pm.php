<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");
include("../model/mailsender.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);

 }

 else{
    header("location:../login.php");

 }

 include("header.php");
   $idm=$_SESSION['idb'];


 $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<32){
    $text1.=$text[rand(0,35)];
    $i++;
       }
       $_SESSION['key2']=$text1;

?>

  <div class="row container">
  <div class="col-md-3 box">
    <div class="padding pos-rlt">
      <div>
<?php
       // <button class="btn btn-sm grey-50 pull-right hidden-sm-up " ui-toggle-class="show" target="#inbox-menu" ><i class="fa fa-bars"></i></button>
?>
      </div>
      <div class=" m-t" id="inbox-menu">
        <div class="nav-active-primary">
          <div class="nav nav-pills nav-sm flex-column">
              <a class="nav-link <?php       @$ap=intval($_GET['p']); if($ap==1){echo "active";}   ?>" href="?cp=22&p=1">
                دریافتی
              </a>
              <a class="nav-link <?php       if($ap==2){echo "active";}   ?>" href="?cp=22&p=2" >
                خروجی
              </a>
                            <a class="nav-link <?php       if($ap==3){echo "active";}   ?>" href="?cp=22&p=3" >
                ارسال پیام
              </a>
          </div>
        </div>


      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div ui-view class="padding pos-rlt">
      <a  class="md-btn md-fab md-fab-bottom-right pos-fix red" href="pm.php?cp=22&p=3">
        <i class="material-icons i-24 text-grey-50">&#xe150;</i>
      </a>
      <div>
        <!-- header -->
        <div class="m-b">
          <div class="btn-group pull-right">
                                    <div class="btn-group ">
<?php
@$ap=intval($_GET['p']);
$s="" ;
$r="" ;
   @$fread=intval($_GET['read']);
                             if($fread=="14"){$r="and readmsg !=0"; $s="&read=14";}
                             if($fread=="13"){$r="and readmsg = 0"; $s="&read=13";}
                 if($ap==1 or empty($ap)){
@$news3=mysqli_query($con,"select id from msg WHERE  `idg`=$idm $r");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 10;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;
    echo"<a href=\"?cp=22&p=1&pt=$rows1$s\"><button type=\"button\" class=\"btn btn-sm grey-50\">$rows2</button></a>";
  --$rows1;
   }

    } elseif($ap==2){
      @$news3=mysqli_query($con,"select id from msg WHERE  `ids`=$idm $r");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 10;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;
    echo"<a href=\"?cp=22&p=2&pt=$rows1$s\"><button type=\"button\" class=\"btn btn-sm grey-50\">$rows2</button></a>";
  --$rows1;
   }
    }
   ?>
   </div>


          </div>
          <div class="btn-toolbar" style="top:0">
            <div class="btn-group dropdown">
              <button class="btn grey-50 btn-sm dropdown-toggle" data-toggle="dropdown">
                <span class="dropdown-label">فیلتر</span>
                <span class="caret"></span>
              </button>
              <div class="dropdown-menu text-left text-sm">
                <a class="dropdown-item" href="<?php if($ap==1 or empty($ap)){echo"pm.php?cp=22&p=1&read=13";} if($ap==2){echo"pm.php?cp=22&p=2&read=13";} ?>">خوانده شده</a>
                <a class="dropdown-item" href="<?php if($ap==1 or empty($ap)){echo"pm.php?cp=22&p=1&read=14";} if($ap==2){echo"pm.php?cp=22&p=2&read=14";} ?>">خوانده نشد</a>
              </div>
            </div>
            <div class="btn-group">
              <a   href="pm.php?cp=22">       <button class="btn btn-sm grey-50" data-toggle="tooltip" data-placement="bottom" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
            </a>  </div>
          </div>
        </div>
        <!-- / header -->

        <!-- list -->
        <div class="list grey-50">

              <?php
                           @$ap=intval($_GET['p']);   if($ap==3){
                               if(isset($_POST['ts'])){
                                          $idms=$_SESSION['idb'];
                                  $idm= intval($_POST['idms']);
                                                                     $sqlqurey=mysqli_query($con,"SELECT ids,sub,matn FROM `msg` WHERE `id` ='$idm' AND `idg` = '$idms'");
                                     $qw=mysqli_fetch_assoc($sqlqurey);

      $w4=$qw['ids'];
      $w7=$qw['sub'];
      $w5=$qw['matn'];
                                                        $sqlqurey2=mysqli_query($con,"SELECT user FROM `user` WHERE `id` = '$w4'");
                                     $qw2=mysqli_fetch_assoc($sqlqurey2);
                                          $wdid=$qw2['user'];
                               }
                   ?>
                   <form action="" method="POST">
                       <?php
                        if(isset($_POST['sendpm'])){
                           if(!preg_match( "/[:,\\. ^ ? ; & | ! ' . # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $_POST['user'] )){
                               $us= $_POST['user'];
                           }

                               $tis= strip_tags($_POST['titel']);

                        $reza1= "value='".$us."'";
                        $reza2= "value='".$tis."'";

                        }
                       ?>
                   <input name="user"   style="width: auto;" class="form-control" placeholder="گیرنده"  <?php echo @$reza1; ?><?php  if(isset($_POST['ts'])){ ?>value="<?php echo @$wdid; ?>" <?php } ?> <?php  if(isset($_GET['n']) and !preg_match( "/[:,\\. ^ ? ; & | ! ' . # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $_GET['n'] )){ ?>value="<?php echo @$_GET['n']; ?>" <?php } ?>>      <br>
                   <input name="sub"   style="width: auto ;" class="form-control"  placeholder=" موضوع باید وارد شود"   <?php echo @$reza2; ?><?php  if(isset($_POST['ts'])){ ?>value="<?php echo @$w7."(پاسخ)"; ?>"<?php } ?>>      <br>
                            <hr >
                   <textarea name="m" rows="25" cols="75" class="form-control"><?php  if(isset($_POST['ts'])){ ?><?php echo @$w5.
                           '-------------------------پاسخ-----------------------'; ?><?php } ?></textarea>  <br>
                   <input name="t" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;">   <br>
                      <input type="hidden" name="key" value="<?php echo $text1 ; ?>">
                   </form>

                   <?php
                 if(isset($_POST['t'])){

                $m1=mysqli_real_escape_string($con,strip_tags($_POST['m']));
                $m2=$_POST['user'];
                $m3=mysqli_real_escape_string($con,strip_tags($_POST['sub']));

                if(strlen($m3)>=1){

                     if(!preg_match( "/[:,\\. ^ ? ; & | ! ' # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $m2 )){

                            $sqlqurey2=mysqli_query($con,"SELECT id,name,email FROM `user` WHERE `user` = '$m2'");
                                     $qw2=mysqli_fetch_assoc($sqlqurey2);
                                          $wid=$qw2['id'];
                         $email=$qw2['email'];
                         $namee=$qw2['name'];

                                             $time=time();
                                             if($wid>0){
                                                
                                                // if($_POST['key']==$_SESSION['key2']){
                   mysqli_query($con,"INSERT INTO `msg` (`ids`, `idg`, `matn`, `sub`, `date`, `readmsg`) VALUES ('$idm', '$wid', '$m1', '$m3', '$time', '1');");
                                                 $rezalt = mysqli_query($con,"select  from user WHERE id = '$wid' ");
                                                 $eedt=mysqli_fetch_assoc($rezalt) ;
                                                 $usrt=$_SESSION['user'];

                                                 $to =$email;
                                                 $subject = "یک پیام جدید-لیفیل ";
                                                 $message = "<br>  شما یک پیام جدید از $usrt دریافت کرده اید<br> ";
                                                 $message .= "<br> <br>  برای مشاهده به سایت مراجعه فرمایید<br> ";
                                                 $message.="<center> <a href=\"https://lifil.net/op/pm.php?cp=22\" style=\"text-decoration: none;\"><div style=\" height: 30px;border: #0c0c0c 1px solid ; border-radius: 50px;background-color: #51ac79; color: #0b0b0b; padding-top:9px;\"> برای ورود به بخش پیام اینجا کلیک کنید</div></a></center>";
                                                 $from = "noreplays@lifil.ir";

                                                 sendmail($message,$to,$from,$subject,$namee);

          //}
          }
           }
             }
               }
                 }

                   @$ccp=intval($_GET['p']);
                   @$fread=intval($_GET['read']);
                 if($ccp==1 or empty($ccp)){

                         @$cid=intval($_GET['id']);
                                         if($cid<0 or empty($cid)){
                                             $r="";
                             if($fread=="14"){$r="and readmsg !=0"; }
                             if($fread=="13"){$r="and readmsg = 0"; }
                                               $id= $_SESSION['idb'];
                             @$get=intval($_GET['pt']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*10;
   $page=intval($page);

                       $sqlqurey=mysqli_query($con,"SELECT id,ids,sub,date,readmsg,matn FROM `msg` WHERE `idg` =$idm  $r ORDER BY id  DESC LIMIT $page , 10");
  while($qw=mysqli_fetch_array($sqlqurey))
  {

      $w1=$qw['id'];
      $w4=$qw['ids'];
      $w2=$qw['sub'];
      $w3=$qw['date'];
      $w7=$qw['readmsg'];
      $w5=$qw['matn'];


   $idsesss = mysqli_query($con,"SELECT name,user,avatar FROM user WHERE id='$w4' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssass=$bidsss['user'];
             $idhsssa2=$bidsss['avatar'];
                  if($idhsssa2==""){$idhsssa2="../img/q.jpg";

                  } else{
                      $idhsssa2= "../img.php?user=".$idhsssass."&name=".$idhsssa2;
                  }
                  ?>


               <div class="list-item b-l b-l-2x b-info">
            <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php      echo $idhsssa2;   ?>">
              </span>
            </div>
            <div class="list-body">
              <div class="pull-right text-muted text-xs">
                <span class="hidden-xs"><?php echo jdate("H:i:s j/n/Y",$w3);  ?></span>
                <i class="fa fa-paperclip m-l-sm"></i>
              </div>
              <div>
                <a class="_500" href="?cp=22&p=1&id=<?php echo $w1; ?>"><div class="text-ellipsis"> <?php echo $w2;  ?></div></a>
                <span class="label label-xs m-l-sm text-u-c"><?php
                      if($w7>0){
        echo "جدید" ;
      }

                 ?></span>
              </div>
              <div class="text-ellipsis text-muted text-sm">  <?php echo $w5; ?>  </div>
            </div>
            </div>
                         <?php
                    }

                 }
                                 else{
                                     @$cid=intval($_GET['id']);
                                     $sqlqurey=mysqli_query($con,"SELECT idg,id,sub,date,ids,matn,readmsg FROM `msg` WHERE `id` ='$cid' AND `idg` = '$idm'");
                                     $qw=mysqli_fetch_assoc($sqlqurey);

      $w4=$qw['idg'];
      $er7=$qw['id'];

      $w2=$qw['sub'];
      $w3=$qw['date'];
      $w5=$qw['matn'];
         $w7=$qw['readmsg'];
               $w1=$qw['id'];
                   @  $w6=$qw['ids'];
      @$sqlqurey1=mysqli_query($con,"SELECT name,user FROM `user` WHERE `id` ='$w6'");
                                     @$qw1=mysqli_fetch_assoc($sqlqurey1);
                                          @$w10=$qw1['name'];
                                          @$w11=$qw1['user'];

                    ?>
                     <div>فرستنده: <?php echo $w10."<br> ".$w11; ?> <a class="btn btn-warning" href="../profile.php?id=<?=$w6?>">پروفایل</a><br><br><br></div>

                     <div>موضوع: <?php echo $w2."<br>تاریخ: ".jdate("H:i:s j/n/Y",$w3); ?></div>
                     <div><?php echo nl2br($w5);  ?></div>
                     <div><form action="pm.php?cp=22&p=3" method="POST">
                         <input type="hidden" name="idms" value="<?php echo $er7;  ?>">
                             <br><br><br><br><br>
                        <input name="ts" type="submit" value="ارسال پاسخ"class="btn btn-fw primary"style="font-family: Tahoma;">
                         </form>
                            </div>
                    <?php
                               if($w7>0){
                                              mysqli_query($con,"UPDATE `msg` SET `readmsg` = 0 WHERE `id` = '$cid'");
                                          }
                    }
                    }


                            if($ccp==2){
                   @$cid=intval($_GET['id']);
                                         if($cid<0 or empty($cid)){
                                               @$fread=intval($_GET['read']);

                             if($fread=="14"){$r="and readmsg !=0"; }
                             if($fread=="13"){$r="and readmsg = 0"; }
                                                          @$get=intval($_GET['pt']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*10;
   $page=intval($page);
                      @ $sqlqureyr=mysqli_query($con,"SELECT id,idg,ids,sub,date,readmsg,matn FROM `msg` WHERE `ids` =$idm $r ORDER BY id  DESC LIMIT $page , 10");
  while($qwr=mysqli_fetch_array($sqlqureyr))
  {

      $w1=$qwr['id'];
      $wee=$qwr['idg'];
      $w4=$qwr['ids'];
      $w2=$qwr['sub'];
      $w3=$qwr['date'];
      $w7=$qwr['readmsg'];
      $w5=$qwr['matn'];
       $io="خوانده شده";
      if($w7>0){
        $io="خوانده نشده" ;
      }
         $idsesss = mysqli_query($con,"SELECT name,user,avatar FROM user WHERE id='$wee' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssa2=$bidsss['avatar'];
             $idhsssa2s=$bidsss['user'];
                  if($idhsssa2==""){$idhsssa2="../img/q.jpg";

                  } else{
                      $idhsssa2= "../img.php?user=".$idhsssa2s."&name=".$idhsssa2;
                  }
                      ?>
           <div class="list-item b-l b-l-2x b-info">
          <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php      echo $idhsssa2;   ?>">
              </span>
            </div>
            <div class="list-body">
              <div class="pull-right text-muted text-xs">
                <span class="hidden-xs"><?php echo jdate("H:i:s j/n/Y",$w3);  ?></span>
                <i class="fa fa-paperclip m-l-sm"></i>
              </div>
              <div>
                <a class="_500" href="?cp=22&p=2&id=<?php echo $w1; ?>"><div class="text-ellipsis"><?php echo $w2;  ?></div></a>
                <span class="label label-xs m-l-sm text-u-c"><?php

        echo $io ;


                 ?></span>
              </div>
              <div class="text-ellipsis text-muted text-sm">  <?php echo $w5; ?>  </div>
            </div></div>
        <?php
                    }

                 }
                    else{
                                     @$cid=intval($_GET['id']);
                                     $sqlqurey=mysqli_query($con,"SELECT idg,id,ids,sub,date,matn FROM `msg` WHERE `id` =$cid AND `ids` = $idm");
                                     $qw=mysqli_fetch_assoc($sqlqurey);
                                           $w1=$qw['id'];
      $w4=$qw['idg'];
      $w6=$qw['ids'];
      $w2=$qw['sub'];
      $w3=$qw['date'];
      $w5=$qw['matn'];
       @$sqlqurey1=mysqli_query($con,"SELECT name,user FROM `user` WHERE `id` =$w6");
                                     @$qw1=mysqli_fetch_assoc($sqlqurey1);
                                          @$w10=$qw1['name'];
                                          @$w11=$qw1['user'];
                    ?>
                     <div><?php echo $w10." ".$w11; ?></div>
                     <div><?php echo $w2."".jdate("H:i:s j/n/Y",$w3); ?></div>
                     <div><?php echo nl2br($w5); ?></div>
                    <?php
                    }
                    }
                 ?>
        </div>
        <!-- / list -->
      </div>

    </div>
  </div>
</div>

    <?php



         mysqli_close($con) ;

         ?>






   <?php
         include("footer.php");

          ?>