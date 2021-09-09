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
            ایجاد کلید اختصاصی برای محصولات
            </a>
          </div>
          <div id="c_5" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">Key</span>
              <p class="text-sm text-muted clear">
                  <img src="tuimg/1.png" alt="" height="100%" width="100%" /><br>
                  1.با کلیک کردن بر رو اینجا به شما یک کد اختصاصی محصول برای استفاده در آینده به  می دهد  <br>
                  2. در صورت متصل بودن یک محصول می توانید اتصال را قطع کنید و به دیگر محصولات اضافه کنید<br>
                  3. از لیست کنار کد یک محصول را انتخاب کنید و بر روی کلید برقراری ارتباط کلیک کنید<br>
                 کاربردی کلید اختصاصی:<br>
                 کلید ها برای اختصاصی بودن محصول شما استفاده می کنیم تا حق کپی رایت شما به راحتی حفظ شود و امکان تقلب پایین بیاید  <br>
                   این کد بسیار مهم بوده و نباید در اختیار شخص دیگری قرار بگیرد<br>
                 نکات مهم:<br>
                 1.در صورت قرار گرفتن و لو رفتن کد شما می توانید کد را به صورت کامل تعویض کنید و با کدی جدید عوض کرده و برای محصول آپدیت جدید بدهید<br>
                 2.این کد به هیچ عنوان نباید در اختیار دیگران قرار بگید***<br>
              </p>
            </div>
          </div>
        </div>
                <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_4" class="collapsed" aria-expanded="false">
            توضیح API
            </a>
          </div>
          <div id="c_4" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">Api</span>
              <p class="text-sm text-muted clear">
               برای استفاده از Api لیفیلد می توانید از لینک زیر استفاده کنید  <br>
               <div dir="ltr">
               <code dir="ltr">
               https://lifil.net/api/apiget.php?code=code&key=key&con=host
               </code >   <br>  </div>
               که دارای سه ورودی است   <br>
               1. کد یا کلید خریداری شده محصول (code)    <br>
               2.کلید اختصاصی محصول (key)           <br>
               3.نوع لایسنس گذاری بر اساس ip یا مک آدرس کاربر یا خصوصیات دیگر(con) <br>
              توضیح استفاده:<br>
              key وcon توسط خوده برنامه نویس وارد می شود<br>
              code از کاربر که نرم افزار شما را خریداری کرده است گرفته می شود<br>
              </p>
            </div>
          </div>
        </div>
                <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1" class="collapsed" aria-expanded="false">
           آموزش گذاشتن لایسنس و کپی رایت برای  کد های PHP
            </a>
          </div>
          <div id="c_1" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">PHP</span>
              <p class="text-sm text-muted clear">
               نوع اول از طریق file get contents :<br>
               دارای سه ورودی هست :<br>
               1. key یا همان کلید اختاصی محصول  <br>
               2. con که می تواند ای پی سرور یا ادرس سایت و یا مک ادرس کاربر در شرایط خاص باشد <br>
               3. code این بخش توسط کاربر خریدار محصول شما وارد می شود       <br>
               *.ورودی های key و con توسط خود شما وارد می شود<br>

              <div dir="ltr"> <code>

               &lt;?php<br>
                   &lt;form method="post"> <br>
    &lt;input name="code" value=""><br>
   &lt;input name="test" type="submit" value="Test"><br>
&lt;/form> <br>


   $ip= $_SERVER['SERVER_ADDR'];//گرفتن آدرس ای پی سرور  <br>
   $host= $_SERVER['HTTP_HOST']; //گرفتن دامنه سرور    <br>
    if(isset($_POST['test'])){               <br>
     $code=$_POST['code'];         <br>
$url=file_get_contents("https://lifil.net/api/apiget.php?code=$code&key=url4i1ih&con=$host");  <br>
if($url=="ok")<br>
{             <br>
 echo "این کد تایید و ذخیره شد"; <br>
}      <br>
else<br>
{    <br>
    echo "خطا";  <br>
}         <br>
}<br>
               ?>  <br>

               </code>  </div>
               نتیجه:<br>
                 <img src="tuimg/2.png" alt="" height="100%" width="100%" /><br>
                 و حالا امکان اجرای همزمان کد های شما بر روی چند سرور متفاوت غیر ممکن است<br>

              </p>
            </div>
          </div>
        </div>
         <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_2" class="collapsed" aria-expanded="false">
             استفاده از encoder برای کد های php
            </a>
          </div>
          <div id="c_2" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">PHP</span>
              <p class="text-sm text-muted clear">
              با یک مثال شروع می کنیم<br>
              شما یک نویسنده قالب wordperss هستید<br>
              ابتداد یک فایل با نام code.php می سازید<br>
              تا بتوانید به کار بر اجازه استفاده کدی که خریداری کرده است را بدهید<br>
              حالا این فایل را در فایل مورد نیاز که چک کننده اعتبار قالب شما است فراخوانی کنید<br>
              و بقیه فایل ها را با نرم افزار سایت <a href="https://www.ioncube.com/">https://www.ioncube.com/</a> encode کنید و بر رو سایت اپلود کرد و برای بررسی ارسال کنید<br>
            این نرم افزار فقط برای نسخه های خیلی بهتر و کامل تر نیاز به خریداری دارد و شما می توانید از trial آن استفاده کنید
             </p>
            </div>
          </div>
        </div>
                 <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_3" class="collapsed" aria-expanded="false">
            استفاده از Api در #C
            </a>
          </div>
          <div id="c_3" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">#C</span>
              <p class="text-sm text-muted clear">
               using های لازم: <br>
               1. using System.Management (گرفتن اطلاعات سیستم کاربر)<br>
               2. using System.Net (برای گرفتن و دانلود لینک از  لینک Api)    <br>
               نمونه کد آماده شده:<a href="tuimg/csharp.zip" class="label  label-sm primary"><b>لینک دانلود</b></a>      <br>
               این نمونه بر اساس مک آدرس بوده و شما می توانید از دیگر خصوصیات سیستم استفاده کنید<br>
               مک آدرس کاربر تحت شرایطی خاص قابل تغییر است و این عمر برنامه شما را آسیب پذیر می کند<br>
             بهتر از  Win32_ComputerSystemProduct  استفاده کنید  و اطلاعات سیستم را  گرفته و خودتان کد بسازید  و به جای con بگذارید<br>
             جهت گرفتن اطلاعات بیشتر به لینک زیر بروید<br>
                https://www.codeproject.com/Articles/17973/How-To-Get-Hardware-Information-CPU-ID-MainBoard-I<br>
               می توانید کد های چک کننده کلید محصول را در یک timer گذاشته که هر 1 دقیقه چک کند (بهترین زمان هر چک 5 دقیقه می باشد)    <br>
              </p>
            </div>
          </div>
        </div>
                         <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_6" class="collapsed" aria-expanded="false">
            استفاده از Api در Java
            </a>
          </div>
          <div id="c_6" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">Java</span>
              <p class="text-sm text-muted clear">
            نمونه کد اتصال به چک کندده های سرور برای java<br>
   <div dir="ltr">    <code>


              /*
 * To change this license header, choose License Headers in Project Properties.   <br>
 * To change this template file, choose Tools | Templates       <br>
 * and open the template in the editor.    <br>
 */             <br>
