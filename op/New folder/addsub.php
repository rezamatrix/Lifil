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

 include("header.php");
     if($_SESSION['activeblog']==1){
?>

       <div class="box"  dir="rtl"><div class="box-header blue">پین کردن نوشته</div>
      <?php
                     $cp=intval($_GET['cp']);
                    if($cp==14){
          if(isset($_POST['send'])){
          $reza1=htmlspecialchars(mysqli_real_escape_string($con,$_POST['namem']));

                 if(strlen($reza1)<3){?>

                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> موضوع باید حداقل سه حرف باشد
</div>
            <?php
                 }
             if(strlen($reza1)>=3 ){
              senderm($reza1,$con);
              ?>
                                               <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong> پین شما اضافه شد
</div>
          <?PHP
           }
           }
         ?>
         <form action="" method="POST" class="form-horizontal">   <br>
           <input name="namem" type="text" dir="rtl" placeholder="موضوع" class="form-control"><br>
           <input name="send" type="submit" value="ارسال"class="btn btn-fw primary" style="font-family: Tahoma;">   <br>
          </form>
         <?php
         } }else{echo "  <div class=\"box\" dir=\"rtl\">
  <div class=\"box-header blue\" >ویرایش پین



  </div>
       <center>   <img src=\"../img/like.png\" class=\"img-circle w-128\">  </center>  <div style=\" text-align: center;\">برای استفاده از این بخش ابتداد وبلاگ خود را فعال کنید برای این کار <a href=\"set.php?cp=16\">اینجا کلیک کنید</a></div>    </div> ";}
      mysqli_close($con) ;
         ?>


       </div>


   <?php
      include("footer.php");
            ?>