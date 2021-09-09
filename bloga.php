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

<!--شروع پست-->
<article class="post-more right">
    <div class="webresan rt">
        <div class="blog-list right">

            <!--شروع پست-->

            <!--پایان پست-->

            <?php
            $mnu="";
            $page=0;
            if(isset($_GET['idm'])){
                $rr=intval($_GET['idm']);
                $mnu="WHERE idmnue = $rr";
            }
            @$get=intval($_GET['p']);
            if(!isset($get)){
                $get=0;
            }
            $page=$get*9;
            $page=intval($page);

            $blog = mysqli_query($con,"SELECT * FROM `bloga`  $mnu  ORDER BY id  DESC LIMIT $page , 9");
            while( $blogname=mysqli_fetch_array($blog)){
                $q1=$blogname['subgect'];
                $q12=$blogname['id'];
                $q2=$blogname['matn'];
                $q3=$blogname['Tarikh'];
                $q4=$blogname['barchasb'];
                $q5=$blogname['name'];
                $idmnue=$blogname['idmnue'];
                $q6=$blogname['pic'];
                $blogm = mysqli_query($con,"SELECT * FROM `mnuea` WHERE id='$idmnue'");
                 $mno=mysqli_fetch_array($blogm);
                 $mname=$mno['name'];
                 $meid=$mno['id'];


                        ?>

                    <article class="post right">
                        <span class="date rt-13 right"><?php echo jdate("H:i j/n/Y",$q3); ?></span>
                        <a href="posta.php?id=<?=$q12?>" class="rt"><img src="<?php echo "imguser/blog/" . $q6; ?>" class="rt"></a>
                        <div class="content right">
                            <h2 class="rt title rt-16"><a href="posta.php?id=<?=$q12?>"><?=$q1?></a></h2>
                            <div class="cat-p rt rt-12"><i class="fa fa-list-ul"></i> <a href="blog.php?m=<?=$meid?>" rel="category"><?=$mname?></a></div>
                            <div class="matn rt rt-13"><p><?=substr(removebbcode($q2),0,150).'...'?></p></div>
                        </div>
                        <a href="posta.php?id=<?=$q12?>" class="rt more rt-14">ادامه مطلب</a>
                    </article>





                <?php
            }
            ?>

            <!--شروع صفحه بندی-->
            <div class="navigation">
                <div class="wp-pagenavi">
                    <?php
                    $blog = mysqli_query($con,"SELECT * FROM `blog` $mnu  ORDER BY id  DESC ");
                    $rows1 = mysqli_num_rows($blog);
                    $rows1= $rows1 / 9;

                    $rows1= ceil($rows1);
                    $rows1= $rows1-1;
                    @$get_p=intval($_GET['p']);
                    if(!isset($get_p)){
                        $get_p=0;
                    }if($get_p>=1){$get_p=$get_p-1;}
                    $page=$get_p;
                    $page=intval($page);
                    $active='';
                    $i=0;
                    $rows3=0;
                    $rows2=$rows1+1;
                    $add='';
                    $nextnum=$rows1-$get_p;
                    if(isset($_GET['idm'])){$numbers=intval($_GET['idm']);@$add="&idm=$numbers";}
                    while ($rows3 <=$nextnum  and $i<=5){
                        $rows4=$rows3+1+($get_p);
                        if($i==5){ $rows4=$rows1+1;}
                        $accg="";

                        if($rows4+$page>1 and $i==0){
                            $n=intval(($rows4+$page)/2);
                            echo "<a href=\"?p=$n$add\">$n</a>";
                        }

                        if($rows4==$page+1){echo "<span>$rows4</span>";}else{echo "<a href=\"?p=$rows4$add\">$rows4</a>";}

                        $accg='';
                        $rows3++;
                        $i++;
                        if($rows1>5 and $i==5){echo "...";}
                    }
                    ?>

                </div>
            </div>
            <!--پایان صفحه بندی-->

        </div>
    </div>
</article>
<!--پایان پست-->

</section>
<!--پایان قسمت راست-->

<!--شروع سایدبار-->
<section class="blog-left left">

<!--شروع لینک صفحه اصلی وبلاگ-->
<aside class="block right">
<a href="blog.php?id=<?=$id?>" class="rt rt-16 home">صفحه اصلی وبلاگ وب استور</a>
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


        <li class="rt"><a href="?idm=<?php echo $blognamem1; ?>" class="right"><i class="fa fa-caret-left"></i><?php echo $blognamem2; ?></a><span class="left rt-12"><?=$numb?></span></li>
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
        <li class="rt"><a href="posta.php?id=<?=$idbo?>"><i class="fa fa-caret-left"></i><?=$sub?></a></li>
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