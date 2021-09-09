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
?><div class="box"><div class="box-header blue">          فایل های اپلودی شما       </div>
      <?php
      if($_SESSION['lvl']==2){
          $cp=intval($_GET['cp']); 
                  if($cp==18){  if($_SESSION['lvl']==2){

                        if(isset($_POST['ta'])){
           $id=intval($_POST['id']) ;
           mysqli_query($con,"UPDATE `darkhast` SET `vaziat` = '1' WHERE `id` ='$id';");
         }
         $op2=mysqli_query($con,"SELECT *FROM `darkhast`WHERE `vaziat` = 0 ORDER BY `id` ASC");
         while($rop2=mysqli_fetch_array($op2)){
                     $ttrt1=$rop2['mablgh'];
            $ttrt2=$rop2['vaziat'];
            $ttrt3=$rop2['user'];
            $ttrt4=$rop2['name'];
            $ttrt5=$rop2['tell'];
            $ttrt6=$rop2['email'];
            $ttrt7=$rop2['id'];
            echo "درخواست واریز  ".$ttrt1." تومان به حساب شما",$ttrt3," ",$ttrt4," ",$ttrt5," ",$ttrt6," ","<br>"   ;
            echo "شماره کارت:<br>";
             if($ttrt2==0){

            ?>
                 <form action="" method="POST">
                 <input name="id" type="hidden" value="<?php echo $ttrt7; ?>">
                 <input name="ta" type="submit" value="تایید">
                 </form>
            <?php

            }     echo"---------------------------------------------------------------<br>";

         }
          } }

           }
         mysqli_close($con) ;
         ?>

        </div>

   <?php
        include("footer.php");
            ?>