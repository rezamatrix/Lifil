<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){

  $uesr=$_SESSION['user'];
  $fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
$rand6=rand(9999,99999999);
if (!$fileTmpLoc) { // if file not chosen

    exit();
}
  $pic6=explode(".",$_FILES["file"]["name"]) ;
  $pic6=explode(".",$_FILES["file"]["name"]) ;
               $pic6e=$rand6."we.".end($pic6) ;
               if(end($pic6)=="jpg" or end($pic6)=="png" or end($pic6)=="gif" or end($pic6)=="jpeg"){
                    if(mb($con)+$fileSize <= 1073741824){
                 if(move_uploaded_file($_FILES["file"]["tmp_name"],"../imguser/$uesr/" . $pic6e)){
     $_SESSION['size']=$fileSize;
     $_SESSION['namefile']=$pic6e;
   uploadsql($pic6e,$fileSize,end($pic6),$fileName,$con);
    }
}

               }
               if(end($pic6)=="zip" ){
                    if(mb($con)+$fileSize <= 1073741824){
if(move_uploaded_file($_FILES["file"]["tmp_name"],"../files/$uesr/" . $pic6e)){
     $_SESSION['size']=$fileSize;
     $_SESSION['namefile']=$pic6e;
   uploadsql($pic6e,$fileSize,end($pic6),$fileName,$con);

} else {

} }  }


 }

 else{
    header("location:../login.php");

 }
?>

