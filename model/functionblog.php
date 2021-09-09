<?php
if (file_exists('../config/conf.php')) {
include("../config/conf.php");
}
if (file_exists('config/conf.php')) {
include("config/conf.php");
}
function sender($mat,$moz,$mnu,$rtty,$con,$mm){
$time=time();
$idsen=$_SESSION['user'];
 $idusefr=$_SESSION['idb'];
 $reza=1;
 $mat2=mysqli_real_escape_string($con,$mat);
 $moz2=mysqli_real_escape_string($con,$moz);
  $rttye2=mysqli_real_escape_string($con,$rtty);
mysqli_query($con,"INSERT INTO `blog` (`subgect` ,`matn` ,`Tarikh` ,`idsender` ,`idmnue` ,`barchasb` ,`name`,`menu`)VALUES ('$moz2', '".$mat2."', '$time', '$idusefr', '$mnu', '$rttye2', '$idsen','$mm');");
return $reza;
}
function senderm($mname,$con){

 $idusefr=$_SESSION['idb'];
mysqli_query($con,"INSERT INTO `mnue` (`idmaker` ,`name`)VALUES ('$idusefr', '$mname');");

}

function editblog($moze,$mate,$rttye,$mnue,$iduser,$idblog,$con,$mm){
   $idusefr=$_SESSION['idb'];
    $reza=1;
     $mat2=mysqli_real_escape_string($con,$mate);
 $moz2=mysqli_real_escape_string($con,$moze);
 $rttye2=mysqli_real_escape_string($con,$rttye);
   if($idusefr==$iduser){
 mysqli_query($con,"UPDATE `blog` SET `subgect` = '$moz2' WHERE `id` =$idblog and idsender=$iduser;");
 mysqli_query($con,"UPDATE `blog` SET matn = '$mat2' WHERE `id` =$idblog and idsender=$iduser;");
 mysqli_query($con,"UPDATE `blog` SET barchasb = '$rttye2' WHERE `id` =$idblog and idsender=$iduser;");
 mysqli_query($con,"UPDATE `blog` SET idmnue = '$mnue' WHERE `id` =$idblog and idsender=$iduser;");
 mysqli_query($con,"UPDATE `blog` SET menu = '$mm' WHERE `id` =$idblog and idsender=$iduser;");
 }
 return $reza;
}
function editm($mname,$cm,$id1,$id2,$con){
     $idusefr=$_SESSION['idb'];
   if($idusefr==$id2){

    mysqli_query($con,"UPDATE mnue SET name = '$mname' WHERE `id` =$id1 and idmaker=$id2;");
    mysqli_query($con,"UPDATE mnue SET color = '$cm' WHERE `id` =$id1 and idmaker=$id2;");

   }
}
 function activeblog($vaziat,$con){
      $idusefr=$_SESSION['idb'];
  mysqli_query($con,"UPDATE `user` SET `activeblog` = '$vaziat' WHERE `id` =$idusefr;");
  if($vaziat==0){
  $_SESSION['activeblog']=0; }
    if($vaziat==1){
  $_SESSION['activeblog']=1; }
 }
 function activenazarat($vaziat,$con){
      $idusefr=$_SESSION['idb'];
  mysqli_query($con,"UPDATE `user` SET `nazarat` = '$vaziat' WHERE `id` =$idusefr;");
  if($vaziat==0){
  $_SESSION['nazarat']=0; }
    if($vaziat==1){
  $_SESSION['nazarat']=1; }
 }
 function chengpass($newpassword,$con){

   $idusefr=$_SESSION['idb'];
  mysqli_query($con,"UPDATE `user` SET password = '$newpassword' WHERE `id` =$idusefr;");

  }
  function amozesh($s,$m,$p1,$p2,$p3,$p4,$p5,$f,$i,$fr,$fe,$si,$bar,$das,$con,$p1d,$p2d){
      $times=time();
      $idusefr=$_SESSION['idb'];
      $idsen=$_SESSION['user'];
     $p=$p1.",".$p2.",".$p3.",".$p4.",".$p5;
     if($fr==1){
      $fe=0;
     }
       $m2=mysqli_real_escape_string($con,$m);
       $s2=mysqli_real_escape_string($con,$s);
       $bar2=mysqli_real_escape_string($con,$bar);
      mysqli_query($con,"INSERT INTO `amozsh` (`idsender`, `tarikh`, `matn`, `subgecet`, `pic5`, `file`, `accfree`, `ghymat`, `takhfif`, `icon`, `sizefile`, `user`, `daste`, `barchasb`, `lic`, `uscunt`) VALUES ('$idusefr', '$times', '$m2', '$s2', '$p', '$f', '$fr', '$fe', '0', '$i', '$si', '$idsen', '$das', '$bar2','$p1d','$p2d');");
  }
   function uploadsql($name,$len,$type,$realname,$con){
        $idusefr=$_SESSION['idb'];
        $times=time();
         $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);
   $text1=$text[rand(0,35)];
   $text2=$text[rand(0,35)];
   $text3=$text[rand(0,35)];
   $text4=$text[rand(0,35)];
   $text5=$text[rand(0,35)];
   $text6=$text[rand(0,35)];
   $text7=$text[rand(0,35)];
   $text8=$text[rand(0,35)];
   $text9=$text[rand(0,35)];
   $text10=$text[rand(0,35)];
   $text11=$text[rand(0,35)];
   $text12=$text[rand(0,35)];
   $text13=$text1.$text2.$text3.$text4.$text5.$text6.$text7.$text8.$text9.$text10.$text11.$text12;
$activecode=$text13;
        mysqli_query($con,"UPDATE `user` SET `mb` = `mb`+'$len' WHERE `id` ='$idusefr';");
        mysqli_query($con,"INSERT INTO `upload` (`sender`, `filename`, `lenght`, `type`, `time`, `realname`, `token`) VALUES ('$idusefr', '$name', '$len', '$type', '$times', '$realname', '$activecode');") ;
   }
   function mb($con){
                     $idusefr=$_SESSION['idb'];
               $idse = mysqli_query($con,"SELECT mb FROM user WHERE id='$idusefr'");
$bid=mysqli_fetch_assoc($idse) ;
             $idhd=$bid['mb'];
             return $idhd;
   }

?>