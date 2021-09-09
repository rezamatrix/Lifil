<?php
include("../config/conf.php");
$urlgddd=$_SERVER["PHP_SELF"];
$ar1ddd=strpos($urlgddd,'auhacc');
if(isset($_SESSION['pass']) and isset($_SESSION['user']) and $_SESSION['tauh']==1 and strlen($_SESSION['auh'])>3 and strlen($ar1ddd)<3){
    // header("location:../auhacc.php");  
    exit();
}else{
 @$key=$_GET['key'];
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
 if(preg_match("/^[a-zA-Z0-9]+$/", $key)){
    $requry=mysqli_query($con,"SELECT id FROM `dl`WHERE `vazaiat`='1' and clid ='$key' ");
                        $rezas=mysqli_fetch_assoc($requry);
                        $id= $rezas['id'];
 if($id>0) {echo "ok";}

   }
 }  }

?>