<?php

function login($ii,$con,$id,$cid,$token){

if($ii!=1 && $ii!=3){$reza="<script type=\"text/javascript\">  window.location.href = \"op/index.php?cp=1\";  </script>  " ;
    return $reza;}
if($ii==1){
  $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<6){
    $text1.=$text[rand(0,35)];
    $i++;
       }
 mysqli_query($con,"UPDATE `user` SET `auh` = '$text1' WHERE `id` =$id ");
   //  $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$cid."&text=کد ورود به اکانت :".$text1 ;
    //file_get_contents($url);

header("location:auhacc.php");
return $text1;
}
  if($ii==3){
      $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<6){
    $text1.=$text[rand(0,35)];
    $i++;
       }
 mysqli_query($con,"UPDATE `user` SET `auh` = '$text1' WHERE `id` =$id ");
  //   $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$cid."&text=کد ورود به اکانت :".$text1 ;
  //  file_get_contents($url);

header("location:../auhacc.php");
return $text1;
  }
}
function loginkey(){

 $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<32){
    $text1.=$text[rand(0,35)];
    $i++;
       }
       $_SESSION['key']=$text1;
       return $text1;

}

?>