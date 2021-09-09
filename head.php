<?php
include("config/conf.php");
include("bb/SBBCodeParser.php");
$urlgddd=$_SERVER["PHP_SELF"];
$ar1ddd=strpos($urlgddd,'auhacc');
function removebbcode($string)
{
    $parser = new \SBBCodeParser\Node_Container_Document();

    $parser->add_emoticons(array(
        ':)' => 'https://lifil.net/emoticons/smile.png',
        '8-)' => 'https://lifil.net/emoticons/cool.png',
        ':angry:' => 'https://lifil.net/emoticons/angry.png',
        ':angel:' => 'https://lifil.net/emoticons/angel.png',
        ":'(" => 'https://lifil.net/emoticons/cwy.png',
        ":ermm:" => 'https://lifil.net/emoticons/ermm.png',
        ":alien:" => 'https://lifil.net/emoticons/alien.png',
        ":blink:" => 'https://lifil.net/emoticons/blink.png',
        ":blush:" => 'https://lifil.net/emoticons/blush.png',
        ":cheerful:" => 'https://lifil.net/emoticons/cheerful.png',
        ":devil:" => 'https://lifil.net/emoticons/devil.png',
        ":dizzy:" => 'https://lifil.net/emoticons/dizzy.png',
        ":getlost:" => 'https://lifil.net/emoticons/getlost.png',
        ":happy:" => 'https://lifil.net/emoticons/happy.png',
        ":kissing:" => 'https://lifil.net/emoticons/kissing.png',
        ":ninja:" => 'https://lifil.net/emoticons/ninja.png',
        ":pinch:" => 'https://lifil.net/emoticons/pinch.png',
        ":sick:" => 'https://lifil.net/emoticons/sick.png',
        ":sideways:" => 'https://lifil.net/emoticons/sideways.png',
        ":silly:" => 'https://lifil.net/emoticons/silly.png',
        ":sleeping:" => 'https://lifil.net/emoticons/sleeping.png',
        ":unsure:" => 'https://lifil.net/emoticons/unsure.png',
        ":woot:" => 'https://lifil.net/emoticons/w00t.png',
        ":wassat:" => 'https://lifil.net/emoticons/wassat.png',
        ":pouty:" => 'https://lifil.net/emoticons/pouty.png',
        ":D" => 'https://lifil.net/emoticons/grin.png',
        ":(" => 'https://lifil.net/emoticons/sad.png',
        ":O" => 'https://lifil.net/emoticons/shocked.png',
        ":P" => 'https://lifil.net/emoticons/tongue.png',
        ";)" => 'https://lifil.net/emoticons/wink.png',
        '<3' => 'https://lifil.net/emoticons/heart.png'
    ));
    $sdd=  htmlspecialchars_decode($string);
    $new="";
    $matn=str_replace('<------------->'," ",$sdd);
    $text= $parser->parse($matn)
        ->detect_links()
        ->detect_emails()
        ->detect_emoticons()
        ->get_html();
    $text=strip_tags($text);
    return $text;
}
if(isset($_SESSION['pass']) and isset($_SESSION['user']) and $_SESSION['tauh']==1 and strlen($_SESSION['auh'])>3 and strlen($ar1ddd)<3){
    header("location:auhacc.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        &#x202b;
            <?php
            $urlg=$_SERVER["PHP_SELF"];
            $ar1=strpos($urlg,'index');
            $ar5=strpos($urlg,'blog.php');
            $ar6=strpos($urlg,'bloga');
            $ar7=strpos($urlg,'profile');
            $ar8=strpos($urlg,'help');
            $ar9=strpos($urlg,'store.php');
            $ar10=strpos($urlg,'post.php');
            $ar14=strpos($urlg,'posta');
            $ar11=strpos($urlg,'about');
            $ar12=strpos($urlg,'how-to-buy');
            $ar13=strpos($urlg,'how-to-sell');
            $ar15=strpos($urlg,'contact');
            $ar16=strpos($urlg,'license');
            $ar17=strpos($urlg,'login');
            $ar18=strpos($urlg,'register');
            $ar19=strpos($urlg,'privacy');
            $ar20=strpos($urlg,'product');
            $ar21=strpos($urlg,'repass');
            $ar22=strpos($urlg,'rules');
            $eeee="لایسنس,گذاشتن لایسنس,کپی رایت,کرک نرم افزار,آموزش گذاشتن لایسنس روی نرم افزار,لایسنس فیلم,حق کپی رایت فیلم,حق کپی رایت نرم افزار,لیفیل ,لیفیل, کی کد,لایسنس کد";
            $sss="لیفیل تنها مرجع فروش کاربر محور محصولات مجازی و پروژه های دانشجویی";
            if($ar11>0)
            {
                $tit= "درباره ما";
                $imggggg='img/1.png';
            }
            if($ar1>0){
                $tit= "لیفیل";
                $imggggg='img/1.png';
            }
            if($ar5>0){
                $tit= "وبلاگ";
                $imggggg='img/1.png';

            }
            if($ar6>0){
                $tit= "وبلاگ";
                $imggggg='img/1.png';

            }
            if($ar10>0){
                $tit= "وبلاگ";
                @$id=intval($_GET['id']);
                $blogss = mysqli_query($con,"SELECT subgect,barchasb,matn,`idmnue` FROM `blog` WHERE id='$id' ");
                $blognamess=mysqli_fetch_assoc($blogss) ;
                $q1s=$blognamess['subgect'];
                $q4s=$blognamess['barchasb'];
                $matn=$blognamess['matn'];
                $idmnue=$blognamess['idmnue'];
                if($id>0){
                    $tit.= " | ". $q1s;
                }
                $eeee=$q4s;
                $sss=substr(removebbcode($matn),0,180);
                $idsedddddd = mysqli_query($con,"SELECT activeblog,`user`,`name` FROM user WHERE id='$id' ");
                $bidas=mysqli_fetch_assoc($idsedddddd) ;
                $uesr=$bidas['user'];

                $imggggg='img.php?user='.$uesr.'&name='. $idmnue;
            }
            if($ar14>0){
                $tit= "وبلاگ";
                @$id=intval($_GET['id']);
                $blogss = mysqli_query($con,"SELECT subgect,barchasb,matn,`pic` FROM `bloga` WHERE id='$id' ");
                $blognamess=mysqli_fetch_assoc($blogss) ;
                $q1s=$blognamess['subgect'];
                $q4s=$blognamess['barchasb'];
                $matn=$blognamess['matn'];
                $eeee=$q4s;
                $q6=$blognamess['pic'];
                $sss=substr(removebbcode($matn),0,180);
                if($id>0){
                    $tit.= " | ". $q1s;
                }
                $imggggg="imguser/blog/" . $q6;
            }
            if($ar7>0){
                $tit= "پرفایل";
                $imggggg='img/1.png';
            }
            if($ar8>0){
                $tit= "راهنما";
                $imggggg='img/1.png';
            }
            if($ar15>0){
                $tit= "تماس با ما";
                $imggggg='img/1.png';
            }
            if($ar12>0){
                $tit= "چگونه خرید کنم؟";
                $imggggg='img/1.png';
            }
            if($ar13>0){
                $tit= "چگونه محصولم را بفروشم ؟";
                $imggggg='img/1.png';
            }
            if($ar16>0){
                $tit= "مجوز محصولات";
                $imggggg='img/1.png';
            }
            if($ar17>0){
                $tit= "ورود";
                $imggggg='img/1.png';
            }
            if($ar18>0){
                $tit= "ثبت نام";
                $imggggg='img/1.png';
            }
            if($ar19>0){
                $tit= "حریم خصوصی";
                $imggggg='img/1.png';
            }
            if($ar20>0){

                @$id=intval($_GET['id']);
                $blogss = mysqli_query($con,"SELECT subgecet,barchasb,matn,`user`,`pic5` FROM `amozsh` WHERE id='$id' ");
                $blognamess=mysqli_fetch_assoc($blogss) ;
                $q1s=$blognamess['subgecet'];
                $q4s=$blognamess['barchasb'];
                $matn=$blognamess['matn'];
                $ma11=$blognamess['pic5'];
                $ma10=$blognamess['user'];
                $pic1=explode(',',$ma11);
                $pic1a=$pic1['0'];
                $eeee=$q4s;
                $sss=substr(removebbcode($matn),0,180);
                if($id>0){
                    $tit=  $q1s;
                }
                $imggggg='img.php?name='.$pic1a.'&user='.$ma10;
            }
            if($ar21>0){
                $tit= "بازیابی پسورد";
                $imggggg='img/1.png';
            }
            if($ar22>0){
                $tit= "قوانین";
                $imggggg='img/1.png';
            }
            if($ar9>0)
            {
                $tit= "محصولات";
                $imggggg='img/1.png';
            }
            echo $tit;
            ?>


    </title>
    <link rel="canonical" href="<?='https://lifil.net'.''.$_SERVER['REQUEST_URI']?>" />
    <meta name="keywords" content="<?php echo $eeee; ?> " />
    <meta name="description" content="<?php echo $sss; ?> " />
    <meta property="og:image" content="<?='https://lifil.net'.'/'.$imggggg?>" />
    <meta property="og:locale" content="fa_IR">
    <meta property="og:type" content="application/eshop">
    <meta property="og:title" content="<?=$tit?>" />
    <meta property="og:url" content="<?='https://lifil.net'.''.$_SERVER['REQUEST_URI']?>">
    <meta property="og:site_name" content="لیفیل" >
    <meta property="og:description" content="<?php echo @$sss; ?>" />
    <?php
    $s4s= explode(",",$eeee) ;
    $cos=count($s4s)-1 ;
    while($cos >= 0){
        $s4ss=$s4s[$cos];

        ?>
        <meta property="article:tag" content="<?=$s4ss?>">
        <?php
        --$cos;
    }
    ?>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo $sss; ?>" />
    <meta name="twitter:title" content="<?=$tit?>" />
    <meta name="twitter:site" content="@lifil10" />
    <meta name="twitter:image" content="<?='https://lifil.net'.'/'.$imggggg?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="i/images/icon.png">
    <?php
    if($ar9>0){
      ?>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/category.css">
        <link rel="stylesheet" href="i/css/category-a.css" rel="stylesheet" title="style1">
        <link rel="stylesheet" href="i/css/category-b.css" rel="alternate stylesheet" title="style2">
        <link rel="stylesheet" href="i/css/category-c.css" rel="alternate stylesheet" title="style3">
        <link rel="stylesheet" href="i/css/tooltip.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <?php
    }elseif($ar5>0 or $ar10>0 or $ar14>0 or $ar6>0){
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/blog.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <?php
    }elseif($ar11>0 ){
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/about-us.css">
        <link rel="stylesheet" href="i/css/tooltip.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <?php
    }elseif($ar12>0 ){
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/how-to-buy.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <?php
    }elseif($ar13>0 ){
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/how-to-sell.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <?php
    }else{
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="i/css/modal.css">
        <link rel="stylesheet" href="i/css/product.css">
        <link rel="stylesheet" href="i/css/tooltip.css">
        <link rel="stylesheet" href="i/css/fonts.css">
        <link rel="stylesheet" href="i/css/form.css">
        <link rel="stylesheet" href="i/css/panel.css">
    <?php
    }
    ?>

    <script type="text/javascript" src="i/js/jquery.js"></script>
</head>
<body>

<!--شروع هدر-->
<header>

    <!--شروع ناوبار-->
    <nav class="rt">
        <div class="main">
            <span class="show-menu right rt-14" id="hiden-menu" onclick="document.getElementById('menu-side').style.display='block';document.getElementById('show-menu').style.display='block';document.getElementById('hiden-menu').style.display='none';"><i class="fa fa-align-center right"></i> منوی سایت</span>
            <span class="show-menu right rt-14" id="show-menu" onclick="document.getElementById('menu-side').style.display='none';document.getElementById('show-menu').style.display='none';document.getElementById('hiden-menu').style.display='block';"><i class="fa fa-close right"></i> منوی سایت</span>
            <ul class="right rt-13" id="menu-side">


                <li class="right"><a href="bloga.php">وبلاگ</a></li>
                <li class="right"><a href="how-to-buy.php">چگونه خرید کنم؟</a></li>
                <li class="right"><a href="how-to-sell.php">چگونه محصولم را بفروشم ؟</a></li>
                <li class="right"><a href="license.php">مجوز محصولات</a></li>
                <li class="right"><a href="contact.php">تماس با ما</a></li>
                <li class="right"><a href="about.php">درباره ما</a></li>
                <li class="right"><a href="op">پنل کاربری</a></li>

            </ul>
<?php
if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
    $dr= $_SESSION['idb'];
    $idsesss = mysqli_query($con,"SELECT `name`,`mojodi` FROM user WHERE id='$dr' ");
    $bidsss=mysqli_fetch_assoc($idsesss) ;
    $name=$bidsss['name'];
    @$mojodi=$bidsss['mojodi'];
    ?>
    <div class="panel-link h-c-panel left rt-13" style="">
        <div class="h-panel right">
            <div class="right brief"><i class="fa fa-user"></i> <span><?=$name?> </span>  <i class="fa fa-money"></i> <b><?=@$mojodi?></b> تومان</div>
            <div class="h-panel-links rt rt-12">
                <a href="op" class="right">پیشخوان <i class="fa fa-desktop left"></i></a>
                <a href="profile.php?id=<?=$dr?>" class="right">پروفایل کاربری <i class="fa fa-id-card-o left"></i></a>
                <a href="op/buy.php?cp=2" class="right">دانلود ها <i class="fa fa-download left"></i></a>
                <a href="op/set.php?cp=16" class="right">تنظیمات کاربری <i class="fa fa-cogs left"></i></a>
                <a href="op/pay2.php?cp=10" class="right">تسویه حساب <i class="fa fa-money left"></i></a>
                <a href="op/add.php?cp=3" class="right">ارسال محصول <i class="fa fa-send-o left"></i></a>
            </div>
        </div>
        <a href="logout.php" class="right sing-out"><i class="fa fa-power-off"></i> خروج </a>
    </div>
    <?php

}else{
    ?>
            <div class="panel-link left rt-13">
                <a href="op" class="log left"><i class="fa fa-sign-in"></i> ورود </a>
                <a href="register.php" class="reg left"><i class="fa fa-user-plus"></i> ثبت نام</a>
            </div>
    <?php
}
?>
        </div>
    </nav>
    <!--پایان ناوبار-->

    <div class="main">

        <!--شروع لوگو سایت-->
        <a href="index.php"><img src="i/images/logo.png" class="right logo"></a>
        <!--پایان لوگو سایت-->



        <!--شروع دسته بندی-->
        <div class="right category">
            <span class="show-cat right rt-14" id="hiden-cat" onclick="document.getElementById('category-side').style.display='block';document.getElementById('show-cat').style.display='block';document.getElementById('hiden-cat').style.display='none';"><i class="fa fa-list-ul right"></i> مشاهده دسته بندی</span>
            <span class="show-cat right rt-14" id="show-cat" onclick="document.getElementById('category-side').style.display='none';document.getElementById('show-cat').style.display='none';document.getElementById('hiden-cat').style.display='block';"><i class="fa fa-close right"></i> بستن دسته بندی</span>
            <ul class="right rt-category" id="category-side">
            <?php
                class Menu {
                    public $id = "";
                    public $title = "";
                    public $parent = "";
                    function __construct($id , $title, $parent) 
                    { 
                        $this->id = $id; 
                        $this->title = $title;
                        $this->parent = $parent;  
                    }
                }
                $menu = [];
                $sql = "SELECT * FROM `web_menu` order by parent asc";
                $result = mysqli_query($con, $sql); 
                while($row = mysqli_fetch_array( $result )) {
                if($row['parent'] == null){
                    $menu[$row['id']] = [];
                    array_push($menu[$row['id']], new Menu($row['id'], $row['title'], $row['parent']));
                }else{
                    $sub_menu =  new Menu($row['id'], $row['title'], $row['parent']);
                    array_push($menu[$row['parent']] ,$sub_menu);
                }
                }
                foreach($menu as $m){
                   foreach($m as $menu){
                        if($menu->parent == null){
                            ?>
                            <li class="link right"><a href="#" class="right rt-13 name"> <?php echo $menu->title ?> <i class="fa fa-caret-down"></i></a><span class="left rt-13 open">باز کردن</span>
                            <ul class="small right rt-13">
            <?php
                        }else{
                            ?>
                            <li class="rt"><a href="store.php?s=<?php echo $menu->id ?>"  class="nav-text"><?php echo $menu->title ?></a></li>
                            <?php
                        }
                   }
                   echo "
                   </ul>
                   </li>
                   ";
                }
                
            ?>
            </ul>



        </div>
        <!--پایان دسته بندی-->

    </div>
</header>
<!--پایان هدر-->
<?php
