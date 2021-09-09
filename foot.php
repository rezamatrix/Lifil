<footer>
    <div class="main">
        <aside class="wr-namad right">
            <div class="owl-carousel alone-slider rt">
                <div class="item"><img class="namad" alt="لیفیل" title="لیفیل" src="i/images/enamad.png"><h5 class="rt rt-14">نماد اعتماد لیفیل</h5></div>
                <div class="item"><img id='jxlzjzpejxlzapfufukzesgt' style ='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=171560&p=rfthjyoerfthdshwgvkaobpd", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt ='logo-samandehi' src='https://logo.samandehi.ir/logo.aspx?id=171560&p=nbpdyndtnbpdujynwlbqlyma' /><h5 class="rt rt-14">نشان ثبت ملی</h5></div>
            </div>
        </aside>
        <div class="left-side left">
            <aside class="blog right">
                <div class="title rt"><i class="fa fa-file-text-o right"></i><h3 class="right rt-18">بلاگ <div>لیفیل</div></h3></div>
                <ul class="rt rt-14">
                    <li><a href="blog-single-post.html"><i class="fa fa-angle-left"></i> روش های شناسایی وفاداری مشتری</a></li>
                    <li><a href="blog-single-post.html"><i class="fa fa-angle-left"></i> نگرشی نو بر بازار طراحی سایت</a></li>
                    <li><a href="blog-single-post.html"><i class="fa fa-angle-left"></i> بازاریابی اینترنتی از طریق بنر تبلیغاتی</a></li>
                    <li><a href="blog-single-post.html"><i class="fa fa-angle-left"></i> با سوشیال مارکتینگ آشنا شوید!</a></li>
                </ul>
            </aside>
            <aside class="info-site left">
                <h2 class="rt-18">فروشگاه قالب لیفیل</h2>
                <div class="rt rt-13">لیفیل بزرگترین فروشگاه <a href="category.html">قالب وردپرس</a>، <a href="category.html">قالب جوملا</a>، <a href="category.html">قالب اپن کارت</a>، <a href="index-2.html">قالب whmcs</a> و همچنین افزونه های معتبر و اورجینال وردپرس و whmcs است که در کنار موارد بالا به خرید اسکریپت و فایل آماده فتوشاپ نیز اشاره کرد. <br> برای خرید قالب کافیست یکی از صدها قالب آماده را انتخاب کنید.</div>
            </aside>
            <aside class="mail-social rt">
                <div class="f-social left">
                    <div class="name rt rt-12"><span class="rt-17">به روز باشید</span>اتفاقات هیجان انگیز لیفیل را دنبال کنید...</div>
                    <a href="https://t.me/" title="کانال تلگرام" target="_blank" rel="nofollow" class="rt-center rt-16 left tg"><i class="fa fa-paper-plane-o"></i></a>
                    <a href="https://www.instagram.com/" title="اینستاگرام" target="_blank" class="rt-center rt-16 left in" rel="nofollow"><i class="fa fa-instagram"></i></a>
                    <a href="http://webstore.com/feed" title="فید سایت" target="_blank" rel="follow" class="rt-center rt-16 left rss"><i class="fa fa-rss"></i></a>
                </div>
            </aside>
        </div>
    </div>
    <div class="copyright rt">
        <div class="main">
            <p class="right rt-13">
             
            <p class="left rt-13"><a href="rules.php">قوانین و توافقنامه</a> | <a href="privacy.php">سیاست حریم خصوصی کاربران</a></p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="i/js/fixto.js"></script>
<script type="text/javascript">$('.left-side').fixTo('footer');</script>
<script type="text/javascript" src="i/js/owl.carousel.js"></script>
<script type="text/javascript" src="i/js/tabs.js"></script>
<script type="text/javascript" src="i/js/panel-tabs.js"></script>
<script type="text/javascript" src="i/js/styleswitcher.js"></script>
<script type="text/javascript" src="i/js/java.js"></script>
<?php
if(@$ar11>0){
    ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.tb-1').click(function(){
                $('.bg-text').css({'background':'url(images/about-us.png) center,linear-gradient(270deg, #222 0%, #111 93%)'});
                $('.wr-about').slideDown(400);
                $('.wr-life').hide();
                $('.wr-partners').hide();
            });
            $('.tb-2').click(function(){
                $('.bg-text').css({'background':'url(images/about-us-b.png) center,linear-gradient(135deg,#0c9a82,#ab47bc)'});
                $('.wr-about').hide();
                $('.wr-life').slideDown(400);
                $('.wr-partners').hide();
            });
            $('.tb-3').click(function(){
                $('.bg-text').css({'background':'url(images/about-us-c.png) center,linear-gradient(100deg,#01b5e8,#18bab4)'});
                $('.wr-about').hide();
                $('.wr-life').hide();
                $('.wr-partners').slideDown(400);
            });
        });
    </script>
    <?php
}
?>

</body>


</html>