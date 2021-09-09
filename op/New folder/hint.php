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
    header("location:../login.php");

 }
     $id= $_SESSION['idb'];
   $user= $_SESSION['user'];
     @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*24;
   $page=intval($page);
   ?>
     <div class="col-md-9 pull-md-2 box grey-100">
    <div class="row">
   <?php
             $rezal = mysqli_query($con,"select id,filename,lenght,type,time,realname,token from upload WHERE sender = '$id' ORDER BY `id`  DESC LIMIT $page , 24");
     while( $eed=mysqli_fetch_array($rezal)){
        $rr1=$eed['id'] ;
        $rr2=$eed['filename'] ;
        $rr3=$eed['lenght'] ;
        $rr4=$eed['type'] ;
        $rr5=$eed['time'] ;
        $rr6=$eed['realname'] ;
        $rr7=$eed['token'] ;
        ?>




<?php

if($rr4=="jpg" or $rr4=="png" or $rr4=="gif" or $rr4=="jpeg"){        ?>
                    <div class="col-xs-5 col-sm-4 col-md-3">
              <div class="box p-a-xs">
                     <a href="<?php

if($rr4=="zip"){
   echo "../dlfile.php?md5=$rr7.$rr1" ;
}  else{
    echo"../img.php?user=".$_SESSION['user']."&name=$rr2";
}

          ?>" target="_blank" title='<?php echo  htmlspecialchars($rr6) ; ?><br> حجم:<?php echo round((($rr3/1024)/1024),3),"MB"; ?><br> تارخ:   <?php echo jdate("H:i:s j/n/Y",$rr5); ?>

          <a  class="btn btn-fw danger" style="font-family: Tahoma;"onclick="del(<?php echo $rr1; ?>);" >حذف</a>
          'data-html="true" data-toggle="tooltip" data-delay='{"show":"100", "hide":"3000"}'><center><img src="../img.php?user=<?php echo $user; ?>&name=<?php echo $rr2; ?>" alt=""  height="128" width="128"></center></a>
                <div class="p-a-sm">
                  <div class="text-ellipsis"><?php echo  htmlspecialchars($rr6) ; ?></div>
                </div>
              </div>
            </div>



         <?php         }else{        ?>
                   <div class="col-xs-5 col-sm-4 col-md-3">
              <div class="box p-a-xs">
                    <a href="<?php

if($rr4=="zip"){
   echo "../dlfile.php?md5=$rr7.$rr1" ;
}  else{
    echo"../imguser/".$_SESSION['user']."/$rr2";
}

          ?>" target="_blank" title='<?php echo  htmlspecialchars($rr6) ; ?><br> حجم:<?php echo round((($rr3/1024)/1024),3),"MB"; ?><br> تارخ:   <?php echo jdate("H:i:s j/n/Y",$rr5); ?>

          <a  class="btn btn-fw danger" style="font-family: Tahoma;"onclick="del(<?php echo $rr1; ?>);" >حذف</a>
          'data-html="true" data-toggle="tooltip" data-delay='{"show":"100", "hide":"3000"}'><center><img src="img/<?php echo $rr4; ?>.png" alt="" height="128" width="128"></center></a>
                <div class="p-a-sm">
                  <div class="text-ellipsis"><?php echo  htmlspecialchars($rr6) ; ?></div>
                </div>
              </div>
            </div>


    <?php      }       ?>





        <?php
      }

?>
</div>
</div>
