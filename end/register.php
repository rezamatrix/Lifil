

<?php
include("config/conf.php");
include("model/funcreg.php");
include("model/countonline.php");
include("h2.php");
?>


<?php
if(isset($_POST['send'])){
$user=$_POST['user'];
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Ledbi0UAAAAACeEBupzOF0o1Zpso8FwoeuKsaA3';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
         if($responseData->success){
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
if(substr($tell,0,1)=='0'){
     $str = ltrim($tell, '98');
     $tell =$str;
}
if(is_numeric($tell) and strlen($tell) < 11){
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


<div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
<a class="navbar-brand">
<img src="img/b.png" alt="BIT">
 <span class="hidden-folded inline">BIT</span>
</a>
<!-- / brand -->
      </div>
    </div>

    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <?php echo @$boob; ?>
      <div class="m-b text-sm">
      ثبت نام در بیت سافتور
      </div>
      <form name="form" method="post">
        <div class="md-form-group">
          <input class="md-input has-value" required="" type="text" name="user">
          <label>نام کاربری</label>
        </div>
        <div class="md-form-group">
          <input class="md-input has-value" required="" type="email" name="email">
          <label>ایمیل</label>
        </div>
        <div class="md-form-group">
          <input class="md-input has-value" required="" type="password" name="password1">
          <label>پسورد</label>
        </div>
                <div class="md-form-group">
          <input class="md-input has-value" required="" type="password" name="password2">
          <label>تکرار پسورد</label>
        </div>
                <div class="md-form-group">
          <input class="md-input has-value" required="" type="text" name="name">
          <label> نام و نام خانوادگی</label>
        </div>

                        <div class="md-form-group">
          <input class="md-input has-value" required="" type="text" name="tell">
          <label> شماره تلفن همراه بدون 0 اول شماره</label>
        </div>

            <div class="m-b-md">
          <label class="md-check">
            <input required="" class="has-value" type="checkbox"><i class="primary"></i>  پذیرش <a href="">قوانین</a>
          </label>
        </div>
           <div class="g-recaptcha" data-sitekey="6Ledbi0UAAAAAGM37r6hc1NXRSorXDeZ8PrA-b5r" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
        <button type="submit" class="btn primary btn-block p-x-md" style="font-family: Tahoma, Geneva, sans-serif;   cursor: pointer;" name="send" >ثبت نام</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div>قبلا ثبت نام کردید؟ <a ui-sref="access.signin" href="login.php" class="text-primary _600">ورود</a></div>
    </div>

  </div>



                        <?php
          include("footer.php");
            ?>
