<?php
include("config/conf.php");
include("model/countonline.php");
include("model/jdf.php");
include("head.php");

?>
<!--شروع باکس عناوین زیر هدر-->
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">

<div class="title-side right">
<h1 class="rt">  وبلاگ</h1>
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
<div class="webresan rt">
<div class="blog-post right">

<!--شروع قسمت راست-->
    <section class="blog-right right">
<?php
$id=intval($_GET['id']) ;

$blog = mysqli_query($con,"SELECT * FROM `bloga` WHERE id='$id' ");
$blogname=mysqli_fetch_assoc($blog) ;
$q1=$blogname['subgect'];
$q2=$blogname['matn'];
$q12=$blogname['id'];
$q3=$blogname['Tarikh'];
$q4=$blogname['barchasb'];
$q5=$blogname['name'];
$idmnue=$blogname['idmnue'];
$idsender=$blogname['idsender'];
$blogm = mysqli_query($con,"SELECT * FROM `mnuea` WHERE id='$idmnue'");
$mno=mysqli_fetch_array($blogm);
$mname=$mno['name'];
$meid=$mno['id'];
?>
        <!--شروع پست-->
        <article class="post-more right">
            <div class="info rt rt-13">
                <div class="right meta"><i class="fa fa-folder-open"></i>دسته بندی <a href="blog.php?id=<?=$idsender?>&idm=<?=$meid?>"><?=$mname?></a></div>
                <div class="right meta"><i class="fa fa-calendar"></i> <?php echo jdate("H:i j/n/Y",$q3); ?> </div>

                <div class="share left">
                    <a href="http://www.facebook.com/share.php?u=[Post_Link]&amp;t=[Post_Title]" target="_blank" title="اشتراک گذاری در فیسبوک" class="fb left rt-center"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com/home?status=[Post_Link]" target="_blank" title="اشتراک گذاری در تویتر" class="tw left rt-center"><i class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/share?url=[Post_Link]" target="_blank" title="اشتراک گذاری در گوگل پلاس" class="gp left rt-center"><i class="fa fa-google-plus"></i></a>
                    <a href="https://telegram.me/share/url?text=cheack+this+site+please&amp;url=[Post_Link]" target="_blank" title="اشتراک گذاری در تلگرام" class="tg left rt-center"><i class="fa fa-paper-plane-o"></i></a>
                </div>
            </div>
            <h2 class="title right"><?=$q1?> </h2>
            <div class="matn right rt-15">
                <?php
                $parser = new \SBBCodeParser\Node_Container_Document();

                $parser->add_emoticons(array(
                    ':)' => 'https://bitsoftware.ir/emoticons/smile.png',
                    '8-)' => 'https://bitsoftware.ir/emoticons/cool.png',
                    ':angry:' => 'https://bitsoftware.ir/emoticons/angry.png',
                    ':angel:' => 'https://bitsoftware.ir/emoticons/angel.png',
                    ":'(" => 'https://bitsoftware.ir/emoticons/cwy.png',
                    ":ermm:" => 'https://bitsoftware.ir/emoticons/ermm.png',
                    ":alien:" => 'https://bitsoftware.ir/emoticons/alien.png',
                    ":blink:" => 'https://bitsoftware.ir/emoticons/blink.png',
                    ":blush:" => 'https://bitsoftware.ir/emoticons/blush.png',
                    ":cheerful:" => 'https://bitsoftware.ir/emoticons/cheerful.png',
                    ":devil:" => 'https://bitsoftware.ir/emoticons/devil.png',
                    ":dizzy:" => 'https://bitsoftware.ir/emoticons/dizzy.png',
                    ":getlost:" => 'https://bitsoftware.ir/emoticons/getlost.png',
                    ":happy:" => 'https://bitsoftware.ir/emoticons/happy.png',
                    ":kissing:" => 'https://bitsoftware.ir/emoticons/kissing.png',
                    ":ninja:" => 'https://bitsoftware.ir/emoticons/ninja.png',
                    ":pinch:" => 'https://bitsoftware.ir/emoticons/pinch.png',
                    ":sick:" => 'https://bitsoftware.ir/emoticons/sick.png',
                    ":sideways:" => 'https://bitsoftware.ir/emoticons/sideways.png',
                    ":silly:" => 'https://bitsoftware.ir/emoticons/silly.png',
                    ":sleeping:" => 'https://bitsoftware.ir/emoticons/sleeping.png',
                    ":unsure:" => 'https://bitsoftware.ir/emoticons/unsure.png',
                    ":woot:" => 'https://bitsoftware.ir/emoticons/w00t.png',
                    ":wassat:" => 'https://bitsoftware.ir/emoticons/wassat.png',
                    ":pouty:" => 'https://bitsoftware.ir/emoticons/pouty.png',
                    ":D" => 'https://bitsoftware.ir/emoticons/grin.png',
                    ":(" => 'https://bitsoftware.ir/emoticons/sad.png',
                    ":O" => 'https://bitsoftware.ir/emoticons/shocked.png',
                    ":P" => 'https://bitsoftware.ir/emoticons/tongue.png',
                    ";)" => 'https://bitsoftware.ir/emoticons/wink.png',
                    '<3' => 'https://bitsoftware.ir/emoticons/heart.png'
                ));
                $sdd=  htmlspecialchars_decode($q2);
                $new="";
                $matn=str_replace('<------------->'," ",$sdd);
                echo $parser->parse($matn)
                    ->detect_links()
                    ->detect_emails()
                    ->detect_emoticons()
                    ->get_html();

                ?>
            </div>
        </article>
        <!--پایان پست-->

    </section>
