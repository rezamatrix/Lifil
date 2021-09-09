<?php
include("config/conf.php");
include("model/countonline.php");
include("model/fundl.php");
@$md5 = mysqli_real_escape_string($con,$_GET['md5']);
if(!isset($md5)){
}
else{
    if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
                  $requry=mysqli_query($con,"SELECT namebuyer,idseler,namefile,idamozesh,vazaiat FROM `dl`WHERE `id` = '$md5'");
        $rezas=mysqli_fetch_assoc($requry);
            $reza2=$rezas['namebuyer'];
            $reza3=$rezas['idseler'];
            $reza4=$rezas['namefile'];
            $reza6=$rezas['vazaiat'];
            $reza25=$rezas['idamozesh'];
                         $requry2=mysqli_query($con,"SELECT sizefile,subgecet,icon,file FROM `amozsh`WHERE `id` ='$reza25'");
            $rezass=mysqli_fetch_assoc($requry2);
                 $reza7=$rezass['sizefile'];
                 $reza8=$rezass['subgecet'];
                 $reza9=$rezass['icon'];
                 $reza19=$rezass['file'];
            $rezal = mysqli_query($con,"select realname,filename,sender from upload WHERE filename = '$reza19' ");
            $eed=mysqli_fetch_assoc($rezal);
            $eedrow1=$eed['realname'];
            $eedrow2=$eed['filename'];
            $eedrow3=$eed['sender'];

            $usre = mysqli_query($con,"select user from user WHERE id = '$eedrow3' ");
            $user=mysqli_fetch_assoc($usre);
             $userrow=$user['user'];
             if($reza6==1){
                 $ip=getRealIpAddr()  ;
                 $time=time()+86400;
                                   $usred = mysqli_query($con,"select ip,`time to end` from dlfile WHERE `nameseller` = '$userrow' and `namefile`='$reza19' and `namebuyer` ='$reza2'");
            $usera=mysqli_fetch_assoc($usred);
             $userrowa=$usera['ip'];
             $userrowa2=$usera['time to end'];
             if(isset($userrowa2) and isset($userrowa)){
              }
              else{
              mysqli_query($con,"INSERT INTO `dlfile` (`nameseller`, `namefile`, `ip`, `time to end`, `namebuyer`, `idbuyer`) VALUES ('$userrow', '$reza19', '$ip', '$time', '$reza2', '0');");
                }
                  $usred = mysqli_query($con,"select ip,`time to end` from dlfile WHERE `nameseller` = '$userrow' and `namefile`='$reza19'  and `namebuyer` ='$reza2'");
            $usera=mysqli_fetch_assoc($usred);
             $userrowa=$usera['ip'];
             $userrowa2=$usera['time to end'];
              if($userrowa==$ip){
              if($userrowa2>= time()){
            if($_SESSION['user']==$reza2){
                     //$ids=session_id();
/*		 	header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.md5($eedrow1).".zip");
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: public');
			header('Pragma: public');
			header('Content-Length: '.filesize("files/$userrow/$eedrow2"));
			ob_clean();
			flush();*/
            //ob_flush();
			//readfile("files/$userrow/$eedrow2");
            download_file("files/$userrow/$eedrow2",'application/octet-stream', TRUE);


            }
             }
            }
             }
             }
             }





?>
