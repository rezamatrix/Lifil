<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionbloga.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);


 }

 else{
    header("location:../login.php");

 }

 include("header.php");

?>
     <div class="row">

   <div class="col-sm-8" dir="rtl"><div class="box">
    <div  class="box-header blue"><h3>افزودن  نوشته جدید </h3></div>

      <?php
      $id= $_SESSION['idb'];
           $uesr=$_SESSION['user'];
         $cp=intval($_GET['cp']);
         if($cp==28 and $_SESSION['lvl']==2){

         if(isset($_POST['send'])){
                 $rand1=rand(9999,99999999);
                       @$post3=$_POST['pic1'];
                       $pic1=explode(".",$_FILES["pic1"]["name"]) ;
               $pic1e=$rand1."s.".end($pic1) ;
                $fileSize1 = $_FILES["pic1"]["size"];
                                       @$post5=$_POST['pic2'];
                       $pic2=explode(".",$_FILES["pic2"]["name"]) ;
               $pic2e=$rand1."b.".end($pic2) ;
                $fileSize2 = $_FILES["pic2"]["size"];
         $reza1=htmlspecialchars( $_POST['moz']);
         $reza2=htmlspecialchars( $_POST['mat']);
         $reza4=htmlspecialchars( $_POST['bmat']);
        @ $reza3=intval($_POST['menu']);
                     if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){
                if(move_uploaded_file($_FILES["pic1"]["tmp_name"],"../imguser/blog/" . $pic1e)){
          //  uploadsql($pic1e,$fileSize1,end($pic1),$_FILES["pic1"]["name"],$con);
              }
            }
                                 if(end($pic2)=="jpg" or end($pic2)=="png" or end($pic2)=="gif" or end($pic2)=="jpeg"){
                if(move_uploaded_file($_FILES["pic2"]["tmp_name"],"../imguser/blog/" . $pic2e)){
          //  uploadsql($pic1e,$fileSize1,end($pic1),$_FILES["pic1"]["name"],$con);
              }
            }
            if(strlen($reza1)<3){?>

                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> موضوع باید حداقل سه حرف باشد
</div>
            <?php}
            if(strlen($reza2)<10){
                ?>

          <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> متن شما باید بیشتر از 10 حرف باشد
</div>
            <?php
            }
                      if(end($pic1)!="jpg" and end($pic1)!="png" and end($pic1)!="gif" and end($pic1)!="jpeg"){
                ?>

                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> یک تصویر شاخص انتخاب کنید
</div>
            <?php
            }
            if(strlen($reza1)>=3 and strlen($reza2)>=10 and (end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg")){
         $pass= sender($reza2,$reza1,$reza3,$reza4,$pic2e,$pic1e,$con);
         if($pass==1){

         ?>
                                 <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong> مطلب شما ثبت گردید
</div>
         <?php

         }
           }
         }
         ?>
         <script>
            function insertpic(pic){
     // document.getElementById('rr').innerHTML='[img]'+pic+'[/img]';
        var all=document.getElementById('bb').innerHTML;
      document.getElementById('bb').innerHTML=all+'[img]'+pic+'[/img]';
   }
         </script>
         <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal container">    <br>
          <input name="moz" type="text"   dir="rtl" placeholder="موضوع" class="form-control" >    <br>

          <textarea name="mat" rows="5" cols="75"   placeholder="متن" class="form-control" style="height:300px;" id="bb"></textarea> <br>

          <input name="bmat"   dir="rtl" placeholder="برچسب:نرم افزار,بازی,..." class="form-control"><br>
          تصویر شاخص:<input name="pic1" type="file" class="form-control">  <br>
        تصویر اسلاید شو<input name="pic2" type="file" class="form-control">  <br>
                   <select name="menu" class="form-control">
<?php

   $rezal = mysqli_query($con,"select id,name from mnuea ");
     while( $eed=mysqli_fetch_array($rezal))
     {
        $rr1=$eed['id'] ;
        $rr2=$eed['name'] ;

         echo"<option value=\"$rr1\"  >$rr2</option>";
      }
      ?>
 </select>
 <input name="send" type="submit" value="ارسال" class="btn btn-fw primary"  style="font-family: Tahoma;">   <br> <br>

         </form>


         <?php




         ?>


          </div></div>
           <div class="col-sm-4" dir="rtl">
           <div class="box">
    <div  class="box-header blue"><h3>فایل</h3>   <button class="btn btn-icon btn-rounded btn-danger"  onclick="showHint(0)" title="بارگذاری دوباره"    dir="ltr" style="position:  absolute;left: 6px;top: 5px;">
              <i class="glyphicon glyphicon-refresh"></i>
            </button>    </div>

     <script src="../js/js2.js"></script>
              <div id="txtHint" lang="0"></div> <br>
              <div class="btn-group "  dir="ltr">
<?php

@$news3=mysqli_query($con,"select id from upload WHERE  `sender`=$id and type !='zip'");
$rows1 = mysqli_num_rows($news3);

  $rows1= $rows1 / 24;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
      $rows3=$rows1 ;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a  onclick=\"showHint($rows1)\" class=\"btn white\" id=\"r$rows1\" lang=\"$rows3\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
           </div>
           </div>
          </div>



   <?php    mysqli_close($con) ;
           include("footer.php");
            }
            ?>