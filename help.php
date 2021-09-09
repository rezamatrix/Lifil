<?php
include("config/conf.php");
include("model/countonline.php");
include("model/jdf.php");
include("bb/SBBCodeParser.php");
    include("header.php");
    ?>

     <div class="padding">
  <div class="row">
    <div class="col-sm-8 col-md-9">
      <h4 class="m-0 m-b-sm text-md">راهنما</h4>
      <div class="m-b" id="accordion">
        <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_5" class="collapsed" aria-expanded="false">
              س: چه طور ادامه مطلب بزارم؟
            </a>
          </div>
          <div id="c_5" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">ب</span>
              <p class="text-sm text-muted clear">بر روی کلید کنار گذاشتن عکس کلیک کند
              </p>
            </div>
          </div>
        </div>
                <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1" class="collapsed" aria-expanded="false">
              س: وبلاگ رو  چطور فعال کنم ؟
            </a>
          </div>
          <div id="c_1" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">ب</span>
              <p class="text-sm text-muted clear">برای فعال کردن وبلاگ به قسمت تنظیمات و سپس وبلاگ و محصولات بروید و بر روی فعال کردن وبلاگ کلیک کنید.
              </p>
            </div>
          </div>
        </div>
                        <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_2" class="collapsed" aria-expanded="false">
              س: امکان تغییر نام اکات وجود داره ؟
            </a>
          </div>
          <div id="c_2" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">خ</span>
              <p class="text-sm text-muted clear">خیر
              </p>
            </div>
          </div>
        </div>
                                <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_3" class="collapsed" aria-expanded="false">
              س: برای استفاده از api باید چی کار کنم ؟
            </a>
          </div>
          <div id="c_3" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">ب</span>
              <p class="text-sm text-muted clear">به قسمت آزمایشگاه بروید
              </p>
            </div>
          </div>
        </div>
        <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_4" class="collapsed" aria-expanded="false">
              س: برای افراد زیر 18 سال امکان فعالیت در سایت شما وجود دارد؟
            </a>
          </div>
          <div id="c_4" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">ب</span>
              <p class="text-sm text-muted clear">بله به شرط ان که شناسنامه و کارت بانکی از نظر نام و نامخانوادگی با هم یکی باشند
              </p>
            </div>
          </div>
        </div>
                <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_6" class="collapsed" aria-expanded="false">
              س: محصول را ویرایش کردم و دوبار در حالت بررسی رفته ؟
            </a>
          </div>
          <div id="c_6" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">ب</span>
              <p class="text-sm text-muted clear">به دلیل این که در شرایطی خاص نیاز به بررسی دوباره دارد و همه محصولات ویرایش شده دوباره بررسی می شوند
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-sm-4 col-md-3">
      <h4 class="m-0 m-b-sm text-md">مدیر ها</h4>
      <div class="box">
        <ul class="list inset">
            <?php
                    $op7=mysqli_query($con,"SELECT user,avatar,name,id,timeonline FROM `user` WHERE `lvl` = '2'") ;
        while ($res=mysqli_fetch_array($op7)){
              $q11=$res['user'];
              $q12=$res['avatar'];
              $q13=$res['name'];
              $q14=$res['id'];
              $q15=$res['timeonline'];
                 if($q15>time()){$r1="success";$r2="online";}elseif(($q15+1800)>time()){$r1="warn";$r2="away";}elseif($q15<time()){$r1="dark";$r2="offline";}

            ?>
          <li class="list-item">
            <a herf="" class="list-left">
              <span class="w-40 circle avatar blue">
               <img src="<?php echo"img.php?"."user=".$q11."&name=".$q12;?>" alt=""/>
                <i class="<?php echo @$r1; ?>"></i>
              </span>
            </a>
            <div class="list-body">
              <div><a href=""><?php echo $q11; ?></a></div>
              <small class="text-muted text-ellipsis"><?php echo $q13; ?></small>
            </div>
          </li>
         <?php } ?>
        </ul>
      </div>
      <div class="m-b">
        <p><i class="fa fa-fw text-muted m-r-xs fa-envelope"></i> info@lifil.net</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-phone"></i>-----------</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-clock-o"></i> شنبه-چهارشنبه 9:00 - 16:00</p>
      </div>
    </div>
  </div>
</div>


     <?php            include("footer.php");   ?>