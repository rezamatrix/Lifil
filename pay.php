<?php
  include("config/conf.php");
  include("model/jdf.php");
include_once("model/sender.php");
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
//$url = 'http://payline.ir/payment-test/gateway-send';
$api = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
$idm=intval($_GET['id']) ;
  $sqlqurey=mysqli_query($con,"SELECT idsender,id,ghymat,takhfif,file,subgecet FROM `amozsh` WHERE `id` =$idm");
  $qw=mysqli_fetch_assoc($sqlqurey);
  $w0=$qw['idsender'];
  $w1=$qw['id'];
  $w2=$qw['ghymat'];
  $w3=$qw['takhfif'];
  $w4=$qw['file'];
  $wsss=$qw['subgecet'];
     $if=$_SESSION['user'] ;
   $sqlqurey2=mysqli_query($con,"SELECT user,name,tell,email FROM `user` WHERE `user` ='$if'");
   $qw2=mysqli_fetch_assoc($sqlqurey2);
   $ww1=$qw2['user'];
   $ww2=$qw2['name'];
   $ww3=$qw2['tell'];
   $ww4=$qw2['email'];

$amount = ceil($w2-(($w2/100)*$w3));
$pric= $amount;
$sqlqurey4=mysqli_query($con,"SELECT id FROM `dl`WHERE `namebuyer` = '$if'AND `idseler` = '$w0'AND `idamozesh` = '$w1'");
     $qw4=mysqli_fetch_assoc($sqlqurey4);
      $ih2=$qw4['id'];
    if(isset($ih2)){

    }

    else{
        $time=time();
     mysqli_query($con,"INSERT INTO `dl` (`namebuyer`, `idseler`, `namefile`, `idamozesh`, `vazaiat`, `price`, `au`, `time`) VALUES ('$if', '$w0', '$w4', '$w1', '0', '$pric', '0', '$time');");
   }
    $sqlqurey3=mysqli_query($con,"SELECT id FROM `dl`WHERE `namebuyer` = '$if'AND `idseler` = '$w0'AND `idamozesh` = '$w1'");
     $qw3=mysqli_fetch_assoc($sqlqurey3);
      $ih=$qw3['id'];
    $redirect = $web."/callback.php?ih=$ih&a=$pric";
$idvercher=rand(0,99999)."br".rand(100,20000)."-".rand(2000,50000)."cd";

$client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
$result = $client->PaymentRequest(
[
'MerchantID' => $api,
'Amount' => $pric,
'Description' => "$ww2/$ww1/$wsss",
'Email' => "$ww4",
'Mobile' => "$ww3",
'CallbackURL' => $redirect,
]
);
if($result->Status == 100){
            mysqli_query($con,"UPDATE `dl` SET `au` = '$idvercher' WHERE `id` =$ih;");
        mysqli_query($con,"UPDATE `dl` SET `price` = '$price' WHERE `id` =$ih;");
        mysqli_query($con,"UPDATE `dl` SET `time` = '$time' WHERE `id` =$ih;");
       Header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);


}
}else{
      echo'ERR: '.$result->Status;
header("location:login.php");   }
?>