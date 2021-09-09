<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("head.php");
?>
<!--شروع باکس عناوین زیر هدر-->
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">

<div class="title-side right">
<h1 class="rt">محصولات</h1>

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
<div class="webresan category-page rt">

<!--شروع ناوبار صفحه دسته بندی-->
<nav class="navbar right">

<div class="switch left">
<a onclick="setActiveStyleSheet('style2');document.getElementById('style1').style;return false;document.getElementById('style3').style;return false;" id="wr-style-b" class="left rt-18"><i class="fa fa-th-large left"></i></a>
<a onclick="setActiveStyleSheet('style1');document.getElementById('style2').style;return false;document.getElementById('style3').style;return false;" id="wr-style-a" class="left rt-18"><i class="fa fa-th left"></i></a>
<a onclick="setActiveStyleSheet('style3');document.getElementById('style1').style;return false;document.getElementById('style3').style;return false;" id="wr-style-c" class="left rt-18"><i class="fa fa-th-list left"></i></a>
</div>
<div class="push-left left">
<span class="products__filter_title right rt-14">ترتیب نمایش:</span> 
<form accept-charset="UTF-8" action="#" class="sort-control right" id="sort-by-form" method="get">

<input id="listtype" name="listtype" value="icon" type="hidden">
<input id="order" name="order" value="ASC" type="hidden">
</form>
<form accept-charset="UTF-8" action="#" class="sort-control left" method="get">

<input id="listtype" name="listtype" value="icon" type="hidden">
<input id="orderby" name="orderby" value="date" type="hidden">
<input id="order" name="order" value="DESC" type="hidden">
</form>
</div>
</nav>
<!--پایان ناوبار صفحه دسته بندی-->

<!--شروع باکس پست های دسته بندی-->
<section class="category-posts right">

    <?php


    $eeeg="";
    if(isset($_POST['sher'])){
        $my=$_POST['sher'];
        $mt=mysqli_real_escape_string($con,$my);
        $eeeg="and `subgecet`  LIKE '%$mt%'";

    }
    @$get=intval($_GET['p']);
    if(!isset($get)){
        $get=0;
    }
    $page=$get*20;
    $page=intval($page);

    @$grtp=intval($_GET['s']);

    if($grtp>0){

        $sqlqurey=mysqli_query($con,"SELECT id,`dled`,subgecet,matn,`idsender`,accfree,ghymat,takhfif,icon,`user`,pic5 FROM `amozsh` WHERE `daste`='$grtp' and `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC LIMIT $page , 24");
    }else{

        $sqlqurey=mysqli_query($con,"SELECT id,`dled`,subgecet,matn,`idsender`,accfree,ghymat,takhfif,icon,`user`,pic5 FROM `amozsh` WHERE `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC LIMIT $page , 24");
    }
    while($qw=mysqli_fetch_array($sqlqurey)){
        $ma1=$qw['id'];
        $ma5=$qw['subgecet'];
        $ma6=$qw['accfree'];
        $ma7=$qw['ghymat'];
        $ma8=$qw['takhfif'];
        $ma9=$qw['icon'];
        $ma10=$qw['user'];
        $ma11=$qw['pic5'];
        $w1=$qw['idsender'];
        $pic1=explode(',',$ma11);
        $pic1a=$pic1['0'];
        $ma12=$qw['matn'];
        $matnc=explode('<------------->',$ma12);
        $matnca=$matnc['0'];
        $matnca=strip_tags(substr($matnca,0,300)).'...';
        $w55=$qw['dled'];
        $idsessss = mysqli_query($con,"SELECT `user`,`name`,`avatar` FROM user WHERE id='$w1' ");
        $bidssss=mysqli_fetch_assoc($idsessss) ;
        $uname=$bidssss['user'];
        $avatar=$bidssss['avatar'];
        $name=$bidssss['name'];
        ?>

        <!--شروع پست دسته بندی-->
        <article class="post right">

            <div class="mini-photo rt"><a target="_blank" href="product.php?id=<?=$ma1?>" class="screenshot-preview" data-preview="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" data-titr="<?php echo  htmlspecialchars($ma5) ; ?>" data-titrsmall="<?=$matnca?>" data-titrsmall="" data-price="<?php if($ma6==1){echo"0";}else{echo $ma7;} ?>" title="<?php echo  htmlspecialchars($ma5) ; ?>"><img src="img.php?name=<?php echo $ma9; ?>&user=<?php echo $ma10; ?>" width="80px" height="80px"></a></div>
            <div class="big-photo rt"><a target="_blank" href="product.php?id=<?=$ma1?>"><img src="img.php?name=<?php echo $pic1a; ?>&user=<?php echo $ma10; ?>" class="rt"></a></div>
            <div class="left-side rt">
                <div class="mini-items rt-13">
                    <a href="product.php?id=<?=$ma1?>" class="simptip-position-top simptip-movable" data-tooltip="جزئیات محصول"><i class="fa fa-eye"></i></a>
                    <a href="pay.php?id=<?=$ma1?>" class="simptip-position-top simptip-success simptip-movable" data-tooltip="خرید محصول"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div class="content rt">
                    <div class="category-post rt rt-12">دسته‌بندی‌ها : <span><a href="category.html" rel="category tag">چند صفحه ای | چند منظوره</a> , <a href="category.html" rel="category tag">قالب HTML</a> , <a href="category.html" rel="category tag">قالب سایت فروشگاهی</a></span></div>
                    <h2 class="title rt rt-13"><a href="product.php?id=<?=$ma1?>"><?php echo  htmlspecialchars($ma5) ; ?></a></h2>

                    <div class="author rt rt-14">فروشنده: <a href="profile.php?id="><?=$name?></a></div>
                </div>
                <div class="price left">

                    <?php if($ma6!=1)
                    {
                        echo " $ma7<span class=\"rt-18\">تومان</span>";
                    }
                    else{
                        echo "  <span class=\"rt-18\">رایگان</span>";
                    }
                    ?>
                </div>
                <span class="pay-salle-mini rt rt-12"><?=$w55?> فروش</span>
            </div>
        </article>
        <!--پایان پست دسته بندی-->
        <?Php


    }
    ?>


<!--شروع صفحه بندی-->
<div class="navigation">
<div class="wp-pagenavi">
    <?php
    if($grtp>0){
        $sqlqurey=mysqli_query($con,"SELECT id,`dled`,subgecet,matn,`idsender`,accfree,ghymat,takhfif,icon,`user`,pic5 FROM `amozsh` WHERE `daste`='$grtp' and `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC ");
    }else{

        $sqlqurey=mysqli_query($con,"SELECT id,`dled`,subgecet,matn,`idsender`,accfree,ghymat,takhfif,icon,`user`,pic5 FROM `amozsh` WHERE `acc` ='1'  $eeeg ORDER BY `amozsh`.`id` DESC");
    }
     $rows1 = mysqli_num_rows($sqlqurey);
    $rows1= $rows1 / 24;

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
    if(isset($_GET['s'])){$numbers=intval($_GET['s']);@$add="&s=$numbers";}
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

</section>
<!--پایان باکس پست های دسته بندی-->

</div>
</div>
</div>
<?php include ("foot.php");?>