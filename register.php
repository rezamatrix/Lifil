<?php
include("config/conf.php");
include("model/funcreg.php");
include("model/countonline.php");
include("head.php");
?>
<!--شروع باکس عناوین زیر هدر-->
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">

<div class="title-side right">
<h1 class="rt">ثبت نام در سایت</h1>

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
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<!--شروع محتوای اصلی سایت-->
<div class="bg-web rt">
<div class="main">
<div class="webresan rt">
<div class="page right">
    <?php
    if(isset($_POST['send'])){
        $user=$_POST['user'];
        //if(1==1){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            //your site secret key
            $secret = '6LfpJP4UAAAAAOhFXukD6Np2jnmFDrcD4OjIMQpO';
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success){
            //if(1==1){
                $password1=md5(base64_encode(base64_encode($_POST['password1'])));
                $password2=md5(base64_encode(base64_encode($_POST['password2'])));
                $name=$_POST['name'];
                $email=$_POST['email'];
                $tell=$_POST['tell'];
                $boob="";
                if(preg_match( "/^[^@]+@[a-zA-Z0-9._-]+\\.[a-zA-Z]+\$/", $email )){
                    $re=mysqli_query($con,"SELECT *FROM `user`WHERE email='$email'") ;
                    $count=mysqli_num_rows($re) ;
                    if($count<1){
                        $tureemail=$email;
                    } else{$boob .="
  <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>این ایمیل تکراری است
</div>
";}

                }else{$boob .= "
<div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>ایمیل وارد شده نامعتبر است
</div>
";}
              /*  if(substr($tell,0,1)=='0'){
                    $str = ltrim($tell, '98');
                    $tell =$str;
                }*/
                if( strlen($tell) < 12){
                    $turetell=$tell;
                } else{$boob .= "
<div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>شماره تماس را اشتباه وارد کرده اید
</div>
";}
                if($password1==$password2){
                    if(strlen($_POST['password1']) > 3){
                        $turepassword=$password2;
                    }else{$boob .= "
<div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>تعداد کارکتر های رمزعبور باید بیشتر از 4 باشد
</div>
";}
                } else{$boob .= "
 <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>رمز عبور و تکرار آن با هم برابر نیست
</div>
";}
                if(!preg_match( "/[:,\\. ^ ? ; & | ! ' . # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $user )){
                    if(strlen($user) > 3){
                        $re=mysqli_query($con,"SELECT *FROM `user`WHERE `user` = '$user'") ;
                        $count=mysqli_num_rows($re);

                        if($count<1){
                            $tureuser=$user;
                        } else{$boob .= "


 <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>این نام کاربری تکراری است
</div>";}
                    }else{$boob .= "

 <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>نام کار بری باید بیشتر 4 حرف باشدر نیست
</div>";}
                }else{$boob .= "
 <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>نام کاربری نا معتبر است فقط از حرف و اعداد استفاده کنید
</div>";}

                if(strlen($name) > 5){
                    $truename = htmlspecialchars($name) ;
                } else{$boob .= "
 <div class=\"alert alert-danger fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>خطا!</strong>تعداد کارکتر های باید بیشتر باشد
</div>";}

                if( isset($truename) and isset($tureuser) and isset($turepassword) and isset($tureemail)){
                    $boob .="
 <div class=\"alert alert-success fade in\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>انجام شد!</strong> ثبت نامه شما با موفقیت انجام شد برای فعال سازی حساب خود به ایمیل خود بروید
</div>";
                    register($truename,$tureuser,$turepassword,$tureemail,$turetell,$con);

                }

            } }}
    ?>
<!--شروع فرم عضویت-->
<div class="registration-form wr-form woocommerce rt">
    <?php echo @$boob; ?>
<form method="post">

<div id="wr-moshtary">
<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
<label for="reg_username">نام کاربری <span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" name="user" id="reg_username" value="" type="text">
</p>
<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
<label for="reg_email">آدرس ایمیل <span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="" type="email">
</p>
    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
        <label for="reg_password">رمز عبور <span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" name="password1" id="reg_password" type="password">
    </p>

    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
<label for="reg_password">تکرار رمز عبور  <span class="required">*</span></label>
<input class="woocommerce-Input woocommerce-Input--text input-text" name="password2" id="reg_password" type="password">
</p>

    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
        <label for="reg_email">  نام و نام خانوادگی <span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="reg_fname" value="" type="text">
    </p>
    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
        <label for="reg_password"> شماره تلفن همراه<span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" name="tell" id="reg_password" type="text">
    </p>
</div>
<div style="right: -999em; position: absolute;"><label for="trap">Anti-spam</label><input name="email_2" id="trap" tabindex="-1" autocomplete="off" type="text"></div>	


<div class="woocommerce-privacy-policy-text"><p>داده های شخصی شما برای پشتیبانی از تجربه شما در این وب سایت، برای مدیریت دسترسی به حساب کاربری شما و برای اهداف دیگری که در <a href="privacy.php" class="woocommerce-privacy-policy-link" target="_blank">سیاست حفظ حریم خصوصی</a> ما شرح داده می شود مورد استفاده قرار می گیرد.</p></div>
<div class="woocommerce-privacy-policy-text"><p>ثبت نام شما در این سایت به منزله قبول کردن قوانین سایت می باشد</p></div>
<p class="woocomerce-FormRow form-row">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="g-recaptcha" data-sitekey="6LfpJP4UAAAAAAROftjcUJOlhCVgq1bnvFfOJdHa" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
    <input class="woocommerce-Button button" name="send" value="عضویت" type="submit">
</p>
<p class="woocommerce-simple-registration-login-link">
<a href="login.php">ورود به سایت</a>
</p>
</form>
</div>
<!--پایان فرم عضویت-->

</div>
</div>
</div>
</div>
<?php
include("foot.php");
?>