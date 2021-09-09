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
?>
      <div class="box">
  <div class="box-header blue" >مدیریت نظرات


  </div>
  <br>
       <div class="btn-group container">
<?php

 $id= $_SESSION['idb'];
@$news3=mysqli_query($con,"select id from coment WHERE  `s`=$id");
$rows1 = mysqli_num_rows($news3);
  $rows1= $rows1 / 20;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a href=\"?cp=5&p=$rows1\" class=\"btn white\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
   </div>
      <?php
          $cp=intval($_GET['cp']);   
          if($cp==5){
         echo"<h3></h3>";


                            @$user =$_SESSION['user'];

   $idsesss = mysqli_query($con,"SELECT newcom FROM user WHERE user='$user' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['newcom'];
         if($idhsssa>0){
          mysqli_query($con,"UPDATE `user` SET `newcom` = 0 WHERE `id` =$id;") ;
              }
         if(isset($_GET['sendacc'])){
             $idf=intval($_GET['idf']);
                 $tttt=mysqli_query($con,"SELECT s FROM `coment` WHERE `id` ='$idf'");
     $ysq=mysqli_fetch_assoc($tttt);
       $wedsf=$ysq['s'];
       if($id==$wedsf){
            mysqli_query($con,"UPDATE `coment` SET `active` = '1' WHERE `coment`.`id` ='$idf';");
            } }
            if(isset($_GET['senddeacc'])){

                $idf=intval($_GET['idf']);
                                 $tttt=mysqli_query($con,"SELECT s FROM `coment` WHERE `id` ='$idf'");
     $ysq=mysqli_fetch_assoc($tttt);
       $wedsf=$ysq['s'];
       if($id==$wedsf){
             mysqli_query($con,"UPDATE `coment` SET `active` = '-1' WHERE `coment`.`id` ='$idf';");

            } }
            if(isset($_GET['sendd'])){
                $idf=intval($_GET['idf']);
                                $tttt=mysqli_query($con,"SELECT s FROM `coment` WHERE `id` ='$idf'");
     $ysq=mysqli_fetch_assoc($tttt);
       $wedsf=$ysq['s'];
       if($id==$wedsf){
              mysqli_query($con,"DELETE FROM `coment` WHERE `coment`.`id` = '$idf'");
            }   }
                        ?>
                                                <div class="table-responsive container" >
      <table class="table table-bordered m-0" >
        <thead>
          <tr >
              <th><p style="text-align: right">#</p></th>
            <th><p style="text-align: right">نظر برای محصول</p></th>
            <th><p style="text-align: right">فرستند </p></th>
            <th><p style="text-align: right">تاریخ</p></th>
            <th><p style="text-align: right">متن</p></th>
            <th><p style="text-align: right">وضعیت</p></th>
            <th><p style="text-align: right">کنترل</p></th>
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
         $dl1z= mysqli_query($con,"SELECT name,id,tarikh,matn,idamozesh,active FROM `coment` WHERE s =$id and (active=-1 or active=1 or active=0) ORDER BY `id` DESC LIMIT $page , 20") ;
                       while($gg1z=mysqli_fetch_array($dl1z)){
                        $an1s=$gg1z['name'];
                        $an0s=$gg1z['id'];
                        $an2s=$gg1z['tarikh'];
                        $an3s=$gg1z['matn'];
                        $an4ss=$gg1z['idamozesh'];
                        $an4s=$gg1z['active'];
                        $sqlqurey=mysqli_query($con,"SELECT subgecet FROM `amozsh` WHERE `id` =$an4ss ");
  $qw=mysqli_fetch_assoc($sqlqurey);
  $w1=$qw['subgecet'];
  ?>
          <tr>
            <td><?php echo$i; ?></td>
            <td><?php echo $w1; ?></td>
            <td><?php echo $an1s; ?></td>
            <td><?php echo  jdate("H:i:s j/n/Y",$an2s)  ; ?></td>
      <td><?php echo nl2br("$an3s"); ?> </td>
      <td><?php
      if($an4s==1){echo "<span style=\"font-size: 16pt\">فعال</span>";}
if($an4s==-1){echo "<span style=\"font-size: 16pt\">غیرفعال</span>";}
if($an4s==0){echo "<span style=\"font-size: 16pt\">بررسی</span>";}

       ?> </td>
      <td>
      <a href="com.php?cp=5&sendacc=sendacc&idf=<?PHP echo $an0s; ?>" data-toggle=" tooltip"title="پذیرفتن"><button class="btn btn-icon btn-rounded btn-success"><i class="fa fa-plus"></i></button></a>
      <a href="com.php?cp=5&senddeacc=senddeacc&idf=<?PHP echo $an0s; ?>" data-toggle="tooltip" title="نپذیرفتن"><button class="btn btn-icon btn-rounded btn-danger"><i class="fa fa-remove"></i></button></a>
      <a href="com.php?cp=5&sendd=sendd&idf=<?PHP echo $an0s; ?>" data-toggle="tooltip" title="حذف"><button class="btn btn-icon btn-rounded btn-danger"><i class="fa fa-recycle"></i></button></a>
</td>
        </tr>
  <?php

  ++$i;
}
?>
     </tbody>
      </table>
    </div>
<?php
         }
         mysqli_close($con) ;
         ?>


       </div>



   <?php
           include("footer.php");
            ?>