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
  $user=$_SESSION['user']   ;
?>

         <?php
              if(isset($_POST['re'])){
                $if=intval($_POST['id']) ;
                $ifs=intval($_POST['id2']) ;
                            $requry2q=mysqli_query($con,"SELECT uscunt FROM `amozsh`WHERE `id` ='$ifs'");
            $rezassq=mysqli_fetch_assoc($requry2q);

                 $reza25=$rezassq['uscunt'];
                 if($reza25==2){
                        mysql_query("UPDATE `dl` SET `usein` = '' WHERE `id` =$if and namebuyer  = '$user';");

                     }     }
         $i=1;
        $mya=array();
           $mya2="";
          $requry=mysqli_query($con,"SELECT id,namebuyer,idseler,namefile,idamozesh,price,lc,usein FROM `dl`WHERE `namebuyer` = '$user' and `vazaiat`='1'");
          while($rezas=mysqli_fetch_array($requry)){
            $reza1=$rezas['id'];
            $reza2=$rezas['namebuyer'];
            $reza3=$rezas['idseler'];
            $reza4=$rezas['namefile'];
            $reza5=$rezas['idamozesh'];
            $reza6=$rezas['price'];
            $lc=$rezas['lc'];
            $usein=$rezas['usein'];
            $requry2=mysqli_query($con,"SELECT sizefile,subgecet,icon,file,uscunt FROM `amozsh`WHERE `id` ='$reza5'");
            $rezass=mysqli_fetch_assoc($requry2);
                 $reza7=$rezass['sizefile'];
                 $reza8=$rezass['subgecet'];
                 $reza9=$rezass['icon'];
                 $reza19=$rezass['file'];
                 $reza25=$rezass['uscunt'];
                   $requry3=mysqli_query($con,"SELECT email,name,user,tell FROM `user`WHERE `id` = '$reza3'");
            $rezass1=mysqli_fetch_assoc($requry3);
                 $reza10=$rezass1['email'];
                 $reza11=$rezass1['name'];
                 $reza12=$rezass1['user'];
                 $reza13=$rezass1['tell'];
                  $requry4=mysqli_query($con,"SELECT token FROM `user`WHERE `id` = '$reza3'");
            $rezass2=mysqli_fetch_assoc($requry4);
            @$reza15=$rezass2['token'];

          if($i!=0){
          $mya2 .='*';  }
          $mya2 .=$reza8.'^';
          $mya2 .=round((($reza7/1024)/1024),3)."MB".'^';
          $mya2 .="dlc.php?md5=".$reza1;
                 $i++;
          }
echo   $mya2;
          ?>


