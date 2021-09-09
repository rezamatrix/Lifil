<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("head.php");
@$id=intval($_GET['id']) ;
if($id>0){
?>

    <script type="text/javascript">  window.location.href = "product.php?id=<?=$id?>";  </script>
<?php
}
?>
<aside class="bg-text rt">
<div class="main">
<div class="index-text rt">
<form action="store.php" method="post">
<div class="search">
<input class="right rt-16"  placeholder="جستجو"  type="text" name="sher">
<button class="left rt-18" name="send"></button>
</div>
</form>
</div>
</div>
</aside>
<div class="bg-web rt">
<div class="main">
<div class="webresan rt">
<section class="about right right">
<aside >
<h3 class="title right rt-16">پیشنهادات ویژه محدود</h3>
<div class="owl-carousel alone-slider offer rt">
    <?php
    $ity=1;
    $blog = mysqli_query($con,"SELECT dt,id,dt,img,link FROM `slider` WHERE acc='1'  ORDER BY id  DESC ");
    while( $blogname=mysqli_fetch_array($blog) and $ity<5) {
        $q1 = $blogname['dt'];
        $q12 = $blogname['id'];
        $q2 = $blogname['dt'];
        $qd = $blogname['link'];
        $qdd = $blogname['img'];
        ?>
        <div class="item"><a href="<?php echo $qd; ?>"><img src="<?php echo $qdd; ?>" alt="<?php echo $q2; ?>" class="rt"><span class="left rt-14"> <?php echo $q1; ?></span></a></div>
        <?php
    }
?>
</div>
</aside>
</section>
<section class="vip right">
<div class="title right"><i class="fa fa-diamond right"></i><h4 class="left rt-15">محصولات ویژه</h4><span class="left rt-13">پست های ویژه</span></div>
<div class="content left">
<div class="owl-carousel vips rt">
    <?php
    $sqlqurey=mysqli_query($con,"SELECT id,subgecet,accfree,ghymat,takhfif,icon,`user`,pic5,matn FROM `amozsh` WHERE `acc` ='1' and `star`='1'  ORDER BY `amozsh`.`id` DESC LIMIT 0 , 15");
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
        $pic1a=$pic1['0'];

        ?>
        <div class="item rt"><a target="_blank" href="index.php?id=<?php echo $ma1; ?>" class="screenshot-preview" data-preview="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" data-titr="<?php echo  htmlspecialchars($ma5) ; ?>" data-titrsmall="<?=substr(removebbcode($ma12),0,150).'...'?>" data-price="<?php if($ma6==1){echo"0";}else{echo $ma7;} ?>" title="<?php echo  htmlspecialchars($ma5) ; ?>"><img src="img.php?name=<?php echo $ma9; ?>&user=<?php echo $ma10; ?>" width="80px" height="80px"></a></div>
        <?Php
    }
    ?>
</div>
</div>
</section>
<aside class="proce right">
<div class="proce-item right"><i class="fa fa-check right"></i><h5 class="left rt-12">محصولات اورجینال<span class="rt">تنها مرجع رسمی در ایران</span></h5></div>
<div class="proce-item right"><i class="fa fa-wrench right"></i><h5 class="left rt-12">گارانتی کیفیت<span class="rt">تایید عملکرد و کیفیت</span></h5></div>
<div class="proce-item right"><i class="fa fa-umbrella right"></i><h5 class="left rt-12">ضمانت کیفیت و خدمات<span class="rt">در صورت نقص یا عدم پشتیبانی</span></h5></div>
<div class="proce-item right"><i class="fa fa-info right"></i><h5 class="left rt-12">نصب آسان و فایل راهنما<span class="rt">ارائه بسته نصبی و آموزش راه‌اندازی</span></h5></div>
<div class="proce-item right"><i class="fa fa-support right"></i><h5 class="left rt-12">آپدیت و پشتیبانی رایگان<span class="rt">برای کلیه محصولات لیفیل</span></h5></div>
</aside>
<section class="boxs right">
<aside class="box right" style="width: 96.3%;">
<div class="title rt"><h4 class="right rt-17"> جدیدترین <div>محصولات</div></h4><span class="left rt-13"></span></div>
<div class="entery rt">
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

    $pic1a=$pic1['0'];
    ?>
        <div class="wr-item"><a target="_blank" href="product.php?id=<?php echo $ma1; ?>" class="screenshot-preview" data-preview="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" data-titr="<?=htmlspecialchars($ma5)?>" data-titrsmall="<?=substr(removebbcode($ma12),0,150).'...'?>" data-price="<?php if($ma6==1){echo"0";}else{echo $ma7;} ?>" title="<?php echo  htmlspecialchars($ma5) ; ?>"><img src="img.php?name=<?php echo $ma9; ?>&user=<?php echo $ma10; ?>" width="80px" height="80px"></a></div>
        <?Php
}
?>

