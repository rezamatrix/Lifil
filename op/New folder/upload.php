<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);


 } elseif(empty($_SESSION['pass']) and isset($_SESSION['user'])){
     header("location:lock.php");
 }

 else{
    header("location:../login.php");

 }  include("header.php");

?>
<div class="row" >

      <div class="col-sm-3">
      <div class="box"  dir="rtl">
      <div class="box-header blue" dir="rtl">فایل جدید</div>   <br>
      <?php
      $cp=intval($_GET['cp']);
          if($cp==17){
             ?>  <div dir="rtl">

     <div class="padding">
  <form action="uploadclinte.php" class="dropzone white">
    <div class="dz-message" ui-jp="dropzone" ui-options="{ url: 'uploadclinte.php' }">
        <h4 class="m-t-lg m-b-md"><img src="../img/drag-and-drop-icon.png" alt="" class="w-128" /></h4>

    </div>
  </form>

</div>
  </div>
  </div>
  </div>

                <div class="col-sm-9">

        <script src="../js/js.js"></script>

             <div class="btn-group m-r pull-md-2" dir="ltr">

              <?php
$id= $_SESSION['idb'];
@$news3=mysqli_query($con,"select id from upload WHERE  `sender`=$id ");
$rows1 = mysqli_num_rows($news3);

  $rows1= $rows1 / 24;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
      $rows3=$rows1 ;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a  onclick=\"showHint($rows1)\" class=\"btn btn-sm white\" id=\"rr$rows1\" lang=\"$rows3\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
            </div>
             <div class="col-sm-9 pull-md-2">
             <div class="box">&nbsp;
             <?php
             $idhd=mb($con);
              $mb=(($idhd/1024)/1024);
               $tr=($mb/1024)*100;
               $tr2=round($tr,3);
               $tr3=round($mb,3);
               echo "میزان حجم مصرفی : "."1024".'/'."$tr3";
             ?>
   <div class="progress mb-4">
        <div class="progress-bar progress-bar-striped progress-bar-animated info" style="width: <?php echo $tr2; ?>%"><span style="color: #000000"><?php echo $tr2; ?>%</span></div>
      </div> <br>
      </div>
             </div>

             <?php

               if(isset($_POST['del'])){
                       $rere=htmlspecialchars(mysqli_real_escape_string($con,$_POST['sdr']));
                   if(!preg_match( "/[:,\\ ^ ? ; & | ! ' # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $rere )){
                                  $rezal1 = mysqli_query($con,"select sender from upload WHERE filename = '$rere'");
      $eed1=mysqli_fetch_array($rezal1)   ;
                 $tf=$eed1['sender'] ;
                 $e=explode('.',$rere);
                 if($tf==$id){
                 if(end($e)=="zip"){
                         mysqli_query($con,"DELETE FROM upload WHERE `filename` = '$rere'");
                    $rt='../files/'.$_SESSION['user'].'/'.$rere;
      unlink($rt);
                 ?>
                                               <div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
          <?PHP
               } else{
                             mysqli_query($con,"DELETE FROM upload WHERE `filename` = '$rere'");
                       $rt='../imguser/'.$_SESSION['user'].'/'.$rere;
      unlink($rt);
                    ?>
                                               <div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
          <?PHP
               }
              }  }}


      ?>


            <div id="respons" lang="0"></div> <br>
            <div id="txtHint" lang="0"></div> <br>
                      <div>
            <div class="btn-group m-r pull-md-2" dir="ltr">

              <?php
$id= $_SESSION['idb'];
@$news3=mysqli_query($con,"select id from upload WHERE  `sender`=$id ");
$rows1 = mysqli_num_rows($news3);

  $rows1= $rows1 / 24;
    $rows1= ceil($rows1);
    $rows1= $rows1-1;
      $rows3=$rows1 ;
  while ($rows1 > -1){
   $rows2=$rows1+1;

  echo"<a  onclick=\"showHint($rows1)\" class=\"btn btn-sm white\" id=\"r$rows1\" lang=\"$rows3\"> <span style=\"color: #000000\">$rows2</span> </a>";

  --$rows1;
   }
   ?>
            </div>

          </div>
       </div>
      <?php
         }
      
         mysqli_close($con) ;
         ?>




</div>


   <?php
           include("footer.php");
            ?>