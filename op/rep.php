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
<div class="box"><div class="box-header blue"> گزارشات تخلف</div>
      <?php
           if($_SESSION['lvl']==2){
               $cp=intval($_GET['cp']); 
                        if($cp==21){   if($_SESSION['lvl']==2){
                 
                $st=mysqli_query($con,"SELECT *FROM `tkhalof` WHERE `ok`='0' ORDER BY `tkhalof`.`time`  DESC");
                while($stt=mysqli_fetch_array($st)){
                 $m1=$stt['matn'];
                 $m2=$stt['id2'];
                 $m3=$stt['time'];
                 echo nl2br(htmlspecialchars($m1))."<br>".$m2.jdate("j/n/Y H:i:s",$m3);
                 echo "<br>";
                 ?>
                 <form action="" method="POST">
                    <input type="hidden" name="ds" value="<?php echo $stt['id'] ; ?>">
                    <input name="d" type="submit" value="d">
                 </form>
                 <?php
                 echo "<br>----------------------------------------------------";

                }
                if(isset($_POST['d'])){
                    $id=intval($_POST['ds']);
                mysqli_query($con,"UPDATE `tkhalof` SET `ok` = '1' WHERE `tkhalof`.`id` =$id;");
          } }      }

           }
         mysqli_close($con) ;
         ?>


        </div>

   <?php
        include("footer.php");
            ?>