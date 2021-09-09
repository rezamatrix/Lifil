<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("model/mailsender.php");
include("head.php");
?>
    <script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<!--شروع باکس عناوین زیر هدر-->
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">

<div class="title-side right">
<h1 class="rt">فراموشی گذرواژه</h1>
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
<link rel='stylesheet' href='i/css/select2.css' type='text/css' media='all' />
<link rel='stylesheet' href='i/css/shop-layout-rtl.css' type='text/css' media='all' />
<link rel='stylesheet' href='i/css/shop-smallscreen-rtl.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' href='i/css/shop-rtl1aae.css?ver=3.5.3' type='text/css' media='all' />

<div class="bg-web rt">
<div class="main">
<div class="webresan rt">
<div class="page right">

<div class="woocommerce">

    <?php
    if(isset($_POST['send'])){
        //if(1==1){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            //your site secret key
            $secret = '6LfpJP4UAAAAAOhFXukD6Np2jnmFDrcD4OjIMQpO';
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success){
            //if(1==1){
                $email=$_POST['email'];
                if(preg_match( "/^[^@]+@[a-zA-Z0-9._-]+\\.[a-zA-Z]+\$/", $email )){
                    $re=mysqli_query($con,"SELECT id FROM `user`WHERE `email` = '$email'");
                    $num=mysqli_num_rows($re);
                    if($num==1){
                        $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
                        $text= explode(' ',$text);

                        $i=0;
                        $text1="";
                        while($i<24){
                            $text1.=$text[rand(0,35)];
                            --$i;
                        }
                        $to =$email;
                        $subject = "لینک تغییر پسورد-لیفیل ";
                        $message = "سلام<br>  برای انتخاب شما متشکریم <br>بر روی کلید زیر کلیک کنید: <br> ";
                        $message.="<center> <a href=\"https://lifil.net/active.php?id2=$text1\" style=\"text-decoration: none;\"><div style=\" height: 30px;border: #0c0c0c 1px solid ; border-radius: 50px;background-color: #51ac79;; color: #0b0b0b; padding-top:9px;\">اینجا کلیک کنید</div></a></center>";
                        $from = "noreplays@lifil.net";
                        sendmail($message,$to,$from,$subject,"کاربر");
                        mysqli_query($con,"INSERT INTO `repass` (`code`, `email`) VALUES ('$text1', '$email');");
                        ?>
                        <div class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>انجام شد!</strong> ایمیل برای شما ارسال شد
                        </div>
                        <?php
                    }

                }

                ?>

                <?php
            }
        }}


    ?>
<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p>گذرواژه خود را فراموش کرده اید؟ نام کاربری یا ایمیل خود را وارد کنید . یک لینک برای ساختن گذرواژه جدید در ایمیل خود دریافت خواهید کرد .</p>
	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login">نام کاربری یا ایمیل</label>
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="email" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

    <div class="g-recaptcha" data-sitekey="6LfpJP4UAAAAAAROftjcUJOlhCVgq1bnvFfOJdHa" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
	<p class="woocommerce-form-row form-row">
		<button type="submit" class="woocommerce-Button button" value="بازگردانی گذرواژه" name="send">بازگردانی گذرواژه</button>
	</p>

</form>
</div>
	

</div>
</div>
</div>
</div>
<?php
include("foot.php");
?>