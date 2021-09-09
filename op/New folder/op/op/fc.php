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
         <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">مدیریت کاربر و وبلاگ و نظرات</div>   <br>
    <?php
               $cp=intval($_GET['cp']);  
           if($_SESSION['lvl']==2){
               if($cp==20){   if($_SESSION['lvl']==2){
                        echo"<h3></h3>";


          }                         }
           }
         mysqli_close($con) ;
         ?>


       </div>


   <?php            include("footer.php");                                          ?>