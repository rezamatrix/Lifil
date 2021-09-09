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
     $idusefr=$_SESSION['idb'];
                $id= $_SESSION['idb'];
               $idse = mysqli_query($con,"SELECT acc2,phacc,emailacc FROM user WHERE id='$id'");
$bid=mysqli_fetch_assoc($idse) ;
             $idh=$bid['emailacc'];
             $active1=$bid['phacc'];
             $active2=$bid['acc2'];
           if($idh==1 and $active1==1 and $active2==1){
 if(isset($_POST['ok'])){

                      $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<8){
    $text1.=$text[rand(0,35)];
    ++$i;
       }
 mysqli_query($con,"INSERT INTO `clide` (`clid`, `ida`, `ids`) VALUES ('$text1', '0', '$idusefr');") ;
 }
 if(isset($_POST['del'])){
     $do1= intval($_POST['do1']);
     $do2= intval($_POST['do2']);

 mysqli_query($con,"UPDATE `amozsh` SET `clid` = '' WHERE `id` = '$do2' and idsender='$idusefr';");
 mysqli_query($con,"UPDATE `clide` SET `ida` = '0' WHERE `id` = '$do1' and ids='$idusefr';");
 mysqli_query($con,"UPDATE `dl` SET `clid` = '' WHERE `idamozesh` = '$do2';");
 }
  if(isset($_POST['s'])){
     $do1= intval($_POST['do1']);
     $do2= intval($_POST['do2']);
              $sel= mysqli_query($con,"SELECT clid,ida,id FROM `clide` WHERE `ids` ='$idusefr'and id = '$do1'  ORDER BY id  DESC") ;
         $del=mysqli_fetch_array($sel);
         $sela1=$del['clid'];
            $sela= mysqli_query($con,"SELECT clid FROM `amozsh` WHERE `idsender` ='$idusefr'and id = '$do2'  ORDER BY id  DESC") ;
         $dela=mysqli_fetch_array($sela);
         $sela1a=$dela['clid'];
         if(empty($sela1a)){
 mysqli_query($con,"UPDATE `amozsh` SET `clid` = '$sela1' WHERE `id` = '$do2' and idsender='$idusefr';");
 mysqli_query($con,"UPDATE `clide` SET `ida` = '$do2' WHERE `id` = '$do1' and ids='$idusefr';");
  mysqli_query($con,"UPDATE `dl` SET `clid` = '$sela1' WHERE `idamozesh` = '$do2';");
 }
 }
?>

<div class="box" dir="rtl" >
  <div class="box-header blue" >کلید</div>
  <form  action="" method="POST" class="container">
  <br>
   <input name="ok" type="submit" value="ایجاد کلید جدید"class="btn btn-fw primary" style="font-family: Tahoma;">
  </form>
  <div class="table-responsive container" >
      <table class="table table-bordered m-0" >
           <thead>
          <tr><th ><p style="text-align: right">ID</p></th>
          <th ><p style="text-align: right">کلید</p></th>
           <th ><p style="text-align: right">متصل</p></th>
           <th ><p style="text-align: right">کنترل</p></th>

           </tr>
             </thead>
  <?php

         $sel= mysqli_query($con,"SELECT clid,ida,id FROM `clide` WHERE `ids` ='$idusefr' ORDER BY id  DESC") ;
         while($del=mysqli_fetch_array($sel)){
         $sela1=$del['clid'];
         $sela2=$del['ida'];
         $sela3=$del['id'];
         ?>  <tr>
          <td><?php echo $sela3;  ?></td>
          <td><?php echo $sela1;  ?></td>
          <td><?php

          @      $sqlqurey4=mysqli_query($con,"SELECT subgecet FROM `amozsh` WHERE id = '$sela2' and idsender='$idusefr';");
@     $qw4=mysqli_fetch_assoc($sqlqurey4);
@        $p=$qw4['subgecet'];

        if(isset($p)){echo "متصل به :".$p;}else{echo "بدون اتصال";}
          ?></td>
          <td>

          <?php
          if(isset($p)){
           ?>
                <form action="" method="POST">
                    <input type="hidden" name="do1" value="<?php echo $sela3; ?>">
                    <input type="hidden" name="do2" value="<?php echo $sela2; ?>">
                <input name="del" type="submit" value="قطع اتصال" class="btn btn-fw primary" style="font-family: Tahoma;">
                </form>
           <?php
          }else{


          ?>
               <form action="" method="POST">
                        <input type="hidden" name="do1" value="<?php echo $sela3; ?>">
                                 <select name="do2" class="form-control">
                       <option >یک محصول را برای اتصال انتخاب کنید</option>
<?php

   $rezal = mysqli_query($con,"select id,subgecet from amozsh  WHERE idsender='$idusefr'");
     while( $eed=mysqli_fetch_array($rezal))
     {
        $rr1=$eed['id'] ;
        $rr2=$eed['subgecet'] ;
          if($q5==$rr1){
           $d="selected=\"selected\"";
          }
         echo"<option value=\"$rr1\" $d >$rr2</option>";
      }
      ?>
 </select>     <input name="s" type="submit" value="برقراری اتصال" class="btn btn-fw primary" style="font-family: Tahoma;">
               </form>

          <?php
          }
          ?>

          </td>  </tr>
         <?php
         }

  ?>
            </table>
  </div>
  </div>

     <?php
   }else{
       ?>
            <div class="box"><div class="box-header blue">تایید هویت</div>
               <center>   <img src="../img/like.png" class="img-circle w-128">  </center>
            <?php

            if($idh!=1){echo "<p style=\"text-align: center\">ایمیل خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active1!=1){echo "<p style=\"text-align: center\">شماره تلفن همراه خود را فعال کنید برای این کار به بخش تنظیمات بروید</p>";}
            if($active2!=1){echo "<p style=\"text-align: center\"> کارت ملی خود را  ارسال کنید برای این کار به بخش تنظیمات بروید</p>";}

            ?>

            </div>
       <?php
   }
         mysqli_close($con) ;
         ?>



   <?php
       include("footer.php");
            ?>