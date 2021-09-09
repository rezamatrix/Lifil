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
          $rezal = mysqli_query($con,"select id,filename,lenght,type,time,realname,token from upload WHERE sender = '$id' ORDER BY `id`  DESC LIMIT $page , 24");
          ?>
          <div class=" row">
          <?php
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

<div class="col-md-3">
<img src="../img.php?user=<?php echo $user; ?>&name=<?php echo $rr2; ?>" style="cursor: move;width:100% ">
</div>


         <?php         }       ?>





        <?php
      }
      ?>
      </div>

