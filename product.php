<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("head.php");
$idm=intval($_GET['id']) ;
$sqlqurey=mysqli_query($con,"SELECT idsender,id,tarikh,matn,subgecet,pic5,file,accfree,ghymat,takhfif,barchasb,icon,sizefile,`user`,pos,neg,acc,dled,uscunt,lic,time2 FROM `amozsh` WHERE `id` =$idm");
$qw=mysqli_fetch_assoc($sqlqurey);
$w1=$qw['idsender'];
$w0=$qw['id'];
$w12=$qw['tarikh'];
$w2=$qw['matn'];
$w3=$qw['subgecet'];
$w4=$qw['pic5'];
$w5=$qw['file'];
$w6=$qw['accfree'];
$w7=$qw['ghymat'];
$w8=$qw['takhfif'];
$w9=$qw['icon'];
$w10=$qw['sizefile'];
$w11=$qw['user'];
$w13=$qw['file'];
$w14=$qw['pos'];
$w15=$qw['neg'];
$w20=$qw['acc'];
$w55=$qw['dled'];
$w56=$qw['uscunt'];
$w5ss=$qw['time2'];
$w57=$qw['lic'];
$barchasb=$qw['barchasb'];
$idsessss = mysqli_query($con,"SELECT `user`,`name`,`avatar` FROM user WHERE id='$w1' ");
$bidssss=mysqli_fetch_assoc($idsessss) ;
$uname=$bidssss['user'];
$avatar=$bidssss['avatar'];
$name=$bidssss['name'];
if($avatar==""){$avatars="img/q.jpg";

} else{
    $avatars= "img.php?user=".$uname."&name=".$avatar;
}
if(($w20==1 ) or ($_SESSION['lvl']==2 and $w20==0)) {
    $rezal = mysqli_query($con, "select token,id from upload WHERE filename = '$w13' ");
    $eed = mysqli_fetch_assoc($rezal);
    $eedrow1 = $eed['token'];
    $eedrow2 = $eed['id'];
    ?>
    <?php
    if(isset($_POST['send'])){
        if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
            //if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            if(1==1){
                //your site secret key
                $secret = '6Ledbi0UAAAAACeEBupzOF0o1Zpso8FwoeuKsaA3';
                //get verify response data
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                //$responseData = json_decode($verifyResponse);
                if(1==1){
                    //  if($responseData->success){
                    $uyt=htmlspecialchars(mysqli_real_escape_string($con,$_POST['com']));
                    if(strlen($uyt)>3){
                        $id= $_SESSION['idb'];
                        $us=$_SESSION['user'];
                        $ann=$_SESSION['nazarat'];
                        $time=time();
                        $ech="";
                        if($ann==1){$ann2s=0; }
                        if($ann==0){$ann2s=1;}

                        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 1 WHERE `id` =$id;");
                        mysqli_query($con,"UPDATE `user` SET `point` = `point`+ 1 WHERE `id` =$w1;");
                        mysqli_query($con,"INSERT INTO `coment` (`idsender`, `idamozesh`, `name`, `tarikh`, `matn`, `active`, `s`) VALUES ('$id', '$w0', '$us', '$time', '$uyt', '$ann2s', '$w1');");
                        mysqli_query($con,"UPDATE `user` SET `newcom` = `newcom`+'1' WHERE `id` =$w1;") ;


                    } }} }}
    if(isset($_GET['pn']) and isset($_GET['id'])){
        if(isset($_SESSION['pass']) and isset($_SESSION['user'])){
            $get1=intval($_GET['pn']);
            $get2=intval($_GET['id']);
            $us=$_SESSION['user'];
            if($get1==1){

                $rezalwoy = mysqli_query($con,"select id from `posneg` WHERE `name` = '$us' and `idkala`=$get2");
                $counteedwoy=mysqli_num_rows($rezalwoy);
                if($counteedwoy==0){
                    mysqli_query($con,"iNSERT INTO `posneg` (`name` ,`onezero` ,`idkala`)VALUES ('$us', '1', '$get2');");
                    mysqli_query($con,"UPDATE `amozsh` SET `pos` = `pos`+'1' WHERE `amozsh`.`id` =$get2;") ;
                }


            }
            if($get1==0){
                $rezalwoy = mysqli_query($con,"select id from `posneg` WHERE `name` = '$us' and `idkala`=$get2");
                $counteedwoy=mysqli_num_rows($rezalwoy);
                if($counteedwoy==0){
                    mysqli_query($con,"iNSERT INTO `posneg` (`name` ,`onezero` ,`idkala`)VALUES ('$us', '0', '$get2');");
                    mysqli_query($con,"UPDATE `amozsh` SET `neg` = `neg`+'1' WHERE `amozsh`.`id` =$get2;") ;

                }
            }
        }
    }
    ?>
    <script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
    <!--شروع باکس عناوین زیر هدر-->
    <aside class="bg-text rt">
        <div class="main">
            <div class="page-text rt">

                <div class="title-side right">
                    <h1 class="rt"><?=$w3?></h1>

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
            <div class="product rt">
                <span class="tab-btn tb-1 right rt-14">جزئیات محصول</span>
                <span class="tab-btn tb-2 right rt-14"> نظرات </span>
                <span class="tab-btn tb-3 right rt-14">پشتیبانی این محصول</span>
                <div class="product-content right">

                    <!--شروع محتوای محصول-->
                    <article class="tab-con tbc-1 right product-side">
                        <div class="product_desc rt rt-14">


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
                            $sdd=  htmlspecialchars_decode($w2);
                            $matn=explode('<------------->',$sdd);
                            if(strlen(@$matn['1'])>10){
                            echo $parser->parse($matn['1'])
                                ->detect_links()
                                ->detect_emails()
                                ->detect_emoticons()
                                ->get_html();
                            }
                            if(strlen(@$matn['1'])<10){
                                echo $parser->parse($matn['0'])
                                    ->detect_links()
                                    ->detect_emails()
                                    ->detect_emoticons()
                                    ->get_html();
                            }
                            ?>


                        </div>
                    </article>
                    <!--پایان محتوای محصول-->

                    <!--شروع باکس دیدگاه-->
                    <?php
                    $num=mysqli_query($con,"SELECT * FROM `coment` WHERE `idamozesh` ='$w0' and `active`=1 ORDER BY `coment`.`id` DESC");
                    $numcom=mysqli_num_rows($num);
                    ?>
                    <aside class="tab-con tbc-2 right comments">
                        <div class="name rt rt-16"><span class="rt-20"><?=$numcom?></span> دیدگاه <a href="#respond"
                                                                                             class="rt-12">افزودن</a>
                        </div>

                        <!--شروع دیدگاه های ارسال شده-->
                        <ul class="rt comment-list">

                            <!--شروع نمونه دیدگاه-->
                            <?php
                            $ife=0;
                            $tttt=mysqli_query($con,"SELECT * FROM `coment` WHERE `idamozesh` ='$w0' and `active`=1 ORDER BY `coment`.`id` DESC");
                            while($ysq=mysqli_fetch_array($tttt)){
                                $ysqs1=$ysq['name'];
                                $ysqs2=$ysq['tarikh'];
                                $ysqs3=$ysq['matn'];
                                $ysqsr=$ysq['idsender'];
                                $idseq = mysqli_query($con,"SELECT user,avatar,name FROM user WHERE id='$ysqsr' ");
                                $bidq=mysqli_fetch_assoc($idseq) ;
                                $idh2q=$bidq['user'];
                                $idh7q=$bidq['avatar'];
                                $idh1q=$bidq['name'];
                                if($idh7q==""){$avatarq="img/q.jpg";

                                } else{
                                    $avatarq= "img.php?user=".$idh2q."&name=".$idh7q;
                                }
                                ++$ife;
                                if($ife>0){
                                    ?>

                           <li class="rt comment">
                                        <div class="info-cm right">
                                            <a href="#"><img src="<?php echo $avatarq; ?>" class="avatar rt"></a>
                                        </div>
                                        <div class="entery left">
                                            <div class="info-bar right">
                                                <a href="" title="taktazam"><strong
                                                        class="name rt-13"><?php echo $idh1q; ?></strong></a>
                                                <small class="rt rt-12"><?php echo jdate("j/n/Y H:i:s",$ysqs2);      ?></small>
                                            </div>
                                            <div class="content rt rt-13">
                                                <?php echo strip_tags($ysqs3); ?>
                                            </div>
                                        </div>


                                    </li>

                                <?php }
                            }
                            ?>

                            <!--پایان نمونه دیدگاه-->



                        </ul>
                        <!--پایان دیدگاه های ارسال شده-->



                        <!--شروع فرم ارسال دیدگاه-->
                        <div class="rt" id="respond">
                            <form action="" method="post" id="commentform">
                                <textarea class="right rt-14" placeholder="دیدگاه خود را اینجا بنویسید..." id="item_comment_content" name="com"></textarea>

                                <button class="left rt-14" type="submit" id="submit" tabindex="5" class="btn-icon post-reply" name="send">ارسال دیدگاه</button>
                                <div class="g-recaptcha" data-sitekey="6Ledbi0UAAAAAGM37r6hc1NXRSorXDeZ8PrA-b5r"></div>
                            </form>
                        </div>
                        <!--پایان فرم ارسال دیدگاه-->

                    </aside>
                    <!--پایان باکس دیدگاه-->

                    <!--شروع باکس پشتیبانی-->
                    <aside class="tab-con tbc-3 right support rt-14">
                        <h3 class="rt-21 rt">مقدمه ای بر پشتیبانی محصولات وب استور</h3>
                        <ul class="rt rt-13">
                            <li>محصولات ارائه شده در وب استور قبل از اینکه برای فروش گذاشته شوند بررسی می‌گردند.</li>
                            <li>فایلهای درون ریز(مخصوص قالب های وردپرس) و فایل های راهنمای نصب در فایل دانلودی شما موجود
                                است، در غیر این صورت با طراح تماس بگیرید تا فایل درون ریز را بشما ارائه نماید.
                            </li>
                            <li>طراح موظف است تا ایرادات امنیتی و خطاهای موجود در محصول خود را رفع نماید، اما در مورد
                                ویرایش یا مواردی اضافی هیچ مسئولیتی ندارد.
                            </li>
                        </ul>
                        <div class="alert right rt-13">
                            لطفاً در صورتی که طراح قادر به پاسخگویی تلفنی نبود، ایمیلی حاوی درخواست خود به ایشان ارسال
                            نمایید، تا به درخواستتان رسیدگی شود.<br>
                            طبیعتاً پشتیبانی محصول به صورت لحظه ای نخواهد بود و طراح موظف به حل مشکل در لحظه نمیباشد و
                            برای حل مشکل احتمالی به زمان حداقل 24 ساعت کاری نیاز دارد.
                        </div>
                        <div class="block right rt-15">
                            <span>اطلاعات تکمیلی از طرف حمیدرضا :</span>
                            <p class="rt-13">
                                دوستان عزیز این محصول کاملا پشتیبانی میشه تا هنگام نصب ، پس بعد از خرید هرگونه مشکلی
                                داشتید با ما در تماس باشید
                                &nbsp;
                                دوستان عزیز توجه کنید سایت banaweb.ir هیچ ربطی به این محصولات ندارد&nbsp;
                                سایت ما jonoobweb.ir میباشد</p>
                        </div>
                        <br>
                        <h3 class="rt-21 rt">زمان ارتباط با مدیران وب استور</h3>
                        <p>مسئولیت پشتیبانی محصول بر عهده‌ی طراح است و در مورد پشتیبانی محصولات با وب استور تماس نگیرید،
                            مگر اینکه در مورد خود سایت وب استور سوالاتی داشته باشید.<a
                                    href="http://preview-site.ir/support/">پشتیبانی وب استور</a></p>
                    </aside>
                    <!--پایان باکس پشتیبانی-->

                    <!--شروع سایدبار محصول-->
                    <section class="left-side left">

                        <!--شروع دکمه خرید و قیمت و ویژگی ها-->
                        <aside class="block right">
                            <div class="price rt">


                                <?php if($w6!=1)
                                {
                                    echo " <span class=\"number rt\"> $w7<span class=\"rt-16\">تومان</span></span>";
                                }
                                else{

                                    echo " <span class=\"number rt\"> <span class=\"rt-16\">رایگان</span></span>";
                                }

                                ?>

                            </div>
                            <ul class="features rt rt-13">
                                <li><i class="fa fa-check"></i> گارانتی کیفیت وب استور</li>
                                <li><i class="fa fa-check"></i> هفت روز ضمانت کیفیت و خدمات </li>
                                <li><i class="fa fa-check"></i> آپدیت و پشتیبانی رایگان</li>
                            </ul>

                            <?php
                            if($w6==1){

                                echo"<a href=\"dlfree.php?md5=$eedrow1.$eedrow2\" class=\"dl rt rt-15 \"><i class=\"fa fa-shopping-cart\"></i>  دانلود  </a>";

                            }else{
                                echo"<a href=\"pay.php?id=$w0\" class=\"buy rt rt-15\"><i class=\"fa fa-shopping-cart\"></i> خرید و دانلود محصول</a>";
                            }


                            ?>
                        </aside>
                        <!--پایان دکمه خرید و قیمت و ویژگی ها-->

                        <!--شروع دکمه کای سمت راست-->
                        <aside class="prod-links rt rt-14">
                            <a href="op/pm.php?cp=22&p=3&n=<?php echo $uname; ?>" id="modal-btn-a" class="right"><i class="fa fa-support"></i> درخواست پشتیبانی</a>
                            <a href="#modal-b" id="modal-btn-b" class="left"><i class="fa fa-warning"></i> گزارش تخلف</a>
                        </aside>
                        <!--پایان دکمه های سمت راست-->

                        <!--شروع فرم مدال گزارش تخلف-->
                        <div class="modal" id="modal-b" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-header">
                                    <h2>گزارش تخلف</h2>
                                    <a href="#modal-btn-b" class="btn-close" aria-hidden="true">×</a>
                                </div>
                                <div class="modal-body rt-14">

                                </div>
                                <form action="" method="POST">
                                    <textarea name="send1" rows="3" cols="35" class="form-control"></textarea>
                                    <script src="js/ajcode.js">
                                    </script>
                                    <center><img src="code.php" alt="" class="img-thumbnail" id="hint"><button name="ref" type="button" value="ref" id="ref" onclick="showHint()" class="md-btn md-fab m-b-sm blue"><i class="glyphicon glyphicon-refresh"></i></button></center>
                                    <input name="code" type="text" id="reg1" placeholder="کد امنیتی"  class="form-control">    <br>

                                    <input name="send222" type="submit" value="ارسال"  class="btn btn-fw warn" style=" font-family: 'BYekan+ Bold';">

                                </form>
                                <?php

                                if(isset($_POST['send222'])){
                                    $matn=htmlspecialchars(mysqli_real_escape_string($con,$_POST['send1']));
                                    $id=intval($_GET['id']);
                                    @$idcode=htmlspecialchars(mysqli_real_escape_string($con,$_POST['code']));
                                    $time=time();
                                    if($_SESSION['code']==$idcode){
                                        mysqli_query($con,"INSERT INTO `tkhalof` (`matn`, `id2`, `time` , `ok`) VALUES ('$matn', '$id','$time' , '0');");
                                    } }

                                ?>
                                <div class="modal-footer">
                                    <a href="#modal-btn-b" class="btn">بستن</a>
                                </div>
                            </div>
                        </div>
                        <!--پایان فرم مدال گزارش تخلف-->



                        <!--شروع تعداد دیدگاه و خرید-->
                        <aside class="block right sell-cm rt-18">
                            <span class="right"><i class="fa fa-shopping-basket"></i> <samp class="rt-21"><?=$w55?></samp> دانلود</span>
                            <span class="left b-cms"><i class="fa fa-comments-o"></i> <samp class="rt-21"><?=$numcom?></samp> دیدگاه</span>
                        </aside>
                        <!--پایان تعداد دیدگاه و خرید-->
                        <aside class="block right sell-cm rt-18">
                            <div class="right"><a onclick="window.location.href = '?id=<?php echo $w0;?>&pn=1';"><i class="fa fa-thumbs-up text-warning mr-3" style="cursor: pointer; "><h3><?php echo $w14+0; ?></h3></i> </a></div>
                            <div class="left b-cms"><a onclick="window.location.href = '?id=<?php echo $w0;?>&pn=0';"><i class="fa fa-thumbs-down  mr-3 " style="color: red;cursor: pointer;"><h3><?php echo $w15+0; ?></h3></i></a></div>
                        </aside>
                        <!--شروع پروفایل طراح-->
                        <aside class="block right profile">
                            <img src="<?=$avatars?>" class="right avatar">
                            <div class="entery left">
                                <h5 class="rt rt-18">فروشنده : <?=$name?></h5>
                                <a href="profile.php?id=<?=$w1?>" class="right rt-12">پروفایل</a>
                            </div>
                        </aside>
                        <!--پایان پروفایل طراح-->

                        <!--شروع درباره محصول-->
                        <aside class="block right prod-info rt-14">
                            <ul class="right rt-13">
                                <li class="rt">
                                    <div class="right name">تاریخ انتشار</div>
                                    <div class="small left"><?php echo jdate("j/n/Y",$w12); echo "&nbsp;".jdate("H:i:s",$w12);      ?>  </div>
                                </li>
                                <li class="rt">
                                    <div class="right name">آخرین ویرایش</div>
                                    <div class="small left"><?php echo jdate("j/n/Y",$w5ss); echo "&nbsp;".jdate("H:i:s",$w5ss);      ?></div>
                                </li>
                                <li class="rt">
                                    <div class="right name">نوع لایسنس</div>
                                    <div class="small left"> <?php if($w57==1){echo "Early Access";}elseif($w57==2){echo "Alpha";}elseif($w57==3){echo "Beta";}elseif($w57==4){echo "Full";}     ?></div>
                                </li>


                                <li class="rt">
                                    <div class="right name">برچسب ها</div>
                                    <div class="rt big">

                                        <?php
                                        $bar=explode(',',$barchasb);
                                        for($i=0;$i<count($bar);$i++)
                                        {
                                            ?>
                                            <a href="product.php?id=<?=$w0?>" rel="tag"><?=$bar[$i]?></a>،
                                            <?php
                                        }
                                        ?>
                                </li>
                                <div class="rt rt-13 short-link"><i class="fa fa-link"></i> لینک کوتاه
                                    <div class="rt"><input value="http://lifil.net/?id=<?=$w0?>" type="text"></div>
                                </div>
                            </ul>
                        </aside>
                        <!--پایان درباره محصول-->



                    </section>
                    <!--پایان سایدبار محصول-->

                </div>
            </div>
        </div>
    </div>


    <?php
}

include ("foot.php");?>
