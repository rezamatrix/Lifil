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
 if($_SESSION['lvl']==2){
   if(isset($_POST['ra'])){
     $in=$_POST['d1'];
     mysqli_query($con,"UPDATE `user` SET `acc2` = '2' WHERE `id` = '$in';");
   }
     if(isset($_POST['ta'])){
     $in=$_POST['d1'];
       mysqli_query($con,"UPDATE `user` SET `acc2` = '1' WHERE `id` = '$in';");
   }
?>
         <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">کارت ها</div>   <br>

        <?php

        $op7=mysqli_query($con,"SELECT * FROM `user` WHERE `acc2` = '0' and CHAR_LENGTH(cartmeli)>1  ") ;
        while ($res=mysqli_fetch_array($op7)){
              $q11=$res['user'];
              $q12=$res['cartmeli'];
              $q13=$res['name'];
              $q14=$res['id'];

              echo "نام:".$q13."<br> کاربر : ".$q11;
               ?> <br><img src="<?php echo"../imguser"."/".$q11."/".$q12;?>" alt=""  width="250" height="250"/>   <br>
                    <form action="" method="POST">
                        <input type="hidden" name="d1" value="<?php echo $q14; ?>">
                    <input name="ra" type="submit" value="رد">
                    </form>
                    <form action="" method="POST">
                                  <input type="hidden" name="d1" value="<?php echo $q14; ?>">
                    <input name="ta" type="submit" value="تایید">
                    </form>
                    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
               <?php
        }

        ?>

       </div>

        <?php





          }

         mysqli_close($con) ;
         ?>
   <?php            include("footer.php");                                          ?>