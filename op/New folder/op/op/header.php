<?php
include("../config/conf.php");
$urlgddd=$_SERVER["PHP_SELF"];
$ar1ddd=strpos($urlgddd,'auhacc');
if(isset($_SESSION['pass']) and isset($_SESSION['user']) and $_SESSION['tauh']==1 and strlen($_SESSION['auh'])>3 and strlen($ar1ddd)<3){
    header("location:../auhacc.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="utf-8" />
  <title>لیفیل</title>
  <meta name="description" content="لیفیل" />
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

  <meta name="theme-color" content="#0099FF">
    	<link rel="stylesheet" href="../latest/minified/themes/default.min.css" type="text/css" />
          <style type="text/css">
body {
    overflow-x:hidden;
}
@font-face {
    font-family: "BYekan+ Bold";
    src: url(../temp/BYekan+Bold.ttf) format("truetype");
}
*{
    font-family: "BYekan+ Bold";
}               .form-control{

               font-family: "BYekan+ Bold";

               }
</style>

        <script src="../js/dropzone.js"></script>
        <script src="../js/m.js"></script>


		<script
		  src="../js/jquery-3.1.0.min.js"
		  integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
		  crossorigin="anonymous"></script>

		<script src="../latest/minified/jquery.sceditor.bbcode.js"></script>
          <script src="../latest/languages/ar.js"></script>
      <script>
      function rightnav(){
        document.getElementById('navright').setAttribute('class','right navside dark dk')
      }
      </script>
      <?php
 @$cp=intval($_GET['cp']); if($cp!=22){
?>
  	<script>
			// Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
			var loadCSS = function(url, callback){
				var link = document.createElement('link');
				link.type = 'text/css';
				link.rel = 'stylesheet';
				link.href = url;
				link.id = 'theme-style';

				document.getElementsByTagName('head')[0].appendChild(link);

				var img = document.createElement('img');
				img.onerror = function(){
					if(callback) callback(link);
				}
				img.src = url;
			}

			$(function() {
				var initEditor = function() {
					$('textarea').sceditor({
						plugins: 'bbcode',
						style: './minified/jquery.sceditor.default.min.css',
                        locale: "ar"
					});
				};

				$('#theme').change(function() {
					var theme = './minified/themes/' + $(this).val() + '.min.css';

					$('textarea').sceditor('instance').destroy();
					$('link:first').remove();
					$('#theme-style').remove();

					loadCSS(theme, initEditor);
				});

				initEditor();
			});
		</script>
        <?php

        }
        ?>
        <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column" id="navright">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'../img/b.svg'"></div>
        	<img src="../assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">BIT</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" flex >
          <nav class="scroll nav-light">

              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded" >
                  <small class="text-muted">اصلی</small>
                </li>

                <li  >
                  <a href="../index.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">صفحه اصلی</span>
                  </a>
                </li>

                <li  <?php       @$cp=intval($_GET['cp']);

                 if($cp==1 or empty($cp)){echo "class=\"active\"";}   ?> >

                  <a href="index.php?cp=1" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">داشبورد</span>
                  </a>
                </li>
                         <?php
                           if($cp==8943){
     ?>
       <script type="text/javascript">  window.location.href = "index.php";  </script> 
     <?php

                }
                   ?>
                <li <?php        if($cp==3 or $cp==4){echo "class=\"active\"";}   ?>>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>

                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">محصول</span>
                  </a>
                  <ul class="nav-sub">
                    <li <?php      if($cp==3){echo "class=\"active\"";}   ?>>
                      <a href="add.php?cp=3"  >
                        <span class="nav-text">افزودن محصول</span>
                      </a>
                    </li>
                    <li <?php        if($cp==4){echo "class=\"active\"";}   ?>>
                      <a href="edit.php?cp=4" >
                        <span class="nav-text">ویرایش محصول   </span>
                      </a>
                    </li>

                  </ul>
                </li>

                <li <?php        if($cp==12 or $cp==13 or $cp==14 or $cp==15){echo "class=\"active\"";}   ?>>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">وبلاگ</span>
                  </a>
                  <ul class="nav-sub">
                    <li <?php       if($cp==12){echo "class=\"active\"";}   ?>>
                      <a href="addb.php?cp=12" >
                        <span class="nav-text"> افزودن نوشته </span>
                      </a>
                    </li>
                    <li <?php       if($cp==13){echo "class=\"active\"";}   ?>>
                      <a href="editb.php?cp=13" >
                        <span class="nav-text">ویرایش نوشته</span>
                      </a>
                    </li>
                    <li <?php       if($cp==14){echo "class=\"active\"";}   ?>>
                      <a href="addsub.php?cp=14" >
                        <span class="nav-text">افزودن دسته بندی</span>
                      </a>
                    </li>
                                        <li <?php        if($cp==15){echo "class=\"active\"";}   ?>>
                      <a href="editsub.php?cp=15" >
                        <span class="nav-text">ویرایش دسته بندی</span>
                      </a>
                    </li>
                  </ul>
                </li>
                     <li <?php       if( $cp==9 or $cp==10 or $cp==11){echo "class=\"active\"";}   ?>>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">امور  مالی</span>
                  </a>
                  <ul class="nav-sub">
                    <li <?php       if($cp==9){echo "class=\"active\"";}   ?>>
                      <a href="pay.php?cp=9" >
                        <span class="nav-text">تراکنش ها</span>
                      </a>
                    </li>
                    <li <?php        if($cp==10){echo "class=\"active\"";}   ?>>
                      <a href="pay2.php?cp=10" >
                        <span class="nav-text">درخواست واریز</span>
                      </a>
                    </li>
      

                  </ul>
                </li>
                <li <?php       if($cp==2){echo "class=\"active\"";}   ?>>
                  <a href="buy.php?cp=2" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">خرید های شما</span>
                  </a>
                </li>
                             <li <?php       if($cp==17){echo "class=\"active\"";}   ?>>
                  <a href="upload.php?cp=17" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">فایل های اپلود شده</span>
                  </a>
                </li>
                                      <li <?php       if($cp==16){echo "class=\"active\"";}   ?>>
                  <a href="set.php?cp=16" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">تنظیمات</span>
                  </a>
                </li>
                   <li>
                  <a href="pm.php?cp=22" <?php       if($cp==22){echo "class=\"active\"";


                  }

                                 $dr= $_SESSION['idb'];
                                   $op6q=mysqli_query($con,"SELECT id FROM `msg` WHERE `readmsg` != '0' and idg=$dr") ;
$cop6q=mysqli_num_rows($op6q);
/*                    if(empty($cop6q) or $cop6q==""){
                        $cop6q=0;
                    }*/
                   ?>>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">تیکت ها<span class="nav-label"><b class="label  label-sm primary"><?php echo $cop6q; ?></b></span></span>
                  </a>
                </li>
                   <li <?php        if($cp==5){echo "class=\"active\"";}

                      @$user =$_SESSION['user'];
   $idhsssa=0;
   $idsesss = mysqli_query($con,"SELECT newcom FROM user WHERE user='$user' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['newcom'];
                         if($idhsssa==""){$idhsssa=0;}
                   ?>>
                  <a href="com.php?cp=5" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">مدیریت نظرات <span class="nav-label"><b class="label  label-sm primary"><?php echo $idhsssa; ?></b></span></span>
                  </a>
                </li>
                                         <li>
                  <a href="key.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">ایجاد کلید</span>
                  </a>
                </li>
                <li <?php       if($cp==45){echo "class=\"active\"";}   ?>>
                  <a href="towstep.php?cp=45" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">ورود دو مرحله ای</span>
                  </a>
                </li>
                                <li>
                  <a href="logout.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">خروج</span>
                  </a>
                </li>
                               <li>
                  <a href="lockme.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">LOCK</span>
                  </a>
                </li>
                 <?php

                 if(@$_SESSION['lvl']==2){

                 $op1=mysqli_query($con,"SELECT id FROM `darkhast` WHERE `vaziat` = '0' ");
$cop1=mysqli_num_rows($op1);

$op3=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `acc` = '0' ") ;
$cop3=mysqli_num_rows($op3);
$op6=mysqli_query($con,"SELECT id FROM `tkhalof` WHERE `ok` = '0' ") ;
$cop6=mysqli_num_rows($op6);
$op7=mysqli_query($con,"SELECT id FROM `cart` WHERE `acc` = '0' ") ;
$cop7=mysqli_num_rows($op7);

                 ?>
                 <li <?php       if( $cp==19 or $cp==20 or $cp==21 or $cp==18){echo "class=\"active\"";}   ?>>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">مدیریت</span>
                  </a>
                  <ul class="nav-sub">
                    <li <?php        if($cp==19){echo "class=\"active\"";}   ?>>
                      <a href="addt.php?cp=19" >
                        <span class="nav-text">محصولات منتظر تایید<b class="label rounded label-sm primary"><?php echo $cop3; ?></b></span>
                      </a>
                    </li>
                    <li <?php        if($cp==20){echo "class=\"active\"";}   ?>>
                      <a href="fc.php?cp=20" >
                        <span class="nav-text">مدیریت کاربر</span>
                      </a>
                    </li >
                    <li <?php       if($cp==21){echo "class=\"active\"";}   ?>>
                      <a href="rep.php?cp=21" >
                        <span class="nav-text">گزارشات تخلف<b class="label rounded label-sm primary"><?php echo $cop6; ?></b></span>
                      </a>
                    </li>
                                     <li <?php        if($cp==18){echo "class=\"active\"";}   ?>>
                      <a href="pay4.php?cp=18" >
                        <span class="nav-text"> های پرداختی<b class="label rounded label-sm primary"><?php echo $cop1; ?></b></span>
                      </a>
                    </li>
                                               <li <?php        if($cp==30){echo "class=\"active\"";}   ?>>
                      <a href="cart.php" >
                        <span class="nav-text">کارت ها<b class="label rounded label-sm primary"><?php echo $cop7; ?></b></span>
                      </a>
                    </li>
                            <li <?php        if($cp==31){echo "class=\"active\"";}   ?>>
                      <a href="cm.php" >
                        <span class="nav-text">کارت ملی<b class="label rounded label-sm primary"><?php echo $cop7; ?></b></span>
                      </a>
                    </li>
                                          <li <?php        if($cp==35){echo "class=\"active\"";}   ?>>
                      <a href="slid.php" >
                        <span class="nav-text">اسلاید شو</span>
                      </a>
                    </li>
                  </ul>
                </li>

                 <li <?php       if( $cp==28 or $cp==23 or $cp==24 or $cp==25){echo "class=\"active\"";}   ?>>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">وبلاگ </span>
                  </a>
                  <ul class="nav-sub">
                    <li <?php        if($cp==28){echo "class=\"active\"";}   ?>>
                      <a href="addba.php?cp=28" >
                        <span class="nav-text">افزودن نوشته</span>
                      </a>
                    </li>
                    <li <?php        if($cp==23){echo "class=\"active\"";}   ?>>
                      <a href="editba.php?cp=23" >
                        <span class="nav-text">ویرایش</span>
                      </a>
                    </li >
                    <li <?php       if($cp==24){echo "class=\"active\"";}   ?>>
                      <a href="addsuba.php?cp=24" >
                        <span class="nav-text">دستبندی جدید</span>
                      </a>
                    </li>
                                     <li <?php        if($cp==25){echo "class=\"active\"";}   ?>>
                      <a href="editsuba.php?cp=25" >
                        <span class="nav-text">ویرایش دستبندی</span>
                      </a>
                    </li>
                  </ul>
                </li>
                     <li <?php       if($cp==55){echo "class=\"active\"";}   ?>>
                         <a href="menu.php?cp=55" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                             <span class="nav-text">افزودن و ویرایش منو</span>
                         </a>
                     </li>
                            <?php  } ?>

                <li class="nav-header hidden-folded">
                  <small class="text-muted">راهنما</small>
                </li>

                <li class="hidden-folded" >
                  <a href="../help.php" >
                    <span class="nav-text">راهنمای استفاده</span>
                  </a>
                </li>
                                <li class="hidden-folded" >
                  <a href="../apihelp.php" >
                    <span class="nav-text">آزمایشگاه</span>
                  </a>
                </li>

              </ul>
          </nav>
      </div>
      <div class="b-t">
                                       <?php



   $idsesss = mysqli_query($con,"SELECT name,avatar,timeonline FROM user WHERE user='$user' ");
$bidsss=mysqli_fetch_assoc($idsesss) ;
             $idhsssa=$bidsss['name'];
             $idhsssa2=$bidsss['avatar'];
             $idhsssa3=$bidsss['timeonline'];
                  if($idhsssa2==""){$idhsssa2="../img/q.jpg";

                  } else{
                      $idhsssa2= "../img.php?user=".$user."&name=".$idhsssa2;
                  }
                   if($idhsssa3>time()){$r1="success";$r2="online";}elseif(($idhsssa3+1800)>time()){$r1="warn";$r2="Away";}elseif($idhsssa3<time()){$r1="gray";$r2="Offline";}
                  ?>
        <div class="nav-fold">
        	<a href="../profile.php">
        	    <span class="pull-left">
        	      <img src="<?php echo $idhsssa2;   ?>  " alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x" >
        	      <span class="block _500">
                      <?php      echo $idhsssa;   ?>
                   </span>

         <small class="block text-muted"><i class="fa fa-circle text-<?php echo @$r1; ?> m-r-sm"></i><?php echo @$r2; ?></small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
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
             <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href="" data-toggle="dropdown">
                  <i class="material-icons"></i>
                  <span class="label label-sm up warn"><?php echo $cop6q; ?></span>
                </a>
                <!-- dropdown -->
<!-- / dropdown -->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-1 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-40">
                    <img src="<?php echo $idhsssa2;  ?>" alt="...">

                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-overlay pull-right">
  <a class="dropdown-item" ui-sref="app.inbox.list"  href="pm.php?cp=22">
    <span>پیام</span>
    <span class="label warn m-l-xs"><?php echo $cop6q; ?></span>
  </a>
  <a class="dropdown-item" ui-sref="app.page.profile"  href="../profile.php">
    <span>پرفایل</span>
  </a>
  <a class="dropdown-item" ui-sref="app.page.setting"  href="set.php?cp=16">
    <span>تنظیمات</span>

  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" ui-sref="app.docs"  href="help.php">
   راهنما
  </a>
  <a class="dropdown-item" ui-sref="access.signin"  href="logout.php">خروج</a>
</div>
              </li>

            </ul>
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
          <a class="nav-link" href="../about.php">درباره ما</a>
          <a class="nav-link" href="../bloga.php">وبلاگ</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<?php
 if($cp!=22 and $cp!=16){
?>
<div class="p-a white lt box-shadow">
    <div class="row">
        <div class="col-sm-6 text-sm-right" >
          			<h4 class="mb-0 _300" >به لیفیل خوش آمدید</h4>
            <small class="text-muted">فروشگاهی برای شما</small>
        </div>
        <div class="col-sm-6 text-sm-right">

        </div>
    </div>
</div>
<?php
}
?>
<div class="padding">
    <?php
 if($cp!=22 and $cp!=16){
?>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="box p-a" dir="rtl">
              <div class="pull-left m-r">
                <span class="w-48 rounded  accent">
                  <i class="material-icons">&#xe151;</i>
                </span>
              </div>
              <div class="clear">
                <h4 class="m-0 text-lg _300"><a href><?php echo $cop6q; ?> <span class="text-sm">پیام جدید</span></a></h4>
                <small class="text-muted">پیام های جدید شما</small>
              </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4" dir="rtl">
            <div class="box p-a">
              <div class="pull-left m-r">
                <span class="w-48 rounded primary">
                  <i class="material-icons">&#xe54f;</i>
                </span>
              </div>
              <div class="clear">
                <h4 class="m-0 text-lg _300"><a href><?php
                  $id=$_SESSION['idb'];
                $rte=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `idsender` = '$id' ");
 $nummas=mysqli_num_rows($rte);
 echo  "",$nummas; ?> <span class="text-sm">محصول تا به حال اضافه شده</span></a></h4>
                <small class="text-muted">محصولات شما </small>
              </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4" dir="rtl">
            <div class="box p-a">
              <div class="pull-left m-r">
                <span class="w-48 rounded warn">
                  <i class="glyphicon glyphicon-credit-card"></i>
                </span>
              </div>
              <div class="clear">
                <h4 class="m-0 text-lg _300"><a href><?php

                               $idse = mysqli_query($con,"SELECT mojodi FROM user WHERE id='$id' ");
$bid=mysqli_fetch_assoc($idse) ;
             $idhsa=$bid['mojodi'];
                 echo   $idhsa;
                ?> تومان<span class="text-sm"></span></a></h4>
                <small class="text-muted"> موجودی فعلی اکانت شما</small>
              </div>
            </div>
        </div>
    </div>
    <?php
}
?>
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