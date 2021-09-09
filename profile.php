<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("head.php");
if(isset($_POST['send'])){
    $id=$_SESSION['idb'];
    if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
        $re=strip_tags(mysqli_real_escape_string($con,$_POST['text']));
        mysqli_query($con,"UPDATE `user` SET text = '$re' WHERE `id` ='$id';");
    }
}
@$id=intval($_GET['id']);
if(empty($id)){$id=$_SESSION['idb'];}
$idse = mysqli_query($con,"SELECT name,user,tarikhsabtenam,email,emailacc,phacc,acc2,tell,point,avatar,dev,text,timeonline FROM user WHERE id='$id' ");
$bid=mysqli_fetch_assoc($idse) ;
$idh1=$bid['name'];
$idh2=$bid['user'];
$idh3=$bid['tarikhsabtenam'];
$idh4=$bid['email'];
$idh5=$bid['tell'];
$idh6=$bid['point'];
$idh7=$bid['avatar'];
$idh8=$bid['dev'];
$idh9=$bid['text'];
$idh=$bid['emailacc'];
$active1=$bid['phacc'];
$active2=$bid['acc2'];
$idhsssa3=$bid['timeonline'];
$avatar="";
$idh5e= substr_replace("$idh5","xxxx",6);
$trl=($idh6/100) ;

$ETR=floor(($idh6/100));
$trl2= $trl-$ETR;

if($idh7==""){$avatar="img/q.jpg";

} else{
    $avatar= "img.php?user=".$idh2."&name=".$idh7;
}
?>

<!--شروع باکس عناوین زیر هدر-->
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">

<div class="title-side right">
<h1 class="rt">پروفایل - <?=$idh1?></h1>
<div class="location right rt-13">
</div>
</div>

    <form action="store.php" method="post">
        <div class="search-b left">
            <input class="right rt-14" name="sher"  type="text">
            <button class="left rt-15" name="send"></button>
        </div>
    </form>

</div>
</div>
</aside>
<!--پایان باکس عناوین زیر هدر-->

<!--شروع محتوای اصلی سایت-->
<div class="bg-web rt">
<div class="main">
<div class="cpanel rt">
<span class="tab-btn tb-1 right rt-14">پروفایل</span>
<span class="tab-btn tb-2 right rt-14">محصولات</span>
<div class="cpanel-content right">

<!--شروع توضیحات پروفایل-->
<section class="tab-con tbc-1 right">
<div class="block right rt-15">
<span>آشنایی بیشتر با فروشنده</span><br>
    <p class="text-md profile-status"><?php  echo $idh9; ?></p>
    <?php  if(isset($_SESSION['pass']) and isset($_SESSION['user']) and (empty($id) or $id==$_SESSION['idb'])){      ?>
        <a href="#modal-b" id="modal-btn-b" class="left"><i class="fa fa-pencil"></i>  ویرایش</a>  <br>

        <div class="modal" id="modal-b" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-header">
                    <h2> ویرایش متن پروفایل</h2>
                    <a href="#modal-btn-b" class="btn-close" aria-hidden="true">×</a>
                </div>
                <div class="modal-body rt-14">

                </div>
                <form action="" method="POST">
                    <textarea class="form-control no-border has-value" rows="2" placeholder="Type something..." name="text"></textarea>
                    <input name="send" type="submit" value="Edit"class="btn btn-sm white">
                </form>
                <div class="modal-footer">
                    <a href="#modal-btn-b" class="btn">بستن</a>
                </div>
            </div>
        </div>
    <?php          } ?>
