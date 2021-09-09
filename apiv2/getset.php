<?php
include("../config/conf.php");
$urlgddd=$_SERVER["PHP_SELF"];
$ar1ddd=strpos($urlgddd,'auhacc');

if(isset($_SESSION['pass']) and isset($_SESSION['user']) and $_SESSION['tauh']==1 and strlen($_SESSION['auh'])>3 and strlen($ar1ddd)<3){
        //header("location:../auhacc.php");
    exit();
}else{
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
    $time=time();
    $time2=time()+120;
    $id=$_SESSION['idb'];
                    $requry=mysqli_query($con,"SELECT uuid,timetorun FROM `user`WHERE `id` = '$id'  ");
                    $rezas=mysqli_fetch_assoc($requry);
                        @$usein=$rezas['uuid'];
                        @$timetorun=$rezas['timetorun'];
   @$conn=$_GET['con'];
    @$con2=htmlspecialchars(mysqli_real_escape_string($con,$conn));
                            if(empty($usein)){
                              mysqli_query($con,"UPDATE `user` SET `uuid` = '$con2' WHERE `id` ='$id';");

                        }
                        if($timetorun<=$time){
                         mysqli_query($con,"UPDATE `user` SET `uuid` = '$con2' WHERE `id` ='$id';");
                         mysqli_query($con,"UPDATE `user` SET `timetorun` = '$time2' WHERE `id` ='$id';");

                        }

                                                           $requry2=mysqli_query($con,"SELECT uuid FROM `user`WHERE `id` = '$id' ");
                    $rezas2=mysqli_fetch_assoc($requry2);
                        @$usein2=$rezas2['uuid'];
                        if($usein2==$con2){
                         echo 'ok';
                        }  else{echo 'faild';}  }   } 
?>