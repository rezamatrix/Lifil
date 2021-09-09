<?php
include("config/conf.php");
@$md5 = mysqli_real_escape_string($con,$_GET['md5']);
if(!isset($md5)){
}
else{    if(isset($_SESSION['pass']) and  isset($_SESSION['user'])){
              $arryfile=explode(".",$md5);
             $t=count($arryfile);
             if($t==2){
			$token = $arryfile['0'];
			$id = $arryfile['1'];
               $token=mysqli_real_escape_string($con,$token);
              $id= mysqli_real_escape_string($con,$id);
            $rezal = mysqli_query($con,"select realname,filename,sender from upload WHERE id = '$id' and token='$token' ");
            $eed=mysqli_fetch_assoc($rezal);
            $eedrow1=$eed['realname'];
            $eedrow2=$eed['filename'];
            $eedrow3=$eed['sender'];
              $id2= $_SESSION['idb'];
            $usre = mysqli_query($con,"select user from user WHERE id = '$eedrow3' ");
            $user=mysqli_fetch_assoc($usre);
             $userrow=$user['user'];
             $dd=mysqli_real_escape_string($con,$eedrow2);
               $sqlqurey=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `file` ='$dd'");
                $qw=mysqli_fetch_assoc($sqlqurey);
                  $w0=$qw['id'];
                                 $sqlqureys=mysqli_query($con,"SELECT id FROM `dled` WHERE `ida` ='$w0' and idd='$id2'");
                $qws=mysqli_num_rows($sqlqureys);

             if($qws<=0){
             mysqli_query($con,"INSERT INTO `dled` (`ida`, `idd`) VALUES ('$w0', '$id2');");
              mysqli_query($con,"UPDATE `amozsh` SET `dled` =dled + 1 WHERE `id` = $w0;");

              }
              if($_SESSION['user']==$userrow){
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.md5($eedrow1).".zip");
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: '.filesize("files/$userrow/$eedrow2"));
			ob_clean();
			flush();
            ob_flush();
			readfile("files/$userrow/$eedrow2");
		 }     }  }
                 }



?>
