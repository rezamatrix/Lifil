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
  $id= $_SESSION['idb'];
?>
 <?php
         $cp=intval($_GET['cp']);
          $uesr=$_SESSION['user'];
            if($_SESSION['activeblog']==1){
         if($cp==13){

                 if(empty($_GET['idedit'])){
                     ?>
      <div class="box"  dir="rtl">
      <div class="box-header blue" dir="rtl">ویرایش نوشته



      </div>   <br>


                                 <div class="btn-group container">
<?php


@$news3=mysqli_query($con,"select id from blog WHERE  `idsender`=$id");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a href=\"?cp=13&p=$rows1\" class=\"btn white\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>


                        <div class="table-responsive container" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >
              <th><p style="text-align: right">#</p></th>
            <th><p style="text-align: right">تصویر شاخص</p></th>
            <th><p style="text-align: right">عنوان</p></th>
            <th><p style="text-align: right">تاریخ</p></th>
            <th><p style="text-align: right">ویرایش</p></th>
          </tr>
        </thead>
        <tbody>
                     <?php


                             @$get=intval($_GET['p']);
   if(!isset($get)){
     $get=0;
   }
   $page=$get*20;
   $page=intval($page);
   $i=1+($get*20);
         $rezal = mysqli_query($con,"select subgect,id,idmnue,Tarikh from blog WHERE idsender='$id' ORDER BY id  DESC LIMIT $page , 20");
         while( $blogname=mysqli_fetch_array($rezal)){
       $sub=$blogname['subgect'];
       $idbo=$blogname['id'];
            $q5=$blogname['idmnue'];
        $q3=$blogname['Tarikh'];
          ?>
                   <tr>
            <td><?php echo$i; ?></td>
            <td>   <img src="<?php echo "../img.php?user=$uesr&name=" . $q5; ?>" alt=""  width="64" height="64"   class="img-rounded"> </td>
            <td><?php echo $sub; ?></td>
            <td><?php echo  jdate("H:i:s j/n/Y",$q3)  ; ?></td>
      <td><center><a href="?cp=13&idedit=<?php echo$idbo; ?>" data-toggle="tooltip" title="ویرایش"><button class="btn btn-icon btn-rounded btn-info"><i class="fa fa-edit"></i></button></a>
   <a href="../blog.php?id=<?php echo $id; ?>&idb=<?php echo$idbo; ?>" data-toggle="tooltip" title="مشاهد"  target="_blank"><button class="btn btn-icon btn-rounded btn-primary"><i class="fa fa-eye"></i></button></a>
    </center>
   </td>
        </tr>
            <?php
      ++$i;  }
           ?>      </tbody>
      </table>
    </div>
    </div>

     <?php   }else{

     ?>
       <div class="row">

   <div class="col-sm-8" dir="rtl"><div class="box">
    <div  class="box-header blue"><h3>  ویرایش نوشته </h3></div>
     <?php
                $att=intval($_GET['idedit']);

              $rezal = mysqli_query($con,"select subgect,matn,id,barchasb,idmnue from blog WHERE idsender='$id' and id=$att");
             $blogname=mysqli_fetch_assoc($rezal) ;
       $q1=$blogname['subgect'];
       $q2=$blogname['matn'];
       $q3=$blogname['id'];
       $q4=$blogname['barchasb'];
       $q5=$blogname['idmnue'];
            if(isset($_POST['send'])){
                          $rand1=rand(9999,99999999);
                       @$post3=$_POST['pic1'];
                       $pic1=explode(".",$_FILES["pic1"]["name"]) ;
               $pic1e=$rand1."s.".end($pic1) ;
                $fileSize1 = $_FILES["pic1"]["size"];
         $reza1=strip_tags($_POST['moz']);
         $reza2=strip_tags($_POST['mat']);
         $reza4=strip_tags($_POST['bmat']);
         @$reza3=intval($_POST['menu']);
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
            }else{
              $pic1e=$q5;
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
                      if(end($pic1)!="jpg" and end($pic1)!="png" and end($pic1)!="gif" and end($pic1)!="jpeg" and strlen($q5)<=0){
                ?>

                        <div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong> یک تصویر شاخص انتخاب کنید
</div>
            <?php
            }
            if(strlen($reza1)>=3 and strlen($reza2)>=10 and ((end($pic1)=="jpg" or end($pic1)=="png" or end($pic1)=="gif" or end($pic1)=="jpeg")or strlen($q5)>0)){

$pass=editblog($reza1,$reza2,$reza4,$pic1e,$id,$att,$con,$reza3)  ;
         if($pass==1){

         ?>
                                 <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>موفق بود!</strong> تغییرات مطلب شما ثبت گردید.
</div>
         <?php

         }
           }



         }
         if(isset($_POST['del'])){
             $rere=intval($_POST['sdr']);
           $rezals = mysqli_query($con,"select idsender from blog WHERE idsender='$id' and id=$rere");
            $blognames=mysqli_fetch_assoc($rezals) ;
            $iu=$blognames['idsender'];
          if($iu==$id){
            mysqli_query($con,"DELETE FROM `blog` WHERE `id` = $rere");
       ?>

                                        <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
       <?php
          } }


              $rezal = mysqli_query($con,"select subgect,matn,id,barchasb,idmnue,menu from blog WHERE idsender='$id' and id=$att");
             $blogname=mysqli_fetch_assoc($rezal) ;
       $q1=$blogname['subgect'];
       $q2=$blogname['matn'];
       $q3=$blogname['id'];
       $q4=$blogname['barchasb'];
       $q5=$blogname['idmnue'];
       $q6=$blogname['menu'];
         ?>

         <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
          <input name="moz" type="text"   dir="rtl" placeholder="موضوع"  value="<?php echo $q1 ;?>" class="form-control">    <br>
          <textarea name="mat" rows="5" cols="75" dir="rtl"  placeholder="متن" class="form-control" style="height:300px;"><?php echo $q2 ;?></textarea> <br>
          <input name="bmat" rows="1" cols="75" dir="rtl" placeholder="برچسب"  value="<?php echo $q4 ;?>" class="form-control"> <br>

        <img src="<?php echo "../img.php?user=$uesr&name=" . $q5; ?>" alt=""  width="800" height="213"   class="img-rounded"><br>
                 تصویر شاخص:<input name="pic1" type="file" class="form-control">  <br>
             <?php

             $rezal = mysqli_query($con,"select id,`name` from mnue ");
             while( $eed=mysqli_fetch_array($rezal))
             {
                 $rr1=$eed['id'] ;
                 $rr2=$eed['name'] ;
                 if($q6==$rr1){
                     $d="selected=\"selected\"";
                 }
                 echo"<option value=\"$rr1\" $d >$rr2</option>";
             }
             ?>
 <input name="send" type="submit" value="ارسال" class="btn btn-fw primary" style="font-family: Tahoma;" >   <br>
         </form>

         <form action="" method="POST" class="form-horizontal">
          <input type="hidden" name="sdr" value="<?php echo $att; ?>">
         <p style="text-align: left"> <input name="del" type="submit" value="حذف کامل نوشته"    class="btn btn-fw danger" style="font-family: Tahoma;">    </p>
         </form>
          </div>
          </div>

                    <div class="col-sm-4" dir="rtl">
           <div class="box">
    <div  class="box-header blue"><h3>فایل</h3>  <button class="btn btn-icon btn-rounded btn-danger"  onclick="showHint(0)" title="بارگذاری دوباره"    dir="ltr" style="position:  absolute; left: 0px;">
              <i class="glyphicon glyphicon-refresh"></i>
            </button>    </div>
   <script>
   //[img]   [/img]
   </script>
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
         <?php

         }
          }
         }else{


         ?>
                    <div class="box"  dir="rtl">
      <div class="box-header blue" dir="rtl">ویرایش نوشته



      </div>
       <center>   <img src="../img/like.png" class="img-circle w-128">  </center>
      <div style=" text-align: center;">برای استفاده از این بخش ابتداد وبلاگ خود را فعال کنید برای این کار <a href="set.php?cp=16">اینجا کلیک کنید</a></div>
      </div>
         <?php
         }

         mysqli_close($con) ;
         ?>



   <?php
        include("footer.php");
            ?>