</div>
</aside>
<div class="rt">
</div>
<aside class="box right persian">
<div class="title-b right"><h4 class="rt rt-18">پرفروش ترین محصولات</h4><h5 class="rt rt-13"></h5></div>
<div class="entery persian left">
<div class="owl-carousel vips rt">
    <?php
    $sqlqurey=mysqli_query($con,"SELECT id,subgecet,accfree,ghymat,takhfif,icon,`user`,pic5,matn FROM `amozsh` WHERE `acc` ='1'   ORDER BY `amozsh`.`dled` DESC LIMIT 0 , 15");
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
        $pic1a=$pic1['0'];
        ?>
        <div class="item rt"><a target="_blank" href="index.php?id=<?php echo $ma1; ?>" class="screenshot-preview" data-preview="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" data-titr="<?php echo  htmlspecialchars($ma5) ; ?>" data-titrsmall="<?=substr(removebbcode($ma12),0,150).'...'?>" data-price="<?php if($ma6==1){echo"0";}else{echo $ma7;} ?>" title="<?php echo  htmlspecialchars($ma5) ; ?>"><img src="img.php?name=<?php echo $ma9; ?>&user=<?php echo $ma10; ?>" width="80px" height="80px"></a></div>
        <?Php
    }
    ?>
</div>
</div>
</aside>
</section>
    <section class="about right right">
        <aside class="earn-money left">
            <h3 class="rt">شما هم <div>پولدار</div> شوید!</h3>
            <p class="rt titr rt-13">هیچ فرقی نمیکند شما طراح و برنامه نویس باشید یا خیر ، لیفیل فرصت کسب درآمد میلیونی را به شما می دهد کافیست عضو شوید و یکی از روش های زیر را انتخاب کنید!</p>
            <div class="side border right">
                <i class="fa fa-money"></i>
                <span class="rt rt-15">فروش محصول</span>
                <p class="rt rt-12">کلیه طراحان‌، برنامه نویسان و شرکت های طراحی وب سایت میتوانید محصولات طراحی شده ی خود را با رعایت قوانین کپی رایت در لیفیل برای فروش قرار دهند. یک عرضه و هزاران فروش در انتظار شماست ...</p>
            </div>
            <div class="side left">
                <i class="fa fa-users"></i>
                <span class="rt rt-15">بازاریابی محصول</span>
                <p class="rt rt-12">وااااای این کار ساده ترین راه درآمدزایی است! کافیست لینک بازاریابی خود را ایجاد کنید و هر محصولی را که دوست دارید بازاریابی کنید! ۱۰ تا ۵۰ درصد مبلغ فروش هر محصول را برای شماست...</p>
            </div>
        </aside>
        <aside class="right-side right">
            <div class="owl-carousel alone-slider slider-about rt">
                <?php


                $rezal = mysqli_query($con,"select subgect,pic,idsender,id,matn from bloga  ORDER BY id  DESC LIMIT 0 , 5");
                while( $blogname=mysqli_fetch_array($rezal)){
                    $sub=$blogname['subgect'];
                    $idbo=$blogname['id'];
                    $q5=$blogname['pic'];
                    $matn=$blogname['matn'];

                    ?>
                    <tr>
                    </tr>
                    <div class="item">
                        <a href="posta.php?id=<?php echo $idbo; ?>">
                        <div class="title rt"><img src="<?php echo "imguser/blog/" . $q5; ?>" class="right">  <h3> <?php echo $sub; ?></h3></div>
                        <p class="right rt-14"><?=substr(removebbcode($matn),0,300).'...'?></p>
                        </a>
                    </div>
                    <?php
                }
                ?>


            </div>
        </aside>
    </section>
</div>
</div>
</div>
<?php
include("foot.php");
?>