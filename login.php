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
<h1 class="rt">ورود به حساب کاربری</h1>

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
<div class="page right">

<!--شروع فرم ورود-->
<div class="wr-form woocommerce rt">
    <?php
    if(isset($_POST['send'])){


        if($_POST['key']==$_SESSION['key']){
            if(1==1){
                $user=$_POST['user'] ;
                $password=$_POST['password'] ;
                $password =md5(base64_encode(base64_encode($password))) ;
                if(!preg_match( "/[:,\\. ^ ? ; & | ! ' # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $user )){
                    $re=mysqli_query($con,"SELECT password FROM `user`WHERE `user` = '$user'");
                    $fach=mysqli_fetch_assoc($re);
                    $pas= $fach['password'];
                    if($pas==$password){

                        $idse = mysqli_query($con,"SELECT id,activeblog,active,nazarat,lvl,dev,auh,chatid,tauh FROM user WHERE user='$user'");
                        $bid=mysqli_fetch_assoc($idse) ;
                        $idh=$bid['id'];
                        $activeblog=$bid['activeblog'];
                        $active=$bid['active'];
                        $active2=$bid['nazarat'];
                        $active3=$bid['lvl'];
                        $active4=$bid['dev'];
                        $activedf=$bid['chatid'];
                        $activedfacc=$bid['tauh'];
                        $activedfaccl=$bid['auh'];

                        $_SESSION['pass']=$password;
                        $_SESSION['user']=strtolower($user);
                        $_SESSION['idb']=$idh;
                        $_SESSION['active']=$active;
                        $_SESSION['activeblog']=$activeblog;
                        $_SESSION['nazarat']=$active2;
                        $_SESSION['lvl']=$active3;
                        $_SESSION['dev']=$active4;
                        $_SESSION['chatid']=$activedf;
                        $_SESSION['tauh']=$activedfacc;
                        $_SESSION['auh']=$activedfaccl;
                        $time=jdate("H:i:s j/n/Y",time());
                        $ip=getRealIpAddr();
                        $chat_id=$activedf;

                        $ii=$activedfacc;
                        $_SESSION['auh']=login($ii,$con,$idh,chatid($idh,$con),$token);
                        echo $_SESSION['auh'];
                    }else{
                        ?>
                        <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>رمز عبور یا نام کاربری اشتباه است</div>
                        <?php
                    }} else{

                    ?>
                    <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>رمز عبور یا نام کاربری اشتباه است</div>
                    <?php
                }
            } else{
                ?>
                <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong>کد امنیتی اشتباه است</div>
                <?php
            }
        } else{
            ?>
            <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>خطا!</strong> این صفحه منقضی شده لطفا دوباره بارگذاری کنید  </div>
            <?php
        }
    }


    ?>
<form class="woocommerce-form woocommerce-form-login login" method="post">
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<label for="username">نام کاربری &nbsp;<span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" name="user" id="username" autocomplete="username" value="" type="text">
</p>
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
<label for="password">گذرواژه&nbsp;<span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="password" autocomplete="current-password" type="password">
</p>
<p class="form-row">
    <input type="hidden" name="key" value="<?php echo loginkey() ; ?>">
    <button type="submit" class="woocommerce-Button button" name="send" value="ورود">ورود</button>
</p>
<p class="form-row">
<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" id="rememberme" value="forever" type="checkbox"> 
<span>مرا به خاطر بسپار</span>
</label>
</p>
<p class="woocommerce-LostPassword lost_password">
<a href="repass.php">گذرواژه خود را فراموش کرده اید؟</a>
</p>
</form>
</div>
<!--پایان فرم ورود-->

</div>
</div>
</div>
</div>
<!--پایان محتوای اصلی سایت-->

<?php
include("foot.php");
?>