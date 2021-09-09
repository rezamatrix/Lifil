<?php
include("config/conf.php");
$urlgddd=$_SERVER["PHP_SELF"];
$ar1ddd=strpos($urlgddd,'auhacc');
if(isset($_SESSION['pass']) and isset($_SESSION['user']) and $_SESSION['tauh']==1 and strlen($_SESSION['auh'])>3 and strlen($ar1ddd)<3){
    header("location:auhacc.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="utf-8" />
  <title>
  <?php
  $urlg=$_SERVER["PHP_SELF"];
  $ar1=strpos($urlg,'index');
  $ar5=strpos($urlg,'blog');
  $ar6=strpos($urlg,'wb');
  $ar7=strpos($urlg,'profile');
  $ar8=strpos($urlg,'help');
  $eeee="لایسنس,گذاشتن لایسنس,کپی رایت,کرک نرم افزار,آموزش گذاشتن لایسنس روی نرم افزار,لایسنس فیلم,حق کپی رایت فیلم,حق کپی رایت نرم افزار,لیفیل ,لیفیل, کی کد,لایسنس کد";
  $sss="لیفیل سایتی برای برنامه نویسان ,نویسندگان کتاب و سازندگان فیلم آموزشی به همراه حق کپی رایت برای شما و لایسنس ";
  if($ar1>0){
      echo "لیفیل";
          @     $isd=intval($_GET['id']);
        $sqlqureyr=mysqli_query($con,"SELECT barchasb,subgecet FROM `amozsh` WHERE `id` =$isd");
  $qwr=mysqli_fetch_assoc($sqlqureyr);
  $w1r=$qwr['barchasb'];
  $w2r=$qwr['subgecet'];
    $eeee=$w1r;
    $sss=$w2r;
  }
    if($ar5>0){
      echo "وبلاگ";
            @$idb=intval($_GET['idb']);
   $blogss = mysqli_query($con,"SELECT subgect,barchasb FROM `blog` WHERE id='$idb' ");
$blognamess=mysqli_fetch_assoc($blogss) ;
        $q1s=$blognamess['subgect'];
               $q4s=$blognamess['barchasb'];
            if($idb>0){
              echo "|". $q1s;
            }


            $eeee=$q4s;
    $sss=$q1s;
  }
    if($ar6>0){
      echo "وبلاگ";
                  @$idb=intval($_GET['idb']);
   $blogss = mysqli_query($con,"SELECT subgect,barchasb FROM `bloga` WHERE id='$idb' ");
$blognamess=mysqli_fetch_assoc($blogss) ;
        $q1s=$blognamess['subgect'];
               $q4s=$blognamess['barchasb'];
                   $eeee=$q4s;
    $sss=$q1s;
                    if($idb>0){
              echo "|". $q1s;
            }
  }
  if($ar7>0){
   echo "پرفایل";
  }
    if($ar8>0){
   echo "راهنما";
  }
  ?>


  </title>

  <meta name="keywords" content="<?php echo $eeee; ?> " />
  <meta name="description" content="<?php echo $sss; ?> " />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="img/icon.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="img/icon.png">
  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="assets/styles/app.rtl.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />

  <meta name="theme-color" content="#0099FF">
    	<link rel="stylesheet" href="latest/minified/themes/default.min.css" type="text/css" />
        <script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
        <script src="js/m.js"></script>
          <style type="text/css">
body {
    overflow-x:hidden;
}  

@font-face {
    font-family: "BYekan+ Bold";
    src: url(temp/BYekan+Bold.ttf) format("truetype");
}
*{
    font-family: "BYekan+ Bold";
}
</style>


      <script>
      function rightnav(){
        document.getElementById('navright').setAttribute('class','right navside dark dk')
      }
      </script>


</head>
<body>
  <div class="app" id="app">
     <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column" id="navright">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<img src="img/icon.png" alt="." >
        	<span class="hidden-folded inline">LIFIL</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" flex >
          <nav class="scroll nav-light">

              <ul class="nav" ui-nav>
                                                                       <li class="hidden-folded" >
                  <a href="index.php"  title="اصلی">
                                                               <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text"> <div class="text-ellipsis">اصلی</div></span>
                  </a>
                </li>
                  <?php
                      if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
                        ?>

                        <?php

                      }else{
                  ?>

                <?php
                 }
                ?>


                  <?php


  if($ar1>0 or $ar7>0 or $ar8>0){
     ?>



<hr>
<li class="nav-header hidden-folded">
                  <small class="text-muted">راهنما</small>
                </li>

                <li class="hidden-folded" >
                  <a href="help.php" >
                    <span class="nav-text">راهنمای استفاده</span>
                  </a>
                </li>
                                <li class="hidden-folded" >
                  <a href="apihelp.php" >
                    <span class="nav-text">آزمایشگاه</span>
                  </a>
                </li>
<hr>

     <?php
  }



  if($ar6>0){
                    ?>
                <li class="nav-header hidden-folded" >
                                        <span class="nav-icon">
                      <i class="glyphicon glyphicon-pushpin">
                      </i>
                    </span>
                  <small class="text-muted">دسته بندی ها</small>
                </li>


 <?php

$blogm = mysqli_query($con,"SELECT id,name FROM `mnuea` ");
while( $blognamem=mysqli_fetch_array($blogm)){
       $blognamem1=$blognamem['id'];
       $blognamem2=$blognamem['name'];
       ?>



                 <li class="hidden-folded" >
                  <a href="?idm=<?php echo $blognamem1; ?>"  title="<?php echo $blognamem2; ?>">
                    <span class="nav-text"> <div class="text-ellipsis"><?php echo $blognamem2; ?></div></span>
                  </a>
                </li>

       <?php
 }   }       ?>
 <?php

  if($ar5>0){
                  ?>
                <li class="nav-header hidden-folded" >
                                        <span class="nav-icon">
                      <i class="glyphicon glyphicon-pushpin">
                      </i>
                    </span>
                  <small class="text-muted">پین ها</small>
                </li>


 <?php
 if(empty($_GET['idb'])){
  if(@$_GET['id']>0){

  } else{
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
        $idss= $_SESSION['idb'];
        $id= $_SESSION['idb'];
         $local='location:blog.php?id='.$idss;
     header($local);
      online($_SESSION['user'],$con) ;
}
  }
}
 @$id=intval($_GET['id']) ;
 @$id2=intval($_GET['id']) ;
$idsedddddd = mysqli_query($con,"SELECT activeblog,user FROM user WHERE id='$id' ");
$bidas=mysqli_fetch_assoc($idsedddddd) ;
$activeblog=$bidas['activeblog'];
$uesr=$bidas['user'];
      @$user =$bidas['user'];
      ?>
                            <li class="hidden-folded" >
                  <a href="blog.php?id=<?php echo $id; ?>"  title="اصلی">
                    <span class="nav-text"> <div class="text-ellipsis">اصلی</div></span>
                  </a>
                </li>
      <?php
$blogm = mysqli_query($con,"SELECT id,name,color FROM `mnue` WHERE idmaker='$id'  ");
while( $blognamem=mysqli_fetch_array($blogm)){
       $blognamem1=$blognamem['id'];
       $blognamem2=$blognamem['name'];
       $blognamem3=$blognamem['color'];
       ?>



                 <li class="hidden-folded" >
                  <a href="<?php echo $blognamem3; ?>"  title="<?php echo $blognamem2; ?>">
                    <span class="nav-text"> <div class="text-ellipsis"><?php echo $blognamem2; ?></div></span>
                  </a>
                </li>

       <?php
 }   }       ?>


              </ul>
          </nav>
      </div>
      <div class="b-t">
                                       <?php


 $dr="";
  if(isset($_SESSION['pass']) and isset($_SESSION['user']) and empty($id2)){

                 $dr= $_SESSION['idb'];
                   @$user =$_SESSION['user'];
                  }else{
                   @$dr=$id2;
                  }

   $idsesss = mysqli_query($con,"SELECT name,avatar,id,timeonline FROM user WHERE id='$dr' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssa2=$bidsss['avatar'];
                     $idhsssa3=$bidsss['timeonline'];
                     $idhsssa4=$bidsss['id'];
                  if($idhsssa2==""){$idhsssa2="img/q.jpg";

                  } else{
                      $idhsssa2= "img.php?user=".$user."&name=".$idhsssa2;
                  }

                   if($idhsssa3>time()){$r1="success";$r2="online";}elseif(($idhsssa3+1800)>time()){$r1="warn";$r2="Away";}elseif($idhsssa3<time()){$r1="gray";$r2="Offline";}

                  ?>
                                       <div class="nav-fold">
        	<a href="profile.php?id=<?php echo @$idhsssa4; ?>">
        	    <span class="pull-left">
        	      <img src="<?php echo @$idhsssa2;   ?>  " alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x" >
        	      <span class="block _500">
                      <?php      echo @$idhsssa;   ?>
                   </span>
   <small class="block text-muted"><i class="fa fa-circle text-<?php echo @$r1; ?> m-r-sm"></i><?php echo @$r2; ?></small>

        	    </span>
        	</a>
        </div>

      </div>
    </div>
  </div>
<!-- ############ LAYOUT START-->


  <!-- / -->

  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
   <div class="app-header white box-shadow blue">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3"  onclick="rightnav()"  >
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->

            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs pull-left">
        <div class="pull-left text-muted py-1">
          &copy; Copyright <strong>lifil.net</strong> <span class="hidden-xs-down">- </span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="about.php">درباره ما</a>
          <a class="nav-link" href="bloga.php">وبلاگ</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->

<div class="padding">

    <div class="row">
        <div class="col-sm-6 col-md-4">

        </div>
        <div class="col-sm-6 col-md-4">

        </div>
        <div class="col-sm-12 col-md-4">

    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">

        </div>
        <div class="col-sm-12 col-md-6">

    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">

        </div>
        <div class="col-sm-6 col-md-4">

        </div>
        <div class="col-sm-12 col-md-4">

        </div>
    </div>
</div>
    </div>