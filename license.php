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
<h1 class="rt">مجوز استفاده از محصولات</h1>
<div class="location right rt-13">
<a href="http://preview-site.ir/"><b>لیفیل</b></a>»<a href="#">مجوز استفاده از محصولات</a>
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
<p>ممکن است نوع اجازٌه‌نامه های تعریف شده برای هر محصول در لیفیل متفاوت باشد اما به طور کلی اجازٌه‌نامه ها به چهار دسته زیر تقسیم می شود:</p>
<ul>
<li><strong>اجازه نامه عادی</strong></li>
</ul>
<p>قابل استفاده تنها توسط یک نفر، در یک پروژه. این نوع لایسنس فقط بر روی یک دامنه قابل فعال سازی میباشد. و برای فعالسازی در دامنه دیگر، باید حتماً لایسنس قبلی غیرفعال شود.همچنین شما امکان فروش آنرا ندارید.</p>
<ul>
<li><strong>اجازه نامه تجاری</strong></li>
</ul>
<p>قابل استفاده تنها توسط یک نفر، در یک پروژه. این نوع لایسنس فقط بر روی یک دامنه و زیر دامنه های آن (حداقل ۴ مورد) قابل فعال سازی میباشد. و برای فعالسازی در دامنه دیگر، باید حتماً لایسنس قبلی غیرفعال شود.همچنین شما امکان فروش آنرا ندارید.</p>
<ul>
<li><strong>اجازه نامه حقوقی</strong></li>
</ul>
<p>با خرید این نوع مجوز شما فقط می توانید از محصول استفاده کنید و دیگر در سایت به فروش نخواهد رسید.</p>
<ul>
<li><strong>اجازه نامه حقوقی و تجاری</strong></li>
</ul>
<p>با خرید این نوع مجوز شما فقط می توانید از محصول استفاده کنید و دیگر در سایت به فروش نخواهد رسید هم چنین شما اجازه فروش آن را خواهید داشت.</p>
</div>
</div>
</div>
</div>
<?php
include("foot.php");
?>

