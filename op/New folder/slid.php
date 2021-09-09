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
?>
         <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">اسلایدر</div>   <br>
    <?php

           if($_SESSION['lvl']==2){
          if(isset($_POST['slid'])){
            $s1=$_POST['url'];
            $s2=$_POST['urlimg'];
            $s3=$_POST['dec'];
           mysqli_query($con,"INSERT INTO `slider` (`link`, `img`, `dt`, `acc`) VALUES ('$s1', '$s2', '$s3', '1');");

          }

          if(isset($_GET['id'])){
              $id=$_GET['id'];
          mysqli_query($con,"DELETE FROM `slider` WHERE `id` = '$id'");
        }
         ?>
        <form action="" method="POST">
        <input name="url" placeholder="url"><br>
        <input name="urlimg" placeholder="urlimg"><br>
        <input name="dec" placeholder="dec">  <br>
        <input name="slid" type="submit" value="send">
        </form>
        <?php
            $sag=mysqli_query($con,"SELECT * FROM `slider` ");
        while($mysqliq=mysqli_fetch_array($sag)){
          $q1=$mysqliq['link'];
          $q2=$mysqliq['img'];
          $q3=$mysqliq['dt'];
          $q4=$mysqliq['id'];
          echo  $q1."&nbsp;".$q2."&nbsp;".$q3."&nbsp;"."<a href=\"?id=$q4\" class=\"blue\">حذف</a><br>" ;
        }

         }
        ?>
       </div>


   <?php
         mysqli_close($con) ;
            include("footer.php");
                                   ?>