<!--پایان قسمت راست-->

<!--شروع سایدبار-->
<section class="blog-left left">

<!--شروع لینک صفحه اصلی وبلاگ-->
<aside class="block right">
<a href="blog.php?id=<?=$idsender?>" class="rt rt-16 home">صفحه اصلی وبلاگ وب استور</a>
</aside>
<!--پایان لینک صفحه اصلی وبلاگ-->

<!--شروع دسته بندی وبلاگ-->
<aside class="block right">
<div class="title rt">
<h4 class="right rt-16">دسته بندی</h4>
<i class="fa fa-list-ul rt-16 left"></i>
</div>
<ul class="content rt rt-13">
    <?php

    $blogm = mysqli_query($con,"SELECT id,`name` FROM `mnuea` ");
    while( $blognamem=mysqli_fetch_array($blogm)){
    $blognamem1=$blognamem['id'];
    $blognamem2=$blognamem['name'];
        $blognum = mysqli_query($con,"SELECT * FROM `bloga` WHERE `idmnue`='$blognamem1'");
        $numb=mysqli_num_rows($blognum);

    ?>

        <li class="rt"><a href="bloga.php?idm=<?php echo $blognamem1; ?>" class="right"><i class="fa fa-caret-left"></i><?php echo $blognamem2; ?></a><span class="left rt-12"><?=$numb?></span></li>
    <?php
    }         ?>


</ul>
</aside>
<!--پایان دسته بندی وبلاگ-->

<!--شروع آخرین پست های وبلاگ-->
<aside class="block right">
<div class="title rt">
<h4 class="right rt-16">آخرین پست های وبلاگ</h4>
<i class="fa fa-clock-o rt-16 left"></i>
</div>
<ul class="content lsat-blog-posts rt rt-13">
    <?php


    $rezal = mysqli_query($con,"select * from bloga  ORDER BY id  DESC LIMIT 0 , 5");
    while( $blogname=mysqli_fetch_array($rezal)){
        $sub=$blogname['subgect'];
        $idbo=$blogname['id'];

        ?>
        <li class="rt"><a href="post.php?id=<?=$idbo?>"><i class="fa fa-caret-left"></i><?=$sub?></a></li>
        <?php
    }
    ?>


</ul>
</aside>
    <aside class="block right">
        <div class="title rt">
            <h4 class="right rt-16"> برچسب ها  </h4>
            <i class="fa fa-key rt-16 left"></i>
        </div>
        <ul class="content lsat-blog-posts rt rt-13">
            <?php
            $bar=explode(',',$q4);
            for($i=0;$i<count($bar);$i++)
            {
                ?>
                <a href="post.php?id=<?=$q12?>" rel="tag"><?=$bar[$i]?></a>،
                <?php
            }
            ?>


        </ul>
    </aside>
<!--پایان آخرین پست های وبلاگ-->

</section>
<!--پایان سایدبار-->

</div>
</div>
</div>
</div>
<?php
include ("foot.php");
?>