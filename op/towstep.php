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
         <div class="box"  dir="rtl"> <div class="box-header blue" dir="rtl">آموزش ورود دو مرحله ای</div>   <br>
    <?php
               $cp=intval($_GET['cp']);

               if($cp==45){
           }

         ?>
    <center><img src="../img/tb.png" alt="" style="height: 300px; width:300px;"/><br>
    ورود دو مرحله ای<br>
    ابتداد وارد ربات @******<br>
    لینک:<a  href="http://t.me/Bitsssbot">http://t.me/******</a><br>
    داخل ربات کلید اتصال اکانت رو زده  و وارد اکانت خود شوید<br>
    و در انتها کلید فعال سازی دو مرحله ای رو بزنید<br> <br><br>


     </center>
       </div>


   <?php             mysqli_close($con) ;       include("footer.php");   ?>