<?php


function online($name,$con){
$time = time() + 900;
mysqli_query($con,"UPDATE `user` SET `timeonline` = '$time' WHERE `user` ='$name';");
$timm=  time();
mysqli_query($con,"DELETE FROM dlfile WHERE `time to end` < '$timm'");
}
function totalonline($con){
$time2 = time();
$re1=mysqli_query($con,"SELECT *FROM `user`WHERE `timeonline` > '$time2'");
$countonlin=mysqli_num_rows($re1) ;
return  $countonlin;
}
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //check ip from share internet
        $ip=$_SERVER['HTTP_CLIENT_IP'];  }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //to check ip is pass from proxy
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];   }
    else {
        $ip=$_SERVER['REMOTE_ADDR'];    }

    return $ip;
}        function chatid($id,$con){
                    $idse = mysqli_query($con,"SELECT chatid FROM user WHERE id='$id'");
$bid=mysqli_fetch_assoc($idse) ;
             $idhd=$bid['chatid'];
               return $idhd;
     }
     function text($textin,$token,$chat_id){
    $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$textin;
    file_get_contents($url);
}
?>
