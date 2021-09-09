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
     mysqli_query($con,"UPDATE `cart` SET `acc` = '2' WHERE `cart`.`id` = '$in';");
   }
     if(isset($_POST['ta'])){
     $in=$_POST['d1'];
       mysqli_query($con,"UPDATE `cart` SET `acc` = '1' WHERE `cart`.`id` = '$in';");
   }
?>
         <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">کارت ها</div>   <br>

        <?php

        $op7=mysqli_query($con,"SELECT * FROM `cart` WHERE `acc` = '0' ") ;
        while ($res=mysqli_fetch_array($op7)){
              $q11=$res['cart'];
              $q12=$res['ircart'];
              $q13=$res['bname'];
              $q14=$res['iduser'];
              $q15=$res['id'];
            $op7=mysqli_query($con,"SELECT * FROM `user` WHERE `id` = '$q14' ") ;
            $r=mysqli_fetch_assoc($op7) ;
              $q1=$r['name'];
              echo "نام:".$q1."<br>نام بانک : ".$q13."<br>شماره کارت: ".$q11."<br>شماره شبا: ".$q12;
               ?>
                    <form action="" method="POST">
                        <input type="hidden" name="d1" value="<?php echo $q15; ?>">
                    <input name="ra" type="submit" value="رد">
                    </form>
                    <form action="" method="POST">
                                  <input type="hidden" name="d1" value="<?php echo $q15; ?>">
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