package japi;   <br>
import java.io.*;        <br>
import java.net.NetworkInterface;   <br>
import java.net.*;         <br>
import java.util.Enumeration;  <br>
/**                  <br>
 *                    <br>
 * @author rezam       <br>
 */                  <br>
public class Japi {      <br>

    /**             <br>
     * @param args the command line arguments    <br>
     */                     <br>
    public static void main(String[] args) throws MalformedURLException, IOException {      <br>
        // TODO code application logic here                            <br>
        Enumeration&lt;NetworkInterface> r= NetworkInterface.getNetworkInterfaces();      <br>
        InetAddress ip;                <br>
        ip = InetAddress.getLocalHost();    <br>
		NetworkInterface network = NetworkInterface.getByInetAddress(ip);   <br>
		byte[] mac = network.getHardwareAddress();    <br>
		StringBuilder sb = new StringBuilder();  <br>
		for (int i = 0; i &lt; mac.length; i++) {   <br>
			sb.append(String.format("%02X%s", mac[i], (i &lt; mac.length - 1) ? "-" : ""));   <br>
		}                  <br>
                              URL u;    <br>
      InputStream is = null;  <br>
      DataInputStream dis;  <br>
      String s = null;     <br>
    u = new URL("https://lifil.net/api/apiget.php?key=key&con="+sb.toString()+"&code=code"); <br>
     is = u.openStream();           <br>
      dis = new DataInputStream(new BufferedInputStream(is));   <br>
     s = dis.readLine();     <br>
     System.out.println(s);   <br>
      if(s.compareTo("ok") == 0){     <br>
      System.out.println("right");   <br>
      }else{System.out.println("error");}     <br>

    }    <br>

}   <br>

              </code>     </div>
              </p>
            </div>
          </div>
        </div>
             <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_7" class="collapsed" aria-expanded="false">
     استفاده از Api نسخه دوم
            </a>
          </div>
          <div id="c_7" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">Api.v.2</span>
              <p class="text-sm text-muted clear">
               شما در ابتداد به یک Web browser احتیاج دارید  <br>
               http://lifil.net/apiv2/login.php این لینک را لود کنید  <br>
               با استفاده از متد های درون برنامه نویسی خود کوکی های وب رو انتقال بدید به کل برنامه    <br>
               دوم برای چک کردن درستی لاگین ازو این که برنامه شما خریداری شده است یا نه  <br>
               http://lifil.net/apiv2/fc.php?key=seeasdvy        <br>
               کلید برنامه خود را اضافه کنید                      <br>
               جهت جلوگیری از باز شدن برنامه شما در چند سیستم متفاوت<br>
               http://lifil.net/apiv2/getset.php?con=یکی از خصوصیات سیستم  <br>
               خروجی دو لینک آخری  <br>
               "ok"  <br>

              </p>
            </div>
          </div>
        </div>
                     <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
           &nabla;
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_8" class="collapsed" aria-expanded="false">
    نمونه کد استفاده از Api نسخه دو در #C
            </a>
          </div>
          <div id="c_8" class="collapse" aria-expanded="false" style="">
            <div class="box-body">
              <span class="text-md pull-right w-32 m-r rounded dark">#C</span>
              <p class="text-sm text-muted clear">
                           نمونه کد آماده شده:<a href="tuimg/source.zip" class="label  label-sm primary"><b>لینک دانلود</b></a>      <br>

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
        <p><i class="fa fa-fw text-muted m-r-xs fa-envelope"></i> info@bitcorp.ir</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-phone"></i>-----------</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-clock-o"></i> شنبه-چهارشنبه 9:00 - 16:00</p>
      </div>
    </div>
  </div>
</div>


     <?php            include("footer.php");   ?>