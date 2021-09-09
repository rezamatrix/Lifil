<?php
 include("../config/conf.php");
 @$conn=$_GET['con'];
 @$code=$_GET['code'];
 @$key=$_GET['key'];
 if(preg_match("/^[a-zA-Z0-9]+$/", $code)){
 if(preg_match("/^[a-zA-Z0-9]+$/", $key)){

                    $requry=mysqli_query($con,"SELECT lc,usein FROM `dl`WHERE `lc` = '$code' and `vazaiat`='1' and clid ='$key' ");
                    $rezas=mysqli_fetch_assoc($requry);
                        $lc=$rezas['lc'];
                        @$usein=$rezas['usein'];
                           @$con2=htmlspecialchars(mysqli_real_escape_string($con,$conn));
                        if(empty($usein)){
                          //  if(!preg_match( "/[,\\ ^ ? ; & | ! ' # $ % ^ *( ) € < > \\n\\r\\t\\s]+/", $conn )){

                              mysqli_query($con,"UPDATE `dl` SET `usein` = '$con2' WHERE `lc` ='$code' and clid ='$key';");
                        //}
                        }
                                   $requry2=mysqli_query($con,"SELECT usein FROM `dl`WHERE `lc` = '$code' and `vazaiat`='1'and clid ='$key'");
                    $rezas2=mysqli_fetch_assoc($requry2);
                        @$usein2=$rezas2['usein'];
                        if($usein2==$con2){
                         echo 'ok';
                        }  else{echo 'faild';}
 }
 }
?>