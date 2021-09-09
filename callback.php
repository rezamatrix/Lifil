<?php
include("config/conf.php");
include("model/jdf.php");
include("model/countonline.php");
//include_once("model/sender.php");
@$MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
@$Amount = intval($_GET['a']); //Amount will be based on Toman
@$Authority = mysqli_real_escape_string($con,$_GET['Authority']);
 @ $re=intval($_GET['ih']);

 @   $sqlqurey3=mysqli_query($con,"SELECT price,idseler,idamozesh,idget,transget,namebuyer FROM `dl`WHERE id = '$re'");
@     $qw3=mysqli_fetch_assoc($sqlqurey3);
 @     $ih=$qw3['price'];
 @     $ih2=$qw3['idseler'];
 @     $ih3=$qw3['idamozesh'];
 @     $ih88=$qw3['namebuyer'];
@      $sqlqurey4=mysqli_query($con,"SELECT ghymat,clid,subgecet FROM `amozsh` WHERE id = '$ih3'");
@     $qw4=mysqli_fetch_assoc($sqlqurey4);
@        $p=$qw4['ghymat'];
@        $pdddd=$qw4['clid'];
@        $pdddds=$qw4['subgecet'];
@    $price = $ih ;
    $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentVerification(
[
'MerchantID' => $MerchantID,
'Authority' => $Authority,
'Amount' => $Amount,
]
);
if($result->Status == 100){

  if(empty($qw3['transget'])  and empty($qw3['idget'])){
                  $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);

   $i=0;
   $text1="";
    while($i<16){
    $text1.=$text[rand(0,35)];
    $i++;
       }
   echo "پرداخت موفقیت آمیز بوده است .";
        mysqli_query($con,"UPDATE `dl` SET `vazaiat` = '1' WHERE `id` =$re;");
        mysqli_query($con,"UPDATE `dl` SET `clid` = '$pdddd' WHERE `id` =$re;");
        mysqli_query($con,"UPDATE `dl` SET `idget` = '$Authority' WHERE `id` =$re;");
        mysqli_query($con,"UPDATE `dl` SET `transget` = '$Authority' WHERE `id` =$re;");
        mysqli_query($con,"UPDATE `dl` SET `lc` = '$text1' WHERE `id` =$re;");
        mysqli_query($con,"UPDATE `user` SET `mojodi` = `mojodi`+ $p WHERE `id` =$ih2;");
        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 5 WHERE `id` =$ih2;");
        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 5 WHERE `user` =$ih88;");
        $chat_id=$_SESSION['chatid'];
        $time=jdate("H:i:s j/n/Y",time());
                if(strlen($chat_id)>1){
        $textin=urlencode("خرید شما با موفقیت ثبت شد
        نام محصول:  $pdddds
        قیمت:$p
        تاریخ:$time
        ");
    text($textin,$token,$chat_id) ; }
            if(strlen(chatid($ih2,$con))>1){
           $textin2=urlencode("تراکنش جدید
        نام محصول:  $pdddds
        قیمت:$p
        تاریخ:$time
        ");

            text($textin2,$token,chatid($ih2,$con)) ;
          }
  }


}

?>