</div>

    <div class="block right rt-15">
        <a style="border-radius: 100%;height: 50px;width: 50px; inline-size: 1.5px; background: green;"><b><h4>سطح کاربر:<?php  echo $ETR; ?></h4></b></a>
        <style>
            .meter {
                height: 20px;  /* Can be anything */
                position: relative;
                margin: 60px 0 20px 0; /* Just for demo spacing */
                background: #555;
                -moz-border-radius: 25px;
                -webkit-border-radius: 25px;
                border-radius: 25px;
                padding: 10px;
                -webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
                -moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
                box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
            }
            .meter > span {
                display: block;
                height: 100%;
                -webkit-border-top-right-radius: 8px;
                -webkit-border-bottom-right-radius: 8px;
                -moz-border-radius-topright: 8px;
                -moz-border-radius-bottomright: 8px;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
                -webkit-border-top-left-radius: 20px;
                -webkit-border-bottom-left-radius: 20px;
                -moz-border-radius-topleft: 20px;
                -moz-border-radius-bottomleft: 20px;
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
                background-color: rgb(43,194,83);
                background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(43,194,83)),
                    color-stop(1, rgb(84,240,84))
                );
                background-image: -moz-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
                );
                -webkit-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
                -moz-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
                box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
                position: relative;
                overflow: hidden;
            }
            .meter > span:after, .animate > span > span {
                content: "";
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                background-image:
                    -webkit-gradient(linear, 0 0, 100% 100%,
                    color-stop(.25, rgba(255, 255, 255, .2)),
                    color-stop(.25, transparent), color-stop(.5, transparent),
                    color-stop(.5, rgba(255, 255, 255, .2)),
                    color-stop(.75, rgba(255, 255, 255, .2)),
                    color-stop(.75, transparent), to(transparent)
                    );
                background-image:
                    -moz-linear-gradient(
                        -45deg,
                        rgba(255, 255, 255, .2) 25%,
                        transparent 25%,
                        transparent 50%,
                        rgba(255, 255, 255, .2) 50%,
                        rgba(255, 255, 255, .2) 75%,
                        transparent 75%,
                        transparent
                    );
                z-index: 1;
                -webkit-background-size: 50px 50px;
                -moz-background-size: 50px 50px;
                -webkit-animation: move 2s linear infinite;
                -webkit-border-top-right-radius: 8px;
                -webkit-border-bottom-right-radius: 8px;
                -moz-border-radius-topright: 8px;
                -moz-border-radius-bottomright: 8px;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
                -webkit-border-top-left-radius: 20px;
                -webkit-border-bottom-left-radius: 20px;
                -moz-border-radius-topleft: 20px;
                -moz-border-radius-bottomleft: 20px;
                border-top-left-radius: 20px;
                border-bottom-left-radius: 20px;
                overflow: hidden;
            }

            .animate > span:after {
                display: none;
            }

            @-webkit-keyframes move {
                0% {
                    background-position: 0 0;
                }
                100% {
                    background-position: 50px 50px;
                }
            }

            .orange > span {
                background-color: #f1a165;
                background-image: -moz-linear-gradient(top, #f1a165, #f36d0a);
                background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f1a165),color-stop(1, #f36d0a));
                background-image: -webkit-linear-gradient(#f1a165, #f36d0a);
            }

            .red > span {
                background-color: #f0a3a3;
                background-image: -moz-linear-gradient(top, #f0a3a3, #f42323);
                background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f0a3a3),color-stop(1, #f42323));
                background-image: -webkit-linear-gradient(#f0a3a3, #f42323);
            }

            .nostripes > span > span, .nostripes > span:after {
                -webkit-animation: none;
                background-image: none;
            }
        </style>
        <?php
        @$iyo=$trl2;
        @ $kghjfklh=($iyo)*100;
        ?>
        <div class="meter animate" dir="ltr">
            <span style="width: <?php echo $kghjfklh; ?>%"><?php echo $kghjfklh; ?>%<span></span></span>
        </div>

    </div>

</section>

<!--پایان توضیحات پروفایل-->

<!--شروع محصولات-->
<section class="tab-con tbc-2 right">

<!--شروع پست های محصولات-->
<div class="nemoone-kar rt">

<!--شروع محصول کاربر-->

<!--پایان محصول کاربر-->
    <?php


    $sqlqurey=mysqli_query($con,"SELECT id,subgecet,accfree,ghymat,takhfif,icon,`user`,pic5,matn FROM `amozsh` WHERE `acc` ='1'   ORDER BY `amozsh`.`id` DESC LIMIT 0 , 50");

    while($qw=mysqli_fetch_array($sqlqurey)){
        $ma1=$qw['id'];
        $ma5=$qw['subgecet'];
        $ma6=$qw['accfree'];
        $ma7=$qw['ghymat'];
        $ma8=$qw['takhfif'];
        $ma9=$qw['icon'];
        $ma10=$qw['user'];
        $ma11=$qw['pic5'];
        $ma12=$qw['matn'];
        $pic1=explode(',',$ma11);
        $matnc=explode('<------------->',$ma12);
        $matnca=$matnc['0'];
        $pic1a=$pic1['0'];

        ?>
        <article class="post right">
            <div class="big-photo rt"><a target="_blank" href="product.php?id=<?php echo $ma1; ?>"><img src="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" class="rt"></a></div>
            <div class="left-side rt">
                <div class="mini-items rt-13">
                    <a href="product.php?id=<?php echo $ma1; ?>" class="simptip-position-top simptip-movable" data-tooltip="جزئیات محصول"><i class="fa fa-file-text-o"></i></a>
                </div>
                <div class="content rt">
                    <h2 class="title rt rt-13"><a href="#"><?php echo  htmlspecialchars($ma5) ; ?></a></h2>
                </div>
                <div class="price left"><?php if($ma6==1){echo"رایگان";}else{echo $ma7."<span class=\"rt-18\">تومان</span>";} ?> </div>

            </div>
        </article>
        <?Php


    }
    ?>

</div>


</section>
<!--پایان محصولات-->

<!--شروع سایدبار پنل-->
<section class="left-side left">

<!--شروع ویژگی های طراح-->
<aside class="block right profile">
<img src="<?=$avatar?>" class="right avatar">
<div class="entery left">
<h5 class="rt rt-18">فروشنده :  <?=$idh1?></h5>

</div>
<div class="info rt rt-16">


    <?php if($active2>0){?>
        <span class="rt-center c-1 simptip-position-top simptip-movable" data-tooltip=" نشان به خاطر فعال بودن اکانت به کاربر داده شده است "><i class="fa fa-user"></i></span>
    <?php }if($active1>0){?>
        <span class="rt-center c-2 simptip-position-top simptip-movable" data-tooltip="نشان به خاطر فعال بودن شماره تلفن همراه"><i class="fa fa-phone"></i></span>
    <?php }if($idh>0){?>
        <span class="rt-center c-3 simptip-position-top simptip-movable" data-tooltip="نشان به خاطر فعال بودن ایمیل"><i class="fa fa-envelope"></i></span>


    <?php }?>
</div>
</aside>
<!--پایان ویژگی های طراح-->

<!--شروع تعداد محصول و خرید-->
<aside class="block right sell-cm rt-18">
<span class="right"><i class="fa fa-shopping-basket"></i> <samp class="rt-21"><?php $rte=mysqli_query($con,"SELECT id FROM `amozsh` WHERE `idsender` = '$id' ");
        $nummas=mysqli_num_rows($rte);
        echo  $nummas; ?></samp> محصول</span>
<span class="left"><i class="fa fa-comments-o"></i> <samp class="rt-21"><?php $nummass=mysqli_num_rows(mysqli_query($con,"SELECT id FROM `coment` WHERE `idsender` = '$id' "));
        echo  "",$nummass; ?></samp> نظرات</span>
</aside>
    <aside class="block right prod-info rt-14">
        <ul class="right rt-13">
            <li class="rt">
                <div class="right name"> وبلاگ شخصی کاربر:</div>
                <div class="small left"><a href="blog.php?id=<?php echo $id; ?>" >وبلاگ</a></div>
            </li>





        </ul>
    </aside>
<!--پایان تعداد محصول و خرید-->


</section>
<!--پایان سایدبار پنل-->

</div>
</div>
</div>
</div>
<!--پایان محتوای اصلی سایت-->
<?php include ("foot.php");?>