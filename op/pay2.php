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
           $user=$_SESSION['user']    ;
?>

       <div class="box" dir="rtl">
  <div class="box-header blue" >درخواست واریز</div>
      <?php
             $cp=intval($_GET['cp']);
            if($cp==10){



           if(isset($_POST['send'])){
          $miz=intval($_POST['mizan']) ;
          $idc=intval($_POST['listb']) ;

             $idse = mysqli_query($con,"SELECT name,tell,email,mojodi FROM user WHERE user='$user' ");
             $bid=mysqli_fetch_assoc($idse) ;
             $idh1=$bid['name'];
             $idh2=$bid['tell'];
             $idh3=$bid['email'];
             $idh4=$bid['mojodi'];
             if($miz<=$idh4 and $miz>0 and isset($idc) and $miz>=20000){
                         $dl= mysqli_query($con,"SELECT *FROM `cart` WHERE iduser =$id and id=$idc") ;
                         $gg=mysqli_num_rows($dl);
                         $sd=($miz/100)*80;
                         $re=$miz-$sd;
                           if($gg==1){
          mysqli_query($con,"INSERT INTO `darkhast` (`name`, `user`, `tell`, `email`, `mablgh`, `vaziat`, `idc`) VALUES ('$idh1', '$user', '$idh2', '$idh3', '$sd', '0', '$idc');");
           mysqli_query($con,"UPDATE `user` SET `mojodi` = `mojodi`- $miz WHERE `user` = '$user' ;");
           mysqli_query($con,"UPDATE `op` SET `op1` = op1 + $re  WHERE `op`.`id` = 1;");

          }} }
                           $id= $_SESSION['user'];
             $idse = mysqli_query($con,"SELECT mojodi FROM user WHERE user='$id' ");
$bid=mysqli_fetch_assoc($idse) ;
             $idhsa=$bid['mojodi'];
 ?>      
 <div class="container">
 <br>
 <div class="alert alert-info">
  <strong>موجودی حساب شما:</strong> <?php echo $idhsa; ?>
</div>
 <div class="alert alert-info">
  <strong>توضیحات:</strong>حداقل برداشت 20000 هزار تومان می باشد با کارمزد 20%
</div></div>


               <form action="" method="POST" class="form-inline">
                    <div class="container">
                    <div class="input-group" dir="ltr">
    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
              <input name="mizan" type="text" placeholder="میزان درخواستی به تومان" class="form-control">
  </div>
  <br>
                                       <div class="input-group" dir="ltr">
    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>

              <select name="listb" size="1" class="form-control">
              <option value="0">کارت بانکی خود را انتخاب کنید</option>
                                     <?php
                         $id= $_SESSION['idb'];
                      $dl= mysqli_query($con,"SELECT *FROM `cart` WHERE iduser =$id ") ;
                       while($gg=mysqli_fetch_array($dl)){
                              $w1=$gg['bname'];
                              $w2=$gg['cart'];
                              $w3=$gg['id'];
                              echo"<option value=\"$w3\">$w2".'-'."$w1</option> ";
                       }

                       ?>
              </select>
  </div>
  <br>
                <input name="send" type="submit" value="تایید" class="btn btn-fw primary" style="font-family: Tahoma;">
               
                    </div>
                    </form>  <br>
          <?php

           $ds=mysqli_query($con,"SELECT mablgh,vaziat,idc FROM `darkhast` WHERE  `user` = '$user'ORDER BY `id` DESC") ;
           while($roqe=mysqli_fetch_array($ds)){
            $ttrt1=$roqe['mablgh'];
            $ttrt2=$roqe['vaziat'];
            $ttrt3=$roqe['idc'];
            $sd="alert-info";
            if($ttrt2==1){$sd="alert-success";}
                         $dl= mysqli_query($con,"SELECT *FROM `cart` WHERE iduser ='$id' and id='$ttrt3'  ") ;
                       $gg=mysqli_fetch_array($dl) ;
                              $w1=$gg['bname'];
                              $w2=$gg['cart'];

                     ?>
                     <div class="alert <?php echo $sd; ?>">
  <strong>درخواست : </strong>

               <?PHP
                echo "درخواست واریز  ".$ttrt1." تومان به حساب شما","&nbsp;&nbsp;&nbsp;"."شماره کارت :". $w1.'-'.$w2,"&nbsp;&nbsp;&nbsp;";

            if($ttrt2==0){echo "در حال بررسی","";}
            if($ttrt2==1){echo "واریز شده است","";}


                ?>  </div>
          <?php
           }
         }
         mysqli_close($con) ;
         ?>

          <br>
       </div>


   <?php
            include("footer.php");
            ?>