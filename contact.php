<?php
include("config/conf.php");
include("model/jdf.php");
include("model/functionlogin.php");
include("model/countonline.php");

include("head.php");
?>
<aside class="bg-text rt">
<div class="main">
<div class="page-text rt">
<div class="title-side right">
<h1 class="rt">تماس با ما</h1>
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
    <div class="bg-web rt">
    <div class="main">
    <div class="webresan rt">
    <div class="page right">
    <div class="wr-form woocommerce rt">
    <form method="post">
    <div>
    <div class="split-row">
    <p class="form-row form-group form-row-wide">
    <label for="first-name">نام <span class="required">*</span></label>
    <input class="input-text form-control" required="" type="text">
    <br><br>
    <label for="last-name">نام خانوادگی <span class="required">*</span></label>
    <input class="input-text form-control" required="" type="text">
    <br><br>
    <label for="seller-url" class="pull-left">ایمیل <span class="required">*</span></label>
    <strong id="url-alart-mgs" class="pull-right"></strong>
    <input class="input-text form-control" value="" required="" type="text">
    <br><br>
    <label for="company-name">موضوع <span class="required">*</span></label>
    <input class="input-text form-control" name="shopname" id="company-name" value="" required="" type="text">
    <br><br>
    <label>متن پیام<span class="required">*</span></label>
    <textarea name="input_8" class="textarea-cont" rows="10" cols="50"></textarea><br><br>		
    <input class="woocommerce-Button button" name="register" value="ارسال پیام" type="submit" style="float: left;">
    </p>
    <p class="form-row form-group form-row-wide">
    اگر مشکلی با محصول خریداری شده دارید، از بخش ارسال تیکت پشتیبانی ارسال کنید.
    <br><br>
    لطفا سوالات و مشکلات خرید خودتان را از این فرم ارسال نفرمایید. از بخش تیکت بپرسید. متشکریم!
    <br><br>
    ما سعی می کنیم بین ۱۰ دقیقه تا ۸ ساعت پاسخگوی پیام شما باشیم.
    <br><br>
    کاربر گرامی : توجه داشته باشید که سریع ترین راه دریافت پاسخ از سوی ما توسط بخش تیکت سایت است
    <br><br>
    جهت ارتباط با مدیریت info@lifil.net
    <br><br>
    اگر با مشکلی در سایت مواجه شده اید و نیازمند پاسخ مناسب هستید، به بخش پشتیبانی ایمیل خود را ارسال نمایید. support@lifil.net
    <br><br>
    واحد ارتباط طراحان با کارشناسان تایید محصول products@lifil.net
    </p>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php
    include("foot.php");
    ?>
