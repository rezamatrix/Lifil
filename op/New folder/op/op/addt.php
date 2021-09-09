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
<div class="box"><div class="box-header blue">بررسی محصولات</div>
      <?php
               $cp=intval($_GET['cp']);  
         if($_SESSION['lvl']==2){
                   if($cp==19){   if($_SESSION['lvl']==2){
              if(isset($_POST['name1'])){
              $idp=intval($_GET['id']);
              $idp2=htmlspecialchars($_POST['dalail']);
              mysqli_query($con,"UPDATE `amozsh` SET `dalil` = '$idp2' WHERE `id` ='$idp';")  ;
              mysqli_query($con,"UPDATE `amozsh` SET `acc` = '2' WHERE `id` ='$idp';")  ;
              }
              if(isset($_POST['name2'])){
               $idp=intval($_GET['id']);
                mysqli_query($con,"UPDATE `amozsh` SET `acc` = '1' WHERE `id` ='$idp';")  ;
              }
                            echo"<h3></h3>";
            if(empty($_GET['id'])){
          $op4=mysqli_query($con,"SELECT *FROM `amozsh`WHERE `acc` = 0 ") ;
            while($rop4=mysqli_fetch_array($op4)){
              $j1=$rop4['id'];
              $j2=$rop4['subgecet'];
              $j3=$rop4['filet'];
              if($j3==1){echo "فایل دانلودی تغیر کرده است";}
        ?>
            <a href="../index.php?id=<?php echo $j1; ?>" ><?php echo $j2; ?></a><br>
            <a href="addt.php?cp=19&id=<?php echo $j1; ?>">بررسی و ارسال نتایج</a><br>
            --------------------------------------------------------------------<br>
        <?php
            }
            } else{
                ?>
                     <form action="" method="POST">
                      <textarea name="dalail" style="height: 600px; width: 600px;"></textarea>

                      <input name="name1" type="submit" value="رد این محصول">
                     </form>
                       <form action="" method="POST">
                      <input name="name2" type="submit" value="تایید">
                     </form>
                <?php
            }
          }
          }
           }
         mysqli_close($con) ;
         ?>

        </div>

   <?php
        include("footer.php");
            ?>