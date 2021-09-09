
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
                      $id= $_SESSION['idb'];
                       if(isset($_GET['sdr'])){$rere=intval($_GET['sdr']);}
                       if(isset($_POST['sdr'])){$rere=intval($_POST['sdr']);}
                       if(isset($rere)) {
                   if(!preg_match( "/[:,\\ ^ ? ; & | !  # $ % ^ *( ) '  € < > \\n\\r\\t\\s]+/", $rere )){
                                  $rezal1 = mysqli_query($con,"select sender,filename,lenght from upload WHERE id = '$rere'");
      $eed1=mysqli_fetch_array($rezal1)   ;
                 $tf=$eed1['sender'] ;
                 $tf2=$eed1['filename'] ;
                 $len=$eed1['lenght']   ;
                 $rezad = mysqli_query($con,"SELECT id FROM `amozsh` WHERE `file` = '$tf2' ");
                   $ad= mysqli_num_rows($rezad);
                 $e=explode('.',$tf2);
                 if($tf==$id){
                 if(end($e)=="zip"){
                     if($ad==0){
                         mysqli_query($con,"UPDATE `user` SET `mb` = `mb`-'$len' WHERE `id` ='$id';");
                         mysqli_query($con,"DELETE FROM upload WHERE `id` = '$rere'");
                    $rt='../files/'.$_SESSION['user'].'/'.$tf2;
      unlink($rt);
                 ?>
                                               <div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
          <?PHP
              }else{

               ?>
                                                                   <div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>خطا!</strong>  فایل در حال استفاده است.
</div>

               <?php
               }} else{
               mysqli_query($con,"UPDATE `user` SET `mb` = `mb`-'$len' WHERE `id` ='$id';");
                             mysqli_query($con,"DELETE FROM upload WHERE `id` = '$rere'");
                       $rt='../imguser/'.$_SESSION['user'].'/'.$tf2;
      unlink($rt);
                    ?>
                                               <div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>حذف!</strong> حذف شد.
</div>
          <?PHP
               }
              }  }  }

?>