<?php
include("config/conf.php");
include("model/functionlogin.php");
include("model/countonline.php");
include("h2.php");
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

 <div class="p-a-md box-color r box-shadow-z1 text-color m-a" >

      <?php
  if(isset($_POST['send'])){
                  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Ledbi0UAAAAACeEBupzOF0o1Zpso8FwoeuKsaA3';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
         if($responseData->success){
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
  $subject = "لینک تغییر پسورد";
  $message = "سلام \n برای انتخاب شما متشکریم \بر روی این لینک کلیک کنید: \n http://bitsoftware.ir/active.php?id2=$text1";
  $from = "noreplays@bitsoftware.ir";
  $headers = "From:" . $from    ;
 @mail ( $to , $subject , $message , $headers ) ;
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

      <div class="m-b text-sm">

      </div>
      <form name="form" method="post" action="">
        <div class="md-form-group float-label">
          <input class="md-input" ng-model="user.email" required="" type="email" name="email">
          <label >ایمیل </label>
        </div>


           <div class="g-recaptcha" data-sitekey="6Ledbi0UAAAAAGM37r6hc1NXRSorXDeZ8PrA-b5r" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>

        <button type="submit" class="btn primary btn-block p-x-md" name="send" style="cursor: pointer; font-family:'BYekan+ Bold'; ">ارسال</button>



      </form>

</div>

                 </div>


                        <?php
          include("footer.php");
            ?>

