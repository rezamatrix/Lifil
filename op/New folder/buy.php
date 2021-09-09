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

 }  include("header.php");
  $user=$_SESSION['user']   ;
?>
      <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">خرید های شما </div>   <br>
      <?php  $cp=intval($_GET['cp']);
             if($cp==2){

         ?>
       <script src="../js/clipboard.min.js"></script>
       <script>
var clipboard = new Clipboard('#copy-button');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    e.clearSelection();
});
clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
       </script>
         <div dir="rtl" class="table-responsive" > <table class="table table-bordered m-0">
                            <tr>
                 <td >#</td>
                 <td >تصویر</td>
                 <td >نام محصول</td>
                 <td  >اطلاعات فروشنده</td>
                 <td  >حجم</td>
                      <td  >کلید واژه</td>
                      <td  >درحال استفاده در:</td>
                 <td  >دریافت</td>
                       </tr>
         <?php
              if(isset($_POST['re'])){
                $if=intval($_POST['id']) ;
                $ifs=intval($_POST['id2']) ;
                            $requry2q=mysqli_query($con,"SELECT uscunt FROM `amozsh`WHERE `id` ='$ifs'");
            $rezassq=mysqli_fetch_assoc($requry2q);

                 $reza25=$rezassq['uscunt'];
                 if($reza25==2){
                        mysql_query("UPDATE `dl` SET `usein` = '' WHERE `id` =$if and namebuyer  = '$user';");

                     }     }
         $i=1;
          $requry=mysqli_query($con,"SELECT id,namebuyer,idseler,namefile,idamozesh,price,lc,usein FROM `dl`WHERE `namebuyer` = '$user' and `vazaiat`='1'");
          while($rezas=mysqli_fetch_array($requry)){
            $reza1=$rezas['id'];
            $reza2=$rezas['namebuyer'];
            $reza3=$rezas['idseler'];
            $reza4=$rezas['namefile'];
            $reza5=$rezas['idamozesh'];
            $reza6=$rezas['price'];
            $lc=$rezas['lc'];
            $usein=$rezas['usein'];
            $requry2=mysqli_query($con,"SELECT sizefile,subgecet,icon,file,uscunt FROM `amozsh`WHERE `id` ='$reza5'");
            $rezass=mysqli_fetch_assoc($requry2);
                 $reza7=$rezass['sizefile'];
                 $reza8=$rezass['subgecet'];
                 $reza9=$rezass['icon'];
                 $reza19=$rezass['file'];
                 $reza25=$rezass['uscunt'];
                   $requry3=mysqli_query($con,"SELECT email,name,user,tell FROM `user`WHERE `id` = '$reza3'");
            $rezass1=mysqli_fetch_assoc($requry3);
                 $reza10=$rezass1['email'];
                 $reza11=$rezass1['name'];
                 $reza12=$rezass1['user'];
                 $reza13=$rezass1['tell'];
                  $requry4=mysqli_query($con,"SELECT token FROM `user`WHERE `id` = '$reza3'");
            $rezass2=mysqli_fetch_assoc($requry4);
            @$reza15=$rezass2['token'];
            ?>
                 <tr>
                     <td><?php echo $i ; ?></td>
                     <td><a href="../index.php?id=<?php echo $reza5; ?>"><img src="../img.php?user=<?php echo$reza12; ?>&name=<?php echo$reza9; ?>" alt="" class="img-circle"  height="64" width="64"/></a></td>
                 <td  ><?php echo substr("$reza8",0,40); ?></td>
                 <td  ><span style="font-size: 9pt">tell:<?php echo$reza13; ?><br>email:<?php echo$reza10; ?><br>name:<?php echo$reza11; ?><br>user:<?php echo$reza12; ?></span></td>
                 <td ><span><?php echo round((($reza7/1024)/1024),3),"MB"; ?></span></td>
            <td><button id="copy-button" data-clipboard-target="#lc<?php echo $i ; ?>" class="btn btn-sm purple">Copy</button><br><span id="lc<?php echo $i ; ?>"><?php echo $lc ; ?></span></td>
            <td><?php

                 if(strlen($usein)>1){
            echo "در حال استفاده" ;
                  }

            ?><br>
            <?php
             if($reza25==2){
            ?>
            <form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $reza1; ?>">
    <input type="hidden" name="id2" value="<?php echo $reza5; ?>">
    <input name="re" type="submit" value="غیرفعال کردن این سیستم" class="btn btn-fw danger"  style="font-family: Tahoma, Geneva, sans-serif;">
</form>
   <?php
     }
   ?>
</td>
             <td ><a href="../dlc.php?md5=<?php echo $reza1; ?>" target="_blank" class="btn btn-fw success" data-toggle="tooltip" title="دریافت محصول" >Download</a></td>
                 </tr>
            <?php
          ++$i;
          }
          ?>


            <?php


           $requry=mysqli_query($con,"SELECT id,namebuyer,idseler,namefile,idamozesh,price,au FROM `dl`WHERE `namebuyer` = '$user' and `vazaiat`!='1'");
         while($rezas=mysqli_fetch_array($requry)){
            $reza1=$rezas['id'];
            $reza2=$rezas['namebuyer'];
            $reza3=$rezas['idseler'];
            $reza4=$rezas['namefile'];
            $reza5=$rezas['idamozesh'];
            $reza6=$rezas['price'];
            $reza14=$rezas['au'];

              $requry2=mysqli_query($con,"SELECT sizefile,subgecet,icon FROM `amozsh`WHERE `id` ='$reza5'");
          $rezass=mysqli_fetch_assoc($requry2);
                 $reza7=$rezass['sizefile'];
                 $reza8=$rezass['subgecet'];
                 $reza9=$rezass['icon'];

               $requry3=mysqli_query($con,"SELECT email,name,user,tell FROM `user`WHERE `id` = '$reza3'");
                $rezass1=mysqli_fetch_assoc($requry3);
                 $reza10=$rezass1['email'];
                 $reza11=$rezass1['name'];
                 $reza12=$rezass1['user'];
                 $reza13=$rezass1['tell'];

            ?>
                 <tr>
                     <td><?php echo $i ; ?></td>
                     <td><a href="../index.php?id=<?php echo $reza5; ?>"><img src="../img.php?user=<?php echo$reza12; ?>&name=<?php echo$reza9; ?>" alt="" class="img-circle"  height="64" width="64"/></a></td>
                 <td  ><?php echo substr("$reza8",0,40); ?></td>
                 <td  ><span style="font-size: 9pt">tell:<?php echo$reza13; ?><br>email:<?php echo$reza10; ?><br>name:<?php echo$reza11; ?><br>user:<?php echo$reza12; ?></span></td>
                 <td ><span><?php echo round((($reza7/1024)/1024),3),"MB"; ?></span></td>
                 <td ></td>
                 <td width="54" ><a href="../pay.php?id=<?php echo$reza5; ?>"  class="btn btn-fw primary">پرداخت</a><br><a href="../callback.php?ih=<?php echo $reza1 ; ?>&au=<?php echo $reza14 ; ?>" class="btn btn-fw warn">بررسی</a></td>
                 </tr>
           <?php }?>
           </table >  </div>
          <?php
         }
      
         mysqli_close($con) ;
         ?>


       </div>


   <?php
        include("footer.php");
            ?>