<?php
include("../config/conf.php");
include("../model/countonline.php");
include("../model/functionblog.php");
include("../model/jdf.php");

if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
   online($_SESSION['user'],$con) ;
   totalonline($con);


 } elseif(empty($_SESSION['pass']) and isset($_SESSION['user'])){
     header("location:lock.php");
 }

 else{
    header("location:../login.php");

 }?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="utf-8" />
  <title>بیت سافتور</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../img/b.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../img/b.png">

  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="../assets/styles/app.rtl.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />
  <style>*{font-family: Tahoma ;}</style>
  <meta name="theme-color" content="#3074AE">
</head>
<body>
    <div class="app" id="app">

<!-- ############ LAYOUT START-->
                                       <?php


     @$user =$_SESSION['user'];
   $idsesss = mysqli_query($con,"SELECT name,avatar,password FROM user WHERE user='$user' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssa2=$bidsss['avatar'];
             $idhsssa3=$bidsss['password'];
             if(isset($_POST['Unlock'])){
              $password=$_POST['pw'] ;
             if($idhsssa3==md5(base64_encode(base64_encode($password)))){
                  $_SESSION['pass']=$idhsssa3;
                  ?>
                   <script>
                   window.location = "index.php";
                   </script>
                  <?php
               }
             }
                  if($idhsssa2==""){$idhsssa2="../img/q.jpg";

                  } else{
                      $idhsssa2= "../imguser/".$user."/".$idhsssa2;
                  }
                  ?>
<div class="indigo-800 h-v row-col">
    <div class="row-cell v-m text-center animated fadeIn">
        <div class="m-b">
            <img src="<?php echo $idhsssa2;   ?> " class="w-64 circle">
            <div class="m-t-md font-bold"><?php echo $idhsssa;   ?></div>
        </div>   <form action="" method="post">
        <div class="md-form-group w-xl w-auto-xs center-block">
        	<input type="password" class="md-input text-center" name="pw">
        	<label class="block w-full">Your Password</label>
        </div>
        <div class="m-t">

            <input type="submit"  class="btn btn-danger p-x-md"  name="Unlock" value="Unlock"/>
    </div>
    </form>
    </div>
</div>

<!-- ############ LAYOUT END-->

    </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
    <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
    <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
    <script src="../libs/jquery/underscore/underscore-min.js"></script>
    <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="../libs/jquery/PACE/pace.min.js"></script>

    <script src="scripts/config.lazyload.js"></script>

    <script src="scripts/palette.js"></script>
    <script src="scripts/ui-load.js"></script>
    <script src="scripts/ui-jp.js"></script>
    <script src="scripts/ui-include.js"></script>
    <script src="scripts/ui-device.js"></script>
    <script src="scripts/ui-form.js"></script>
    <script src="scripts/ui-nav.js"></script>
    <script src="scripts/ui-screenfull.js"></script>
    <script src="scripts/ui-scroll-to.js"></script>
    <script src="scripts/ui-toggle-class.js"></script>

    <script src="scripts/app.js"></script>

    <!-- ajax -->
    <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
