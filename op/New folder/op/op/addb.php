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
     <div class="row">

   <div class="col-sm-8" dir="rtl"><div class="box">
    <div  class="box-header blue"><h3>افزودن  نوشته جدید </h3></div>

      <?php
      $id= $_SESSION['idb'];
           $uesr=$_SESSION['user'];

         $cp=intval($_GET['cp']);
         if($cp==12){

         if(isset($_POST['send'])){
                 $rand1=rand(9999,99999999);
                       $pic1=explode(".",$_FILES["pic1"]["name"]) ;
               $pic1e=$rand1."s.".end($pic1) ;
                $fileSize1 = $_FILES["pic1"]["size"];
         $reza1=htmlspecialchars($_POST['moz']);
         $reza2=htmlspecialchars($_POST['mat']);
         $reza4=htmlspecialchars($_POST['bmat']);
        @ $reza3=intval($_POST['menu']);
                     if(end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg"){

             if(mb($con)+$fileSize1 <= 1073741824){
                if(move_uploaded_file($_FILES["pic1"]["tmp_name"],"../imguser/$uesr/" . $pic1e)){
            uploadsql($pic1e,$fileSize1,end($pic1),$_FILES["pic1"]["name"],$con);
            }
            }else{
                                 ?>

                                  <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> خطا!</strong> حجم فایل بیش از حد مجاز آپلود اکانت شما می باشد
</div>

                 <?php
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
         $pass= sender($reza2,$reza1,$pic1e,$reza4,$con,$reza3);
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
         <div class="container">
         <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">    <br>
          <input name="moz" type="text"   dir="rtl" placeholder="موضوع" class="form-control" >    <br>

          <textarea name="mat" rows="5" cols="75"   placeholder="متن" class="form-control" style="height:300px;" id="bb"></textarea> <br>

          <input name="bmat"   dir="rtl" placeholder="برچسب:نرم افزار,بازی,..." class="form-control"><br>
          تصویر شاخص:<input name="pic1" type="file" class="form-control">  <br>
             <select name="menu" class="form-control">
                 <?php

                 $rezal = mysqli_query($con,"select id,name from mnue ");
                 while( $eed=mysqli_fetch_array($rezal))
                 {
                     $rr1=$eed['id'] ;
                     $rr2=$eed['name'] ;

                     echo"<option value=\"$rr1\"  >$rr2</option>";
                 }
                 ?>
             </select>
             <br>
 <input name="send" type="submit" value="ارسال" class="btn btn-fw primary"  style="font-family: Tahoma;">   <br> <br>

         </form>
                 </div>

         <?php




         ?>


          </div></div>
           <div class="col-sm-4" dir="rtl">
           <div class="box">
    <div  class="box-header blue"><h3>فایل</h3>     <button class="btn btn-icon btn-rounded btn-danger"  onclick="showHint(0)" title="بارگذاری دوباره"    dir="ltr" style="position:  absolute;left: 6px;top: 5px;">
              <i class="glyphicon glyphicon-refresh"></i>
            </button>  </div>

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
   } }
   ?>
   </div>
           </div>
                                   <div class="box">
    <div  class="box-header blue">
     راهنما:
    </div>
    <div class="container">
    
    کاربرد برچسب ها   <br>
    به شما در جستو جو بهتر محصولتان در وب سایت و گوگل کمک می کند    <br>
    جهت گذاشتن فیلم از نرم افزار خود می توانید از آپارات استفاده کنید و در ابتدای محصول خود بزارید   <br>
    بهتر است مطلب مورد نظر را از قبل آماده و در اینجا ویرایش کرده و قرار دهید   <br>
    برای استفاده از تصاویر آپلود شده در سمت چپ می توانید تصاویر را کشیده و در محیط ویرایشگر رها کنید<br>
    
    </div>

    </div>
           </div>
          </div>
          <?php
           }else{


         ?>
                    <div class="box"  dir="rtl">
      <div class="box-header blue" dir="rtl">افزودن نوشته



      </div>
            <center>   <img src="../img/like.png" class="img-circle w-128">  </center>
      <div style=" text-align: center;">برای استفاده از این بخش ابتداد وبلاگ خود را فعال کنید برای این کار <a href="set.php?cp=16">اینجا کلیک کنید</a></div>
      </div>
         <?php
         }

      mysqli_close($con) ;
           include("footer.php");

            ?>